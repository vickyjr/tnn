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
    <div class="row">
      <div class="large-8 columns">
        <div class="row">
		<div class="large-12 columns">
          <div class="large-12 columns">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
		<h1 class="section-titles"><span class="title-arrow"></span><?php the_title(); ?></h1>
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
				<?php the_content(); 
				endwhile;
			?>

			
			
			
			
<?php $post_testimonial = get_post(87); ?>	
<div class="row">
<div class="large-5 columns">	
<?php echo get_the_post_thumbnail($post_testimonial->ID); ?> 
</div>
<div id="testimonials-txt" class="large-7 columns">
<div class="testimonial">
<?php echo $post_testimonial->post_content ; ?>
</div>
<div class="testimonial-by">
<span>Sincerely,</span><br/>
<span class="by-who"><?php echo $post_testimonial->post_title; ?></span>
</div>
</div>

			
			
			
			
			
	</div>	
			
			
			
			
			
			
		</div>
	</div>
	</div>
	</div>
	<?php get_sidebar(); ?>
	</div>
	<?php get_sidebar('newsletter'); ?>
	</div>

<?php
get_footer();
