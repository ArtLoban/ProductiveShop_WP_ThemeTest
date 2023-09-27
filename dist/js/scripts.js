/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/common/common.js":
/*!**************************************!*\
  !*** ./src/scripts/common/common.js ***!
  \**************************************/
/***/ (function() {

(function ($) {
  "use strict";

  // Scripts
})(jQuery);

/***/ }),

/***/ "./src/scripts/common/helpers.js":
/*!***************************************!*\
  !*** ./src/scripts/common/helpers.js ***!
  \***************************************/
/***/ (function() {

// Helper functions

/***/ }),

/***/ "./src/scripts/components/header.js":
/*!******************************************!*\
  !*** ./src/scripts/components/header.js ***!
  \******************************************/
/***/ (function() {

(function ($) {
  'use strict';

  const $menuDropdown = $('#menuDropdown');
  if ($menuDropdown.length) {
    const $menuItems = $('#menuItems');
    $(document).on('click', 'li[data-drop]', function (e) {
      e.preventDefault();

      // Do nothing if has no data attribute
      if (!this.dataset && !this.dataset.drop) return;

      // Get dropdown element by data attribute
      const dropID = this.dataset.drop;
      const $dropdown = $menuDropdown.find(`[data-drop=${dropID}]`);

      // Do nothing if corresponding dropdown element not exists
      if (!$dropdown.length) return;

      // Highlight active menu item.
      $menuItems.find('[data-drop]').each(function (i, el) {
        el.classList.remove('mainMenu_active');
      });
      this.classList.add('mainMenu_active');

      // Show dropdown wrap. Add blur to the background
      if ($menuDropdown.is(':hidden')) {
        $menuDropdown.removeClass('d-none');
        document.body.classList.add('blured');
      }

      // Show dropdown element by data attribute. Hide previously active
      $menuDropdown.find('[data-drop]').each(function (i, el) {
        if (el.dataset && el.dataset.drop && el.dataset.drop === dropID) {
          el.style.display = 'block';
        } else {
          el.style.display = 'none';
        }
      });
    });

    // Close menu dropdown and remove blur overlay
    const menuDropdown = document.getElementById('menuDropdown');
    window.onclick = function (e) {
      if (e.target.contains(menuDropdown) && e.target !== menuDropdown) {
        document.body.classList.remove('blured');
        $menuDropdown.addClass('d-none');
      }
    };
  }
})(jQuery);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!********************************!*\
  !*** ./src/scripts/scripts.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common_helpers__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./common/helpers */ "./src/scripts/common/helpers.js");
/* harmony import */ var _common_helpers__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_common_helpers__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _common_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./common/common */ "./src/scripts/common/common.js");
/* harmony import */ var _common_common__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_common_common__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_header__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/header */ "./src/scripts/components/header.js");
/* harmony import */ var _components_header__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_header__WEBPACK_IMPORTED_MODULE_2__);



}();
/******/ })()
;
//# sourceMappingURL=scripts.js.map