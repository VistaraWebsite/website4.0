<?php
/*
Template Name: Unified IT Operations Management
*/
get_header(); ?>
<?php $pID = get_the_ID(); ?>
<div id="primary" class="content-area">
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


		<div class="container">
			<div id="o-m-l-wheel" class="visible-lg  visible-md">
				<div class="row">
					<div class="col-lg-7 col-sm-7">
						<div class="o-m-l-w-img">
							<img class="ajax-loader" src="http://www.vistarait.com/wp-content/uploads/ajax-loader.gif">
							<img src="http://www.vistarait.com/wp-content/uploads/trans480.png" alt="" usemap="#OMLWMap"/>
						
							<map name="OMLWMap" id="OMLWMap">
							    <area class="omlmappingItem" rel="-480" data-text="#monitoring" alt="" title="Monitoring" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/monitoring/" shape="poly" coords="250,1,286,5,313,12,337,21,359,31,374,42,394,55,390,91,355,103,310,76,277,65,251,62,264,30" />

							    <area class="omlmappingItem" rel="-960" data-text="#alertManagement" alt="" title="Alert Management" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/alert-management/" shape="poly" coords="451,236,478,218,470,180,462,153,450,128,436,105,424,89,414,77,406,111,372,120,406,177,412,197,416,223" />

							    <area class="omlmappingItem" rel="-1440" data-text="#serviceManagement" alt="" title="Service Management" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/service-management/" shape="poly" coords="395,384,431,388,448,360,464,325,474,291,478,245,449,260,418,244,402,313,381,348" />

							    <area class="omlmappingItem" rel="-1920" data-text="#troubleshooting" alt="" title="Troubleshooting" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/troubleshooting/" shape="poly" coords="249,452,259,428,265,416,282,412,298,408,315,402,330,394,345,383,357,374,366,365,370,379,375,402,389,405,409,409,397,423,378,438,359,449,337,461,317,468,295,475,270,479" />

							    <area class="omlmappingItem" rel="-2400" data-text="#proactiveMaintenance" alt="" title="Proactive Management" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/proactive-maintenance/" shape="poly" coords="241,479,199,477,167,468,149,462,119,447,95,430,95,415,96,396,116,388,135,382,158,396,180,407,203,413,222,416,242,417,222,450" />
								
								<area class="omlmappingItem" rel="-2880" data-text="#reporting" alt="" title="Reporting" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/reporting/" shape="poly" coords="70,410,49,386,35,362,24,342,14,317,7,289,3,267,13,258,28,245,46,251,65,259,74,299,90,331,104,353,115,365,78,377" />
							    						
							    <area class="omlmappingItem" rel="-3360" data-text="#assetManagement" alt="" title="Asset Management" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/asset-management/" shape="poly" coords="2,236,4,207,10,183,17,158,24,142,33,125,42,108,58,87,82,90,91,91,98,110,104,127,82,165,71,192,66,214,65,236,31,218" />

							    <area class="omlmappingItem" rel="-3840" data-text="#discovery" alt="" title="Discovery" href="<?php echo get_site_url();?>/product/vistara-lifecycle-management/discovery/" shape="poly" coords="78,67,111,77,122,110,156,85,176,76,196,69,224,65,242,31,219,3,173,12,139,24,106,44" />
							    
							</map>

						</div>
					</div>
					<div class="col-lg-5 col-sm-5">	
						<div class="hide">
							<div id="monitoring">
								<a href="http://www.vistarait.com/product/vistara-lifecycle-management/monitoring/"><h4>Monitoring</h4></a>
								<p><?php echo get_post_meta($pID, 'Monitoring Blurb', true);?></p>
							</div>
							<div id="alertManagement">
								<h4>Alert Management</h4>
								<p><?php echo get_post_meta($pID, 'Alert Management Blurb', true);?></p>
							</div>
							<div id="serviceManagement">
								<h4>Service Management</h4>
								<p><?php echo get_post_meta($pID, 'Service Management Blurb', true);?></p>
							</div>
							<div id="troubleshooting">
								<h4>Troubleshooting</h4>
								<p><?php echo get_post_meta($pID, 'Troubleshooting Blurb', true);?></p>
							</div>
							<div id="proactiveMaintenance">
								<h4>Proactive Maintenance</h4>
								<p><?php echo get_post_meta($pID, 'Proactive Maintenance Blurb', true);?></p>
							</div>
							<div id="reporting">
								<h4>Reporting</h4>
								<p><?php echo get_post_meta($pID, 'Reporting Blurb', true);?></p>
							</div>
							<div id="assetManagement">
								<h4>Asset Management</h4>
								<p><?php echo get_post_meta($pID, 'Asset Management Blurb', true);?></p>
							</div>
							<div id="discovery">
								<h4>Discovery</h4>
								<p><?php echo get_post_meta($pID, 'Discovery Blurb', true);?></p>
							</div>
						</div>

						<div class="o-m-l-w-content">
							<h4>Vistara Lifecycle Management</h4>
							<p>View and control your entire IT infrastructure by automating management, optimizing availability, performance and capacity to drive unified IT operations from a single pane of glass</p>
						</div>
					</div>
				</div>
			</div>
<section class="section">
			<div class="row">
<div class="col-sm-5" id="settings-boxsm">
<div class="services-box" id="services-wrapper">
<h2>See How Vistara Works</h2>
<p>Take a tour of Vistara’s IT Ops Lifecycle Management features</p>
<ul>
<li>Manage applications based on any cloud, virtual and physical IT resources</li>
<li>Unify monitoring, alerts, incidents, maintenance, and reports in a single dashboard</li>
<li>Gain control and visibility across your entire hybrid IT infrastructure</li>
</ul>
</div>
</div>
<div class="col-sm-7" id="services-wrapper">
<div class="services-box">

<a rel="//www.youtube.com/embed/Xhd9L5U4GUQ?rel=0" class="sliderModal"
title="Vistara In-Depth Demo"><img class="video-box  img-responsive" src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/demo-player-01.png"  /></a>
<a class="btn btn-large aligncenter" href="http://info.vistarait.com/vistara-contact-us">Request A Demo</a>
</div>
</div>
</div>
		</section>
		</div>

		<?php 
			if ( get_post_meta($post->ID, 'Subscribe section background', true) ){
				$style = 'style:background:'.get_post_meta($post->ID, 'Subscribe section background', true).';';
			}else{
				$style = 'class="section-colored"';
			}
		?>
		
		<section id="subscribe-wrapper" <?php echo $style; ?> style="display:none;">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h3>Get our regular updates and news</h3>
						<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="https://info.vistarait.com/subscription-form-new"></iframe>					
					</div>
				</div>
			</div>
		</section>
		<section class="section-green">
			<div class="container">
				<div class="col-sm-4">
                                     <div class="subscribe-box">
                                          <img class="sub-icon" src="http://www.vistarait.com/wp-content/uploads/Question-icon-80x80.png" alt="questions">
                                          <h3>Questions?</h3>
                                          <p>Speak with a Sales Expert to answer any questions you may have.</p>
                                          <a class="btn btn-large aligncenter" href="tel:1-855-847-8272">1-855-847-8272</a>                                                                                     
                                     </div>
                                </div>
                                <div class="col-sm-4">
                                     <div class="subscribe-box">
                                           <img class="sub-icon" src="http://www.vistarait.com/wp-content/uploads/Schedule-demo-icon-80x80.png" alt="questions">
                                           <h3>Request a Demo</h3>
                                           <p>Request a free demo to see our IT Operations platform in action.</p>
<a class="btn btn-large aligncenter" href="http://info.vistarait.com/vistara-contact-us">Schedule Now</a>                                           

                                     </div></div>
                                <div class="col-sm-4">
                                     <div class="subscribe-box-last">
                                           <img class="sub-icon" src="http://www.vistarait.com/wp-content/uploads/Updates-icon-80x80.png" alt="questions"> 
                                           <h3>Sign Up for News </h3>
                                           <p>Get the latest industry news <br>in your inbox.</p>
                                           <a rel="https://info.vistarait.com/subscription-form-popup" class="sliderModal btn btn-large aligncenter">Subscribe</a>
                                     </div>
                                </div>
			</div>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>