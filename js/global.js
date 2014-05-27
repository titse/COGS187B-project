
//Updateing the blue dot corresponding to the visible section
function updateDots(visibleSection){
  if (visibleSection == currSection) {
    if (DEBUG) {
      console.log("Visible section == Current section returning");
    }
    return;
  }

  $("#img-section-1-dot").attr('src','img/dots/dot.gif' );
  $("#img-section-2-dot").attr('src','img/dots/dot.gif' );
  $("#img-section-3-dot").attr('src','img/dots/dot.gif' );
  $("#img-section-4-dot").attr('src','img/dots/dot.gif' );
  $("#img-section-5-dot").attr('src','img/dots/dot.gif' );

  if (visibleSection == "section-1") {
    $("#img-section-1-dot").attr('src','img/dots/dot-current.gif' );
    currSection = "section-1";

    if (DEBUG) {
      console.log("Section 1 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-2") {

    $("#img-section-2-dot").attr('src','img/dots/dot-current.gif' );
    currSection = "section-2";

    if (DEBUG) {
      console.log("Section 2 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-3") {

    $("#img-section-3-dot").attr('src','img/dots/dot-current.gif' );
    currSection = "section-3";

    if (DEBUG) {
      console.log("Section 3 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-4") {

    $("#img-section-4-dot").attr('src','img/dots/dot-current.gif' );
    currSection = "section-4";

    if (DEBUG) {
      console.log("Section 4 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } else if (visibleSection == "section-5") {

    $("#img-section-5-dot").attr('src','img/dots/dot-current.gif' );
    currSection = "section-5";

    if (DEBUG) {
      console.log("Section 5 is visible");
      console.log("Setting currSection to " + currSection);
    }
  } 
}
