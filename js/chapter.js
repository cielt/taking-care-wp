(function ($) {
  'use strict';

  var TakingCare = {};

  $(function () {
    var $grid = $('.masonry-grid'),
        $heroImageLayer = $('.hero-image-layer'),
        chapterCoverImage = $('.cover-img-src').data('imgSrc');

    $heroImageLayer.css({ 'background-image': 'url('+ chapterCoverImage +')' });
         
    $grid.imagesLoaded(
      function () {
        $grid.masonry({
          itemSelector: '.grid-item',
          columnWidth: '.grid-sizer',
          gutter: '.gutter-sizer',
          percentPosition: true
        });
      });
  });

})(jQuery);