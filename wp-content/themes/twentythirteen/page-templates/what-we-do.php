<?php
/*
Template Name: Fullscreen
/**
 * @package WordPress
 * @subpackage Camouflet Theme
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
<?php } ?>
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?> - <?php bloginfo('description'); ?></title>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('url'); ?>/category/blog/feed/" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
<link rel="shortcut icon" href="http://www.vistarait.com/wp-content/uploads/logo.ico" type="image/vnd.microsoft.icon"/>
<link rel="icon" href="http://www.vistarait.com/wp-content/uploads/logo.ico" type="image/x-ico"/>
<style>
html{margin-top:0px !important;}
body{margin:0px; background:#000}
body.logged-in{margin:0}
</style>

</head>
<body <? body_class(); ?>>
<div id="outer">

<div id="wrapper" style="margin: 0px auto ! important; width: 1100px;color:#fff;font-size:20px;text-align:center;line-height:100px;">

<div id="wrapper-page">
	<div id="content">
	<div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
			<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
		</div><!-- /post -->
		<div class="clear"></div>
	</div><!-- /content -->

