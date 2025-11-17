$(document).ready(function(){              

  if(window.innerWidth>1024){
      $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      // scroll body to 0px on click 
      $('#back-to-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        },10);
        return false;
      });
  }

  $('#neelan-mobi-menu').click(function(){
		$(this).toggleClass('open');
	});


  //dropdown menu FIX - click on dropdown was not working
  if(window.innerWidth>1024){
      $('#mynavbar .dropdown-toggle').click(function () {
        window.location = $(this).attr('href');    
      });
  }

});
    