<?php
/*
Template Name: About Vistara
*/
get_header();?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>				
			</article><!-- #post -->
		<?php endwhile; ?>
                
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
