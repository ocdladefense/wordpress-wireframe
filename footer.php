<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php if(has_nav_menu( 'social' ) ): ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'wireframe' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . wireframe_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>

				<?php 
					wireframe_get_template_part('template-parts/footer/widgets','left');

					if(!has_nav_menu('site-map'))
						wireframe_get_template_part( 'template-parts/footer/site-info','default' );
					if(has_nav_menu('site-map')):
				?>
					<strong class="site-map-label">Site Map</strong>
				
				<?php wp_nav_menu('site-map'); endif;
					wireframe_get_template_part('template-parts/footer/widgets', 'right');
				?>
			</div><!-- .wrap -->
			
		</footer><!-- #colophon -->
		
	</div><!-- .site-content-contain -->
	
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
