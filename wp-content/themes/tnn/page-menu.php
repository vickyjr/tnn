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
<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
			<div class="row">
		<div class="large-12 columns">
				<?php
		// check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ):
?>		
          <div class="content-textured">
            <div class="content-textured-inner content-textured-inner-about"> 
            <?php the_post_thumbnail(); ?>
             </div>
          </div>
            <div class="row">
          <div class="large-12 columns shadow"> <img src="<?php echo get_template_directory_uri(); ?>/img/shadow.png" alt="shadow"> </div>
        </div>
		<?php endif; ?>
		</div>
		</div>
			   <div class="row">
	<div class="large-8 columns">
        <div class="row">
		<div class="large-12 columns">
          <div class="large-12 columns">
		<h1 class="section-titles"><span class="title-arrow"></span><?php the_title(); ?></h1>

		<?php
				 the_content();
				 ?>
				 	</div>
	</div>
	</div>
	</div>
	
	<?php get_sidebar('menu'); ?>
	</div>
<?php				 
				endwhile;
			?>

	
	
	
	<?php get_sidebar('newsletter'); ?>
	</div>
</div>
<?php
get_footer();
