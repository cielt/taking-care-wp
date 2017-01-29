<?php
/**
 * Template Name: Chapter Slideshow Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

  <div class="header-spacing"></div>
  <!-- ################################################## Slideshow ################################################## -->
  <!-- Intro -->
  <div id="slideshow-section" class="section">
    <div class="w-max max-gl mx-auto px-5 pt-6 pb-6"> 
      <div class="header-slideshow pa-2 mb-5">
        <h1 class="t-alignC c-blueGrey0">
          Early Years<span class="v-divider"></span><span class="header-date db m--dib">1948 &ndash; 1966</span>
        </h1>  
      </div>
      <div id="slideshow" class="slideshow">
        <!-- markers, controls -->
        <div class="slideshow-marker"></div>
        <div id="slideshow-controls" class="slideshow-controls">
          <div class="slideshow-arrows cf"></div>
        </div>
        <div id="slideshow-frame" class="slideshow-frame">
          <div class="slideshow-slide g c-white" data-index="1">
            <!-- Intro Story -->
            <div class="g-b g-b--1of1 g-b--m--8of12 px-0 m--px1">
              <div class="slide-image-frame mb-4 m--mb0">
                <img class="fit" src="images/slideshow/mom-breakaway-open-sea.jpg" alt="Mom on the Breakaway on the open sea">
              </div>    
            </div>
            <!-- Images Preview -->
            <div class="g-b g-b--1of1 g-b--m--4of12 px-0 m--px1 flex-wrap-content-end">
              <div class="slide-info m--pl2 flex-item-content-end">
                <p class="slide-caption mb-2">Fusce id lacus tortor. Maecenas ut ligula lorem. Cras sit amet mi aliquam, efficitur felis scelerisque, iaculis diam. Nulla placerat ligula pharetra, egestas erat in, consectetur nunc.</p>
                <p class="slide-meta-info ts-s tf-sans c-grey5 lh-reset light">
                  Maecenas ut ligula lorem cras sit amet aliquam January 1949
                </p>
              </div>
              <div class="controls-spacer flex-item-content-end dn m--show"></div>
            </div>
          </div>
          <div class="slideshow-slide g c-white" data-index="2">
            <!-- Intro Story -->
            <div class="g-b g-b--1of1 g-b--m--8of12 px-0 m--px1">
              <div class="slide-image-frame mb-4 m--mb0">
                <img class="fit" data-lazy="images/slideshow/mom-dad-breakaway-deck.jpg" alt="Mom and Dad on the Breakaway deck">
              </div>    
            </div>
            <!-- Images Preview -->
            <div class="g-b g-b--1of1 g-b--m--4of12 px-0 m--px1 flex-wrap-content-end">
              <div class="slide-info m--pl2 flex-item-content-end">
                <p class="slide-caption mb-2">Fusce id lacus tortor. Maecenas ut ligula lorem. Cras sit amet mi aliquam, efficitur felis scelerisque, iaculis diam. Nulla placerat ligula pharetra, egestas erat in, consectetur nunc.</p>
                <p class="slide-meta-info ts-s tf-sans c-grey5 lh-reset light">
                  Maecenas ut ligula lorem cras sit amet aliquam January 1949
                </p>
              </div>
              <div class="controls-spacer flex-item-content-end dn m--show"></div>
            </div>
          </div>
          <div class="slideshow-slide g c-white" data-index="3">
            <!-- Intro Story -->
            <div class="g-b g-b--1of1 g-b--m--8of12 px-0 m--px1">
              <div class="slide-image-frame mb-4 m--mb0">
                <img class="fit" data-lazy="images/slideshow/197811-mom-dad-pong-nilla.jpg" alt="Mom and Dad with Pong and a box of Nilla wafers">
              </div>    
            </div>
            <!-- Images Preview -->
            <div class="g-b g-b--1of1 g-b--m--4of12 px-0 m--px1 flex-wrap-content-end">
              <div class="slide-info m--pl2 flex-item-content-end">
                <p class="slide-caption mb-2">Fusce id lacus tortor. Maecenas ut ligula lorem. Cras sit amet mi aliquam, efficitur felis scelerisque, iaculis diam. Nulla placerat ligula pharetra, egestas erat in, consectetur nunc.</p>
                <p class="slide-meta-info ts-s tf-sans c-grey5 lh-reset light">
                  Maecenas ut ligula lorem cras sit amet aliquam January 1949
                </p>
              </div>
              <div class="controls-spacer flex-item-content-end dn m--show"></div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <!-- ################################################## More Slideshows ################################################## -->
  <div class="section more-slideshows">
  </div> 
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
