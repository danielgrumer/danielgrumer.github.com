$(function() {
  $('.flexslider').flexslider({
    slideshow: false,
    controlNav: false,
    animationLoop: false,
  });

  $('.video').fitVids();

  $('img').lazyload({
    threshold: 200,
    effect: 'fadeIn',
    skip_invisible: false,
  });
});
