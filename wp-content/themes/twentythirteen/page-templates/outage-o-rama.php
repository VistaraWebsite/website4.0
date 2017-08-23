<?php
/**
*  Template Name:Outage template
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/outageblog-assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/outageblog-assets/css/style.css"> <!-- Resource style -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="<?php bloginfo('template_directory'); ?>/outageblog-assets/js/modernizr.js"></script> <!-- Modernizr --><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/outageblog-assets/css/floating-share.css">
  	
	<title>Outage-O-Rama | Vistara</title>
<meta name="description" content="Our Outage-O-Rama features explains how IT teams can protect their organization from outages." />
		<meta name="keywords" content="Outages" />
		<meta name="author" content="VistaraIT" />
</head>
<body>
	<header class="hero">
        <div class="row cd-container navbar">
						<div class="col-md-4 text-left">
							<a href="http://www.vistarait.com/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/logo.svg" alt="Vistara"/></a>
						</div>
<div class="col-md-4 text-left">
							<a class="brand2" href="https://twitter.com/VistaraIT" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>@VistaratIT<br/></a>
						</div>
						<div class="col-md-4 text-right">
							<a class="brand3" href="https://twitter.com/search?q=downtime" target="_blank">#Downtime</a>
						</div>
					</div>
        <div class="cd-container">
            <div class="col-md-6">
            <h1>Outage-O-Rama: Gain Control Over Outages</h1>
            <h2>&nbsp;</h2></div>
            <div class="col-md-12">
                <a href="#cd-intro" class="learn-btn animated pulse"> <i class="fa fa-chevron-down"></i></a>
            </div>
        </div>
	</header>
    <section id="cd-intro"><div class="cd-container">
            <div class="col-md-7 text-left">
                <h2>Why Outages Matter</h2>
                <p>If there's one thing that keeps IT leaders up at night, it's the perfect storm of IT outages. IT outages derail employee productivity, create financial losses, and lead to erosion of trust.</p>
        
                <p>The cost of IT failure is immediate and direct. Your customers will complain on social media, employees will blame you for missed targets, and your CEO might have to apologize. Ponemon Institute publishes the <strong><a href="http://www.emersonnetworkpower.com/en-US/Resources/Market/Data-Center/Latest-Thinking/Ponemon/Documents/2016-Cost-of-Data-Center-Outages-FINAL-2.pdf" target="_blank"><u>Cost of Data Center Outages</u></a></strong> every three years. The 2016 report shows that the <strong>average cost per minute</strong> of an unplanned outage is $8,851. The <strong>average cost</strong> of an IT outage is $740,357, a 38% increase since the 2010 study. </p>

            <p>How do you ensure business resilience in the face of IT outages? Check our incident timeline for details of major outages this year. Learn how to respond to IT outages through our two blogs, <a href="#cd-blog"><u>Anatomy of An IT Outage</u></a> and <a href="#cd-blog"><u>Anatomy of An IT Outage: Prediction and Detection</u></a>.</p></div>
        <div class="col-md-5 text-left">
            <div class="image"><a href="#timeline-header"><img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/blog-0.jpg"></a><h3><span>Timeline</span></h3></div>
            <div class="image"><a href="#cd-blog"><img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/blog-01.jpg"></a><h3><span>Blog Posts</span></h3></div>
            
        </div>
        </div>
    </section>
    <section id="timeline-header" class="cd-container">
    <div class="col-md-12 ">
        <h2>Timeline</h2>
                <p style="text-align:center;">We recount 12 outages that caused financial and reputational damages in 2016...</p></div>
    </section>
	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->
            
			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-01.png">
				<h2>JetBlue</h2>
<h4><span>January</span></h4>
				<p>A power outage at a Verizon datacenter (JetBlue’s partner) caused over 200 flight delays. The two hour outage created issues with online booking and check-in systems.</p>
                <p><strong>Source:</strong> <a href="http://www.datacenterknowledge.com/archives/2016/01/14/verizon-data-center-outage-delays-jetblue-flights/" target="_blank">Data Center Knowledge</a></p>
				<!--<span class="cd-date">January</span>-->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-02.png">
				<h2>HSBC</h2>
<h4><span>January</span></h4>
				<p>Personal banking customers were unable to access their online accounts for two straight days. Europe’s biggest bank  had to apologize and waive any fees that customers incurred during the outage. </p>
				<!--<a href="#0" class="cd-read-more">Read more</a>-->
                <p><strong>Source:</strong> <a href="http://www.telegraph.co.uk/finance/newsbysector/banksandfinance/12082198/hsbc-online-bank-platform-payments-are-down-glitch.html" target="_blank">The Telegraph</a></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-03.png">
				<h2>Xero</h2>
<h4><span>February</span></h4>
				<p>Accounting cloud software Xero experienced two hours of downtime due to a hardware failure. Xero is migrating to the public cloud to prevent more outages in the future.</p>
				<p><strong>Source:</strong> <a href="https://www.xero.com/blog/2016/02/unexpected-outage-xero-customers/" target="_blank">Xero Blog</a></p>
				<!--<span class="cd-date">February</span>-->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-04.png">
				<h2>IRS</h2>
<h4><span>February</span></h4>
				<p>The Internal Revenue Service’s e-filing system was down for 24 hours due to “hardware failures.” Given the outage occurred during tax season, taxpayers were unable to access their accounts. </p>
				<p><strong>Source:</strong> <a href="http://money.cnn.com/2016/02/04/pf/taxes/irs-systems-down/" target="_blank">CNN</a></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-05.png">
				<h2>DirecTV</h2>
<h4><span>March</span></h4>
				<p>The largest satellite provider in the country experienced loss of audio and video across multiple channels. The outage lasted for two hours across cities like New York, Los Angeles, and Chicago.</p>
				<p><strong>Source:</strong> <a href="http://deadline.com/2016/03/directv-outages-across-us-1201716447/" target="_blank">Deadline</a></p>
				<!--<span class="cd-date">March</span>-->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-06.png">
				<h2>Amazon.com</h2>
<h4><span>March</span></h4>
				<p>Amazon.com suffered an outage that brought down its website and mobile app. The outage lasted 20 minutes and might have costed the company $1.3 million in lost sales.</p>
                <p><strong>Source:</strong> <a href="https://www.internetretailer.com/2016/03/11/site-outages-happen-even-amazon" target="_blank">Internet Retailer</a></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-07.png">
				<h2>Home Depot</h2>
<h4><span>April</span></h4>
				<p>An internal outage disrupted Home Depot’s debit and credit card payment processing systems. The outage slowed down the retailer’s ability to handle electronic payments.</p>
				<p><strong>Source:</strong> <a href="http://www.usnews.com/news/business/articles/2016-04-09/home-depot-says-electronic-outage-slowed-card-purchases" target="_blank">US News</a></p>
				<!--<span class="cd-date">April</span>-->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-08.png">
				<h2>Squarespace</h2>
<h4><span>April</span></h4>
				<p>Web hosting company Squarespace suffered a major outage for seven hours. The glitch brought down millions of websites hosted on Squarespace’s platform.</p>
                <p><strong>Source:</strong> <a href="http://www.itproportal.com/2016/04/21/what-businesses-can-learn-from-squarespace-outage/" target="_blank">ITProPortal</a></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-09.png">
				<h2>Apple</h2>
<h4><span>May</span></h4>
				<p>Apple’s App Store returned inaccurate or unrelated search results for two hours. The outage resulted in 10% less downloads for app developers.</p>
				<p><strong>Source:</strong> <a href="https://techcrunch.com/2016/05/05/apples-app-store-search-is-completely-broken-right-now/" target="_blank">TechCrunch</a></p>
				<!--<span class="cd-date">May</span>-->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-10.png">
				<h2>Virginia DMV</h2>
<h4><span>May</span></h4>
				<p>A statewide IT outage knocked down Virginia DMV's customer service centers and website. The DMV had to shut down all its offices for an entire day.</p>
                <p><strong>Source:</strong> <a href="http://www.richmond.com/news/virginia/article_618819ec-36db-500b-93c7-c50929582ee1.html" target="_blank">Richmond Times Dispatch</a></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-11.png">
				<h2>GOV.UK</h2>
<h4><span>June</span></h4>
				<p>The EU referendum website crashed as 500,000 people tried to register two hours before the deadline. The UK government extended the deadline by 48 hours after an online petition received more than 100,000 signatures.
</p>
				<p><strong>Source:</strong> <a href="http://www.dailymail.co.uk/news/article-3630320/Voter-registration-website-CRASHES-just-two-hours-referendum-deadline-prompting-claims-extended.html" target="_blank">Daily Mail Online</a></p>
				<!--<span class="cd-date">June</span>-->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-dark">
				<img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/power.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
                <img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/outage-12.png">
				<h2>Lending Club</h2>
<h4><span>June</span></h4>
				<p>The world’s largest peer to peer lending provider suffered downtime due to a data center outage. The issue caused one investor to worry that Lending Club might have shut down for good.</p>
                <p><strong>Source:</strong> <a href="http://www.pymnts.com/news/alternative-financial-services/2016/lending-club-site-down-investor-worry/" target="_blank">PYMNTS.com</a></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	</section> <!-- cd-timeline -->
    <section id="cd-blog"><div class="cd-container">
     <h2>Blog Posts</h2>
                <p style="text-align:center;">&nbsp;</p>
            <div class="col-md-4">
                <div class="image"><a href="https://blog.vistarait.com/anatomy-of-an-it-outage" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/blog-01.jpg"></a><h3><span>Blog Post: Anatomy Of An IT Outage</span></h3>
                <p>Understand the anatomy of an outage to prepare, prevent, diagnose, and recover from outages.</p></div>
        </div>
        <div class="col-md-4">
            <div class="image"><a href="https://blog.vistarait.com/it-outage-prediction-and-detection" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/blog-02.jpg"></a><h3><span>Anatomy Of An IT Outage: Prediction and Detection</span></h3>
                <p>Learn how to predict and detect different types of outages so that you can predict early and detect soon.</p></div>
            
        </div>
<div class="col-md-4">
                <div class="image"><a href="http://hubs.ly/H03tJqQ0" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/outageblog-assets/img/blog-banner.jpg"></a><h3><span>[Infographic] The Cost of IT Outages</span></h3>
                <p>Learn how you can lose revenues, productivity, and customers with IT outages.</p></div>
        </div>
        </div>
    </section>
    <footer class="cd-container">
				<div class="row">
					<div class="col-md-12">
						<p>© 2017 VistaraIT, Inc. All rights reserved. Contact | <a href="http://www.vistarait.com/privacy">Privacy</a> | <a href="http://www.vistarait.com/accessibility">Accessibility</a> | <a href="http://www.vistarait.com/terms-of-use/">Terms of Use</a></p>
					</div>
				</div>
		</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/outageblog-assets/js/jquery.floating-share.js"></script>
    <script>
        $(function(){
            $("body").floatingShare();
        });

    </script>
<script src="<?php bloginfo('template_directory'); ?>/outageblog-assets/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>