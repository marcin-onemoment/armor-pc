/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/form.js":
/*!******************************!*\
  !*** ./resources/js/form.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var username = document.querySelector('#username');
var email = document.querySelector('#email');
var title = document.querySelector('#title');
var message = document.querySelector('#message');
var sendBtn = document.querySelector('.send');
var info = document.querySelector('.info');
var showError = function showError(input, msg) {
  var formBox = input.parentElement;
  var errorMsg = formBox.querySelector('.error-text');
  formBox.classList.add('error');
  errorMsg.textContent = msg;
};
var clearError = function clearError(input) {
  var formBox = input.parentElement;
  formBox.classList.remove('error');
};
var checkForm = function checkForm(input) {
  input.forEach(function (el) {
    if (el.value === '') {
      showError(el, el.placeholder);
    } else {
      clearError(el);
    }
  });
};
var checkLength = function checkLength(input, min) {
  if (input.value.length < min & input.value !== '') {
    showError(input, "Nazwa u\u017Cytkownika musi sk\u0142ada\u0107 si\u0119 z min. ".concat(min, " znak\xF3w."));
  }
};
var checkMail = function checkMail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(email.value)) {
    clearError(email);
  } else {
    showError(email, 'E-mail jest niepoprawny');
  }
};
var checkErrors = function checkErrors() {
  var allInputs = document.querySelectorAll('.form-box');
  var countError = 0;
  allInputs.forEach(function (el) {
    if (el.classList.contains('error')) {
      countError++;
    }
  });
  if (countError === 0) {
    info.classList.add('show');
  }
};

//AddEventListener on the buttons

//Send button

sendBtn.addEventListener('click', function (e) {
  e.preventDefault();
  checkForm([username, email, title, message]);
  checkLength(username, 3);
  checkMail(email);
  checkErrors();
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/form.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/michal/Pulpit/Projekty/armor-pc/resources/js/form.js */"./resources/js/form.js");


/***/ })

/******/ });