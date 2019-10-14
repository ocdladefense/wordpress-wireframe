		<header id="masthead" class="site-header" style="<?php echo wireframe_get_css("site-header"); ?>;" role="banner">
			
			<?php if(strtolower(wp_get_theme()) != "wireframe"): ?>
				<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
			<?php else: ?>
				<img class="default-header" src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
			<?php endif; ?>
			
			<img class="logo-overlay" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ocdla-logo-white.svg" />
		
			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="widget-area navigation-top banner-top-nav">
					<div  id="cssmenu" class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>




			<!--BANNER WIDGET AREAS--> 
			<!--Left Banner Widget Area -->
			<?php if(is_active_sidebar('sidebar-3')): ?>
				<div class="widget-area banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
			<?php endif; ?>

			<!--Center Banner Widget Area -->
			<?php if(is_active_sidebar('sidebar-4')): ?>
				<div class="widget-area banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div>
			<?php endif; ?>
		
		
			<!--Right Banner Widget Area -->
			<?php if(is_active_sidebar('sidebar-5')): ?>
				<div class="widget-area banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
			<?php endif; ?>
		
		
			<div class="widget-area banner-tagline-container">
				<strong class="tagline"> 
					<?php 
						if (strtolower(wp_get_theme()) == "wireframe" || get_bloginfo('description','display')=="Just another WordPress site")
							echo "Your Company Tagline Here";
						else
							echo get_bloginfo( 'description', 'display' ); 
					?>
				</strong>
			</div> <!--tagline-container-->
		


		</header><!-- #masthead -->