<?php
/**
 *
 * Template Name: Taking Care Home Page
 *
 * @package Taking_Care
 */

get_header(); ?>

<div class="header-spacing"></div>
<div class="marquee-main home-cover w-max mx-auto p-rel">
  <div class="hero-overlay z2"></div>
  <div class="title-block p-abs z3">
    <h1 class="h1 m--ts-xxxl site-title c-white"><em><?php bloginfo( 'name' ); ?></em></h1>
    <span class="h3 db c-blueGrey0 tf-sans site-description light mt-1"><?php bloginfo( 'description' ); ?></span>
  </div>
  <div id="home-slideshow" class="slideshow p-rel z1">
    <div class="slide-frame">
      <div id="" class="slide-7 slide-image"></div>
      <div id="" class="slide-0 slide-image"></div>
      <div id="" class="slide-1 slide-image"></div>
      <div id="" class="slide-2 slide-image"></div>
      <div id="" class="slide-3 slide-image"></div>
      <div id="" class="slide-4 slide-image"></div>
      <div id="" class="slide-5 slide-image"></div>
      <div id="" class="slide-6 slide-image"></div>
    </div>  
  </div>
  <div class="slide-controls">
  </div>
  <a href="#home-intro" class="scroll-to-content-btn c-white" data-offset="0">
    <b class="fas fa-angle-down fa-2x" aria-hidden="true"></b>
    <span class="vis-hidden">scroll down to page content</span>
  </a>
</div>
<!-- Intro -->
<div id="home-intro" class="section w-max max-gm mx-auto">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="px-5 pt-6 pb-6">
    <div class="text-col mb-5">
      <h1 class="h1 c-blue0 t-alignC normal mb-1">Yen-Sheng Loretta Tu</h1>
      <span class="date t-alignC mb-5">June 29, 1948 &mdash; June 8, 2016</span>
      <!-- intro -->
      <?php if (get_field('home_page_intro')) : ?><p class="ts-l m--ts-xl tf-sans light"><?php echo get_field('home_page_intro') ?></p><?php endif;?>
      <hr class="hairline mt-5">
    </div>
    <!-- Mim -->
    <div class="text-col mb-5">
      <h2 class="h2 mb-1"><?php if (get_field('home_page_section_title')) : ?><?php echo get_field('home_page_section_title') ?><?php endif;?></h2>
        <?php the_content(); ?>
    </div>      
  </div>
<?php endwhile?>
</div>
<!-- ################################################## Chapters ################################################## -->
<div class="section bg-blueGrey1">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">
    <div class="section-header cf">
      <h2 class="ts-l c-blueGrey0 mb-4 tf-sans ts-s upper section-title">Chapters</h2>
    </div>
    <!-- Chapters Loop -->
    <?php $chapter_pages = get_pages( array( 'meta_key' => 'page_template', 'meta_value' => 'chapter_page', 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) ); ?>
    <div class="tile-set">
    <?php foreach ( $chapter_pages as $chapter ) : ?>
      <a class="tile" href="<?php echo get_permalink($chapter); ?>">
        <div class="window-frame p-rel mb-1">
          <?php echo wp_get_attachment_image($chapter->cover_image, 'home-chapter-tile', "", array( "class" => "p-rel z1" )); ?>
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta"><?php echo ($chapter->start_year . ' &ndash; ' . $chapter->end_year); ?></span>
            <span class="tile-location meta"><?php echo ($chapter->chapter_location); ?></span>
          </div>
          <h3 class="tile-title h3"><?php echo $chapter->post_title; ?></h3>
        </div>
      </a>    
    <?php endforeach; 
      wp_reset_postdata();?>
    </div>
    
  </div>  
</div>
<!-- STORIES FEED -->
<?php get_template_part( 'template-parts/content', 'stories-feed' ); ?>

<?php get_footer(); ?>