<?php
/**
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
  <!-- ################################################## Story ################################################## -->
  <div class="p-rel z2"> 
    <div id="story-block" class="section bg-white">
      <div class="w-max max-gm mx-auto px-5 pt-6 pb-6"> 
        <div class="story pt-4 pb-6 m--px6">
          <div class="form-block mb-4 t-alignC">
            <h1 class="h1 c-blue0 normal mb-1"><?php the_title(); ?></h1>
            <div class="g pt-4 pb-4">
              <div class="g-b g-b--1of1 g-b--s--4of12">
                <div class="image-frame mb-4">
                  <img src="<?php echo get_field('content_image'); ?>" class="fit" alt="">
                </div>  
              </div>
              <div class="g-b g-b--1of1 g-b--s--8of12 t-alignL">
                <div class="px-3">
                  <p>We invite you to get in touch with your own memories of Yen-Sheng, questions, corrections, or feedback.</p>
                  <p class="italic">Thank you for visiting Taking Care.</p>
                  <hr class="hairline mt-4 mb-4">
                  <div class="section-content pt-4 pb-4">
                    <?php the_content(); ?>  
                  </div>
                </div>    
              </div>
            </div>
          </div>

        </div><!-- /.story -->
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
