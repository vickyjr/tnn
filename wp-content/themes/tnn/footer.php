<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<footer id="footer" class="row">
  <div id="footer-menu" class="medium-4 large-2  columns show-for-medium-up">
    <h3>Navigation</h3>
     <?php wp_nav_menu( array( 'menu' => 'Main menu',
        						  'theme_location' => '', 
        						  'menu_id'         => 'footer-menu-wrap',
        						  'container' => false,
        						  'menu_class' => 'footer-nav side-nav' 
								  ) ); ?>
  </div>
  <div class="medium-4 large-4 columns">
  	<?php 
    	if ( is_active_sidebar( 'sidebar-8' ) ) : 
    		dynamic_sidebar( 'sidebar-8' );
		endif; 
		?>
  </div>
  <div id="map-holder" class="medium-5 large-4 columns show-for-small-up">
    <div class="frame"> <img src="<?php echo get_template_directory_uri(); ?>/img/map-frame.png" alt="frame"> </div>
    <div class="footer-social show-for-medium-up"> 
    	<a href="https://www.facebook.com/TNNRaleigh" target="_blank" class="footer-social-ico footer-fb-ico"> </a> 
    	<a href="https://twitter.com/tnnraleigh" target="_blank" class="footer-social-ico footer-twitter-ico"> </a> 
    	<a href="http://instagram.com/tnnraleigh" target="_blank" class="footer-social-ico footer-instagram-ico"> </a> 
    </div>
    <div id="map-holder-inner">
    	<?php 
    	if ( is_active_sidebar( 'sidebar-9' ) ) : 
    		dynamic_sidebar( 'sidebar-9' );
		endif; 
		?>      
    </div>
  </div>
</footer>
<div id="copy-right" class="row">
  <div class="medium-7 small-centered medium-centered large-5 large-centered columns"> 
  	<?php 
    	if ( is_active_sidebar( 'sidebar-10' ) ) : 
    		dynamic_sidebar( 'sidebar-10' );
		endif; 
		?>
	</div>
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.1/fotorama.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script> 
<script>
      $(document).foundation();
	  //$("#top-menu").hide();
	  $(".toggle-top-menu").click(function(){
  		$("#top-menu").toggle();
		});
    </script>
</body>
</html>