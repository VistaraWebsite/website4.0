<?php
/*
Template Name: NoMenu

/**
* @package WordPress
* @subpackage Camouflet Theme
*/

?>
<?php //get_headernew(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?> - <?php bloginfo('description'); ?></title>	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('url'); ?>/category/blog/feed/" />	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	<?php wp_head(); ?>
<link rel="shortcut icon" href="http://www.vistarait.com/wp-content/uploads/logo.ico" type="image/vnd.microsoft.icon"/>
<link rel="icon" href="http://www.vistarait.com/wp-content/uploads/logo.ico" type="image/x-ico"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-35416591-1']);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();
</script>
<style>
body.logged-in,body{margin:0 !important}
#content a {
    color: #00A5DA;
    text-decoration: none;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body <? body_class(); ?>>
	<div id="outer">
		<div id="wrapper">
			<div style="">
				<div id="header" class="container">
					<h1 id="logo">
						<a href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen/images/logo.png" alt="Vistara IT" class="img-responsive"></a></h1>
					</div>
					<div style="clear:both;">
					</div>
					<?php //uberMenu_easyIntegrate(); ?>
				</div><!-- /header --></div>	<div style="clear:both;">	</div>	<div style="background-image:url('http://www.vistarait.com/wp-content/uploads/line-abow.png'); background-color:#fff; background-position:top; background-repeat: repeat-x;">	<div id="content" style="padding-top:10px;">	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<?php if ( has_post_thumbnail() ) { ?>
					<div style="position:absolute; top:0; right:0;">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php } ?>
					<div class="post widecontent">
						<?php if (0) { ?>
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<?php } ?>
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						<div class="container"><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></div>
					</div><!-- /post -->
				<?php endwhile; endif; ?>
				<div class="clear"></div>
				</div><!-- /content -->
			</div>
		</div>
