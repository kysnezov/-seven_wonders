$(document).ready(function(){
  $(".slider").owlCarousel({
  	items: 1,
  	loop: true,
  	autoplay: true,
  	autoplaySpeed: 12000,
    autoplayTimeout: 24000,
    autoWidth: false,
   });

  $(".btn-nav").on("click", function() {
  	var target = $(this).data("target");
  	$(target).toggleClass("nav__list--open")
  });

});