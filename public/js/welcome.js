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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $('div.products-count a').click(function (event) {
    event.preventDefault();
    $('a.products-actual-count').text($(this).text());
    getProducts($(this).text());
  });
  $('a#filter-button').click(function (event) {
    event.preventDefault();
    getProducts($('a.products-actual-count').first().text());
  });
  $('button.add-cart-button').click(function (event) {
    event.preventDefault();
    $.ajax({
      method: "POST",
      url: WELCOME_DATA.addToCart + $(this).data('id')
    }).done(function () {
      Swal.fire({
        title: 'Brawo!',
        text: 'Produkt dodany do koszyka!',
        icon: 'success',
        showCancelButton: true,
        confirmButtonText: '<i class="fas fa-cart-plus"></i> Przejdź do koszyka',
        cancelButtonText: '<i class="fas fa-shopping-bag"></i> Kontynuuj zakupy'
      }).then(function (result) {
        if (result.isConfirmed) {
          window.location = WELCOME_DATA.listCart;
        }
      });
    }).fail(function () {
      Swal.fire('Oops...', 'Wystąpił błąd', 'error');
    });
  });

  function getProducts(paginate) {
    var form = $('form.sidebar-filter').serialize();
    $.ajax({
      method: "GET",
      url: "/",
      data: form + "&" + $.param({
        paginate: paginate
      })
    }).done(function (response) {
      $('div#products-wrapper').empty();
      $.each(response.data, function (index, product) {
        var html = '<div class="col-6 col-md-6 col-lg-4 mb-3">' + '            <div class="card h-100 border-0">' + '                <div class="card-img-top">' + '                    <img src="' + getImage(product) + '" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">' + '                </div>' + '                <div class="card-body text-center">' + '                    <h4 class="card-title">' + product.name + '                    </h4>' + '                    <h5 class="card-price small">' + '                        <i>PLN ' + product.price + '</i>' + '                    </h5>' + '                </div>' + '                <button class="btn btn-success btn-sm add-cart-button"' + getDisabled() + ' data-id="' + product.id + '">' + '                   <i class="fas fa-cart-plus"></i> Dodaj do koszyka' + '                </button>' + '            </div>' + '        </div>';
        $('div#products-wrapper').append(html);
      });
    });
  }

  function getImage(product) {
    if (!!product.image_path) {
      return WELCOME_DATA.storagePath + product.image_path;
    }

    return WELCOME_DATA.defaultImage;
  }

  function getDisabled() {
    if (WELCOME_DATA.isGuest) {
      return ' disabled';
    }

    return '';
  }
});

/***/ }),

/***/ 2:
/*!***************************************!*\
  !*** multi ./resources/js/welcome.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\Projekty\shop-yt\resources\js\welcome.js */"./resources/js/welcome.js");


/***/ })

/******/ });