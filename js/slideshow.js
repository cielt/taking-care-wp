(function ($) {
  'use strict';

  $(function () {
    var $slideshowWrapper = $('#slideshow'),
    $slideshowFrame = $('#slideshow-frame'),
    $slideshowArrows = $('.slideshow-arrows'),
    startAtSlide = getUrlParameter('start_slide') || 0, // start slide counter at 1
    // after first slide image loaded, init carousel
    $slideshowFirstSlide = $slideshowFrame.find('.slideshow-slide .slide-image-frame').eq(startAtSlide),
    $firstSlideImg = $slideshowFirstSlide.find('img'),
    firstImgSrc = $firstSlideImg.data('lazy'),
    slideshowWidth,
    imgPoll,
    scaleFactor,
    firstSlideHeight;

    // update slide markers
    $slideshowFrame.on('init', function (ev, carousel) {
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

      // go to startAtSlide
      carousel.slickGoTo(startAtSlide);

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
          adaptiveHeight: true
        });
      }
    }, 10);

  });

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

})(jQuery);