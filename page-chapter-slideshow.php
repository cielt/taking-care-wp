<?php
/**
 * Template Name: Chapter Slideshow Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); 
  $parents = get_post_ancestors( $post->ID );
  $parent_id = ($parents) ? $parents[0]: $post->ID;
  $parent_title = get_the_title( $parent_id ); 
  $parent_permalink = get_permalink( $parent_id ); ?>

  <div class="header-spacing"></div>
  <!-- ################################################## Slideshow ################################################## -->
  <!-- Intro -->
  <div id="slideshow-section">
    <div class="w-max max-gl mx-auto px-5 pt-6 pb-6"> 
      <div class="header-slideshow pa-2 mb-5">
        <h1 class="t-alignC c-blueGrey0">
          <a href="<?php echo $parent_permalink; ?>"><?php echo $parent_title; ?></a>
          <span class="v-divider"></span><span class="header-date db m--dib"><?php echo the_field('start_year', $parent_id) ?> &ndash; <?php echo the_field('end_year', $parent_id) ?></span>
        </h1>  
      </div>
      <?php if( have_rows('chapter_image_gallery', $parent_id) ): ?>
      <div id="slideshow" class="slideshow">
        <!-- markers, controls -->
        <div class="slideshow-marker"></div>
        <div id="slideshow-controls" class="slideshow-controls">
          <div class="slideshow-arrows cf"></div>
        </div>
        <div id="slideshow-frame" class="slideshow-frame">
          <?php
              $counter = 0;
              while( have_rows('chapter_image_gallery', $parent_id)): the_row(); 

              // vars
              $image = get_sub_field('slide_image');
              $caption = get_sub_field('slide_caption');
              $credit = get_sub_field('photo_credit');
            ?>
            <div class="slideshow-slide g c-white" data-index="<?php echo $counter; ?>">
            <div class="g-b g-b--1of1 g-b--m--8of12 px-0 m--px1">
              <div class="slide-image-frame mb-4 m--mb0">
                <img class="" data-lazy="<?php echo $image; ?>" alt="">
              </div>    
            </div>
            <div class="g-b g-b--1of1 g-b--m--4of12 px-0 m--px1 flex-wrap-content-end">
              <div class="slide-info m--pl2 flex-item-content-end t-alignL">
                <p class="slide-caption mb-2"><?php echo $caption; ?></p>
                <?php if (isset($credit)) {
                  echo '<p class="slide-meta-info ts-s tf-sans c-grey5 lh-reset light">' . $credit . '</p>';    
                } ?>
              </div> 
              <div class="controls-spacer flex-item-content-end dn m--show"></div>
            </div>
          </div>
          <?php $counter++; ?>
          <?php endwhile; ?>  
        </div>
      </div>    
      <?php endif; ?>
    </div>
  </div>
  <!-- ################################################## More Slideshows ################################################## -->
  <div class="section more-slideshows">
  </div> 
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
