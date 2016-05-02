 $.fn.moveIt = function(){
  var $this = $(this);
  var $window = $(window);
  var scrollPos = $window.scrollTop();
  
    $(document).scroll(function() {

        scrollPos = $window.scrollTop();
        $this.each(moveSpeed);

        var height = $(window).scrollTop();
        var toutHeight = $('.homepage .jumbotron').height();
        var navDis = toutHeight + 50;
        var logoDis = toutHeight + 10;
        
        //bottom section changes z index 
        if(height  > toutHeight ) {
            $('.career-tout').css('z-index', '2');
        }
        if(height  < toutHeight ) {
            $('.career-tout').css('z-index', '0');
        }
        //logo hits top of page
        if(height  > logoDis ) {
            $('.logo-container').addClass('fixed-logo-top');
        }
        if(height  < logoDis) {
            $('.logo-container').removeClass('fixed-logo-top');
        }
        //header hits top of page
        if(height  > navDis ) {
            $('.header').addClass('fixed-top');
        }
        if(height  < navDis) {
            $('.header').removeClass('fixed-top');
        }
    });

    function moveSpeed(){
        var $this = $(this);
        var scrollSpeed = parseInt($this.data('scroll-speed'));
        var elPos = scrollPos / scrollSpeed;
        
        $this.css('transform', 'translateY(' + elPos + 'px)');
    }
}

$(document).ready(function () {
	windowHeight = $(window).outerHeight() - 100;
	windowHalfHeight = $(window).outerHeight()/2;
    $('.homepage .jumbotron').height(windowHeight);
    $('.secondary .jumbotron').height(windowHalfHeight);
    
    $('.lead span').delay(100).queue(function () {
        $(this).removeClass('left-scroll');
        $(this).removeClass('right-scroll');
    });
});


$(function(){
  $('[data-scroll-speed]').moveIt();
});