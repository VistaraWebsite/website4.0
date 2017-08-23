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

<style>
.blog-article {
background-repeat: no-repeat;
background-position: right top;
background-color:#e0e0e0;
margin: 0 0 20px 0;
display:inline-block;
}
h2 a {

font-size:18px;
}
h2 {padding-bottom:15px;}
.post-meta-header {
color: #FFFFFF;
font-size: 14px;
padding: 10px 0 10px 10px;
text-transform: capitalize;

background:#626262;
font-family: Helvetica,Arial,sans-serif;
}
.static-content ul li{
	margin: 0;
	text-align: left;
}
 .static-content ul li:before{content:"»";}
</style>
<section id="inner-spotlight-new"><div class="container"><?php echo do_shortcode('[shortmenu menu="who-we-are" enhance="true" arrow="false"]'); ?></div></section>
<div class="container static-content">	
<div class="row">
<h1 class="title">Vistara IT Operations Management Blog</h1>
<div class="col-sm-8">
<div class="row">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="blog-article">
<div class="postmeta post-meta-header" style=""><?php the_time('F j, Y') ?></div>
<?php if ( has_post_thumbnail() ) { ?>
<div style="min-height:150px">
<div class="col-sm-8">
	<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>		
	<?php  $metadesc = wpseo_get_value( 'metadesc' ); ?>
	<?php $customLength=50; if($metadesc){ echo $metadesc; }else{  echo get_the_excerpt(); } $customLength=0; ?> 
	<a style="margin-left:2px;" <a href="<?php echo get_permalink($post->ID); ?>">Read more...</a>
</div>
<div class="col-sm-4 text-right" id="post-thumb-box">
	<a href="<?php echo get_permalink($post->ID); ?>">
		<?php	the_post_thumbnail(); ?>
	</a>	
</div>
</div>
<?php }else{ ?>
<div style="min-height:150px">
<div class="col-sm-12">	
	<?php  $metadesc = wpseo_get_value( 'metadesc' ); ?>
	<?php $customLength=50; if($metadesc){ echo $metadesc; }else{  echo get_the_excerpt(); } $customLength=0; ?> 
	<a style="margin-left:2px;" <a href="<?php echo get_permalink($post->ID); ?>">Read more...</a>
</div>
</div>
<?php } ?> 
<div class="blog-footer col-sm-12">
	<a href="http://www.facebook.com/share.php?u=<?php echo get_permalink($post->ID); ?>&title=<?php print(urlencode(the_title())); ?>" target="_blank" > <span class="social-small small-fb" ></span></a>
<a href="http://twitter.com/home?status=<?php print(urlencode(the_title())); ?>+<?php echo get_permalink($post->ID); ?>" target="_blank"> <span class="social-small small-twitter"></span></a>
<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($post->ID); ?>&title=<?php print(urlencode(the_title())); ?>&source=http://www.vistarait.com" target="_blank"> <span class="social-small small-linkedin"></span></a>
<a href="https://plus.google.com/share?url=<?php echo get_permalink($post->ID); ?>" target="_blank" > <span class="social-small small-google"></span></a>
</div>
</div>
<?php endwhile; ?>
<div class="navigation">
<span class="previous-entries"><?php next_posts_link('Older Entries') ?></span> <span class="next-entries"><?php previous_posts_link('Newer Entries') ?></span>
</div>
<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Please use the menus above or the footer links below to navigate our site.</p>
<?php endif; ?>

</div><!-- /post -->
</div>
<div class="col-sm-4"><?php get_sidebar(); ?></div>
</div>
</div>
<section id="subscribe-wrapper" class="section-colored tube40y">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Get our regular updates and news</h3>					
					<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="https://info.vistarait.com/subscription-form-new"></iframe>
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