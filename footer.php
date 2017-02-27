<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Taking_Care
 */

?>

<div class="footer p-rel z2">
  <div class="w-max max-gl mx-auto px-5 pt-6 pb-6">  
    <div class="footer-content">
      <h4 class="h4 c-grey3 tf-sans upper bold mb-4">About This Site</h4>
      <div class="g mb-6">
        <div class="g-b g-b--1of1 g-b--m--6of12 px-0">
          <p class="preview c-grey4">
            <em>Taking Care</em> is a website celebrating the life of Yen-Sheng Loretta Tu (1948 &ndash; 2016), created by her family in loving remembrance.  For more information, to submit a request, or to share a story you may have, please get in touch.
          </p>
        </div>
        <div class="g-b g-b--1of1 g-b--m--1of12">&nbsp;</div>
        <div class="g-b g-b--1of1 g-b--m--2of12 px-0">
          <a class="footer-cta" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Us' ))); ?>">Share a Story <b class="fa fa-comment dib" aria-hidden="true"></b></a>
        </div>
        <div class="g-b g-b--1of1 g-b--m--1of12">&nbsp;</div>
        <div class="g-b g-b--1of1 g-b--m--2of12 px-0">
          <a class="footer-cta" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Us' ))); ?>">Contact Us <b class="fa fa-envelope dib" aria-hidden="true"></b></a>
        </div>
      </div>
      <div class="copyright"><p class="ts-s c-blueGrey0 italic">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p></div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
