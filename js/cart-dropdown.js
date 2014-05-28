$(function () {
  $('.shopping-cart > ul').toggleClass('no-js js');
  $('.shopping-cart.js ul').hide();
  $('.shopping-cart .js').click(function(e) {
    $('.shopping-cart.js ul').slideToggle(200);
    $('.cart-link').toggleClass('active');
    e.stopPropagation();
  });
  $(document).click(function() {
    if ($('.shopping-cart .js ul').is(':visible')) {
      $('.shopping-cart .js ul', this).slideUp();
      $('.shopping-cart').removeClass('active');
    }
  });
});