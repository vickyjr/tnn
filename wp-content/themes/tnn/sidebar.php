<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
 <div id="main-sidebar" class="large-4 columns">     
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="row">
		<div class="large-12 columns">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
	<?php endif; ?>
          
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
        <div id="photos-thumbs" class="row">
          <div class="medium-12 large-12 columns">
            <div class="row">
              <div class="medium-12 large-12 columns">
                <h4 class="section-titles"><span class="title-arrow"></span>PHOTOS</h4>
              </div>
            </div>
            <div class="row">
              <div class="medium-12 large-12 columns"> 
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
			  </div>
            </div>
            <div class="row">
              <div class="medium-12 large-12 columns"> 
			  <span class="all-items-bg text-center">
			  <a href="<?php echo get_site_url(); ?>/gallery">VIEW ALL PHOTOS</a></span> </div>
            </div>
          </div>
        </div>
		<?php endif; ?>
        <div id="social-holder" class="row">
          <div class="small-12 large-12 columns">
            <div class="tabs-content vertical">
              <div class="content active" id="panel1a">
			  <?php if ( is_active_sidebar( 'sidebar-3' ) ) : 
						dynamic_sidebar( 'sidebar-3' );
					endif;
			  ?>
              </div>
              <div class="content" id="panel2a">
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : 
						dynamic_sidebar( 'sidebar-4' );
					endif;
			  ?>
              </div>
              <div class="content" id="panel3a">
                <?php if ( is_active_sidebar( 'sidebar-5' ) ) : 
						dynamic_sidebar( 'sidebar-5' );
					endif;
			  ?>
              </div>
            </div>
            <dl class="tabs vertical tabs-vertical" data-tab>
              <dd class="active fb-ico-holder"><a href="#panel1a"> <span class="social-ico fb-ico"></span> </a></dd>
              <dd class="twitter-ico-holder"><a href="#panel2a"> <span class="social-ico twitter-ico"></span> </a></dd>
              <dd class="youtube-ico-holder"> <a href="#panel3a"> <span class="social-ico youtube-ico"></span> </a></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
