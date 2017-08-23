<?php
/**
*  Template Name: modern It Operations template
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
<section id="inner-spotlight" class="section">
	<div role="navigation" class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>          
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">				
					  <?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'menu_class' => 'nav-menu' ) ); ?>	
				</ul>
			</li>
		</ul>
	</div><!--/.nav-collapse -->
</div>
</div>	
</section>
<?php echo get_the_post_thumbnail( 90, 1300); ?> 
<section class="section">
	<div class="container">
		<p class="text-right"><?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>	</p>
	<ul class="list-inline breadcrum">
		<li><a href="<?php echo get_site_url() ?>/modern-it-operations">What We Do</a></li>
		<li>/</li>
		<li><a href="<?php echo get_site_url() ?>/modern-it-operations">Modern IT Operations</a></li>
	</ul>
	</div>
</section>
<section>
	<?php if ( have_posts() ) : ?>			
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>