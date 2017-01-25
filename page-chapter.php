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
<div class="theme-image-bg theme-chapter-1">
  <div class="marquee-main chapter-cover w-max mx-auto p-rel">
    <div class="cover-image-overlay hero-overlay"></div>
    <div class="cover-image-title">
      <?php the_title( '<h1 class="h1 m--ts-xxxl c-white mb-1">', '</h1>' ); ?>
      <span class="h3 db c-blueGrey0 tf-sans light"><?php echo get_field('start_year') ?> &ndash; <?php echo get_field('end_year') ?></span>
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
    <div class="g">
      <!-- Intro Story -->
      <div class="g-b g-b--1of1 g-b--m--6of12">
        <div class="pa-2">
          <span class="date mb-2"><?php echo get_field('start_year') ?> &mdash; <?php echo get_field('end_year') ?></span>
          <?php the_title( '<h1 class="h2 c-blue0 normal mb-1">', '</h1>' ); ?>
          <?php the_content(); ?>
          </div>
      </div>    
      <div class="g-b g-b--1of1 g-b--m--1of12">&nbsp;</div>
      <!-- Images Preview -->
      <div class="g-b g-b--1of1 g-b--m--5of12">
        <div class="pa-2">
          <div class="section-header g mb-4">
            <div class="g-b g-b--1of1 g-b--xs--6of12 px-0">
              <h2 class="ts-l c-blueGrey0 mb-1 m--mb0 tf-sans upper section-title">Pictures</h2>
            </div>
            <div class="section-actions g-b g-b--1of1 g-b--xs--6of12 px-0 xs--t-alignR">
              <!-- TODO: add fa icon -->
              <a href="slideshow.html" class="section-heading-cta">View Slideshow <b class="fa fa-camera" aria-hidden="true"></b></a>
            </div>
          </div>
          <!-- Pictures: preview -->
          <div class="masonry-grid">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
            <div class="grid-item grid-item--w2x">
              <img class="fit" src="images/slideshow/197705-mom-pong-1month.jpg" alt="Mom with 1 month old pong">
            </div>  
            <div class="grid-item">
              <img class="fit" src="images/slideshow/197811-mom-dad-pong-nilla.jpg" alt="Mom and Dad with Pong holding Nilla Wafers">
            </div>     
            <div class="grid-item grid-item--w2x">
              <img class="fit" src="images/slideshow/memoriam-0-mom-dad-siu.jpg" alt="Mom and Dad at SIU">
            </div>
            <div class="grid-item">
              <img class="fit" src="images/slideshow/gong-gong-pwo-pwo-mom-1949.jpg" alt="Young Mom with Gong-Gong and Pwo-Pwo in the garden">
            </div>     
            <div class="grid-item grid-item--w2x">
              <img class="fit" src="images/slideshow/memoriam-1-mom-solo-red-dress.jpg" alt="Mom in a red dress in Omaha">
            </div>
            <div class="grid-item">
              <img class="fit" src="images/slideshow/197805-mom-pong-bottle.jpg" alt="Mom feeding Pong with the bottle">
            </div>
          </div>
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
        <!-- 1949 -->
        <tr>
          <td class="year-marker">1948</td>
          <td class="year-milestones">
            <table class="year-milestone-details">
              <tr>
                <td>
                  <div class="g">
                    <div class="milestone-meta g-b g-b--1of1 g-b--xs--4of12">
                      <div class="g">
                        <div class="milestone-date g-b g-b--1of1 g-b--s--5of12">June 29</div>
                        <span class="milestone-location g-b g-b--1of1 g-b--s--7of12">Peking, China</span>
                      </div>
                    </div>
                    <div class="milestone-details g-b g-b--1of1 g-b--xs--8of12">
                      <p>Born Yen-Sheng Loretta Tu to Ching-Tao Liu and Shao-Chih Liu</p>  
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- v spacing -->
        <tr class="v-spacing" role="presentation">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="year-marker">1949</td>
          <td class="year-milestones">
            <table class="year-milestone-details">
              <tr>
                <td>
                  <div class="g">
                    <div class="milestone-meta g-b g-b--1of1 g-b--xs--4of12">
                      <div class="g">
                        <div class="milestone-date g-b g-b--1of1 g-b--s--5of12">June 29</div>
                        <span class="milestone-location g-b g-b--1of1 g-b--s--7of12">Peking, China</span>
                      </div>
                    </div>
                    <div class="milestone-details g-b g-b--1of1 g-b--xs--8of12">
                      <p>Born Yen-Sheng Loretta Tu to Ching-Tao Liu and Shao-Chih Liu</p> 
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="g">
                    <div class="milestone-meta g-b g-b--1of1 g-b--xs--4of12">
                      <div class="g">
                        <div class="milestone-date g-b g-b--1of1 g-b--s--5of12">June 29</div>
                        <span class="milestone-location g-b g-b--1of1 g-b--s--7of12">Peking, China</span>
                      </div>
                    </div>
                    <div class="milestone-details g-b g-b--1of1 g-b--xs--8of12">
                      <p>Born Yen-Sheng Loretta Tu to Ching-Tao Liu and Shao-Chih Liu</p> 
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>    
<!-- ################################################## Stories ################################################## -->
<div class="section bg-white">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">
    <div class="section-header g">
      <div class="g-b g-b--1of1 g-b--m--8of12 px-0">
        <h2 class="ts-l c-blueGrey0 mb-1 m--mb0 tf-sans upper section-title">Stories</h2>
      </div>
      <div class="section-actions g-b g-b--1of1 g-b--m--4of12 px-0 m--t-alignR">
        <!-- TODO: add fa icon -->
        <a href="#" class="section-heading-cta">Read Stories <b class="fa fa-bookmark dib" aria-hidden="true"></b></a>
        <span class="h-divider">|</span>
        <a href="#" class="section-heading-cta">Share a Story <b class="fa fa-comment dib" aria-hidden="true"></b></a>
      </div>
    </div>
    <hr class="hairline mt-2 mb-4">
    <div class="stories cf">
      <ul class="stories-list list-reset">
        <!-- 1. story -->
        <li class="story-item">
          <div class="cf">
            <div class="story-author mb-2 m--mb0">
              <div class="author-tn tn-round mb-2">
                <img class="fit" src="images/mom-graduation-bw.jpg" alt="">
              </div>
              <div class="author-name">John Appleseed</div>
            </div>
            <div class="story-excerpt pa-2 m--pa4">
              <p class="preview">This is the story of Mom from a certain time in her life, as recalled by a certain person who remembers something and would like to share it with others who knew her <a href="#" class="continue-link">&hellip;</a></p>
            </div>
          </div>
        </li>
        <!-- 2. story -->
        <li class="story-item">
          <div class="cf">
            <div class="story-author mb-2 m--mb0">
              <div class="author-tn tn-round mb-2">
                <img class="fit" src="images/mom-graduation-bw.jpg" alt="">
              </div>
              <div class="author-name">Betty McFly</div>
            </div>
            <div class="story-excerpt pa-2 m--pa4">
              <p class="preview">This is the story of Mom from a certain time in her life, as recalled by a certain person who remembers something and would like to share it with others who knew her <a href="#" class="continue-link">&hellip;</a></p>
            </div>
          </div>
        </li>
        <!-- 3. story -->
        <li class="story-item">
          <div class="cf">
            <div class="story-author mb-2 m--mb0">
              <div class="author-tn tn-round mb-2">
                <img class="fit" src="images/mom-graduation-bw.jpg" alt="">
              </div>
              <div class="author-name">John Appleseed</div>
            </div>
            <div class="story-excerpt pa-2 m--pa4">
              <p class="preview">This is the story of Mom from a certain time in her life, as recalled by a certain person who remembers something and would like to share it with others who knew her <a href="#" class="continue-link">&hellip;</a></p>
            </div>
          </div>
        </li>
        <!-- 4. story -->
        <li class="story-item">
          <div class="cf">
            <div class="story-author mb-2 m--mb0">
              <div class="author-tn tn-round mb-2">
                <img class="fit" src="images/mom-graduation-bw.jpg" alt="">
              </div>
              <div class="author-name">Betty McFly</div>
            </div>
            <div class="story-excerpt pa-2 m--pa4">
              <p class="preview">This is the story of Mom from a certain time in her life, as recalled by a certain person who remembers something and would like to share it with others who knew her <a href="#" class="continue-link">&hellip;</a></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
</div> 
</div>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
