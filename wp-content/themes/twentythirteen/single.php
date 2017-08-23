<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section id="inner-spotlight-new">
	<div class="container">
	<?php echo do_shortcode('[shortmenu menu="who-we-are" enhance="true" arrow="false"]'); ?>
	</div>
</section>

<div class="container static-content" id="post-full-desc">
	<div class="row tube10y">
		<div class="col-sm-8">
			<div id="primary" class="content-area">
				<div id="content" class="site-content blog-content" role="main">

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php //twentythirteen_post_nav(); ?>						

					<?php endwhile; ?>

				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
		<div class="col-sm-4"><?php get_sidebar(); ?></div>
	</div>
	</div>



<div class="author-info"></div>

<section class="section"><div class="container"><div class="row"><div class="col-sm-12"><?php comments_template(); ?></div></div></div></section>
<section id="subscribe-wrapper" class="section-colored tube40y">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Get our regular updates and news</h3>					
					<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="http://info.vistarait.com/subscription-form-new"></iframe>
					<?php /*
					<form role="form" class="form-inline">
						<div class="form-group">
							<input type="text" placeholder="First Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Last Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Company" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Email" class="form-control">
						</div>
						<button class="btn btn-default" type="submit">Subscribe</button>
					</form>
					*/ ?>

					<?php //} /* */ ?>				
			</div>
		</div>
	</section>
<?php get_footer(); ?>