<?php
/**
* Template Name: 4-17-14 Home Page
*/
get_header();
the_post(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
    		<section class="section" id="slider-wrapper">
        		<?php putRevSlider("home-slider") ?>
        	</section>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>

            <section class="section-white">
                <div class="container" id="latest-post-box">
                    <?php                        
                        $endpoint = 'https://api.hubapi.com/content/api/v2/blog-posts?hapikey=87f1c593-b2d7-467c-a9ce-21622638f4ef&order_by=-created&state=PUBLISHED&limit=1';
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
                                        echo '<h2><a href="'.$value[0]['url'].'">'.$value[0]['html_title'].'</a></h2>';
                                        echo '<p>'.$value[0]['meta_description'].'</p>';
                                        echo '<p><a href="'.$value[0]['url'].'"> Read More</a></p>';
                                    }
                                }
                            }
                        }
                        else{
                           //echo "Not enabled";
                        }
                    ?>
                </div>
            </section>
		</article>
		<section id="subscribe-wrapper" class="section-colored">
    		<div class="container">
        		<div class="row">
        			<div class="text-center">
            			<h3>Get our regular updates and news</h3>
            			<iframe width="100%" scrolling="no" height="100%" frameborder="0" src="http://info.vistarait.com/subscription-form-new"></iframe>
        			</div>
    			</div>
			</div>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>