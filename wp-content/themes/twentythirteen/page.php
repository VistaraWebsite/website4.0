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
<?php 
if (is_page( 'about-vistara' )) {
	?>
	<div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>				
			</article><!-- #post -->
		<?php endwhile; ?>

		<section id="contactInAbout" class="section-white">
			<div class="container">
				<div class="row">					
					<div class="col-sm-4">
						<h2>Contact Us</h2>
						<address>
							<?php 
								if(get_post_meta($post->ID, 'Visit us', true)){ 
									?>
									<div class="clearfix">
				                        <img src="<?php echo get_template_directory_uri();?>/images/map.png">
				                        <div class="overflow-h">
				                            <?php echo get_post_meta($post->ID, 'Visit us', true);?>
				                        </div>
				                    </div>
									<?php
								}
								if(get_post_meta($post->ID, 'Call us', true)){ 
									?>
									<div class="clearfix">
				                        <img src="<?php echo get_template_directory_uri();?>/images/phone.png">
				                        <div class="overflow-h">
				                            <?php echo get_post_meta($post->ID, 'Call us', true);?>
				                        </div>
				                    </div>
									<?php
								}
								if(get_post_meta($post->ID, 'Email us', true)){ 
									?>
									<div class="clearfix">
				                        <img src="<?php echo get_template_directory_uri();?>/images/mail.png">
				                        <div class="overflow-h">
				                        	<a href="mailto:<?php echo get_post_meta($post->ID, 'Email us', true);?>?Subject=Contact" target="_top"><?php echo get_post_meta($post->ID, 'Email us', true);?></a>
				                            
				                        </div>
				                    </div>
									<?php
								}
							?>
						</address>
					</div>
					<div class="col-sm-8">
						<?php 
							if(get_post_meta($post->ID, 'Address map', true)){ 
								echo get_post_meta($post->ID, 'Address map', true);
							}
						?>						
					</div>
				</div>
			</div>
		</section>

		<section id="subscribe-wrapper" class="section-colored">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h3>Get our regular updates and news</h3>
						<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="https://info.vistarait.com/subscription-form-new"></iframe>
					</div>
				</div>
			</div>
		</section>
	</div><!-- #content -->
	<?php
}else{
	?>
	<div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php //the_content(); ?>
				<?php 
					$content = apply_filters( 'the_content', get_the_content() );
					echo $content = str_replace( ']]>', ']]&gt;', $content );
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</article><!-- #post -->
		<?php endwhile; ?>
		<?php 
			if ( get_post_meta($post->ID, 'Subscribe section background', true) ){
				$style = 'style:background:'.get_post_meta($post->ID, 'Subscribe section background', true).';';
			}else{
				$style = 'class="section-colored"';
			}
		?>
		<section id="subscribe-wrapper" <?php echo $style; ?>>
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h3>Get our regular updates and news</h3>
						<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="https://info.vistarait.com/subscription-form-new"></iframe>					
					</div>
				</div>
			</div>
		</section>
	</div><!-- #content -->
<?php //get_sidebar(); ?>
<?php } ?>
</div><!-- #primary -->
<?php get_footer(); ?>