<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-8 columns">
        <div class="row">
          <div class="large-12 columns">

			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

				<?php get_search_form(); ?>

		</div>
	</div>
	</div>
	<?php get_sidebar(); ?>
	</div>
	</div>

<?php
get_footer();
