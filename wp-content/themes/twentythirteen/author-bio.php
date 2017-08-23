<?php
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_firstname(); ?>.png" alt="" class="bioimg alignleft"/>
	</div> <!-- .author-avatar -->
	<div class="author-description">
		<h2 class="author-title">Written by <?php the_author_posts_link(); ?></h2>
		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                         <!-- <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ), get_the_author() ); ?>  --></a>
		</p>
<div class="social-linksauth"><ul class="list-inline"  style="padding: 0 0 0 0px;">
	<?php 
		$twitter_profile = get_the_author_meta( 'twitter_profile' );
		if ( $twitter_profile && $twitter_profile != '' ) {
			echo '<li><a href="' . esc_url($twitter_profile) . '" class="icon twitter"></a></li>';
		}
						
		$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
		if ( $linkedin_profile && $linkedin_profile != '' ) {
		       echo '<li><a href="' . esc_url($linkedin_profile) . '" class="icon linkedin"></a></li>';
		}
	?>
</ul></div>
			
	</div><!-- .author-description -->
</div><!-- .author-info -->