var rim=(function(){
	return{   
  
	stickyHead:function(){
      var previousScroll = 0;
      $(window).scroll(function(){
         var currentScroll = $(this).scrollTop();
         if (currentScroll > previousScroll){
              $("header").addClass("sticky");
         } else {
           $("header").removeClass("sticky");
         }
    });
    },

	backTop: function(){
      $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.backTop').fadeIn();
      } else {
        $('.backTop').fadeOut();
      }
    });
    // scroll body to 0px on click
      $('.backTop a').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 1100);
        return false;
      });
   
    },		
    

    main_menu: function() { 
      $('.menuIcon').click(function() {
        $('.sidemenu-cont').css("right","0");
      });
      $('.closeBtn').click(function() {
        $('.sidemenu-cont').css("right","-500px");
      });
    },

    sticky_form: function() {         
      $('.cmnContMain .open').click(function() {
        $('.cmnContMain').css("right","0");
      });
      $('.cmnContMain .close').click(function() {
        $('.cmnContMain').css("right","-400px");
      });
    },

  


	} //return end
})();



//Sublink close function
$('.sublink a').click(function () {
  $(".mainNav").toggleClass("open close");
  setTimeout(function() {
    $(".mBmW a").toggleClass("open active");
  }, 600)
});