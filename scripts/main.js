$(document).scroll(function() {
    var height = $(window).scrollTop();
    var scrollDis = $(window).outerHeight()-306;

    if(height  > scrollDis ) {
        $('.career-tout').css('z-index', '2');
    }
    if(height  < scrollDis ) {
        $('.career-tout').css('z-index', '0');
    }
});

$(document).ready(function () {
	windowHeight = $(window).outerHeight();
	windowHalfHeight = $(window).outerHeight()/2;
    $('.homepage .jumbotron').height(windowHeight);
    $('.secondary .jumbotron').height(windowHalfHeight);
});