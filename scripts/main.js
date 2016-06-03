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

       //  // Get id of current scroll item
       // var cur = scrollItems.map(function(){
       //   if ($(this).offset().top < fromTop)
       //     return this;
       // });
       // // Get the id of the current element
       // cur = cur[cur.length-1];
       // var id = cur && cur.length ? cur[0].id : "";

       // if (lastId !== id) {
       //     lastId = id;
       //     // Set/remove active class
       //     menuItems
       //       .parent().removeClass("active")
       //       .end().filter("[href=#"+id+"]").parent().addClass("active");
       // }
    });

    function moveSpeed(){
        var $this = $(this);
        var scrollSpeed = parseInt($this.data('scroll-speed'));
        var elPos = scrollPos / scrollSpeed;
        
        $this.css('transform', 'translateY(' + elPos + 'px)');
    }
}


$(document).ready(function () {
	windowHeight = $(window).innerHeight()-50;
	windowHalfHeight = $(window).outerHeight()/2;
    $('.homepage .jumbotron').height(windowHeight);
    $('.secondary .jumbotron').height(windowHalfHeight);
    
    $('.lead span').delay(100).queue(function () {
        $(this).removeClass('left-scroll');
        $(this).removeClass('right-scroll');
    });


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