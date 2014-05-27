var DEBUG = false;

var productOverlay = $("#product-image-overlay");


//Registers hover over product and calls showOverlay
$("div.product").mouseover(function() {
  var o = $(this);
  var x = o.offset().left;
  var y = o.offset().top;

  if (DEBUG) {
    console.log("Mouse over product with ID: " + this.id);
    console.log("X: " + x + ", Y: " + y);
  };
  showOverlay(x, y);
});

//WHY ISN'T THIS WORKING?????
/*$("div.product").mouseout(function() {
console.log("Mouseout");
//productOverlay.css("display", "none");
});*/


//Shows product overlay
function showOverlay(x, y) {
  if (DEBUG) { console.log("Showing overlay at X: " + x + ", Y: " + y); };

  setX("product-image-overlay", x);
  setY("product-image-overlay", y);
  productOverlay.css("display", "inline-block");
}

//Showing products matching selected filtering option
$(".filterOptions").click(function() {
  console.log("Filtering products by " + this.text);

  var keyword = this.text.toLowerCase();
  console.log(keyword);

  var products = $(".product").map(function(index) {
    var o = $(this);

    console.log(o.hasClass(keyword));

    if(o.hasClass(keyword)) {
      o.show();
    } else {
      o.hide();
    }

  });

/*
  for (var i = 0; i < products.length; i++) {
    console.log(.hasClass(keyword));
  }
  */

});



function hideProductGroup() {
  console.log("Hiding products");
}

$(document).ready(function() {

});
