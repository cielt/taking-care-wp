<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taking_Care
 */

get_header(); ?>

<div class="marquee-main home-cover w-max mx-auto p-rel">
  <div class="title-block p-abs z2">
    <h1 class="h1 m--ts-xxxl site-title c-white"><em><?php bloginfo( 'name' ); ?></em></h1>
    <span class="h3 db c-blueGrey0 tf-sans site-description light mt-1"><?php bloginfo( 'description' ); ?></span>
  </div>
  <div id="home-slideshow" class="slideshow p-rel z1">
    <div class="slide-frame">
      <div id="mom-breakaway-deck" class="slide-1 slide-image"></div>
      <div id="mom-nebraska-red-dress" class="slide-2 slide-image"></div>
      <div id="mom-dad-wedding-1" class="slide-3 slide-image"></div>
      <div id="gong-gong-pwo-pwo-mom" class="slide-4 slide-image"></div>
    </div>  
  </div>
  <div class="slide-controls">
  </div>
  <a href="#home-intro" class="scroll-to-content-btn c-white" data-offset="0">
    <b class="fa fa-angle-down fa-2x" aria-hidden="true"></b>
    <span class="vis-hidden">scroll down to page content</span>
  </a>
</div>
<!-- Intro -->
<div id="home-intro" class="section w-max max-gm mx-auto">
  <div class="px-5 pt-6 pb-6">
    <div class="text-col mb-5">
      <h1 class="h1 c-blue0 t-alignC normal mb-1">Yen-Sheng Loretta Tu</h1>
      <span class="date t-alignC mb-5">June 29, 1948 &mdash; June 8, 2016</span>
      <!-- intro -->
      <p class="ts-l m--ts-xl tf-sans light">Fusce id lacus tortor. Maecenas ut ligula lorem. Cras sit amet mi aliquam, efficitur felis scelerisque, iaculis diam. Nulla placerat ligula pharetra, egestas erat in, consectetur nunc.</p>
      <hr class="hairline mt-5">
    </div>
    <!-- Mim -->
    <div class="text-col mb-5">
      <h2 class="h2 mb-1">More Stuff About Mom</h2>
      <div class="date mb-2"></div>
      <p>Vivamus massa arcu, euismod et condimentum sit amet, iaculis ut eros. Nulla ultrices nisl ac nulla blandit varius. Etiam luctus, nisi id mattis ornare, odio tellus tincidunt quam, id sollicitudin nisl diam non ex. Maecenas aliquam nulla neque, vitae euismod arcu euismod ac. Vestibulum orci risus, venenatis id condimentum nec, egestas nec urna. Quisque vulputate velit non tortor convallis, non bibendum libero sagittis. Nunc congue, nisi vitae sodales pellentesque, ipsum nunc finibus lorem, et iaculis dui quam quis dui. Cras egestas turpis eget odio pulvinar, in viverra sapien scelerisque. Fusce sed malesuada mi. In ut tortor fringilla, bibendum lacus ut, lacinia arcu. In hac habitasse platea dictumst. Integer condimentum neque sed eros dapibus, in cursus velit eleifend. Nulla tincidunt scelerisque bibendum. Phasellus sagittis ornare laoreet. In lacinia justo a leo maximus congue.</p>
      <p>Donec eu dapibus metus. Fusce dapibus turpis eget metus semper, in pellentesque nibh ultricies. Duis ac purus porttitor ante suscipit scelerisque in et velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus neque nisi, vestibulum sed consectetur eget, mattis id nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In molestie gravida neque a aliquet. Suspendisse semper tristique velit, quis pellentesque leo semper at. Vivamus arcu orci, feugiat sit amet nulla et, facilisis venenatis urna. Aenean elementum, massa sit amet elementum aliquam, lectus dolor malesuada nisl, eu venenatis erat ligula eu magna. Mauris quis commodo risus. Nullam quam sapien, egestas ac nulla sit amet, lacinia vulputate urna. Donec lorem mauris, varius id est sit amet, faucibus suscipit purus. In consectetur eget turpis eu interdum.</p>
    </div>      
  </div>
</div>
<!-- ################################################## Chapters ################################################## -->
<div class="section bg-blueGrey1">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">
    <div class="section-header cf">
      <h2 class="ts-l c-blueGrey0 mb-4 tf-sans ts-s upper section-title">Chapters</h2>
    </div>
    <div class="tile-set">
      <!-- 1. Early Years -->
      <a class="tile" href="" data-chapter-index="1">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/gong-gong-pwo-pwo-mom-1949-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1948 &ndash; 1966</span>
            <span class="tile-location meta">Taipei, Taiwan</span>
          </div>
          <h3 class="tile-title h3">Early Years</h3>
        </div>
      </a>
      <!-- 2. NTU -->
      <a class="tile" href="" data-chapter-index="2">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-graduate-portrait-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1966 &ndash; 1970</span>
            <span class="tile-location meta">Taipei, Taiwan</span>
          </div>
          <h3 class="tile-title h3">National Taiwan University</h3>
        </div>
      </a>
      <!-- 3. SIU -->
      <a class="tile" href="" data-chapter-index="3">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-siu-campus-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1970 &ndash; 1972</span>
            <span class="tile-location meta">Carbondale, IL</span>
          </div>
          <h3 class="tile-title h3">Southern Illinois University</h3>
        </div>
      </a>
      <!-- 4. Cornell -->
      <a class="tile" href="" data-chapter-index="4">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-dad-wedding-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1972 &ndash; 1976</span>
            <span class="tile-location meta">Ithaca, NY</span>
          </div>
          <h3 class="tile-title h3">Cornell University</h3>
        </div>
      </a>
      <!-- 5. Stanford -->
      <a class="tile" href="" data-chapter-index="5">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-baby-pong-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1976 &ndash; 1980</span>
            <span class="tile-location meta">Palo Alto, CA</span>
          </div>
          <h3 class="tile-title h3">Stanford University</h3>
        </div>
      </a>
      <!-- 6. Cherry Ridge Road -->
      <a class="tile" href="" data-chapter-index="6">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-kids-swan-boat-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1980 &ndash; 1992</span>
            <span class="tile-location meta">State College, PA</span>
          </div>
          <h3 class="tile-title h3">115 Cherry Ridge Road</h3>
        </div>
      </a>
      <!-- 7. Shagbark Court -->
      <a class="tile" href="" data-chapter-index="7">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-dad-bryce-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">1992 &ndash; 2003</span>
            <span class="tile-location meta">State College, PA</span>
          </div>
          <h3 class="tile-title h3">2399 Shagbark Court</h3>
        </div>
      </a>
      <!-- 8. An Empty Nest -->
      <a class="tile" href="" data-chapter-index="8">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/mom-dad-breakaway-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">2004 &ndash; 2016</span>
            <span class="tile-location meta">State College, PA</span>
          </div>
          <h3 class="tile-title h3">Empty Nest</h3>
        </div>
      </a>
      <!-- 9. Afterword -->
      <a class="tile" href="" data-chapter-index="2">
        <div class="window-frame p-rel mb-1">
          <img class="fit p-rel z1" src="images/slideshow/tn/afterword-friends-ccmp-tn.jpg" alt="">
          <div class="tile-overlay p-abs z2"></div>
        </div>
        <div class="tile-info">
          <div class="cf mb-1">
            <span class="tile-time meta">2016 &ndash; present</span>
            <span class="tile-location meta">State College, PA</span>
          </div>
          <h3 class="tile-title h3">Afterword</h3>
        </div>
      </a>
    </div>  
  </div>  
</div>
<!-- ################################################## Stories ################################################## -->
<div class="section bg-white">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">
    <div class="section-header cf g">
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

<?php get_footer(); ?>