<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>

			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->

	<?php comments_template(); ?>
<?php endwhile; ?>
<section class="section-dark-colored">
	<div class="container">
		<p>Download <a href="">our solution brief on public and private cloud management for quick reference</a>. Contact us and learn more about using 
			Vistara to manage your public, private, and hybrid clouds!</p>
		</div>
	</section>
	<section id="subscribe-wrapper" class="section">
		<div class="container container-subscribe">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Get Our regular updates and news</h1>
					<form role="form" class="form-inline">
						<div class="form-group">        
							<input type="" placeholder="First Name" id="" class="form-control">
						</div>
						<div class="form-group">        
							<input type="" placeholder="Last Name" id="" class="form-control">
						</div>
						<div class="form-group">        
							<input type="" placeholder="Job Title" id="" class="form-control">
						</div>
						<div class="form-group">        
							<input type="" placeholder="Company" id="" class="form-control">
						</div>
						<div class="form-group">        
							<input type="" placeholder="Phone Number" id="" class="form-control">
						</div>
						<div class="form-group">        
							<input type="" placeholder="Email" id="" class="form-control">
						</div>      
						<button class="btn btn-default" type="submit">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>