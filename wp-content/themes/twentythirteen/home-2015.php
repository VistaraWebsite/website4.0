<?php
/**
* Template Name: 06-2015 Home Page
*/
get_header();
the_post(); ?>
<!-- <div class="notification-bar">
		<input id="hide" type="radio" name="bar" value="hide">
		<input id="show" type="radio" name="bar" value="show" checked="checked">
		
		<label for="hide">hide</label>
		<label for="show">show</label>
		
        <div class="notification-text">[Blog Post] How Secure Is Your SaaS Platform For IT Operations? <a class="ghost-button" href="http://hubs.ly/H04Z2C40">Read Now</a></div>
	</div>-->
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>

            
		</article>
		<section id="subscribe-wrapper" class="section-white">
    		<div class="container">
        		<div class="row">
        			<div class="text-center">
            			<h3>Get our regular updates and news</h3>
            			<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="https://info.vistarait.com/subscription-form-new"></iframe>
        			</div>
    			</div>
			</div>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>