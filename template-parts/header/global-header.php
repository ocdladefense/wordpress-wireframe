
<!--global-header-->

		<div id="global-header" style="background-color:<?php echo confget('background-color'); ?>;" class="flex-container global-header" >

			<div class="gh-item gh-item-1">
				<!--MAIN NAVIGATION-->
				<?php if(false && has_nav_menu('main')): ?>
					<div class="navigation-main">
						<div class="wrap">
							<?php get_template_part( 'template-parts/navigation/navigation', 'main' );?>
						</div><!-- .wrap -->
					</div><!-- .navigation-main -->
				<?php endif; ?>

				<!--CUSTOM LOGO-->
				<?php
					// print wp_get_theme();exit;
					if(strtolower(wp_get_theme()) != "wireframe") {
						the_custom_logo();
					} else {
				?>
					<img class="theImg default-logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/defaultLogo.png" style="max-width:100px;" />
				<?php
					} 
				?>
				
				
				<?php 

					// wf_show_widget('widge-1');
				
				?>
				
				<?php
				if ( is_active_sidebar( 'global-header-left' ) ) {
					?>
					<div class="widget-area widget-area-global-header gh-widget-left">
						<?php dynamic_sidebar( 'global-header-left' ); ?>
					</div>
					<?php
				}?>
			</div>

			<div class="gh-item gh-item-2 gh-middle-container">
				<?php if(has_nav_menu('top')): ?>
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				<?php endif; ?>
				<strong class="tagline"> 
					<?php 
						if (strtolower(wp_get_theme()) == "wireframe" || get_bloginfo('description','display')=="Just another WordPress site")
							echo "Your Company Tagline Here";
						else
							echo get_bloginfo( 'description', 'display' ); 
					?>
				</strong>
			</div> <!--tagline-container-->
			
			<div class="gh-item gh-item-3 social-media-icon-container gh-widget-right">
				<?php if(!is_active_sidebar('global-header-right')): ?>
						<img class="default-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-facebook-icon.png" />
						<img class="default-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-twitter-icon.png" />
				<?php else: dynamic_sidebar( 'global-header-right' ); endif; ?>
			</div>
			
		</div><!-- end global-header-->