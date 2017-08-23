<?php
/**
* The Header template for our theme
*
* Displays all of the <head> section and everything up till <div id="main">
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php echo get_site_url(); ?>/favicon.ico" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<!-- Bootstrap core CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/caretstyle.css" rel="stylesheet">

<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/easyResponsiveTabs.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/gartner-assets/js/modernizr.custom.js"></script>
		<link href="<?php echo get_template_directory_uri(); ?>/gartner-assets/css/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/gartner-assets/css/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/gartner-assets/css/animate.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/gartner-assets/js/waypoints.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/gartner-assets/js/min/scripts-min.js"></script>
<!-- Hotjar Tracking Code for www.vistarait.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:102505,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
	$ = jQuery.noConflict();
	jQuery('#blog-hash article a[href^="#"]').click(function() {	 	  
		var target = jQuery(this.hash);
		if (target.length == 0) target = jQuery('a[name="' + this.hash.substr(1) + '"]');	      
		jQuery('html, body').animate({ scrollTop: target.offset().top-(mainnav_h+blacknav_h+wpadminbar)}, 500);
		return false;
	});
	jQuery('.carousel').carousel({
		interval: 12000
	});
	jQuery('ol.carousel-indicators li').on('click', function(){
		jQuery('.carousel').carousel('pause');
	});
	jQuery('#mobile_nav ul.sub-menu').hide();
	jQuery(window).resize();
	jQuery('a.scroll-link').click(function(e){
		e.preventDefault();
		id = jQuery(this).attr('href');

		temph = jQuery('.navbar-fixed-top').height();
		scrollpos = jQuery(id).position().top-(temph+affixnav_h+blacknav_h+wpadminbar);

		jQuery("html,body").animate({scrollTop:scrollpos}, 600);

	})
	hideFilters();
	jQuery("#slider-nav-box").hide();
	jQuery("#slider-nav-box").addClass('open');
	jQuery('#mobile_nav ul.sub-menu').hide()
	jQuery("#menu-mobile .bt-menu").click(function() {
		if (jQuery("#menu-mobile").hasClass('open')) {
			jQuery("#menu-mobile").removeClass('open');
		} else {
			jQuery("#menu-mobile").addClass('open');
		}
	});

	jQuery('#menu-mobile .menu-item-has-children').on('click', function() {
		//jQuery('#mobile_nav .sub-menu').slideUp(); 
		jQuery(this).find('a:first').removeAttr("href");
		jQuery(this).find('ul').slideToggle();
		});

	});
	/* Menu Mobile Scroll */

	jQuery(document).ready(ScrollMenuMobile);
	jQuery(window).resize(ScrollMenuMobile);


	function ScrollMenuMobile() {
		jQuery('.wrapper-menu').css('height', jQuery(window).height() + 'px');
	}
	function hideFilters() {
		jQuery('nav.search .sub-menu').removeClass('active');
		jQuery('nav.search, .filters').removeClass('open');
		jQuery('.filters, .filters .filter').hide();
	}

	jQuery(window).scroll(function(event){
		var currentScroll = jQuery(document).scrollTop();

		if(currentScroll > 0) {
			jQuery('#affix-nav.affix').css({'top':shrink_h+blacknav_h+wpadminbar});
			jQuery('body').addClass('scrolled');
		}
		else{
			jQuery('body').removeClass('scrolled');
		}
	});
	var ww,mainnav_h,affixnav_h,blacknav_h,wpadminbar,shrink_h,toplinks_h,affix_offset;
	jQuery(window).resize(function(){
		ww = jQuery( window ).width();
		if(ww<1000){
			blacknav_h = 0;		
		}
		else{
			//blacknav_h = jQuery('#inner-spotlight-new').height();	
		}	
		mainnav_h  = jQuery('.navbar-fixed-top').height();	
		affixnav_h = jQuery('.sticky-nav').height();	
		wpadminbar = jQuery('#wpadminbar').height();
		wpadminbar = (wpadminbar!=null?wpadminbar:0)
		toplinks_h = 0;//jQuery("#toplinks").height();
		shrink_h = mainnav_h - toplinks_h;
		jQuery('body').css({'margin-top':mainnav_h+blacknav_h+wpadminbar});
		//jQuery('#inner-spotlight-new').css({'top':mainnav_h + wpadminbar});
	});

</script>
<?php if($_SERVER[HTTP_HOST] != "coherendz.net"){ ?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-35416591-1']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

	<!-- Start of Async HubSpot Analytics Code -->
	<script type="text/javascript">
		(function(d,s,i,r) {
		if (d.getElementById(i)){return;}
		var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
		n.id=i;n.src='//js.hubspot.com/analytics/'+(Math.ceil(new Date()/r)*r)+'/308166.js';
		e.parentNode.insertBefore(n, e);
		})(document,"script","hs-analytics",300000);
	</script>
	<!-- End of Async HubSpot Analytics Code -->
<?php } ?>
<style type="text/css" media="screen">
	html { margin-top: 0px !important; }	
</style>

</head>
<body <?php body_class(); ?> data-target="#affix-nav" data-spy="scroll"  >
<div id="main-wrapper">
	<header class="section navbar-fixed-top">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 text-right">
					<div id="toplinks">
					<div class="other-links">
						<ul class="list-inline">
							
							<li><a href="https://app.vistarait.com/login.do" target="_blank">Login</a></li>
						</ul>
					</div>
					<div class="social-links">
						<ul class="list-inline">
							
							<li><a target="_blank" href="http://www.linkedin.com/company/vistara" class="icon linkedin"></a></li>
							<li><a target="_blank" href="https://twitter.com/VistaraIT" class="icon twitter"></a></li>
							<li><a target="_blank" href="https://www.facebook.com/VistaraIT" class="icon facebook"></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12" id="header-inner">

					<div role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
							<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" style="width: 180px;" alt="Vistara IT">
							</a>
						</div>
						<div class="navbar-collapse collapse">

						    <div id="primary-nav">
						    	<div id="vistaraTopNav" class="navbar-right">
									<?php 
										wp_nav_menu( array( 
											'theme_location' => 'primary', 
											'menu_class' => 'nav navbar-nav',
											'walker' => new twitter_bootstrap_nav_walker() 
										) ); 
									?>
								</div>							
							</div>

						</div><!--/.nav-collapse -->
					</div>

				</div>
			</div>

		</div>

	</header><!-- #masthead -->