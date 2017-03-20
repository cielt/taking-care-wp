<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args= array(
    'orderby' => 'date', 
    'order' => 'DESC',
    'post_type' => 'story',
    'posts_per_page' => 10, 
    'paged' => $paged
    );
    //query_posts($args);
  $stories_query = new WP_Query($args);
  if( have_posts() ) : ?>
  <div class="section bg-white">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">
    <div class="section-header cf g">
      <div class="g-b g-b--1of1 g-b--m--8of12 px-0">
        <h2 class="ts-l c-blueGrey0 mb-1 m--mb0 tf-sans upper section-title">Stories</h2>
      </div>
      <div class="section-actions g-b g-b--1of1 g-b--m--4of12 px-0 m--t-alignR">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Stories' ) ) ); ?>" class="section-heading-cta">Read Stories <b class="fa fa-book dib" aria-hidden="true"></b></a>
        <span class="h-divider">|</span>
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Share a Story' ))); ?>" class="section-heading-cta">Share a Story <b class="fa fa-comment dib" aria-hidden="true"></b></a>
      </div>
    </div>
    <hr class="hairline mt-2 mb-4">
    <div class="stories cf">
      <ul class="stories-list list-reset">
        <?php while ( $stories_query->have_posts() ) : $stories_query->the_post(); ?>
        <li class="story-item">
          <div class="cf">
            <div class="story-author mb-2 m--mb0">
              <div class="author-tn tn-round mb-2">
                <a href="<?php echo get_permalink( $post->ID ); ?>"><img class="fit-h" src="<?php echo get_field( 'story_image' ); ?>" alt=""></a>
              </div>
            </div>
            <div class="story-excerpt pa-2 m--pa4 ts-s">
              <h3 class="h4 tf-sans story-title mb-1 bold"><a class="c-navy0" href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h3>
              <span class="author-name db tf-sans mb-1 c-blueGrey0">by <?php echo get_field('story_author'); ?></span>
              <?php the_excerpt(); ?>
            </div>
          </div>
        </li>
        <?php endwhile; 
        wp_reset_postdata(); ?>
  </ul>
    </div>
  </div>
</div> 
</div>
<?php endif; ?>