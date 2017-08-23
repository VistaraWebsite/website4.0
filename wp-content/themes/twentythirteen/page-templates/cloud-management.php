<?php
/**
*  Template Name: cloud management page template
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
<?php echo get_the_post_thumbnail(93, 1300); ?> 
<section class="section section-white">
	<div class="container">
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		<h5><?php echo category_description(9); ?></h5>
		<div class="floating-nav">
			<ul class="list-inline">
				<li><a class="scroll-link" href="#public-cloud-management">Public Cloud Management</a></li>
				<li><a class="scroll-link" href="#private-cloud-management">Private Cloud Management</a></li>
				<li><a class="scroll-link"  href="#hybrid-cloud-management">Hybrid Cloud Management</a></li>
			</ul>
		</div>
	</div>
</section>


<?php query_posts('cat=9&showposts=30&orderby=date&order=ASC'); ?>

<?php $counter=1;if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<?php $cat	=	get_the_category($post->ID);
	$id	= $cat[0]->cat_ID;		
	$permalink = get_permalink( $post->ID );
	$featured_image = get_the_post_thumbnail();
	?>
	<section class="<?php echo (!($counter % 2)? 'section-white' : 'section-colored'); ?>" id="<?php the_slug();?>">
		<div class="container">		
			<div class="custompost-box">
				<div class="custompost-titlebox">					
					<?php 				
					echo $featured_image;				
					echo "<h1>";
					echo the_title();
					echo "</h1>";
					edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' );
					?>
				</div>		
				<?php 
				echo '<div class="post-content">';
				echo the_content();
				echo '</div>';								
				?>
			</div>
		</div>
	</section>
	<?php $counter++; endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
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
<?php //get_sidebar(); ?>
<!----<script type="text/javascript">
$('.scroll-link').click(function(e){
	 e.preventDefault();
	id = $(this).attr('href');	
	$("html,body").animate({scrollTop:$(id).position().top}, 600);
});
<?php get_footer(); ?>