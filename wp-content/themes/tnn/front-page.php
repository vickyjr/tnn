<?php
/**
 * The template for displaying the front-page
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
<div id="slider" class="row hide-for-small-only">
  <div class="large-12 columns slider-inner ">
 <!-- <div class="Slider-overlay">
  <img class="" src="<?php echo get_template_directory_uri(); ?>/img/banner-overlay.png" alt="overlay">
  </div> -->
  <div class="row">
  <div class="main-slide-img large-12 large-centered columns ">
     


<!-- 2. Add images to <div class="fotorama"></div>. -->
<div class="fotorama" data-nav="thumbs" data-thumbheight="133" data-width="100%" data-thumbratio="190/90" data-transition="crossfade" data-fit="cover">
<?php query_posts('cat=10'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div data-thumb="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" 
  data-img="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" data-thumbratio="190/90">
  <div class="slider-txt-wrap">
  <div class="row">
  <div class="medium-8 medium-offset-4 large-7 large-offset-5 columns">
  <div class="row slider-txt">
  <div class="small-10 medium-10 large-10 columns ">
  <h1><?php the_title(); ?></h1>
  <?php substr(the_content(),50); ?>
  <a href="<?php echo get_permalink(); ?>" class="learn-more">Learn More</a>
  </div>  
  </div> 
    </div> 
  </div>  
  </div>  
  </div>   
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
    </div>
  </div>
  </div>
</div></div>

<div id="main-content" class="row ">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-8 columns">
        <div class="row">
          <div class="large-12 columns show-for-medium-up content-padding">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); 
				endwhile;
			?>
		</div>
	</div>
	<div class="row off-grid-guides show-for-medium-up">

          <div class="large-12 columns">
            <h4 class="section-titles"><span class="title-arrow"></span>THIS WEEK AT TIR NA NOG</h4>
            <dl class="tabs parties-tabs" data-tab>
              <dd class="active"><a href="#day-1">SUNDAY</a></dd>
              <dd><a href="#day-2">MONDAY</a></dd>
              <dd><a href="#day-3">TUESDAY</a></dd>
              <dd><a href="#day-4">WEDNESDAY</a></dd>
              <dd><a href="#day-5">THURSDAY</a></dd>
              <dd><a href="#day-6">FRIDAY</a></dd>
              <dd><a href="#day-7">SATURDAY</a></dd>
            </dl>
            <div class="tabs-content">
              <div class="content content-textured active" id="day-1">
                <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
						$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'3'));
						foreach ( $EM_Events as $EM_Event ) {
						?>
						<div class="medium-4 large-4 columns top-event text-center">                    
						

						<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
						<h4><?php echo $EM_Event->event_name; ?></h4>
						<p>
						<?php
						
							echo $EM_Event->post_content;
							?>
							</p>
					        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
							<?php
							echo $EM_Event->event_start_date;
							?>
							</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
							<?php
							echo $EM_Event->event_start_time;
							?>
							</a> </div>
							<?php
						
						}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
              <div class="content content-textured" id="day-2">
                              <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
	$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'4'));
	foreach ( $EM_Events as $EM_Event ) {
	?>
	<div class="medium-4 large-4 columns top-event text-center">                    
	
	
	<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
	<h4><?php echo $EM_Event->event_name; ?></h4>
	<p>
	<?php
	
		echo $EM_Event->post_content;
		?>
		</p>
        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_date;
		?>
		</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_time;
		?>
		</a> </div>
		<?php
	
	}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
              <div class="content content-textured" id="day-3">
                              <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
	$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'5'));
	foreach ( $EM_Events as $EM_Event ) {
	?>
	<div class="medium-4 large-4 columns top-event text-center">                    
	
	
	<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
	<h4><?php echo $EM_Event->event_name; ?></h4>
	<p>
	<?php
	
		echo $EM_Event->post_content;
		?>
		</p>
        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_date;
		?>
		</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_time;
		?>
		</a> </div>
		<?php
	
	}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
              <div class="content content-textured" id="day-4">
                              <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
	$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'6'));
	foreach ( $EM_Events as $EM_Event ) {
	?>
	<div class="medium-4 large-4 columns top-event text-center">                    
	
	
	<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
	<h4><?php echo $EM_Event->event_name; ?></h4>
	<p>
	<?php
	
		echo $EM_Event->post_content;
		?>
		</p>
        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_date;
		?>
		</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_time;
		?>
		</a> </div>
		<?php
	
	}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
              <div class="content content-textured" id="day-5">
                                <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
	$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'7'));
	foreach ( $EM_Events as $EM_Event ) {
	?>
	<div class="medium-4 large-4 columns top-event text-center">                    
	
	
	<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
	<h4><?php echo $EM_Event->event_name; ?></h4>
	<p>
	<?php
	
		echo $EM_Event->post_content;
		?>
		</p>
        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_date;
		?>
		</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_time;
		?>
		</a> </div>
		<?php
	
	}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
              <div class="content content-textured" id="day-6">
                             <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
	$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'8'));
	foreach ( $EM_Events as $EM_Event ) {
	?>
	<div class="medium-4 large-4 columns top-event text-center">                    
	
	
	<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
	<h4><?php echo $EM_Event->event_name; ?></h4>
	<p>
	<?php
	
		echo $EM_Event->post_content;
		?>
		</p>
        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_date;
		?>
		</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_time;
		?>
		</a> </div>
		<?php
	
	}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
              <div class="content content-textured" id="day-7">
                              <div class="content-textured-inner">
                  <div class="row">
				  <?php
				  
	$EM_Events = EM_Events::get(array('limit'=>3, 'orderby'=>'name', category=>'9'));
	foreach ( $EM_Events as $EM_Event ) {
	?>
	<div class="medium-4 large-4 columns top-event text-center">                    
	
	
	<?php echo get_the_post_thumbnail($EM_Event->post_id); ?>
	<h4><?php echo $EM_Event->event_name; ?></h4>
	<p>
	<?php
	
		echo $EM_Event->post_content;
		?>
		</p>
        <a href="<?php echo $EM_Event->guid; ?>"><span class="date-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_date;
		?>
		</a> <a href="<?php echo $EM_Event->guid; ?>"><span class="time-ico tiny-ico"></span>
		<?php
		echo $EM_Event->event_start_time;
		?>
		</a> </div>
		<?php
	
	}
				  ?>
                    
                  </div>
                  <span class="all-items-bg text-center"><a href="<?php echo get_site_url(); ?>/events">VIEW ALL EVENTS</a></span> </div>
              </div>
            </div>
          </div>
        </div>
		<div class="row show-for-medium-up">
          <div class="large-12 columns shadow"> <img src="<?php echo get_template_directory_uri(); ?>/img/shadow.png" alt="shadow"> </div>
        </div>
		<div class="row off-grid-guides show-for-medium-up">
          <div class="large-12 columns">
            <h4 class="section-titles"><span class="title-arrow"></span>BOOK A PARTY</h4>
<?php
	$post_private_party = get_post(73); 
	$post_catering = get_post(13); 

?>
            <dl class="tabs parties-tabs" data-tab="">
              <dd class="active"><a href="#panel2-1">Private Parties</a></dd>
              <dd><a href="#panel2-2">Catering</a></dd>
            </dl>
            <div class="tabs-content">
              <div class="content content-textured active" id="panel2-1">
                <div class="content-textured-inner">
                  <div class="row">
                    <div class="large-4 medium-5 columns party-photos"> 
					<img src="img/party-photo1.jpg" alt="party"> <?php echo get_the_post_thumbnail($post_private_party->ID); ?> 
					<img src="img/party-photo3.jpg" alt="party"> </div>
                    <div class="medium-7 large-8 columns">
                      <h5><?php echo $post_private_party->post_title; ?></h5>
                      <?php echo $post_private_party->post_content ; ?>
                      <a href="#" class="book-now">book now</a> </div>
                  </div>
                </div>
              </div>
              <div class="content content-textured" id="panel2-2">
                <div class="content-textured-inner">
                  <div class="row">
                    <div class="large-12 columns">
					<?php echo  $post_catering->post_title; ?>
                      <?php echo $post_catering->post_content ; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="row show-for-large-up">
          <div class="large-12 columns shadow"> <img src="<?php echo get_template_directory_uri(); ?>/img/shadow.png" alt="shadow"> </div>
        </div>
	</div>
	<?php get_sidebar(); ?>
	</div>
	<?php get_sidebar('newsletter'); ?>
	</div>

<?php
get_footer();