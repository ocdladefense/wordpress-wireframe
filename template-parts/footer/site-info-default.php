<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php if(function_exists( 'the_privacy_policy_link' ) ):
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	endif; ?>
	
	<?php echo confget('site-info.website'); ?><br />
	
	<a href="<?php echo esc_url( __( confget('site-info.website'), 'wireframe' ) ); ?>" class="imprint">
		<?php printf( __( confget('site-name.org-name'),'wireframe','WordPress')); ?>
	</a>
	
	
		
			<?php print confget('site-info.address'); ?>

	<br />
		
	
	<a href="mailto:<?php print confget('site-info.email');?>">
		<?php echo confget('site-info.email'); ?>
	</a>	

	<br />
		<?php echo confget('site-info.phone'); ?>
</div><!-- .site-info -->
