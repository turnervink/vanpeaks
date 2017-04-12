function setHeight() {
    windowHeight = $(window).innerHeight();
    $("index-header").css("height", windowHeight);
}
function setWidth() {
    windowWidth = $(window).innerWidth();
    $("index-header").css("width", windowWidth);
}

$(window).resize(function() {
    setHeight();
    setWidth();
});

$(document).ready(function() {
    function indexHeader() {
        setHeight();
        setWidth();
    }
});