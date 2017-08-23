<?php
/*
Template Name: About Company
*/
get_header();?>
<section id="inner-spotlight-new">
<div class="container">[shortmenu menu="who-we-are" enhance="true" arrow="false"]</div>
</section>
<section class="section-white" id="hero-banner">

<div class="container"><div class="row">
<div class="col-sm-12"><h1>Revolutionizing IT Operations for Modern IT</h1>
<!--<a class="ghost-button-rounded-cornerssm alignright" href="http://info.vistarait.com/vistara-contact-us" target="_blank">Request A Demo</a><br>-->
</div>
</div></div>
</section>
<section class="section-white" id="about-boxsm" >
<div class="container">
<br>
<h3>Vistara is disrupting the way the enterprise manages IT operations.</h3>
<div class="row"><div class="col-sm-6"><p>Today, your IT environment is growing in complexity with the shift to cloud and DevOps. Legacy platforms and point tools aren't giving you the visibility or control you need to manage your dynamic and distributed resources from cradle to grave.</p>
<p>Vistara is a proven SaaS platform for IT operations lifecycle management. Vistara provides enterprise IT and service providers the unified command center that they need to manage on-premise infrastructure and dynamic cloud resources and deliver service centric insights to their business.</p>
<p>Vistara will continue to drive innovation to meet these demands for our customers.</p>
</div>

</div></div>
<a class="ghost-button-rounded-corners aligncenter" href="http://www.vistarait.com/product/vistara-lifecycle-management/" target="_blank">Learn more about our solution</a>
</div>
</section>
<section id="aboutus-box" class="section-colored">
<div class="container">
<br><h2 class="aligncenter" style="text-align:center;">Our Leadership Team</h2><br>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<div class="team-block team-member-box"><div class="hover-details aligncenter">
<img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/headshots/raju-chekuri-h.png" alt="Raju Chekuri" width="160" height="160"/><a href="https://www.linkedin.com/pub/raju-chekuri/1/31b/664" target="_blank"><div class="details"></div></a></div><h4 style="text-align:center;">Raju Chekuri</h4><p style="text-align:center;">Chairman</p></div></div>

<div class="col-sm-3"><div class="team-block team-member-box"><div class="hover-details aligncenter"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/headshots/varma.png" alt="Varma Kunaparaju" width="160" height="160"/><a href="https://www.linkedin.com/in/varmak" target="_blank"><div class="details"></div></a>
</div><h4 style="text-align:center;">Varma Kunaparaju</h4><p style="text-align:center;"> Co-founder &amp; CEO</p></div></div>
<div class="col-sm-3"></div>
<div class="clear"></div>
<div class="col-sm-4 team-member-box">
<div class="hover-details aligncenter"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/headshots/ratna.png" alt="Ratna Gudlavalleti" width="160" height="160"/><a href="https://www.linkedin.com/in/ratnagudlavalleti" target="_blank"><div class="details"></div></a>
</div><h4 style="text-align:center;">Ratna Gudlavalleti</h4><p style="text-align:center;"> Senior Director, Engineering</p></div>

<div class="col-sm-4 team-member-box"><div class="hover-details aligncenter"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/headshots/mahesh.png" alt="Mahesh Ramachandran" width="160" height="160"/><a href="https://www.linkedin.com/in/ramachandranm" target="_blank"><div class="details"></div></a>
</div><h4 style="text-align:center;">Mahesh Ramachandran</h4><p style="text-align:center;"> Senior Director, Product Management</p></div>
<div class="col-sm-4 team-member-box"><div class="hover-details aligncenter"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/headshots/denny.png" alt="Denny Riley" width="160" height="160"/><a href="https://www.linkedin.com/in/dennyriley" target="_blank"><div class="details"></div></a>
</div><h4 style="text-align:center;">Denny Riley</h4><p style="text-align:center;"> Vice President, Channels & Partnerships</p></div>
</div>
</div>
</section>

<section class="section-white">
<div class="container">
<h3>&nbsp;</h3>
<div class="row">
<div class="col-sm-4"><h3>Recent Posts</h3>
<div id="recent-post-box"><?php                        
                        $endpoint = 'https://api.hubapi.com/content/api/v2/blog-posts?hapikey=87f1c593-b2d7-467c-a9ce-21622638f4ef&order_by=-created&state=PUBLISHED&limit=3';
                        if(is_callable('curl_init')){
                           //  Initiate curl
                            $ch = curl_init();
                            // Disable SSL verification
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            // Will return the response, if false it print the response
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            // Set the url
                            curl_setopt($ch, CURLOPT_URL,$endpoint);
                            // Execute
                            $result=curl_exec($ch);
                            // Closing
                            curl_close($ch);

                            // Will dump a beauty json :3
                            $jsonObj = json_decode($result, true);
                            //var_dump(json_decode($result, true));
                            if (!empty($jsonObj) && count($jsonObj) > 0) {
                                foreach ($jsonObj as $key => $value) {
                                    if ($key == 'objects') {
                                        foreach ($value as $v) {
                        if ($v['state'] == "PUBLISHED") {
                            echo '<h4><a href="'.$v['url'].'" target="_blank">'.$v['html_title'].'</a></h4>';
                            echo '<p>'.$v['meta_description'].'</p>';
                            echo '<a href="'.$v['url'].'"class="more alignright" target="_blank">+ View more</a>';   
                        }                        
                    } 
                                    }
                                }
                            }
                        }
                        else{
                           //echo "Not enabled";
                        }
                    ?></div>
</div>
<div class="col-sm-4"><h3>Tweets</h3>
<a class="twitter-timeline" href="https://twitter.com/twitterdev"
  data-widget-id="598315060113473536"
  data-chrome="nofooter noheader noborders noscrollbar transparent"
  data-link-color="#045E2D" data-tweet-limit="2">
Tweets by @VistaraIT
</a>
<a href="https://twitter.com/vistarait" target="_blank" class="more alignright">+ View more</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<div class="col-sm-4"><h3>Latest News</h3>
<div class="news-wrapcol">
<div class="news-wrap">
<div><p><span><a href="https://www.vistarait.com/company/news/vistara-awsreinvent/" target="_blank">Vistara to Demonstrate Modern IT Operations Management Platform at AWS re:Invent 2016</a></span></p></div></div>
<hr>
<div class="news-wrap">
<div><p><span><a href="https://www.vistarait.com/company/news/vistara-soc2-type2/" target="_blank">Vistara Prioritizes Data Protection with Successful SOC 2 Type 2 Audit</a></span></p></div></div>
<hr>
<div class="news-wrap">
<div><p><span><a href="http://www.vistarait.com/company/news/vistara-most-promising-aws-solution-providers/" target="_blank">CIOReview Selects Vistara as One of 20 Most Promising AWS Solution Providers in 2015</a></span></p></div></div>
<hr>
<div class="news-wrap">
<div><p><span><a href="http://www.vistarait.com/company/news/vistara-recognized-crn-emerging-vendor/" target="_blank">Vistara Recognized By CRN As A 2015 Emerging Vendor</a></span></p></div></div>
<hr>
<div class="news-wrap">
<div><p><span><a href="http://www.vistarait.com/company/news/vistara-wins-2014-crn-tech-innovator-award/" target="_blank">Vistara Wins 2014 CRN Tech Innovator Award</a></span></p></div></div>
<hr>
<div class="news-wrap">
<p><span><a href="http://www.vistarait.com/company/news/vistara-wins-vspex-valuable-player-award-emc-world-2014/" target="_blank">Vistara Wins VSPEX Most Valuable Player Award at EMC World 2014</a></span></p></div>
<hr>
</div></div>
<a href="http://www.vistarait.com/company/news/" target="_blank" class="more alignright">+ View more</a>
</div></div>
</section>

<section class="section-colored">
<div class="container">
<h2>Contact Us</h2>
<div class="row"><div class="col-sm-6">
<div class="contact-block1"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/phone.png" alt="mail"><h5>855-847-8272</h5></div>
<div class="contact-block"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/mail.png" alt="mail"><h5>Support: <a href="mailto:"support@vistarait.com">support@vistarait.com</a><br>Sales: <a href="mailto:"sales@vistarait.com">sales@vistarait.com</a><br>General Inquiries: <a href="mailto:"info@vistarait.com">info@vistarait.com</a></h5></div>
<div class="contact-block1"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/map.png" alt="mail"><h3>San Jose</h3>
<p>226 Airport Pkwy #550, San Jose, CA 95110, USA</p></div>
<iframe style="border: 0;" class="google-map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12683.635129592847!2d-121.9215711!3d37.3683352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcbead43fce19%3A0xcae2639c7226fa74!2s226+Airport+Pkwy+%23550!5e0!3m2!1sen!2s!4v1395318217905" width="445" height="260" frameborder="0"></iframe></div>


<div class="col-sm-6"><iframe width="100%" scrolling="no" height="500px" frameborder="0" src="https://info.vistarait.com/company-page-lead-form"></iframe></div>
<div class="clear"></div>
 <div class="col-sm-6">
<div class="contact-block1"><img src="http://www.vistarait.com/wp-content/themes/twentythirteen/images/map.png" alt="mail">
<h3>Hyderabad</h3>
<p>Plot No. 20, 4th Floor, South Wing, Legend Platinum, Survey No.12, Kothaguda, Kondapur, Hyderabad, TS 500084, India</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.0646062941805!2d78.37076421472456!3d17.456621605399683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93e0273728f3%3A0xb2e4f1c644869c30!2sVistaraIT!5e0!3m2!1sen!2sin!4v1474451728853" width="445" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:260px;width:100%;"><div id="gmap_canvas" style="height:260px;width:465px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-hosting.me" id="get-map-data">http://wordpress-hosting.me</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(17.4434066937031,78.38405679601738),panControl: false,zoomControl: false,scaleControl: true,mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.4434066937031, 78.38405679601738)});infowindow = new google.maps.InfoWindow({content:"1-90/C/14, Vittalrao Nagar, Madhapur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>-->
</div></div>
<!--<div class="col-sm-6">
<h3>Bhimavaram</h3>
<p>Palakoderu Mandal, Goraganamudi, AP 534244, India</p>
<div style="overflow:hidden;height:260px;width:100%;"><div id="gmap_canvas1" style="height:260px;width:465px;"></div><style>#gmap_canvas1 img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-hosting.me" id="get-map-data">http://wordpress-hosting.me</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(16.548035473464513,81.57698824918214),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas1"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(16.548035473464513, 81.57698824918214)});infowindow = new google.maps.InfoWindow({content:"Palakoderu Mandal, Goraganamudi" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div> -->
</div></div>
</section>

</section>
                
		<!--<section id="subscribe-wrapper" class="section-colored">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h3>Get our regular updates and news</h3>
						<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="https://info.vistarait.com/subscription-form-new"></iframe>
					</div>
				</div>
			</div>
		</section>-->
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>