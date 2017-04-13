var clicks;

function dab() {
  clicks++;

  if (clicks >= 10) {
    $("#teamphoto").attr("src", "images/easteregg.jpg");
    $("#abouttitle").text("-About DabPeaks-");
  }
}

$(document).ready(function() {
    clicks = 0;
});
