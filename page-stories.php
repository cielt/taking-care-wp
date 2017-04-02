<?php
/**
 * Template Name: Stories Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>

<div class="cover-image-spacing"></div>
<div class="hero-area">
  <div class="marquee-main chapter-cover w-max mx-auto p-rel">
    <div class="cover-image-overlay hero-overlay"></div>
    <div class="cover-image-title">
      <!-- Center title block -->
      <div class="w-max max-gm mx-auto px-6">
        <h1 class="h1 m--ts-xxxl c-white mb-1">Stories</h1>
        <p class="ts-xs xs--ts-l db c-blueGrey0 tf-serif">
          Yen-Sheng remembered people with effortless sensitivity, and took great pleasure in sharing tales with friends and family.  Here, we pay tribute to the ardent storyteller in our own words.  
        </p>
      </div>
    </div>
    <a href="#chapter-intro" class="scroll-to-content-btn c-white" data-offset="0">
      <b class="fa fa-angle-down fa-2x" aria-hidden="true"></b>
      <span class="vis-hidden">scroll down to page content</span>
    </a>
  </div>
</div>
<div class="p-rel z2"> 
  <div id="chapter-intro" class="section bg-white">
    <div class="w-max max-gl mx-auto px-5 pt-6 pb-6"> 
      <!-- Stories - masonry tiles -->
      <div class="m--pa2">
        <div class="section-header cf g">
          <div class="g-b g-b--1of1 g-b--m--8of12 px-0">
            <h2 class="ts-l c-blueGrey0 mb-1 m--mb0 tf-sans upper section-title">Stories</h2>
          </div>
          <div class="section-actions g-b g-b--1of1 g-b--m--4of12 px-0 m--t-alignR">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Share a Story' ))); ?>" class="section-heading-cta">Share a Story <b class="fa fa-comment dib" aria-hidden="true"></b></a>
          </div>
        </div>
        <hr class="hairline mt-2 mb-4">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args= array(
          'orderby' => 'date', 
          'order' => 'DESC',
          'post_type' => 'story',
          'posts_per_page' => -1, 
          'paged' => $paged
          );
          //query_posts($args);
        $stories_query = new WP_Query($args);
        if( have_posts() ) : ?>
        <!-- Set up masonry blocks -->
        <div class="stories-grid masonry-grid masonry">
          <div class="grid-sizer"></div>
          <div class="gutter-sizer"></div>
          <?php while ( $stories_query->have_posts() ) : $stories_query->the_post(); ?>
          <div class="grid-item">
            <?php $story_image = get_field( 'story_image' );
                if ($story_image) {
                    $size = 'medium';
                    $med_thumb_image = $story_image['sizes'][$size];
                    $alt = $story_image['alt'];
                    } ?>
            <a class="story-block" href="<?php echo get_permalink( $post->ID ); ?>"> 
              <!-- TODO: fix rendering of caption markup as ALT text -->
              <img class="fit" src="<?php echo $med_thumb_image; ?>" alt="<?php echo $alt; ?>">
              <div class="story-block-info">
                <div class="story-block-overlay"></div>
                <div class="story-block-label">
                  <h3 class="story-title"><?php the_title(); ?></h3>
                  <p class="story-author">by <?php echo get_field('story_author'); ?></p>
                  <div class="preview-block"><?php the_excerpt(); ?></div>
                </div>
              </div>
            </a> 
          </div> 
          <?php endwhile; 
          wp_reset_postdata(); ?>
        </div><!-- /masonry-grid -->
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
