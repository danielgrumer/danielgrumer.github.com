$(function() {
  $('.flexslider').flexslider({
    slideshow: false,
    controlNav: false,
    animationLoop: false,
  });

  $('.video').fitVids();

  $('img').lazyload({
    threshold: 2000000,
    effect: 'fadeIn',
    skip_invisible: false,
  });
});
