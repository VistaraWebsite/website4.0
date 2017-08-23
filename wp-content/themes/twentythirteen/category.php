<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php
$cat_id = get_query_var('cat');
?>
<?php //echo do_shortcode("[FeaturedImagesCat taxonomy='category' columns='3' showCatName='true' showCatDesc='true'] "); ?>
<?php get_header(); ?>				
<section class="section">
<div class="container static-content">
		<?php if ( have_posts() ) : ?>			
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
</div>		
	</section>	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>