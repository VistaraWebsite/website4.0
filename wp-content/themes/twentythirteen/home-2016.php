<?php
/**
* Template Name: 05-2016 Home Page
*/
get_header();
the_post(); ?>
<div class="notification-bar">
		<input id="hide" type="radio" name="bar" value="hide">
		<input id="show" type="radio" name="bar" value="show" checked="checked">
		
		<label for="hide">hide</label>
		<label for="show">show</label>
		
        <div class="notification-text">Site Reliability Engineering Helps Google Conquer The World [Blog Post]<a class="ghost-button" href="http://blog.vistarait.com/site-reliability-engineering-helps-google-conquer-the-world">Read Now</a></div>
	</div>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>

            
		</article>
		<section id="subscribe-wrapper" class="section-colored">
    		<div class="container">
        		<div class="row">
        			<div class="text-center">
            			<h3>Get our regular updates and news</h3>
            			<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="http://info.vistarait.com/subscription-form-new"></iframe>
        			</div>
    			</div>
			</div>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>