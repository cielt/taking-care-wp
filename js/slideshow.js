(function ($) {
  'use strict';

  $(function () {
    var $slideshowWrapper = $('#slideshow'),
    $slideshowFrame = $('#slideshow-frame'),
    $slideshowArrows = $('.slideshow-arrows'),
    // after first slide image loaded, init carousel
    $slideshowFirstSlide = $slideshowFrame.find('.slideshow-slide .slide-image-frame').first(),
    $firstSlideImg = $slideshowFirstSlide.find('img'),
    firstImgSrc = $firstSlideImg.data('lazy'),
    slideshowWidth,
    imgPoll,
    scaleFactor,
    firstSlideHeight;

    // load first img
    $firstSlideImg.attr({ 'src': firstImgSrc });
    slideshowWidth = $slideshowFirstSlide.innerWidth();

    imgPoll = setInterval(function () {

      if ($firstSlideImg.get(0).naturalWidth) {

        clearInterval(imgPoll);
        // get scaled height of first image div
        scaleFactor = slideshowWidth / $firstSlideImg.get(0).naturalWidth;
        firstSlideHeight = scaleFactor * $firstSlideImg.get(0).naturalHeight;

        $slideshowFirstSlide.css({ 'height': firstSlideHeight });

        // init slick carousel
        $slideshowFrame.slick({
          accessibility: true,
          arrows: true,
          appendArrows: $('#slideshow-controls .slideshow-arrows'),
          prevArrow: '<a href="#" class="slick-prev"><span class="vis-hidden">previous</span><b class="fa fa-chevron-left" aria-hidden="true"></b></a>',
          nextArrow: '<a href="#" class="slick-next"><span class="vis-hidden">next</span><b class="fa fa-chevron-right" aria-hidden="true"></b></a>',
          fade: true,
          lazyLoad: 'ondemand',
          dots: true,
          appendDots: $('.slideshow-marker'),
          adaptiveHeight: true,
        }); 
      }
    }, 10);

    // update slide markers
    $slideshowFrame.on('init', function (slick) {
      var $dots = $('.slick-dots > li'),
      $loadingDiv = $('.loading-msg');
      
      // remove loading
      $loadingDiv.remove();

      if ($dots.length) {
        var len = $dots.length;
        
        $dots.each(function (index, el) {
          var $dotBtn = $(el).find('button'),
          resetIndex = index + 1;

          $dotBtn.text(resetIndex + ' of ' + len);
        });
      }

      // arrow keyup event handlers
      $(window).on('keyup', function (ev) {
      // 37: < left | 39: right >
      var keyIndex = ev.which;

      if (keyIndex === 37) {
        $slideshowFrame.slick('slickPrev');
      } else if (keyIndex === 39) {
        $slideshowFrame.slick('slickNext');
      }
    });

    });

  });

})(jQuery);