(function ($) {
  'use strict';

  var TakingCare = {};

  $(function () {
    var $grid = $('.masonry-grid'),
        $heroImgScreen = $('.theme-image-bg'),
        chapterCoverImage = $('.cover-img-src').data('imgSrc');

    console.log('set the cover image '+ chapterCoverImage);
    $heroImgScreen.css({ 'background-image': 'url('+ chapterCoverImage +')' });
         

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