 $.fn.moveIt = function(){
  var $this = $(this);
  var $window = $(window);
  var scrollPos = $window.scrollTop();  
    $(document).scroll(function() {
        scrollPos = $window.scrollTop();
        $this.each(moveSpeed);
        var height = $(window).scrollTop();
        var toutHeight = $('.homepage .jumbotron').height();
        var navDis = toutHeight - 65;
        var logoDis = toutHeight + 10;
        if(height  > logoDis ) {
            $('.logo-container').addClass('fixed-logo-top');
        }
        if(height  < logoDis) {
            $('.logo-container').removeClass('fixed-logo-top');
        }
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

	windowHeight = $(window).innerHeight();
	windowHalfHeight = $(window).outerHeight()/2;
    $('.homepage .jumbotron').height(windowHeight);
    $('.secondary .jumbotron').height(windowHalfHeight);
    
    $('.lead span').delay(100).queue(function () {
        $(this).removeClass('left-scroll');
        $(this).removeClass('right-scroll');
    });

});
$(window).load(function(){ 

  //load my css stylesheet after pageload
  if(document.createStyleSheet) {
    document.createStyleSheet('styles/main.css');
  }
  else {
    var styles = "styles/main.css";
    var newSS=document.createElement('link');
    newSS.rel='stylesheet';
    newSS.href= styles ;
    document.getElementsByTagName("head")[0].appendChild(newSS);

  }
//load font
   WebFontConfig = {
   google: {
          families: ['Roboto Condensed:400,300,700', 'Oswald:400,700,300' , 'Montserrat:400,700', 'Noto Serif:400,700,400italic,700italic']
        }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();

    //remove class page-load
    $('body').addClass('page-loaded');

});
$(function() {
  $('.nav-pills a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 120
        }, 1000);
        return false;
      }
    }
  });
});
$(function(){
  $('[data-scroll-speed]').moveIt();
});