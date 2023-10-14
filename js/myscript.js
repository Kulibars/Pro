$(document).ready(function(){
  $('.slider').slick({
	  arrows : false,
	  slidesToShow: 6,
	  autoplay:true,
	  autoplaySpeed: 3000,
  });
  $('.slider-2').slick({
	  arrows : false,
	  slidesToShow: 4,
	  autoplay:true,
	  autoplaySpeed: 3000,
  });
  $('.borderElement').addClass('animate__animated animate__bounceIn');
  $('.borderElement-2').addClass('animate__animated animate__bounceIn');
  /*$('.borderElement-2').addClass('transition-Element');*/
});