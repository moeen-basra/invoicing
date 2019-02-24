(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/modules/dashboard/pages/main/Page.js":
/*!***********************************************************!*\
  !*** ./resources/js/modules/dashboard/pages/main/Page.js ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (function () {\n  return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"div\", {\n    style: {\n      minHeight: '80vh'\n    }\n  }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"div\", {\n    className: \"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light\"\n  }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"div\", {\n    className: \"col-md-5 p-lg-5 mx-auto my-5\"\n  }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"h1\", {\n    className: \"display-4 font-weight-normal\"\n  }, \"Laravel React Invoicing\"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"p\", {\n    className: \"lead font-weight-normal\"\n  }, \"Laravel React Invoicing is free and open source project created by Moeen Farooq just for learning purpose.\")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"div\", {\n    className: \"product-device shadow-sm d-none d-md-block\"\n  }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(\"div\", {\n    className: \"product-device product-device-2 shadow-sm d-none d-md-block\"\n  })));\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvbWFpbi9QYWdlLmpzP2UxMzQiXSwibmFtZXMiOlsibWluSGVpZ2h0Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLDJFQUFZO0FBQ3ZCLFNBQU87QUFBSyxTQUFLLEVBQUU7QUFBQ0EsZUFBUyxFQUFFO0FBQVo7QUFBWixLQUNIO0FBQUssYUFBUyxFQUFDO0FBQWYsS0FDSTtBQUFLLGFBQVMsRUFBQztBQUFmLEtBQ0k7QUFBSSxhQUFTLEVBQUM7QUFBZCwrQkFESixFQUVJO0FBQUcsYUFBUyxFQUFDO0FBQWIsa0hBRkosQ0FESixFQUtJO0FBQUssYUFBUyxFQUFDO0FBQWYsSUFMSixFQU1JO0FBQUssYUFBUyxFQUFDO0FBQWYsSUFOSixDQURHLENBQVA7QUFVSCxDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL21haW4vUGFnZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBSZWFjdCBmcm9tICdyZWFjdCdcblxuZXhwb3J0IGRlZmF1bHQgZnVuY3Rpb24gKCkge1xuICAgIHJldHVybiA8ZGl2IHN0eWxlPXt7bWluSGVpZ2h0OiAnODB2aCd9fT5cbiAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwb3NpdGlvbi1yZWxhdGl2ZSBvdmVyZmxvdy1oaWRkZW4gcC0zIHAtbWQtNSBtLW1kLTMgdGV4dC1jZW50ZXIgYmctbGlnaHRcIj5cbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTUgcC1sZy01IG14LWF1dG8gbXktNVwiPlxuICAgICAgICAgICAgICAgIDxoMSBjbGFzc05hbWU9XCJkaXNwbGF5LTQgZm9udC13ZWlnaHQtbm9ybWFsXCI+TGFyYXZlbCBSZWFjdCBJbnZvaWNpbmc8L2gxPlxuICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cImxlYWQgZm9udC13ZWlnaHQtbm9ybWFsXCI+TGFyYXZlbCBSZWFjdCBJbnZvaWNpbmcgaXMgZnJlZSBhbmQgb3BlbiBzb3VyY2UgcHJvamVjdCBjcmVhdGVkIGJ5IE1vZWVuIEZhcm9vcSBqdXN0IGZvciBsZWFybmluZyBwdXJwb3NlLjwvcD5cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwcm9kdWN0LWRldmljZSBzaGFkb3ctc20gZC1ub25lIGQtbWQtYmxvY2tcIi8+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInByb2R1Y3QtZGV2aWNlIHByb2R1Y3QtZGV2aWNlLTIgc2hhZG93LXNtIGQtbm9uZSBkLW1kLWJsb2NrXCIvPlxuICAgICAgICA8L2Rpdj5cbiAgICA8L2Rpdj5cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/modules/dashboard/pages/main/Page.js\n");

/***/ }),

/***/ "./resources/js/modules/dashboard/pages/main/index.js":
/*!************************************************************!*\
  !*** ./resources/js/modules/dashboard/pages/main/index.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Page__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Page */ \"./resources/js/modules/dashboard/pages/main/Page.js\");\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (_Page__WEBPACK_IMPORTED_MODULE_0__[\"default\"]);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvbWFpbi9pbmRleC5qcz8yYmRhIl0sIm5hbWVzIjpbIlBhZ2UiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUVlQSw0R0FBZiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9tb2R1bGVzL2Rhc2hib2FyZC9wYWdlcy9tYWluL2luZGV4LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFBhZ2UgZnJvbSAnLi9QYWdlJ1xuXG5leHBvcnQgZGVmYXVsdCBQYWdlXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/modules/dashboard/pages/main/index.js\n");

/***/ })

}]);