/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/order.js ***!
  \*******************************/
$(function () {
  console.log('order.js');
  $('.add-to-cart').click(function (e) {
    e.preventDefault();
    var productId = $(this).data('product_id');
    console.log(productId);
  });
});
/******/ })()
;