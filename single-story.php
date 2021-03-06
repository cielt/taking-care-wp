<?php
/**
 *  Template for single story posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
  $post_date = get_the_date( 'F j, Y' ); 
  $story_image = get_field('story_image');
  if ($story_image) {
    $size = 'large';
    $large_image = $story_image['sizes'][$size];
    $alt = $story_image['alt'];
  }

  $story_image_caption = get_field('story_image_caption'); ?>
  <!-- ################################################## Story ################################################## -->
  <div class="p-rel z2"> 
<div id="story-block" class="section bg-white">
  <div class="w-max max-gm mx-auto px-5 pt-6 pb-6"> 
    <div class="story pt-4 pb-6">
      <div class="section-header mb-4 t-alignC m--px6">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Stories' ) ) ); ?>"><span class="kicker mb-2">Stories</span></a>
        <h1 class="h1 c-blue0 normal mb-1"><?php the_title(); ?></h1>
        <div class="story-meta c-blueGrey0 ts-s tf-sans">
          <span class="story-author">by <?php echo get_field('story_author'); ?></span>
          <span class="divider mx-2">|</span>
          <span class="story-date"><?php echo $post_date; ?></span>
        </div>
      </div>
      <?php if (isset($story_image)) : ?>
      <div class="section-content mb-4 m--px6">
        <div class="image-frame mb-1">
          <img class="fit" src="<?php echo $large_image; ?>" alt="<?php echo $alt; ?>">
        </div>
        <?php if (isset($story_image_caption)) : ?>
          <p class="image-caption ts-s tf-sans c-grey5"><?php echo get_field('story_image_caption'); ?></p>
        <?php endif; ?>  
      </div>
    <?php endif; ?>
      <div class="story-content section-content m--px6">
        <?php the_content(); ?>
      </div>
    </div>
    <hr class="hairline mt-4 mb-4">
    <!-- Footer Controls -->
    <?php $prev = get_previous_post(); $next = get_next_post(); ?>
    <div class="story-footer pt-4 pb-4 tf-sans">
      <div class="g">
        <div class="content-nav-prev g-b g-b--1of1 g-b--m--6of12 t-alignL <?php if (!$prev) { echo 'dn m--show'; } ?>">
          <?php if ($prev) : ?>
            <span class="db ts-xs upper c-blueGrey0 mb-2">Previous</span>
            <?php previous_post_link( '%link', __( '<b class="fas fa-chevron-left" aria-hidden="true"></b> %title') ); ?>
          <?php else : ?>
            &nbsp;
          <?php endif; ?>
        </div>
        <?php if ($prev) : ?>
          <hr class="hairline g-b g-b--1of1 m--hide mt-4 mb-4 dotted">
        <?php endif; ?>  
        <div class="content-nav-next g-b g-b--1of1 g-b--m--6of12 t-alignR <?php if (!$next) { echo 'dn m--show'; } ?>">
          <?php if ($next) : ?>
            <span class="db ts-xs upper c-blueGrey0 mb-2">Next</span>
            <?php next_post_link( '%link', __( ' %title <b class="fas fa-chevron-right" aria-hidden="true"></b>') ); ?>
          <?php else : ?>
            &nbsp;  
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>    
</div> 
</div>

  <!-- ################################################## More Stories ################################################## -->
  <div class="section more-slideshows">
  </div> 
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
