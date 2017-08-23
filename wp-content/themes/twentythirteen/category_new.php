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
<section class="section">
	<div class="container">
		<div class="custom-post-slider">
<?php /*
<?php if ( have_posts() ) : ?>
<header class="archive-header">
<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

<?php if ( category_description() ) : // Show an optional category description ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header><!-- .archive-header -->
<?php //echo do_shortcode("[FeaturedImagesCat taxonomy='category' columns='3']"); ?>
<?php /* The loop */ ?>
<?php /*<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>

<?php twentythirteen_paging_nav(); ?>

<?php else : ?>
<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
*/?>
<?php //if ( category_description() ) :?>
	<div><?php //echo category_description(); ?></div>
	<?php //endif; ?>

	<?php
	$post_cat = get_the_category();
	$post_cat_id = $post_cat[0]->cat_ID;
	$post_cat_name = $post_cat[0]->cat_name;
	?>

	<div data-ride="carousel" class="carousel slide" data-interval="false" id="carousel-example-generic">
		<div class="carousel-inner">
			<?php query_posts('cat='.$post_cat_id.'&showposts=30&orderby=date&order=ASC'); ?>
			<?php  $active = 0; $counter=1;
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<?php $cat	=	get_the_category($post->ID);
			$id	= $cat[0]->cat_ID;
			$title_ids[] = $post->ID;			
			$permalink = get_permalink( $post->ID );
			$featured_image = get_the_post_thumbnail($post->ID,1300);
			?>		
			<div class="item <?php echo (($active==0)? 'active' : ''); ?>" id="<?php echo $counter++; ?>">
				<div class="carousel-text">				
					<?php
					echo '<div class="col-sm-7">'.$featured_image.'</div>';				
					echo '<div class="col-sm-5">';
					echo '<h1 class="title">';
					echo the_title();
					echo '</h1>';
					echo '<div class="post-content">';
					echo the_content();							
					echo '</a></p>';					
					echo '</div>';
					echo '</div>';
					?>
				</div>
				<?php //print_r($title_ids); ?>
			</div>
			<?php $active++; endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.');?></p>
		<?php endif; ?>

	</div>
	<div class="carousel-nav">
		<a class="left-arrow" href="#carousel-example-generic" data-slide="prev"></a>
		<a class="next-arrow" href="#carousel-example-generic" data-slide="next"></a>    
	</div>
</div>


<!-- <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
		<ol class="carousel-indicators">
		      	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		      	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		      	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		      </ol> 
		<div class="carousel-inner">
			<div class="item">
				<div class="carousel-text">
					<div class="row">
						<div class="col-sm-6">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/custom-escalation.png" alt="" class="img-responsive">				
						</div>
						<div class="col-sm-6">
							<div class="carousel-text">
								<p>Define custom rule-based escalation matrixes to ensure the  correct administrator is notified every time.</p>
								<p>Create shifts with rules controlling which administrator(s) are notified for a shift. Shifts can be specified in terms of the days of the week and hours of the day or for a custom date range such as a holiday period.</p>
								<p>Define escalation schedules that vary based on the priority level of the alert. Administrators can define how many times a particular notification should repeat, at what frequency, and across how many shifts until the issue is resolved or the  notification expires.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="carousel-text">
					<div class="row">
						<div class="col-sm-6">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/custom-escalation.png" alt="" class="img-responsive">				
						</div>
						<div class="col-sm-6">
							<div class="carousel-text">
								<p>Define custom rule-based escalation matrixes to ensure the  correct administrator is notified every time.</p>
								<p>Create shifts with rules controlling which administrator(s) are notified for a shift. Shifts can be specified in terms of the days of the week and hours of the day or for a custom date range such as a holiday period.</p>
								<p>Define escalation schedules that vary based on the priority level of the alert. Administrators can define how many times a particular notification should repeat, at what frequency, and across how many shifts until the issue is resolved or the  notification expires.</p>
							</div>
						</div>
					</div>
				</div>
	
			</div>
			<div class="item active">				
				<div class="carousel-text">
					<div class="row">
						<div class="col-sm-6">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/custom-escalation.png" alt="" class="img-responsive">				
						</div>
						<div class="col-sm-6">
							<div class="carousel-text">
								<p>Define custom rule-based escalation matrixes to ensure the  correct administrator is notified every time.</p>
								<p>Create shifts with rules controlling which administrator(s) are notified for a shift. Shifts can be specified in terms of the days of the week and hours of the day or for a custom date range such as a holiday period.</p>
								<p>Define escalation schedules that vary based on the priority level of the alert. Administrators can define how many times a particular notification should repeat, at what frequency, and across how many shifts until the issue is resolved or the  notification expires.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<div class="carousel-nav">
			<a class="left-arrow" href="#carousel-example-generic" data-slide="prev"></a>
			<a class="next-arrow" href="#carousel-example-generic" data-slide="next"></a>    
		</div>
	</div> -->
</div>
</div>
<section>

	<?php //get_sidebar(); ?>
	<?php get_footer(); ?>

	<script type="text/javascript">

	$document.ready(
	{
			//get total length of divs 1, 2, 3, 4, 5.. 10

			// fetch next and previous of current value 
			//if prev = 0, then prev = 10, if next=11, then next =0
			//ftech h2.val of next and prev based on the id

	})
	</script>