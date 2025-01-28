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
  $parent_permalink = get_permalink( $parent_id ); 
  $chapter_page_list = get_pages( array( 'meta_key' => 'page_template', 'meta_value' => 'chapter_page', 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
  // get prev / next page indices
  $chapter_pages = array();


  foreach ($chapter_page_list as $chapter_page) {
    $chapter_pages[] += $chapter_page->ID;
  }

  // zero-index counter
  $current_chapter = array_search($parent_id, $chapter_pages);

  if ($current_chapter > 0) {
    $prevChapterID = $chapter_pages[$current_chapter-1];    
  }
  
  if ($current_chapter < sizeof($chapter_pages)) {
    $nextChapterID = $chapter_pages[$current_chapter+1];
  }
  ?>

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
        <!-- loading -->
        <div class="loading-msg pt-2 pb-6 t-alignC">
          <div class="px-6 mb-6"><img class="fit" src="https://cdn.taking-care.us/wp-content/themes/taking-care/images/flying-swallow.gif" alt=""></div>
          <p class="c-grey5 upper tf-sans">Loading &hellip;</p>
        </div>
        <!-- markers, controls -->
        <div class="slideshow-marker"></div>
        <div id="slideshow-controls" class="slideshow-controls">
          <div class="slideshow-arrows cf"></div>
        </div>
        <!-- hidden till slick init -->
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
                <img data-lazy="<?php echo $image; ?>" alt="">
              </div>    
            </div>
            <div class="g-b g-b--1of1 g-b--m--4of12 px-0 m--px1 flex-wrap-content-end">
              <div class="slide-info m--pl2 flex-item-content-end t-alignL">
                <div class="slide-caption mb-2"><?php echo $caption; ?></div>
                <?php if (!empty($credit)) {
                  echo '<p class="slide-meta-info ts-s tf-sans c-grey5 lh-reset light">' . $credit . '</p>';    
                } ?>
                <a class="back-to-link" href="<?php echo $parent_permalink; ?>">Back to: <?php echo $parent_title; ?></a>
              </div>
              <div class="controls-spacer flex-item-content-end dn m--show"></div>
            </div>
          </div>
          <?php $counter++; ?>
          <?php endwhile; ?>  
        </div>
      </div>    
      <?php endif; ?>
      <hr class="hairline dotted blueGrey0 mt-5 mb-5">
      <!-- Prev / Next Chapters -->
      <div class="slideshow-footer tf-sans">
      <div class="g">
        <div class="content-nav-prev g-b g-b--1of1 g-b--m--6of12 t-alignL c-blueGrey0">
          <?php if (isset($prevChapterID)) : ?>
            <span class="db ts-xs upper c-blueGrey0 mb-2">Previous Chapter</span>
            <a class="slideshow-footer-nav slideshow-prev-link" href="<?php echo get_permalink($prevChapterID); ?>">
              <span class="db mb-2"><?php echo ($current_chapter) . '. ' . get_the_title($prevChapterID); ?></span>
              <div class="link-thumbnail">
                <div class="overlay"></div>
                <img class="fit" src="<?php echo the_field('cover_image', $prevChapterID); ?>" alt="">
              </div>
            </a>  
          <?php else: ?>
            &nbsp;
          <?php endif;?>  
        </div>
        <?php if (isset($prevChapterID)) : ?>
          <hr class="hairline g-b g-b--1of1 m--hide mt-4 mb-4 dotted blueGrey0">
        <?php endif; ?>
        <div class="content-nav-next g-b g-b--1of1 g-b--m--6of12 t-alignR c-blueGrey0">
          <?php if (isset($nextChapterID)) : ?>
            <span class="db ts-xs upper c-blueGrey0 mb-2">Next Chapter</span>
            <a class="slideshow-footer-nav slideshow-next-link" href="<?php echo get_permalink($nextChapterID); ?>">
              <span class="db mb-2"><?php echo ($current_chapter + 2) . '. ' . get_the_title($nextChapterID); ?></span>
              <div class="link-thumbnail">
                <div class="overlay"></div>
                <img class="fit" src="<?php echo the_field('cover_image', $nextChapterID); ?>" alt="">
              </div>  
            </a>
          <?php else: ?>
            &nbsp;
          <?php endif; ?>      
        </div>
      </div>
    </div>
    </div>
  </div>
<?php endwhile; // End of the loop. ?>

<!-- STORIES FEED -->
<?php get_template_part( 'template-parts/content', 'stories-feed' ); ?>

<?php get_footer(); ?>
