<?php
/**
* The template for displaying the footer
*
* Contains footer content and the closing of the #main and #page div elements.
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/
?>
</div><!--#main-wraper-->		
<footer class="site-footer" role="contentinfo">
   <?php //get_sidebar( 'main' ); ?>
   <div class="container">
	<div class="row">
	    <div class="col-sm-3">
		<h4>Product</h4>
		<ul>
		<li><a href="<?php echo get_site_url(); ?>/product/vistara-lifecycle-management/">Vistara Lifecycle Management</a></li>
		<li><a href="<?php echo get_site_url(); ?>/product/technology/">Technology</a></li>
                <li><a href="<?php echo get_site_url(); ?>/product/technology/integrations/">Integrations</a></li>
                <li><a href="<?php echo get_site_url(); ?>/product/technology/managedresources/">Managed Resources</a></li>
                <li><a href="http://status.vistara.io/">Vistara Status</a></li>
		</ul>
	     </div>
	     <div class="col-sm-3">
		<h4>Solutions</h4>
		<ul>
		    <li><a href="<?php echo get_site_url(); ?>/solutions/cloud/">Hybrid Cloud Management</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/solutions/devops-enablement/">DevOps Enablement</a></li>				
                    <li><a href="<?php echo get_site_url(); ?>/solutions/managed-service-providers/">Managed Service Providers</a></li></ul>
	      </div>
	      <div class="col-sm-3">
		<h4>Company</h4>
		  <ul>
			<li><a href="<?php echo get_site_url(); ?>/company/about-vistara/">About Vistara</a></li>
			<li><a href="<?php echo get_site_url(); ?>/company/customers/">Customers</a></li>
			<li><a href="<?php echo get_site_url(); ?>/company/partners/">Partners</a></li>
			<li><a href="<?php echo get_site_url(); ?>/company/news/">News</a></li>
			<li><a href="<?php echo get_site_url(); ?>/company/resources/">Resources</a></li>
                  </ul>
		</div>
		<div class="col-sm-3" id="contact-section">
		    <h4>Questions?&nbsp;call us at:</h4>
			<p><strong>1-855-847-8272</strong></p>
			<p><a href="http://info.vistarait.com/vistara-contact-us" class="btnb">Contact&nbsp;Us</a></p>
			<h4>Follow us</h4>				
			  <div class="social-links">
			    <ul class="list-inline footer-social">
			   <li><a target="_blank" href="http://www.linkedin.com/company/vistara" class="icon-white linkedin"></a></li>
	                   <li><a target="_blank" href="https://twitter.com/VistaraIT" class="icon-white twitter"></a></li>
			   <li><a target="_blank" href="https://www.facebook.com/VistaraIT" class="icon-white facebook"></a></li></ul>
				</div>													
			</div>
		</div>
		<div class="row text-center" >
			<div class="col-sm-12">
				<p class="text-center">&copy; 2017 VistaraIT, Inc. All rights reserved. <a href="http://info.vistarait.com/vistara-contact-us">Contact</a>&nbsp;|&nbsp;<a href="<?php echo get_site_url(); ?>/privacy/">Privacy</a>&nbsp;|&nbsp;<a href="http://www.vistarait.com/accessibility">Accessibility</a>&nbsp;|&nbsp;<a href="<?php echo get_site_url(); ?>/terms-of-use/">Terms of Use</a></p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<div class="modal" tabindex="-1" id="sliderVideoModal">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">			
			<div class="modal-content">
				<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">
			        	<img src="http://www.vistarait.com/wp-content/uploads/closeBtn1.png">
			        </button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php bloginfo('url'); ?>/wp-content/uploads/jquery.backstretch.min_.js"></script>
    <!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.smartmenus.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
<script type="text/javascript">
    jQuery("#cloud-service-providers-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/CloudServiceProviders.jpg");
    jQuery("#about-vistara .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/About-vistara.jpg");
    jQuery("#howitworks-vistara .page-bannerbig").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/Abstract_demo_1300x480.jpg");
    jQuery("#career-pageb .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/Career-page.jpg");
    jQuery("#technology-pageb .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/technlogy-banner.jpg");
 jQuery("#newrelic-pageb .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/newrelic_banner.jpg");
    jQuery("#news-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/news-banner.jpg");
    jQuery("#unified-it-operations-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/unified-operations.jpg");
jQuery("#vistara-lcm-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/vistara-lcm-banner.jpg");
jQuery("#discovery-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/discovery-banner.jpg");
jQuery("#availability-performance-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/availability_performance_banner.jpg");
jQuery("#infographic-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/infographics-banner.jpg");
jQuery("#infographic-banner-cloud .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/infographics-banner-cloud.jpg");
jQuery("#infographic-banner-outage .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/infographics-banner-outage.jpg");
jQuery("#infographic-banner-plain .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/infographics-banner-plain.jpg");
jQuery("#infographic-banner-road .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/infographics-banner-road.jpg");
jQuery("#infographic-banner-opstrends .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/infographics-banner-opstrends.jpg");
    jQuery("#casestudy-netskope-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/casestudy-netskope.jpg");
    jQuery("#casestudy-promedia-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/casestudy-promedia.jpg");
    jQuery("#casestudy-datacorp-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/casestudy-datacorp.jpg");
    jQuery("#enterprises-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/solutions.jpg");
    jQuery("#customers-page-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/customer-banner.jpg");
jQuery("#careers-page-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/careers-banner.jpg");
jQuery("#partner-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/ManagedServiceProviders.jpg");
jQuery("#managed-service-providers-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/msp-banner.jpg");
    jQuery("#converged-infrastructure-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/Converged-Infrastructure.jpg");
    jQuery("#cloud-management-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/cloud-management.jpg");
    jQuery("#devops-enablement-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/DevOps-Enablement.jpg");
    jQuery("#modern-it-banner .page-banner").backstretch("<?php bloginfo('url'); ?>/wp-content/uploads/2014/03/modern-IT.jpg");                  
    //CARETTECH
	//Home page Slider Video Modal      
  	jQuery( ".sliderModal" ).click(function(e) {
  		e.preventDefault();
		var videoLink = '<iframe id="popup-youtube-player" width="854" height="479" src="'+jQuery(this).attr('rel')+'" frameborder="0" allowfullscreen></iframe>';
		jQuery('#sliderVideoModal .modal-body').html(videoLink);
		jQuery('#sliderVideoModal').modal('show');
		//Stop the slider
		jQuery('.rev_slider').revpause();
	});
	jQuery('body').on('click', '#sliderVideoModal .close', function(e) {
		jQuery('#sliderVideoModal').modal('hide');		
		//Stop video when model close
		var iframe = jQuery('#popup-youtube-player');
		var src = iframe.attr('src');
		iframe.attr('src', '');
		iframe.attr('src', src);
		//Restart the slider
		jQuery('.rev_slider').revresume();
	});
	/*Remove old shotcode menu*/
	jQuery(document).ready(function() {
	    jQuery('#inner-spotlight-new').remove();
	});


</script>

<script>
/* AD */
;( function ( document, window, index )
{
	var ad		= document.querySelector( '.ad' ),
		close	= document.querySelector( '.ad__close' );

	if( !ad || !close ) return true;

	close.addEventListener( 'click', function( e )
	{
		e.preventDefault();
		ad.parentNode.removeChild( ad );
	});
}( document, window, 0 ));</script>

<script src="//www.youtube.com/iframe_api"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tabby.js"></script>
<script>window.jQuery || document.write("<script src='<?php echo get_template_directory_uri(); ?>/careerres/js/jquery.min.js'>\x3C/script>")</script>

<?php if (is_page( 'unified-it-operations-management' ) || is_page('vistara-lifecycle-management')) {?>
	<script type="text/javascript">
		jQuery('#o-m-l-wheel .omlmappingItem').mouseover(function() {
			jQuery('.ajax-loader').css('display', 'block');
		    jQuery('#o-m-l-wheel .o-m-l-w-img').css('background-position', '0px '+jQuery(this).attr('rel')+'px');
		    var htmlString = jQuery(jQuery(this).attr('data-text')).html();
  			jQuery('#o-m-l-wheel .o-m-l-w-content').html( htmlString );
		    jQuery('.ajax-loader').css('display', 'none');
		}).mouseout(function(){
		    jQuery('#o-m-l-wheel .o-m-l-w-img').css('background-position', '0 0');
		});
	</script>
<?php }?>
<?php wp_footer(); ?>
<!-- Google Code for Remarketing Tag -->
<div style="display:none;">
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 989964314;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/989964314/?value=0&amp;guid=ON&amp;script=0"/>

</noscript></div>
<!-- Google Code for Remarketing Tag -->
</body>
</html>