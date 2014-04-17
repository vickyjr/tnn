<?php
/**
 * The Newsletter Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="row show-for-large-up">
  <div class="large-12 columns">
    <div id="gift-newsletter" class="content-textured">
      <div class="content-textured-inner">
        <div class="row">
	<?php if ( is_active_sidebar( 'sidebar-6' ) ): ?>
          <div class="large-6 columns left-side"> 
	  <span class="gift-cards"></span>
            <h4>DON'T FORGET OUR</h4>
            <h3>GIFT CARDS!</h3>				
            <p><?php dynamic_sidebar( 'sidebar-6' ); ?></p>
            <a href="#" class="book-now">book now</a> </div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'sidebar-7' ) ): ?>
          <div class="large-6 columns right-side">
            <h4>SUBSCRIBE FOR OUR</h4>
            <h3>EMAIL NEWSLETTER</h3>
		        <?php dynamic_sidebar( 'sidebar-7' ); ?>
          </div>
	  	<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
