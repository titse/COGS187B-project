
//------------- UPDATING DOTS ON SCROLL ------------------//

//Updateing the blue dot corresponding to the visible section
function updateDots(visibleSection){
  if (visibleSection == currSection) {
    if (DEBUG) {
      console.log("Visible section == Current section returning");
    }
    return;
  }

  $("#img-section-0-dot").attr('src','img/dots/dot.png' );
  $("#img-section-1-dot").attr('src','img/dots/dot.png' );
  $("#img-section-2-dot").attr('src','img/dots/dot.png' );
  $("#img-section-3-dot").attr('src','img/dots/dot.png' );
  $("#img-section-4-dot").attr('src','img/dots/dot.png' );
  $("#img-section-5-dot").attr('src','img/dots/dot.png' );

  if (visibleSection == "section-0") {
    $("#img-section-0-dot").attr('src','img/dots/dot-current.png' );
    currSection = "section-0";

    if (DEBUG) {
      console.log("Section 0 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-1") {
    $("#img-section-1-dot").attr('src','img/dots/dot-current.png' );
    currSection = "section-1";

    if (DEBUG) {
      console.log("Section 1 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-2") {

    $("#img-section-2-dot").attr('src','img/dots/dot-current.png' );
    currSection = "section-2";

    if (DEBUG) {
      console.log("Section 2 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-3") {

    $("#img-section-3-dot").attr('src','img/dots/dot-current.png' );
    currSection = "section-3";

    if (DEBUG) {
      console.log("Section 3 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-4") {

    $("#img-section-4-dot").attr('src','img/dots/dot-current.png' );
    currSection = "section-4";

    if (DEBUG) {
      console.log("Section 4 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-5") {

    $("#img-section-5-dot").attr('src','img/dots/dot-current.png' );
    currSection = "section-5";

    if (DEBUG) {
      console.log("Section 5 is visible");
      console.log("Setting currSection to " + currSection);
    }
  }
}

//Updateing the blue dot corresponding to the visible section for pages that are located in
//child folder of index.php
function updateDotsChildDir(visibleSection){
  if (visibleSection == currSection) {
    if (DEBUG) {
      console.log("Visible section == Current section returning");
    }
    return;
  }

  $("#img-section-0-dot").attr('src','../img/dots/dot.png' );
  $("#img-section-1-dot").attr('src','../img/dots/dot.png' );
  $("#img-section-2-dot").attr('src','../img/dots/dot.png' );
  $("#img-section-3-dot").attr('src','../img/dots/dot.png' );
  $("#img-section-4-dot").attr('src','../img/dots/dot.png' );
  $("#img-section-5-dot").attr('src','../img/dots/dot.png' );

  if (visibleSection == "section-0") {
    $("#img-section-0-dot").attr('src','../img/dots/dot-current.png' );
    currSection = "section-0";

    if (DEBUG) {
      console.log("Section 0 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-1") {
    $("#img-section-1-dot").attr('src','../img/dots/dot-current.png' );
    currSection = "section-1";

    if (DEBUG) {
      console.log("Section 1 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-2") {

    $("#img-section-2-dot").attr('src','../img/dots/dot-current.png' );
    currSection = "section-2";

    if (DEBUG) {
      console.log("Section 2 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-3") {

    $("#img-section-3-dot").attr('src','../img/dots/dot-current.png' );
    currSection = "section-3";

    if (DEBUG) {
      console.log("Section 3 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-4") {

    $("#img-section-4-dot").attr('src','../img/dots/dot-current.png' );
    currSection = "section-4";

    if (DEBUG) {
      console.log("Section 4 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-5") {

    $("#img-section-5-dot").attr('src','../img/dots/dot-current.png' );
    currSection = "section-5";

    if (DEBUG) {
      console.log("Section 5 is visible");
      console.log("Setting currSection to " + currSection);
    }
  }
}


//------------- SHOP FILTERING ------------------//

//Highligting selected filters internal on shop-page
function highlightFiltered(keyword){
  console.log("Higlighting filters with class: " +keyword+"-filter");

  $(".filterOptions").removeClass('current');

  $("."+keyword+"-filter").addClass("current");
}

//------------- SHOP OVERLAY------------------//

//Shows product overlay
function showOverlay(x, y) {
  if (DEBUG) { console.log("Showing overlay at X: " + x + ", Y: " + y); };

  setX("product-image-overlay", x);
  setY("product-image-overlay", y);
  productOverlay.css("display", "inline-block");
}

//Hides product overlay
function hideOverlay() {
  if (DEBUG) { console.log("Hiding product overlay"); };

  productOverlay.css("display", "none");
}
