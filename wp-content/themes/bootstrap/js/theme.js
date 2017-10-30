jQuery.noConflict();
(function( $ ) {
  $(function() {
    	
      $('img').removeAttr('width').removeAttr('height');


      $(window).scroll(function(){ 

		var a = 112;
		var pos = $(window).scrollTop();
		if(pos > a) {
		    $(".navbar-fixed-top").addClass('scroll-nav')
		}
		else {
		    $(".navbar-fixed-top").removeClass('scroll-nav')
		}
		});



		/*styles to min height for home page*/
		var windowHeight = $( window ).height();
		
		$("#featureCarousel .item").css("height", windowHeight + 'px');


	
	
 


  });
})(jQuery);

