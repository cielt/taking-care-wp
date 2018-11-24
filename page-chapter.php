<?php
/**
 * Template Name: Chapter Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<div class="cover-image-spacing"></div>
<div class="hero-area">
  <div class="marquee-main chapter-cover w-max mx-auto p-rel">
    <div class="hero-image-layer">
      <div class="vis-hidden cover-img-src" data-img-src="<?php echo get_field('cover_image') ?>"></div>
    </div>
    <div class="cover-image-overlay hero-overlay"></div>
    <div class="cover-image-title">
      <?php the_title( '<h1 class="h1 m--ts-xxxl c-white mb-1">', '</h1>' ); ?>
      <span class="h3 db c-blueGrey0 tf-sans light"><?php echo get_field('start_year') ?> &ndash; <?php echo get_field('end_year') ?></span>
    </div>
    <a href="#chapter-intro" class="scroll-to-content-btn c-white" data-offset="0">
      <b class="fas fa-angle-down fa-2x" aria-hidden="true"></b>
      <span class="vis-hidden">scroll down to page content</span>
    </a>
  </div>
</div>
<div class="p-rel z2"> 
<div id="chapter-intro" class="section bg-white">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6"> 
    <div class="g">
      <!-- Intro Story -->
      <div class="g-b g-b--1of1 g-b--m--6of12 mb-5 m--mb0">
        <div class="m--pa2">
          <span class="date dib mb-1 mr-2"><?php echo get_field('start_year') ?> &mdash; <?php echo get_field('end_year') ?></span>
          <span class="date upper dib mb-2"><b class="fas fa-map-marker-alt" aria-hidden="true"></b> <?php echo the_field('chapter_location', $parent_id) ?></span>
          <?php the_title( '<h1 class="h2 c-blue0 normal mb-1">', '</h1>' ); ?>
          <?php the_content(); ?>
          </div>
      </div>    
      <div class="g-b g-b--1of1 g-b--m--1of12">&nbsp;</div>
      <!-- Images Preview -->
      <div class="g-b g-b--1of1 g-b--m--5of12">
        <div class="m--pa2">
          <div class="section-header g mb-4">
            <div class="g-b g-b--1of1 g-b--xs--6of12 px-0">
              <h2 class="ts-l c-blueGrey0 mb-1 m--mb0 tf-sans upper section-title">Pictures</h2>
            </div>
            <div class="section-actions g-b g-b--1of1 g-b--xs--6of12 px-0 xs--t-alignR">
              <!-- TODO: add fa icon -->
              <?php $current_page_id = get_the_ID();
                $slideshow_wp_query = new WP_Query();
                $slideshow_children = $slideshow_wp_query->query(array('post_type' => 'page', 'meta_key' => 'page_template', 'meta_value' => 'chapter_slideshow', 'post_parent' => $current_page_id));
                ?>
              <?php foreach ( $slideshow_children as $slideshow ) : ?>
                <a href="<?php echo get_permalink($slideshow); ?>" class="section-heading-cta">View Slideshow <b class="fas fa-camera" aria-hidden="true"></b></a>
              <?php endforeach; ?>
            </div>
          </div>
          <?php if( have_rows('chapter_image_gallery') ): ?>
          <!-- Set up masonry blocks -->
          <div class="masonry-grid">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
            <?php
              $counter = 0;
              while( have_rows('chapter_image_gallery') && $counter < 20): the_row(); 

              // vars
              $image = get_sub_field('slide_image');
              $caption = get_sub_field('slide_caption');
              $credit = get_sub_field('photo_credit');
            ?>

            <?php if( $counter == 0 || $counter == 7 || $counter == 14): ?>
              <div class="grid-item grid-item--w2x">
            <?php else : ?> 
              <div class="grid-item">
            <?php endif; ?>
              <a href="<?php echo get_permalink($slideshow) . '?start_slide=' . $counter; ?>">
                <img class="fit" src="<?php echo $image; ?>" alt="<?php echo $caption ?>" />
              </a>
          <?php $counter++; ?>
        </div>

      <?php endwhile; ?>

      </div><!-- /masonry-grid -->

        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ################################################## Milestones ################################################## -->
<div class="section bg-blueGrey1">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">
    <div class="section-header cf">
      <h2 class="ts-l c-blueGrey0 mb-4 tf-sans ts-s upper section-title">Milestones</h2>
    </div>
    <div class="section-body">
      <table class="milestone-years">
        <tr>
          <th class="header-year vis-hidden">Year</th>
          <th class="header-milestones vis-hidden">Milestones</th>
        </tr>
      <?php
          while( have_rows('chapter_milestones')): the_row(); 

          // vars
            $rows = get_field('chapter_milestones');
            $row_count = count($rows);
            $year = get_sub_field('milestone_year');
            $milestone_year_set = get_sub_field('milestone_year_set');
            $outer_loop_counter = 0;
      ?>
        <tr>
          <td class="year-marker"><?php echo $year; ?></td>
          <td class="year-milestones">
            <table class="year-milestone-details">
              <?php 
                while( have_rows('milestone_year_set')): the_row();
                foreach($milestone_year_set as $milestone_item) : 
                  $milestone_date = get_sub_field('milestone_date');
                  $milestone_month = get_sub_field('milestone_month');
                  $milestone_location = get_sub_field('milestone_location');
                  $milestone_summary = get_sub_field('milestone_summary'); ?>
                  <tr>
                    <td>
                      <div class="g">
                        <div class="milestone-meta g-b g-b--1of1 g-b--xs--4of12">
                          <div class="g">
                            <div class="milestone-when g-b g-b--1of1 g-b--s--5of12">
                              <b class="milestone-month mr-1"><?php echo $milestone_month; ?></b>
                              <?php if (!empty($milestone_date)) { echo '<b class="milestone-date">' . $milestone_date . '</b>'; } ?></b>
                            </div>
                            <span class="milestone-location g-b g-b--1of1 g-b--s--7of12"><?php echo $milestone_location; ?></span>
                          </div>
                        </div>
                        <div class="milestone-details g-b g-b--1of1 g-b--xs--8of12">
                          <?php echo $milestone_summary; ?>  
                        </div>
                      </div>
                    </td>
                  </tr>  
                <?php endforeach;
                  endwhile;
                  $outer_loop_counter++; ?>
              </table>  
            </td>
          </tr>
          <?php if (get_row_index() != ($row_count - 1)): ?>
          <tr class="v-spacing" role="presentation">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <?php endif; ?>    
      <?php endwhile; ?>
     </table>
    </div>
  </div>
</div>    
<?php endwhile; // End of the loop. ?>

<!-- STORIES FEED -->
<?php get_template_part( 'template-parts/content', 'stories-feed' ); ?>

<?php get_footer(); ?>
