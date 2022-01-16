<?php
/**
 * Displays the header widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'widget-1' ) ) : ?>

	<div class="widget-area">
		<?php dynamic_sidebar( 'widget-1' ); ?>
	</div><!-- .widget-area -->

<?php endif; ?>
