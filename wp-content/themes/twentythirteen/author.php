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
/*background-color:#e0e0e0;*/
margin: 0 0 30px;
border-bottom: 1px solid #ccc;
padding: 0 0 30px 0;
display:inline-block;
}
h2 a {

font-size:18px;
color: #045E2D;
}
a.btn {
color: #fff;
margin-left:0;
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
.bioimg{padding-top:15px;}
.static-content ul li{
	margin: 0;
	text-align: left;
}
 .static-content ul li:before{/*content:"»";*/}
.author-wrap{
margin: 5px 0 2.5em 18px;
padding: 0 1em 1.5em 1em;
background-color: #f6f6f6;
border: 1px solid #ddd;
border-top-width: 0;
border-top: 5px solid #ccc \9;
-webkit-box-shadow: #ccc 0px -5px 0px;
-moz-box-shadow: #ccc 0px -5px 0px;
box-shadow: #ccc 0px -5px 0px;
-moz-border-radius-topleft: 0;
-webkit-border-top-left-radius: 0;
border-top-left-radius: 0;
-moz-border-radius-topright: 0;
-webkit-border-top-right-radius: 0;
border-top-right-radius: 0;
-moz-border-radius-bottomleft: 4px;
-webkit-border-bottom-left-radius: 4px;
border-bottom-left-radius: 4px;
-moz-border-radius-bottomright: 4px;
-webkit-border-bottom-right-radius: 4px;
border-bottom-right-radius: 4px;
}
ul.list-inline3{
margin: 0 auto;
text-align: center;
list-style: none outside none;
padding: 0 0 0 0px;
}

ul.list-inline3 li{
display: inline-block; 
padding: 0 10px 0 0px;
}


.widget{
padding-top:10px;
background-color: #f6f6f6;}


#search-2{display:none;}

p {
text-align: left;
}
</style>

<section id="inner-spotlight-new"><div class="container">
   <?php echo do_shortcode('[shortmenu menu="who-we-are" enhance="true" arrow="false"]'); ?></div>
</section>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
				/*
				 * Queue the first post, that way we know what author
				 * we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

			 <!--<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'All posts by %s', 'twentythirteen' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header>--><!-- .archive-header -->

<div class="container static-content" id="post-full-desc">
    <div class="row">
        <h1 class="title">&nbsp;</h1>
           <div class="col-sm-8">
               <div class="row">
			<?php
				/*
				 * Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="blog-article">
                                  <!--  <div class="postmeta post-meta-header" style=""><?php the_time('F j, Y') ?></div> -->
                                     <?php if ( has_post_thumbnail() ) { ?>
                                       <div style="min-height:150px">
                                          <div class="col-sm-8">
	                                     <h2><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>		     
                                             <p class="class="meta-info""><?php the_time('F j, Y') ?></p>
	                                     <?php  $metadesc = wpseo_get_value( 'metadesc' ); ?>
	                                     <?php $customLength=50; if($metadesc){ echo $metadesc; }else{  echo get_the_excerpt(); } $customLength=0; ?><br/> 
	                                     <a style="margin-top:10px;" class="btn" <a href="<?php echo get_permalink($post->ID); ?>">Read More</a>
                                         </div>
                                         <div class="col-sm-4 text-right" id="post-thumb-box">
	                                    <a href="<?php echo get_permalink($post->ID); ?>">
		                                   <?php the_post_thumbnail(); ?>
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

                         </div>
                         <?php endwhile; ?>
                         <?php twentythirteen_paging_nav(); ?>

		         <?php else : ?>
			       <?php get_template_part( 'content', 'none' ); ?>
		          <?php endif; ?>
                         </div>
                     </div> 
                     <div class="col-sm-4">
                        
<div class="author-wrap">
<img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_firstname(); ?>.png" alt="" class="bioimg aligncenter"/>
<h2 style="text-align: center; color: #045E2D;"><?php printf(  __( ' %s', 'twentythirteen' ), the_author_posts_link() ); ?></h2>
		<p style="text-align: center;" ><?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"></a>
		</p>
<hr>
<div><ul class="list-inline3">
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
</div>
<div class="author-wrap">
  <div class="customwidget"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
</div>


                     </div>
                </div>
               
		</div><!-- #content -->

	</div><!-- #primary -->

</div>

<section id="subscribe-wrapper" class="section-colored tube40y">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Get our regular updates and news</h3>					
					<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="http://info.vistarait.com/subscription-form-new"></iframe>
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