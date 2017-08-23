<?php
/**
* Template Name: Home-082016
*/
get_header();
the_post(); ?>
<div class="notification-bar">
		<input id="hide" type="radio" name="bar" value="hide">
		<input id="show" type="radio" name="bar" value="show" checked="checked">
		
		<label for="hide">hide</label>
		<label for="show">show</label>
		
        <div class="notification-text">[Infographic] The Cost of IT Outages <a class="ghost-button" href="http://hubs.ly/H03tJqQ0">Read Now</a></div>
	</div>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>

            
		</article>
		
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>