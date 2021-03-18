<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpy
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="welcome-card">
				<div class="card-left">
					<img src="<?php echo IMAGES; ?>commenting-o.png" alt="Hey there!">
				</div>
				<div class="card-right entry-content">
					<h2><?php _e('Hello!'); ?></h2>
					<p>If you're seeing this, then congratulations - you've managed to get the theme up and running correctly!</p>
					<p>We'd be very grateful if you could complete this page so that is matches the design, which you can view here:</p>
					<p><a href="https://www.dropbox.com/sh/jhim5591ukecz85/AACsVCtcbUis4mj0WiEiSYRfa?dl=0">Dropbox</a></p>
					<p>There are some parts that require knowledge of WordPress so if you have no experience of WP then feel free to skip that and hard-code it instead.</p>
					<p><strong>If you have any questions then please email me at <a href="mailto:phil@happykite.co.uk">phil@happykite.co.uk</a></strong></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
