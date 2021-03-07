<?php /*
================================================================================
Site Banner Template
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

--------------------------------------------------------------------------------
*/

?><!-- assets/includes/site_banner.php -->

<div id="site_banner" class="clearfix">

	<div id="site_banner_inner">

		<?php $network_black = locate_template( 'assets/includes/network.php' ); ?>
		<?php if ( $network_black ) : ?>
			<?php load_template( $network_black ); ?>
		<?php endif; ?>

		<div id="splash">

			<a href="/2010/files/2009/11/ak_children_with_ball_640.jpg"><img src="/2010/files/2009/11/ak_children_with_ball_640.jpg" alt="Children with an Alive &amp; Kicking ball" title="Children with an Alive &amp; Kicking ball" width="200" height="150" class="size-medium wp-image-52" /></a>

		</div><!-- /splash -->

		<div id="banner_copy">

			<h2>Welcome to <?php bloginfo( 'title' ); if ( is_home() ) { echo ' blog'; } ?></h2>

			<p><em>"An African ball made for the poorest African communities &mdash; the very embodiment of development through football in Africa"</em><br />
			&mdash; James Flecker of Alive &amp; Kicking</p>

			<?php if ( ! is_home() ) { ?>
				<p id="gotoblog"><a href="/2010/blog/">Read the blog &rarr;</a></p>
			<?php } ?>

		</div><!-- /banner_copy -->

	</div><!-- /site_banner_inner -->

</div><!-- /site_banner -->



<div id="cols" class="clearfix">
<div class="cols_inner">

	<?php $page_list = locate_template( 'assets/includes/page_list.php' ); ?>
	<?php if ( $page_list ) : ?>
		<?php load_template( $page_list ); ?>
	<?php endif; ?>



