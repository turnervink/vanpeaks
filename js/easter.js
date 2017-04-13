// var clicks;
//
// function dab() {
//   clicks++;
//
//   if (clicks >= 10) {
//     $("#teamphoto").attr("src", "images/easteregg.jpg");
//     $("#abouttitle").text("-About DabPeaks-");
//   }
// }

$("#teamphoto").hover(function() {
  console.log("Hover");
  this.attr("src", "images/easteregg.jpg");
});

$(document).ready(function() {
    //clicks = 0;
});
