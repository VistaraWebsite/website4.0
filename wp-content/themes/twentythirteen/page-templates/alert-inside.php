<?php
/**
*Template Name: inside alert 
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

get_header(); ?><section class="section">
<div class="container">
	<ul class="list-inline page-breadcrumb">
		<li><a href="http://localhost/vistara/modern-it-operations">What We Do</a></li>
		<li>/</li>
		<li><a href="http://localhost/vistara/what-we-do/unified-it-operations">Unified IT Operations</a></li>
		<li>/</li>
		<li><a href="http://localhost/vistara/alert-management/">Alert Management</a></li>
	</ul>
	<div class="heading-box"><img class="alignnone size-full wp-image-467" alt="alert-small (2)" src="http://localhost/vistara/wp-content/uploads/2014/03/alert-small-2.png" width="52" height="52" />
		<h2>Alert Management</h2>
	</div>
	<p class="big-font">IT organizations managing complex infrastructures face a continuous flow of incoming alerts from servers, network devices, existing monitoring tools, and more. To be effective, operations teams need a unified view of incoming alerts from all sources and the ability to manage alerts identically regardless of the originating element or service. Vistara supports unified alert monitoring and management across your data center, private cloud, and public cloud by consolidating, correlating, and managing alerts for instant visibility, faster problem resolution and responsive support.</p>
</div>
<div>
	<div class="custom-post-slider">
		<div></div>
		<div class="carousel slide" id="carousel-example-generic" data-interval="false" data-ride="carousel">			
				<div class="carousel-nav">
				<a data-slide="prev" href="#carousel-example-generic" class="left-arrow"></a>
				<a data-slide="next" href="#carousel-example-generic" class="next-arrow"></a>    
			</div>
			<ol class="carousel-indicators" id="sa">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">		
				<div class="item active">
						<div class="col-sm-6"><img class="attachment-1300 wp-post-image" alt="custom-escalation" src="http://localhost/vistara/wp-content/uploads/2014/03/custom-escalation1.png" width="499" height="389" /></div>
						<div class="col-sm-6 carousel-text">
							<h1>Custom Escalation Matrix</h1>
							<div class="post-content">
								<p style="text-align: left;">Define custom rule-based escalation matrixes to ensure the  correct administrator is notified every time.</p>
								Create shifts with rules controlling which administrator(s) are notified for a shift. Shifts can be specified in terms of the days of the week and hours of the day or for a custom date range such as a holiday period.

								Define escalation schedules that vary based on the priority level of the alert. Administrators can define how many times a particular notification should repeat, at what frequency, and across how many shifts until the issue is resolved or the  notification expires.

							</div>
						</div>
				</div>
				<div class="item ">
						<div class="col-sm-6"><img class="attachment-1300 wp-post-image" alt="custom-escalation" src="http://localhost/vistara/wp-content/uploads/2014/03/custom-escalation.png" width="499" height="389" /></div>
						<div class="col-sm-6 carousel-text">
							<h1>Alert Browser</h1>
							<div class="post-content">
								<div>
									<div>

										Define custom rule-based escalation matrixes to ensure the correct administrator is notified every time.

										Create shifts with rules controlling which administrator(s) are notified for a shift. Shifts can be specified in terms of the days of the week and hours of the day or for a custom date range such as a holiday period.

										Define escalation schedules that vary based on the priority level of the alert. Administrators can define how many times a particular notification should repeat, at what frequency, and across how many shifts until the issue is resolved or the notification expires.

									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="item ">					
						<div class="col-sm-6"><img class="attachment-1300 wp-post-image" alt="custom-escalation" src="http://localhost/vistara/wp-content/uploads/2014/03/custom-escalation2.png" width="499" height="389" /></div>
						<div class="col-sm-6 carousel-text">
							<h1>Integrate Your Monitoring System</h1>
							<div class="post-content">

								Define custom rule-based escalation matrixes to ensure the  correct administrator is notified every time.

								Create shifts with rules controlling which administrator(s) are notified for a shift. Shifts can be specified in terms of the days of the week and hours of the day or for a custom date range such as a holiday period.

								Define escalation schedules that vary based on the priority level of the alert. Administrators can define how many times a particular notification should repeat, at what frequency, and across how many shifts until the issue is resolved or the  notification expires.

							</div>
						</div>
				</div><!--Item end -->
			</div>			
		</div>
	</div>
</div>
</section>
<!--<script type="text/javascript">
$(document).ready(function(){	
	var n = $(".item").length;	
	$('.item').each(function(i) {		
		$(this).attr('id',i);
	});

	var next =  parseInt($("div.active").attr("id")) + 1;
	if(n=3)
	var prev =  parseInt($("div.active").attr("id")) + 2; 	 	
	//alert(prev);
	var q = '#'+next + " " +'h1';		
	var ne = $(q).html();
	var p = '#'+prev + " " +'h1';		
	var pr = $(p).html();		
	//alert(ne);
	$('a.next-arrow').html(ne);
	$('a.left-arrow').html(pr);		

	$('a.next-arrow').click(function(e){
		e.preventDefault();
		$('a.next-arrow').empty();
		$('a.left-arrow').empty();	
		//var cur_id = $("div.active").attr("id");
		var cur_id = parseInt($("div.active").attr("id")) + 2;
		alert(cur_id);
		var q = '#'+cur_id + " " +'h1';		
		var ne = $(q).html();
		$('a.next-arrow').html(ne);
		var prev = $(".active h1").html();	
	});
	});
</script>-->

<script type="text/javascript">	
		var n = $(".item").length;	
		$('.item').each(function(i) {		
			$(this).attr('id',i);
		});
		$('.carousel-nav a').click(function(){		
		var curr = $("div.active").attr("id");
			if(curr == 0){
				prev = n;
				//alert(prev);
			}				
			else{
				prev = curr-1;
				alert(prev);
			}
			if(curr == n){
				next = 0;
				alert(next);
			}
			else{
				curr = curr+1;
			}

		});	
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<div class="item ">					
	<div class="col-sm-6"><img class="attachment-1300 wp-post-image" alt="custom-escalation" src="http://localhost/vistara/wp-content/uploads/2014/03/custom-escalation2.png" width="499" height="389" /></div>
	<div class="col-sm-6 carousel-text">
		<h1>Alert Browser</h1>
		<div class="post-content">
			<p style="text-align:left">Enable IT administrators to conveniently view and filter tickets from all sources.</p>
			<p style="text-align:left">Group related alerts together and create a ticket, incident, problem, or change request as appropriate to manage issues through resolution.</p>
			<p style="text-align:left">Enable IT administrators to focus their time on proactively improving systems and applications instead of reacting to problems.</p>
		</div>
	</div>
</div><!--Item end -->
