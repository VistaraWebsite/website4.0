<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme and one of the
* two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* For example, it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

get_header(); ?>
<section class="section" id="slider-wrapper">
<!-- <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">     
<div class="carousel-inner">
<div class="item">
<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/banner1.png" alt="" class="img-responsive">				
</div>
<div class="item">
<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/banner1.png" alt="" class="img-responsive">				
</div>
<div class="item active">
<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/banner1.png" alt="" class="img-responsive">				
</div>
</div>     
</div>	 -->
 <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/banner1.png" alt="" class="img-responsive">				
</section>			
<section class="section" id="content-wrapper">
	<div class="container">
		<div class="row text-center">			
			<div class="col-sm-8" id="how-we-help">			
				<h1>How We Help</h1>
				<div id="how-we-help-inner">							
					<?php 
					$posts = get_posts('category=4&numberposts=2&orderby=date&order=ASC');					
					foreach($posts as $post) { ?>
					<div class="col-sm-6">
						<?php the_post_thumbnail( 'frontpage-thumb' ); ?>
						<p class="text-right"><?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>	</p>
						<h2><?php the_title(); ?></h2>
						<?php setup_postdata($post); ?>
							<?php  the_excerpt(); ?>							 
						
						<a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
					</div>
					<?php }					
					?>																								
				</div>
			</div>
			<div class="col-sm-4" id="customers">
				<h1>Trusted by 1000+ Customers</h1>
				<div id="customers-inner">					
					<?php 

					 if( class_exists('Dynamic_Featured_Image') ) {
					     global $dynamic_featured_image;
					     $post = 271;
					     edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' );
					     $featured_images = $dynamic_featured_image->get_featured_images('271');
					     //print_r($featured_images);					     
					     echo '<ul class="list-inline">';					   
					     foreach ($featured_images as $key => $value) {     	
					     	$img_url = $value["thumb"];
					     	echo '<li><a><img src='.$img_url.'></a></li>';
					     }
					     echo '</ul>';
					    //You can now loop through the image to display them as required
					 }

					?>											
				</div>

			</div>

		</div>
	</div>
</section>
<section class="section" id="testimonials-wrapper">
	<div class="container">
		<div class="row">				
			<?php 
			$posts = get_posts('category=5&numberposts=1');					

			foreach($posts as $post) { ?>
			<div class="col-xs-4">
				<?php the_post_thumbnail( 'frontpage-thumb' ); ?>
			</div>
			<div class="col-xs-8" id="testimonials-text">
				<?php setup_postdata($post); the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' );?>
			</div>
			<?php }					
			?>
			</div>
		</div>
	</section>
	<section id="subscribe-wrapper" class="section">
		<div class="container container-subscribe">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Get Our Regular Updates and News</h1>
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
						<button class="btn btn-lagre" type="submit">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section>

	</section>
	<?php //get_sidebar(); ?>
	<?php get_footer(); ?>