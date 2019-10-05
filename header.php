<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Prompt&display=swap" rel="stylesheet" />
<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wireframe' ); ?></a>
		

		<div id="global-header" style="background-color:<?php echo confget('background-color'); ?>;" class="flex-container global-header" ><!--global-header-->

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
					<div class="widget-column widget-area widget-area-global-header gh-widget-left">
						<?php dynamic_sidebar( 'global-header-left' ); ?>
					</div>
					<?php
				}?>
			</div>

			
			
			<div class="gh-middle-container gh-item gh-item-2">
				<?php if (false&&has_nav_menu( 'top' ) ) : ?>
					<div class="navigation-top gh-top-nav">
						<div  id="cssmenu" class="wrap">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div><!-- .wrap -->
					</div><!-- .navigation-top -->
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
			
			<div class="social-media-icon-container sidebar-2 gh-item gh-item-3 gh-widget-right">
				<?php if(!is_active_sidebar('global-header-right')): ?>
						<img class="default-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-facebook-icon.png" />
						<img class="default-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-twitter-icon.png" />
				<?php else: dynamic_sidebar( 'global-header-right' ); endif; ?>
			</div>
			
		</div><!-- end global-header-->







		<header id="masthead" class="site-header" role="banner">
			
			<?php if(strtolower(wp_get_theme()) != "wireframe"): ?>
				<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
			<?php endif; ?>
		
			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top banner-top-nav">
					<div  id="cssmenu" class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>




			<!--BANNER WIDGET AREAS--> 
			<!--Left Banner Widget Area -->
			<?php if(is_active_sidebar('sidebar-3')): ?>
				<div class="widget-column banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
			<?php endif; ?>

			<!--Center Banner Widget Area -->
			<?php if(is_active_sidebar('sidebar-4')): ?>
				<div class="widget-column banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div>
			<?php endif; ?>
		
		
			<!--Right Banner Widget Area -->
			<?php if(is_active_sidebar('sidebar-5')): ?>
				<div class="widget-column banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
			<?php endif; ?>
		
		
			<div class="banner-tagline-container">
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

		
		
		<!--If a regular post or page, and not the front page, show the featured image.
		Using get_queried_object_id() here since the $post global may not be set before a call to the_post().-->
		<?php
		if ( ( is_single() || ( is_page() && ! wireframe_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
			echo '<div class="single-featured-image-header">';
			echo get_the_post_thumbnail( get_queried_object_id(), 'wireframe-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		endif;
		?>

		<div class="site-content-contain" style="background-color:<?php echo confget('background-color'); ?>;color:<?php confget('color'); ?>;">
			<div id="content" class="site-content">
