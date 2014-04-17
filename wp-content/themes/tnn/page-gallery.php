<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="row">
  <div class="large-12 columns">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-8 columns">
          <h3 class="section-titles"><span class="title-arrow"></span> IMAGE GALLERY</h3>
          <div class="row">
            <div class="medium-5 large-5 columns gallery-holder">
              <div class="gallery-main-holder"> 
			  <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-photo-main.png" alt="gallery main photo"> 
			  </div>
              <div class="gallery-frame"> 
			  <a href="<?php echo get_site_url(); ?>/pub-pics">
			  <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-frame.png" alt="frame">
			  </a> 
			  </div>
              <div class="text-center"><h5>Pub Pics</h5>
              <span>(21 images)</span></div> </div>
            <div class="medium-5 medium-offset-1 large-5 large-offset-1 end columns"> </div>
          </div>
          <h3 class="section-titles"><span class="title-arrow"></span> VIDEO GALLERY</h3>
          <div class="row">
            <div class="medium-5 large-5 columns gallery-holder">
              <div class="gallery-main-holder"> 
			  <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-photo-video1.jpg" alt="gallery video"> 
			  </div>
              <div class="gallery-frame"> 
			  <a href="<?php echo get_site_url(); ?>/pub-pics"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-frame.png" alt="frame">
			  </a> 
			  </div>
              <div class="text-center">
			  <h5>The Belfast Boys</h5>
              <span>(21 images)</span>
			  </div> 
			  </div>
            <div class="medium-5 medium-offset-1 large-5 large-offset-1 columns end  gallery-holder">
              <div class="gallery-main-holder"> 
			  <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-photo-video2.jpg" alt="gallery video"> 
			  </div>
              <div class="gallery-frame"> 
			  <a href="<?php echo get_site_url(); ?>/pub-pics">
			  <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-frame.png" alt="frame">
			  </a> 
			  </div>
              <div class="text-center">
			  <h5>Run Green 8K 2009</h5>
              <span>(21 images)</span>
			  </div>
              </div>
          </div>
        </div>
	<?php get_sidebar(); ?>
	</div>
	</div>
	<?php get_sidebar('newsletter'); ?>
	</div>

<?php
get_footer();
