<?php
/**
 * The template for displaying events page
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
    <div class="row">
      <div class="large-12 columns">
        <div class="row">
		<div class="large-12 columns">
          <div class="large-12 columns">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
		<h1 class="section-titles"><span class="title-arrow"></span><?php the_title(); ?></h1><br/>
		<div class="content-textured whole">
            <div class="content-textured-inner content-textured-inner-about">
				<?php the_content();
			?>
				</div>
				</div>
			<?php	
				endwhile;
			?>

		</div>
	</div>
	</div>
	</div>
	</div>
	        <div class="row">
          <div class="large-12 columns shadow"> <img src="<?php echo get_template_directory_uri(); ?>/img/shadow.png" alt="shadow"> </div>
        </div>
	<?php get_sidebar('newsletter'); ?>
	</div>
</div>
<?php
get_footer();
