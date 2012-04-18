$(function() {
  alert('page loaded');
  $('.flexslider').flexslider({
    slideshow: false,
    controlNav: false,
    animationLoop: false,
  });

  $('.video').fitVids();
});
