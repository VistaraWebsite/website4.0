<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
                <header class="page-header">
			<div class="container"><h1 class="section tube20y page-title"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h1></div>
		</header>
<section class="section">
    <div class="container">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
                
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php twentythirteen_paging_nav(); ?>
		</div></section>
                <?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</section>
<section id="subscribe-wrapper" <?php echo $style; ?> class="section-colored">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h3>Get our regular updates and news</h3>
						<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="http://info.vistarait.com/subscription-form-new"></iframe>					
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>