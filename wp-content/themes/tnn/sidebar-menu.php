<?php
/**
 * The Sidebar containing the menu widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
 <div id="main-sidebar" class="large-4 columns">     
    <?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
	<div class="row">
		<div class="large-12 columns">
		<?php dynamic_sidebar( 'sidebar-11' ); ?>
		</div>
	</div>
	<?php endif; ?>
    </div>
