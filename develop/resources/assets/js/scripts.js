//=include _pages/*
//=include _modules/*

(() => {
  let imgParallax = new ImgParallax('js-parallax');
  let inviewEvent = new InviewEvent('js-inview');
  let formConvert = new FormConvert('js-convert');
})();

//DOMContentLoaded
$(() => {
});

//images resources loaded
$(window).on('load', () => {

  $(window).trigger('loading');
});

//after loading animation
$(window).on('loading', () => {
});