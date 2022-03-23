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
	<?php
		if(function_exists( 'the_privacy_policy_link' ) ):
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		endif;
	?>
	

	<a href="<?php print "https://" . confget('site-info.website'); ?>">
		<?php echo confget('site-info.website'); ?>
	</a>	
	
	
	<br />
	
	<a target="_new" href="https://maps.google.com/?q=<?php print confget('site-info.address'); ?>">
		<?php print confget('site-info.address'); ?>
	</a>

	<br />
		
	
	<a href="mailto:<?php print confget('site-info.email');?>">
		<?php echo confget('site-info.email'); ?>
	</a>	

	<br />

	<a href="tel:<?php print confget('site-info.phone');?>">
		<?php echo confget('site-info.phone'); ?>
	</a>
		
</div><!-- .site-info -->
