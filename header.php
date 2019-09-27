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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wireframe' ); ?></a>
		

		<div id="global-header" class="flex-container global-header" ><!--global-header-->

			<div class="gh-item gh-item-1">
				<!--MAIN NAVIGATION-->
				<?php if ( has_nav_menu( 'main' ) ) : ?>
					<div class="navigation-main">
						<div class="wrap">
							<?php get_template_part( 'template-parts/navigation/navigation', 'main' );?>
						</div><!-- .wrap -->
					</div><!-- .navigation-main -->
				<?php endif; ?>

				<!--CUSTOM LOGO-->
				<?php the_custom_logo()?>
					<img class="theImg default-logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/defaultLogo.png" style="max-width:100px;" />
					
				
				<?php
				if ( is_active_sidebar( 'global-header-left' ) ) {
					?>
					<div class="widget-column widget-area widget-area-global-header gh-widget-left">
						<?php dynamic_sidebar( 'global-header-left' ); ?>
					</div>
					<?php
				}?>
			</div>
			
			<div class="tagline-container gh-item">
				<strong class="tagline"> 
					<?php 
						if (get_bloginfo( 'description', 'display' ) == "")
							echo "Your Company Tagline Here";
						else
							echo get_bloginfo( 'description', 'display' ); 
					?>
				</strong>
			</div> <!--tagline-container-->
			
			<div class="social-media-icon-container sidebar-2 gh-item gh-item-2 gh-widget-right">
				<?php if(!is_active_sidebar('global-header-right')): ?>
						<img class="default-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-facebook-icon.png" style="height:47px;" />
						<img class="default-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-twitter-icon.png" style="height:47px;" />
				<?php else: dynamic_sidebar( 'global-header-right' ); endif; ?>
			</div>
			
		</div><!-- end global-header-->

		<header id="masthead" class="site-header" role="banner">

		<img class="site-header" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		
			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div  id="cssmenu" class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>

			

			
		</header><!-- #masthead -->

		<!--BANNER WIDGET AREAS--> 
		<!--Left Banner Widget Area -->
		<?php
			if ( is_active_sidebar( 'sidebar-3' ) ) {?>
				<div class="widget-column banner-widget-area-left">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
			<?php
				}
			?>

		<!--Center Banner Widget Area -->
		<?php
			if ( is_active_sidebar( 'sidebar-4' ) ) {?>
				<div class="widget-column banner-widget-area-center">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div>
			<?php
				}
			?>
		<!--Right Banner Widget Area -->
		<?php
			if ( is_active_sidebar( 'sidebar-5' ) ) {?>
				<div class="widget-column banner-widget-area-right">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
			<?php
				}
			?>
		
		<!--If a regular post or page, and not the front page, show the featured image.
		Using get_queried_object_id() here since the $post global may not be set before a call to the_post().-->
		<?php
		if ( ( is_single() || ( is_page() && ! wireframe_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
			echo '<div class="single-featured-image-header">';
			echo get_the_post_thumbnail( get_queried_object_id(), 'wireframe-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		endif;
		?>

		<div class="site-content-contain">
			<div id="content" class="site-content">
