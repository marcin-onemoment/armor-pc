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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/carousel.js":
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// $('.hero-carousel').slick({
// 	arrows: false,
// 	mobileFirst: true,
// 	autoplay: false,
// 	slidesToShow: 1,
// 	slidesToScroll: 1,
// })

var username = document.querySelector('#username');
var pass = document.querySelector('#password');
var repeatPass = document.querySelector('#repeat-password');
var email = document.querySelector('#email');
var clearBtn = document.querySelector('.clear');
var sendBtn = document.querySelector('.send');
var cancelBtn = document.querySelector('.cancel');
var popup = document.querySelector('.popup');
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
    showError(input, "".concat(input.previousElementSibling.innerText.slice(0, -1), " sk\u0142ada sie z min. ").concat(min, " znak\xF3w."));
  }
};
var comparePassword = function comparePassword(pass1, pass2) {
  if (pass1.value !== pass2.value) {
    showError(pass2, 'Hasła nie są takie same');
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
    popup.classList.add('show-popup');
  }
};

//AddEventListener on the buttons

//Send button
sendBtn.addEventListener('click', function (e) {
  e.preventDefault();
  checkForm([username, pass, repeatPass, email]);
  checkLength(username, 3);
  checkLength(pass, 8);
  comparePassword(pass, repeatPass);
  checkMail(email);
  checkErrors();
});

//ClearButton
clearBtn.addEventListener('click', function (e) {
  e.preventDefault();
  [username, pass, repeatPass, email].forEach(function (el) {
    el.value = '';
    clearError(el);
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/custom/style.scss":
/*!******************************************!*\
  !*** ./resources/sass/custom/style.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************************************************!*\
  !*** multi ./resources/js/carousel.js ./resources/sass/app.scss ./resources/sass/custom/style.scss ***!
  \*****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/marcin/projects/one-moment/armor-pc/resources/js/carousel.js */"./resources/js/carousel.js");
__webpack_require__(/*! /home/marcin/projects/one-moment/armor-pc/resources/sass/app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! /home/marcin/projects/one-moment/armor-pc/resources/sass/custom/style.scss */"./resources/sass/custom/style.scss");


/***/ })

/******/ });