$(document).ready(function() {
    function setHeight() {
        windowHeight = $(window).innerHeight();
        $('index-header').css('height', windowHeight);
    };
    setHeight();

    $(window).resize(function() {
        setHeight();
    });

    function setWidth() {
        windowWidth = $(window).innerWidth();
        $('index-header').css('width', windowWidth);
    };
    setWidth();

    $(window).resize(function() {
        setWidth();
    });
});