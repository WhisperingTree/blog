<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => '',
    'description' => '',
    'alias' => 'home',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1452810410,
    'editedby' => 1,
    'editedon' => 1452829165,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => 'Главная',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'home',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '
	<!DOCTYPE html>
<html lang="ru">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# ">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Главная lf_site_name</title>
        <meta name="description" content="lf_description" />
        <base href="http://blog.local/" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- MOBILE BLOCK -->
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Главная lf_site_name">

        <link rel="apple-touch-icon" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad-retina.png">
        <link rel="apple-touch-icon" sizes="180x180" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone6plus-retina.png">

        <!-- Tile icon for Win8 -->
        <meta name="application-name" content="Главная lf_site_name">
        <meta name="msapplication-TileColor" content="#79b316">
        <meta name="msapplication-square70x70logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square70x70logo.png"/>
        <meta name="msapplication-square150x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square150x150logo.png"/>
        <meta name="msapplication-wide310x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-wide310x150logo.png"/>
        <meta name="msapplication-square310x310logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square310x310logo.png"/>
        <!-- END MOBILE BLOCK -->

		<meta name="cmsmagazine" content="a39ef97fd1d4cf6d3e103f0ff48ea4f6" />

        <!-- SOCIAL BLOCK -->
        <meta property="og:title" content="Главная lf_site_name" >
        <meta property="og:description" content="lf_description" >
        <meta property="og:url" content="http://blog.local/" />

        <meta property="og:image" content="[[++basetheme.design_url]]images/iconsite/social-image.png" >
        <meta property="og:site_name" content="lf_site_name" />
        [[++social_allow_author:is=`1`:then=`
            
        `:else=``]]

        
            <meta property="og:type" content="website" />
        

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        [[++social_allow_author:is=`1`:then=`
            
        `:else=``]]
        [[++basetheme.social_twitter_site:notempty=`<meta name="twitter:site" content="[[++social_twitter_site]]">]]
        <meta name="twitter:title" content="Главная lf_site_name">
        <meta name="twitter:description" content="lf_description">
        <meta name="twitter:image:src" content="[[++basetheme.design_url]]images/iconsite/twitter-image.png">

        <!-- Social: Google+ / Schema.org  -->
        [[++basetheme.social_google_publisher:notempty=`<link rel="publisher" href="[[++basetheme.social_google_publisher]]">]]
        <!-- END SOCIAL BLOCK -->

        <!-- Controlling DNS prefetching-->
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="http://code.jquery.com" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://www.google-analytics.com" />

        <link rel="author" href="humans.txt" />
        <link rel="icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        
        [[Molt?
            &cacheFolder=`[[++basetheme.design_url]]min/`
            &jsSources=`
                [[++basetheme.design_url]]js/jquery/plugins/jquery.imgpreload.js
                ,[[++basetheme.design_url]]js/jquery/plugins/jquery.form.js
                ,[[++basetheme.design_url]]js/jquery/plugins/validation/jquery.validate.js
                ,[[++basetheme.design_url]]js/jquery/plugins/xhrPool.js
				,[[++basetheme.design_url]]js/app/lib/site.js
				,[[++basetheme.design_url]]js/app/lib/siteMode.js
				,[[++basetheme.design_url]]js/app/mode/themeMode.js
                ,[[++basetheme.design_url]]js/app/modules/images.js
				,[[++basetheme.design_url]]js/app/modules/formContacts.js
                ,[[++basetheme.design_url]]js/init.js
            `
            &cssSources=`
				[[++basetheme.design_url]]css/style.css
            `
            &styleHeadSources=`
                [[++basetheme.design_url]]css/style-head.css
            `
            &jquery=`//code.jquery.com/jquery-1.11.3.min.js`
        ]]
        
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script>
            var designUrl = \'[[++basetheme.design_url]]\';
        </script>
		
		<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->	
	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../assets/basetheme-design/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="../assets/basetheme-design/js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="../assets/basetheme-design/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="../assets/basetheme-design/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$(\'.popup-with-zoom-anim\').magnificPopup({
					type: \'inline\',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: \'auto\',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: \'my-mfp-zoom-in\'
			});
		});
		</script>
		
		<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->
		
    </head>
    <body itemscope itemtype="http://schema.org/WebSite">
        <!-- Social: Google+ / Schema.org  -->
        <meta itemprop="name" content="Главная lf_site_name">
        <meta itemprop="description" content="lf_description">
        <link itemprop="image" content="[[++basetheme.design_url]]images/iconsite/social-image.png">
	
<div class="header">	
    <div class="wrap"> 
      	<div class="header-top">
	         <div class="logo">
				<a href="index.html"><img src="../assets/basetheme-design/images/logo.png" alt=""/></a>
			 </div>
			  <div class="cssmenu">
								        
			        <ul class=""><li class="first active"><a href="/" >Главная</a></li><li class="last"><a href="blog" >Блог</a></li></ul>
					
			<!--	    
					<ul>
						<li><a href="http://blog.local/">Home</a></li> 
						<li><a href="blog/apple">Plans & Pricing</a></li> 
						<li><a href="blog.local/404">Blog</a></li> 
						<li><a href="blog/game">Features</a></li> 
						<li><a href="blog/yota">Contact</a></li>
					</ul>
					
					-->
					
			    </div>
		       <div class="clear"></div>
		 </div>

		<!-- НАЧАЛО ЭКРАНИРОВАНИЯ СЛАЙДЕРА
		 
	     <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						</div>
						<div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/3.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		<div class="slider-left">
						    <img src="../assets/basetheme-design/images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
					     <div class="clear"></div>
					 </div>
			      </article>
				</div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
               </ul>
        </div>
		
            	 <script src="../assets/basetheme-design/js/jquery.wmuSlider.js"></script> 
				       <script>
       						 $(\'.example1\').wmuSlider();         
   						</script> 	           	      
      </div>
	  
		КОНЕЦ ЭКРАНИРОВАНИЯ СЛАЙДЕРА -->
				
	</div>
</div>
		   <div class="main">
	   	  <div class="wrap">
	   	    <div class="content-top">
				
				[[!pdoResources?
					&showHidden=`1`
					&includeContent=`1`
					&hideContainers=`1`
					&includeTVs=`mainArticleImage`
					&processTVs=`1`
							
					&parents=`[[++basetheme.id_blog]]`
					&depth=`0`
					&limit=`4`
					&debug=`0`
					&tpl=`articleHomePreviewTpl`
				]]
				
				<div class="clear"></div>
			</div>
		 
		 <!-- НАЧАЛО ЭКРАНИРОВАНИЯ ПОРТФОЛИО
		 
	     <div class="content-middle">
			<div class="middle-top">
		        <h2>Recent Work</h2>
				 <ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="app card icon logo web"> </span></li>
					<li><span class="filter" data-filter="app"> </span></li>
					<li><span class="filter active" data-filter="app card icon logo1 web"> </span></li>
				 </ul>
			    <div class="clear"></div>
			</div>
		    <div class="container">
		        <div id="portfoliolist" style="     " class="">
		           <div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
					 <div class="portfolio-wrapper">	
						<p class="low-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit tempor incididunt</p>
						<p class="thick">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					 </div>
				   </div>	
		 <div class="portfolio-right">
		   <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic.jpg" alt="image"></a>
        		<h3><a href="project.html">Project One</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic1.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Two</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic2.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Three</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
			<div class="clear"></div>
		  </div>
		  <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic3.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Four</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic4.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Five</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic5.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Six</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
    		<div class="clear"></div>
		  </div>
		</div>
			<div class="clear"></div>
		</div>
		  <div class="clear"></div>
	    </div>
	</div>
	<script type="text/javascript" src="../assets/basetheme-design/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$(\'#portfoliolist\').mixitup({
					targetSelector: \'.portfolio\',
					filterSelector: \'.filter\',
					effects: [\'fade\'],
					easing: \'snap\',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$(\'#portfoliolist .portfolio\').hover(
					function () {
						$(this).find(\'.label\').stop().animate({bottom: 0}, 200, \'easeOutQuad\');
						$(this).find(\'img\').stop().animate({top: -30}, 500, \'easeOutQuad\');				
					},
					function () {
						$(this).find(\'.label\').stop().animate({bottom: -40}, 200, \'easeInQuad\');
						$(this).find(\'img\').stop().animate({top: 0}, 300, \'easeOutQuad\');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
	
	КОНЕЦ ЭКРАНИРОВАНИЯ ПОРТФОЛИО-->
	
	  </div>
   </div>
   	
	
	<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->
	
	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_footer span_1_of_footer">
					<h3>About Portfolio</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venia sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Recent Posts</h3>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<div class="link"><a href="#">View all Posts</a></div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Twitter Widget</h3>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 1 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 2 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Flickr Widget</h3>
					<div class="gallery">
						<ul>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g1.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g2.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g3.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g4.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g5.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g6.jpg" alt=""/></a></li>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<img src="../assets/basetheme-design/images/g_zoom.jpg" alt=""/>
									<h2>Photo View</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  			</div>
							</div>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

 <div class="footer-bottom">
	 	   <div class="wrap">
		 	 <div class="footer-logo">
				<a href="index.html"><img src="../assets/basetheme-design/images/logo.png" alt=""/></a>
			 </div>
		 	<div class="copy">
			     <p>© 2014 Design by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		 	<div class="clear"></div>
	      </div>
		</div>
	</div>
	
	<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->

[[++basetheme.ga_tracking_id:notempty=`
<script>
    (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
    ga(\'create\', \'[[++basetheme.ga_tracking_id]]\', \'[[++basetheme.ga_tracking_name]]\');
    ga(\'send\', \'pageview\');
</script>
`]]
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[%lf_site_name:htmlent]]' => 'lf_site_name',
    '[[%lf_description:htmlent]]' => 'lf_description',
    '[[~1? &scheme=`full`]]' => 'http://blog.local/',
    '[[$srcPathPrefix]]' => '../assets/basetheme-design/',
    '[[$metaBase]]' => '<!DOCTYPE html>
<html lang="ru">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# ">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Главная lf_site_name</title>
        <meta name="description" content="lf_description" />
        <base href="http://blog.local/" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- MOBILE BLOCK -->
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Главная lf_site_name">

        <link rel="apple-touch-icon" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad-retina.png">
        <link rel="apple-touch-icon" sizes="180x180" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone6plus-retina.png">

        <!-- Tile icon for Win8 -->
        <meta name="application-name" content="Главная lf_site_name">
        <meta name="msapplication-TileColor" content="#79b316">
        <meta name="msapplication-square70x70logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square70x70logo.png"/>
        <meta name="msapplication-square150x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square150x150logo.png"/>
        <meta name="msapplication-wide310x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-wide310x150logo.png"/>
        <meta name="msapplication-square310x310logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square310x310logo.png"/>
        <!-- END MOBILE BLOCK -->

		<meta name="cmsmagazine" content="a39ef97fd1d4cf6d3e103f0ff48ea4f6" />

        <!-- SOCIAL BLOCK -->
        <meta property="og:title" content="Главная lf_site_name" >
        <meta property="og:description" content="lf_description" >
        <meta property="og:url" content="http://blog.local/" />

        <meta property="og:image" content="[[++basetheme.design_url]]images/iconsite/social-image.png" >
        <meta property="og:site_name" content="lf_site_name" />
        [[++social_allow_author:is=`1`:then=`
            
        `:else=``]]

        
            <meta property="og:type" content="website" />
        

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        [[++social_allow_author:is=`1`:then=`
            
        `:else=``]]
        [[++basetheme.social_twitter_site:notempty=`<meta name="twitter:site" content="[[++social_twitter_site]]">]]
        <meta name="twitter:title" content="Главная lf_site_name">
        <meta name="twitter:description" content="lf_description">
        <meta name="twitter:image:src" content="[[++basetheme.design_url]]images/iconsite/twitter-image.png">

        <!-- Social: Google+ / Schema.org  -->
        [[++basetheme.social_google_publisher:notempty=`<link rel="publisher" href="[[++basetheme.social_google_publisher]]">]]
        <!-- END SOCIAL BLOCK -->

        <!-- Controlling DNS prefetching-->
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="http://code.jquery.com" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://www.google-analytics.com" />

        <link rel="author" href="humans.txt" />
        <link rel="icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        
        [[Molt?
            &cacheFolder=`[[++basetheme.design_url]]min/`
            &jsSources=`
                [[++basetheme.design_url]]js/jquery/plugins/jquery.imgpreload.js
                ,[[++basetheme.design_url]]js/jquery/plugins/jquery.form.js
                ,[[++basetheme.design_url]]js/jquery/plugins/validation/jquery.validate.js
                ,[[++basetheme.design_url]]js/jquery/plugins/xhrPool.js
				,[[++basetheme.design_url]]js/app/lib/site.js
				,[[++basetheme.design_url]]js/app/lib/siteMode.js
				,[[++basetheme.design_url]]js/app/mode/themeMode.js
                ,[[++basetheme.design_url]]js/app/modules/images.js
				,[[++basetheme.design_url]]js/app/modules/formContacts.js
                ,[[++basetheme.design_url]]js/init.js
            `
            &cssSources=`
				[[++basetheme.design_url]]css/style.css
            `
            &styleHeadSources=`
                [[++basetheme.design_url]]css/style-head.css
            `
            &jquery=`//code.jquery.com/jquery-1.11.3.min.js`
        ]]
        
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script>
            var designUrl = \'[[++basetheme.design_url]]\';
        </script>
		
		<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->	
	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../assets/basetheme-design/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="../assets/basetheme-design/js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="../assets/basetheme-design/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="../assets/basetheme-design/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$(\'.popup-with-zoom-anim\').magnificPopup({
					type: \'inline\',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: \'auto\',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: \'my-mfp-zoom-in\'
			});
		});
		</script>
		
		<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->
		
    </head>
    <body itemscope itemtype="http://schema.org/WebSite">
        <!-- Social: Google+ / Schema.org  -->
        <meta itemprop="name" content="Главная lf_site_name">
        <meta itemprop="description" content="lf_description">
        <link itemprop="image" content="[[++basetheme.design_url]]images/iconsite/social-image.png">',
    '[[pdoMenu?
                        &parents=`0`
                        &level=`1`
                        &showHidden=`0`
                                            
                    ]]' => '<ul class=""><li class="first active"><a href="/" >Главная</a></li><li class="last"><a href="blog" >Блог</a></li></ul>',
    '[[$headerBaseAlt]]' => '
<div class="header">	
    <div class="wrap"> 
      	<div class="header-top">
	         <div class="logo">
				<a href="index.html"><img src="../assets/basetheme-design/images/logo.png" alt=""/></a>
			 </div>
			  <div class="cssmenu">
								        
			        <ul class=""><li class="first active"><a href="/" >Главная</a></li><li class="last"><a href="blog" >Блог</a></li></ul>
					
			<!--	    
					<ul>
						<li><a href="http://blog.local/">Home</a></li> 
						<li><a href="blog/apple">Plans & Pricing</a></li> 
						<li><a href="blog.local/404">Blog</a></li> 
						<li><a href="blog/game">Features</a></li> 
						<li><a href="blog/yota">Contact</a></li>
					</ul>
					
					-->
					
			    </div>
		       <div class="clear"></div>
		 </div>

		<!-- НАЧАЛО ЭКРАНИРОВАНИЯ СЛАЙДЕРА
		 
	     <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						</div>
						<div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/3.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		<div class="slider-left">
						    <img src="../assets/basetheme-design/images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="../assets/basetheme-design/images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
					     <div class="clear"></div>
					 </div>
			      </article>
				</div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
               </ul>
        </div>
		
            	 <script src="../assets/basetheme-design/js/jquery.wmuSlider.js"></script> 
				       <script>
       						 $(\'.example1\').wmuSlider();         
   						</script> 	           	      
      </div>
	  
		КОНЕЦ ЭКРАНИРОВАНИЯ СЛАЙДЕРА -->
				
	</div>
</div>',
    '[[$indexContent]]' => '	   <div class="main">
	   	  <div class="wrap">
	   	    <div class="content-top">
				
				[[!pdoResources?
					&showHidden=`1`
					&includeContent=`1`
					&hideContainers=`1`
					&includeTVs=`mainArticleImage`
					&processTVs=`1`
							
					&parents=`[[++basetheme.id_blog]]`
					&depth=`0`
					&limit=`4`
					&debug=`0`
					&tpl=`articleHomePreviewTpl`
				]]
				
				<div class="clear"></div>
			</div>
		 
		 <!-- НАЧАЛО ЭКРАНИРОВАНИЯ ПОРТФОЛИО
		 
	     <div class="content-middle">
			<div class="middle-top">
		        <h2>Recent Work</h2>
				 <ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="app card icon logo web"> </span></li>
					<li><span class="filter" data-filter="app"> </span></li>
					<li><span class="filter active" data-filter="app card icon logo1 web"> </span></li>
				 </ul>
			    <div class="clear"></div>
			</div>
		    <div class="container">
		        <div id="portfoliolist" style="     " class="">
		           <div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
					 <div class="portfolio-wrapper">	
						<p class="low-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit tempor incididunt</p>
						<p class="thick">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					 </div>
				   </div>	
		 <div class="portfolio-right">
		   <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic.jpg" alt="image"></a>
        		<h3><a href="project.html">Project One</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic1.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Two</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic2.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Three</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
			<div class="clear"></div>
		  </div>
		  <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic3.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Four</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic4.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Five</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="../assets/basetheme-design/images/pic5.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Six</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
    		<div class="clear"></div>
		  </div>
		</div>
			<div class="clear"></div>
		</div>
		  <div class="clear"></div>
	    </div>
	</div>
	<script type="text/javascript" src="../assets/basetheme-design/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$(\'#portfoliolist\').mixitup({
					targetSelector: \'.portfolio\',
					filterSelector: \'.filter\',
					effects: [\'fade\'],
					easing: \'snap\',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$(\'#portfoliolist .portfolio\').hover(
					function () {
						$(this).find(\'.label\').stop().animate({bottom: 0}, 200, \'easeOutQuad\');
						$(this).find(\'img\').stop().animate({top: -30}, 500, \'easeOutQuad\');				
					},
					function () {
						$(this).find(\'.label\').stop().animate({bottom: -40}, 200, \'easeInQuad\');
						$(this).find(\'img\').stop().animate({top: 0}, 300, \'easeOutQuad\');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
	
	КОНЕЦ ЭКРАНИРОВАНИЯ ПОРТФОЛИО-->
	
	  </div>
   </div>
   	',
    '[[$footerBase]]' => '
	<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->
	
	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_footer span_1_of_footer">
					<h3>About Portfolio</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venia sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Recent Posts</h3>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<div class="link"><a href="#">View all Posts</a></div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Twitter Widget</h3>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 1 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 2 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Flickr Widget</h3>
					<div class="gallery">
						<ul>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g1.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g2.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g3.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g4.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g5.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="../assets/basetheme-design/images/g6.jpg" alt=""/></a></li>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<img src="../assets/basetheme-design/images/g_zoom.jpg" alt=""/>
									<h2>Photo View</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  			</div>
							</div>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

 <div class="footer-bottom">
	 	   <div class="wrap">
		 	 <div class="footer-logo">
				<a href="index.html"><img src="../assets/basetheme-design/images/logo.png" alt=""/></a>
			 </div>
		 	<div class="copy">
			     <p>© 2014 Design by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		 	<div class="clear"></div>
	      </div>
		</div>
	</div>
	
	<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->

[[++basetheme.ga_tracking_id:notempty=`
<script>
    (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
    ga(\'create\', \'[[++basetheme.ga_tracking_id]]\', \'[[++basetheme.ga_tracking_name]]\');
    ga(\'send\', \'pageview\');
</script>
`]]
</body>
</html>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'metaBase' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'metaBase',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="[[++cultureKey]]">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# [[*class_key:is=`Ticket`:then=`article: http://ogp.me/ns/article#`:else=``]]">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]</title>
        <meta name="description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" />
        <base href="[[++site_url]]" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- MOBILE BLOCK -->
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">

        <link rel="apple-touch-icon" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad-retina.png">
        <link rel="apple-touch-icon" sizes="180x180" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone6plus-retina.png">

        <!-- Tile icon for Win8 -->
        <meta name="application-name" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta name="msapplication-TileColor" content="#79b316">
        <meta name="msapplication-square70x70logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square70x70logo.png"/>
        <meta name="msapplication-square150x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square150x150logo.png"/>
        <meta name="msapplication-wide310x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-wide310x150logo.png"/>
        <meta name="msapplication-square310x310logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square310x310logo.png"/>
        <!-- END MOBILE BLOCK -->

		<meta name="cmsmagazine" content="a39ef97fd1d4cf6d3e103f0ff48ea4f6" />

        <!-- SOCIAL BLOCK -->
        <meta property="og:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]" >
        <meta property="og:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" >
        <meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]" />

        <meta property="og:image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=1000&h=700`]]`:default=`[[++basetheme.design_url]]images/iconsite/social-image.png`]]" >
        <meta property="og:site_name" content="[[%lf_site_name:htmlent]]" />
        [[++social_allow_author:is=`1`:then=`
            [[*createdby:userinfo=`social_fb_url`:notempty=`<meta property="article:author" content="[[*createdby:userinfo=`social_fb_url`]]">`]]
        `:else=``]]

        [[*class_key:is=`Ticket`:then=`
            <meta property="og:type" content="article">
            [[++basetheme.social_fb_publisher:notempty=`<meta property="article:publisher" content="[[++basetheme.social_fb_publisher]]">`]]
            <meta property="article:published_time" content="[[*publishedon]]">
            <meta property="article:modified_time" content="[[*editedon]]">
            <meta property="article:section" content="[[*parent:pdofield]]">
        `:else=`
            <meta property="og:type" content="website" />
        `]]

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        [[++social_allow_author:is=`1`:then=`
            [[*createdby:userinfo=`social_twitter_login`:notempty=`<meta name="twitter:creator" content="[[*createdby:userinfo=`social_twitter_login`]]">`]]
        `:else=``]]
        [[++basetheme.social_twitter_site:notempty=`<meta name="twitter:site" content="[[++social_twitter_site]]">]]
        <meta name="twitter:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta name="twitter:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]">
        <meta name="twitter:image:src" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=480&h=270&zc=1`]]`:default=`[[++basetheme.design_url]]images/iconsite/twitter-image.png`]]">

        <!-- Social: Google+ / Schema.org  -->
        [[++basetheme.social_google_publisher:notempty=`<link rel="publisher" href="[[++basetheme.social_google_publisher]]">]]
        <!-- END SOCIAL BLOCK -->

        <!-- Controlling DNS prefetching-->
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="http://code.jquery.com" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://www.google-analytics.com" />

        <link rel="author" href="humans.txt" />
        <link rel="icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        
        [[Molt?
            &cacheFolder=`[[++basetheme.design_url]]min/`
            &jsSources=`
                [[++basetheme.design_url]]js/jquery/plugins/jquery.imgpreload.js
                ,[[++basetheme.design_url]]js/jquery/plugins/jquery.form.js
                ,[[++basetheme.design_url]]js/jquery/plugins/validation/jquery.validate.js
                ,[[++basetheme.design_url]]js/jquery/plugins/xhrPool.js
				,[[++basetheme.design_url]]js/app/lib/site.js
				,[[++basetheme.design_url]]js/app/lib/siteMode.js
				,[[++basetheme.design_url]]js/app/mode/themeMode.js
                ,[[++basetheme.design_url]]js/app/modules/images.js
				,[[++basetheme.design_url]]js/app/modules/formContacts.js
                ,[[++basetheme.design_url]]js/init.js
            `
            &cssSources=`
				[[++basetheme.design_url]]css/style.css
            `
            &styleHeadSources=`
                [[++basetheme.design_url]]css/style-head.css
            `
            &jquery=`//code.jquery.com/jquery-1.11.3.min.js`
        ]]
        
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script>
            var designUrl = \'[[++basetheme.design_url]]\';
        </script>
		
		<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->	
	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="[[$srcPathPrefix]]css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="[[$srcPathPrefix]]js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="[[$srcPathPrefix]]js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="[[$srcPathPrefix]]css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$(\'.popup-with-zoom-anim\').magnificPopup({
					type: \'inline\',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: \'auto\',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: \'my-mfp-zoom-in\'
			});
		});
		</script>
		
		<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->
		
    </head>
    <body itemscope itemtype="http://schema.org/[[*class_key:is=`Ticket`:then=`Article`:else=`WebSite`]]">
        <!-- Social: Google+ / Schema.org  -->
        <meta itemprop="name" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta itemprop="description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]">
        <link itemprop="image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=1000&h=700`]]`:default=`[[++basetheme.design_url]]images/iconsite/social-image.png`]]">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/basetheme-elements/chunks/base/metaBase.tpl',
          'content' => '<!DOCTYPE html>
<html lang="[[++cultureKey]]">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# [[*class_key:is=`Ticket`:then=`article: http://ogp.me/ns/article#`:else=``]]">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]</title>
        <meta name="description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" />
        <base href="[[++site_url]]" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- MOBILE BLOCK -->
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">

        <link rel="apple-touch-icon" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad-retina.png">
        <link rel="apple-touch-icon" sizes="180x180" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone6plus-retina.png">

        <!-- Tile icon for Win8 -->
        <meta name="application-name" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta name="msapplication-TileColor" content="#79b316">
        <meta name="msapplication-square70x70logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square70x70logo.png"/>
        <meta name="msapplication-square150x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square150x150logo.png"/>
        <meta name="msapplication-wide310x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-wide310x150logo.png"/>
        <meta name="msapplication-square310x310logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square310x310logo.png"/>
        <!-- END MOBILE BLOCK -->

		<meta name="cmsmagazine" content="a39ef97fd1d4cf6d3e103f0ff48ea4f6" />

        <!-- SOCIAL BLOCK -->
        <meta property="og:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]" >
        <meta property="og:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" >
        <meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]" />

        <meta property="og:image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=1000&h=700`]]`:default=`[[++basetheme.design_url]]images/iconsite/social-image.png`]]" >
        <meta property="og:site_name" content="[[%lf_site_name:htmlent]]" />
        [[++social_allow_author:is=`1`:then=`
            [[*createdby:userinfo=`social_fb_url`:notempty=`<meta property="article:author" content="[[*createdby:userinfo=`social_fb_url`]]">`]]
        `:else=``]]

        [[*class_key:is=`Ticket`:then=`
            <meta property="og:type" content="article">
            [[++basetheme.social_fb_publisher:notempty=`<meta property="article:publisher" content="[[++basetheme.social_fb_publisher]]">`]]
            <meta property="article:published_time" content="[[*publishedon]]">
            <meta property="article:modified_time" content="[[*editedon]]">
            <meta property="article:section" content="[[*parent:pdofield]]">
        `:else=`
            <meta property="og:type" content="website" />
        `]]

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        [[++social_allow_author:is=`1`:then=`
            [[*createdby:userinfo=`social_twitter_login`:notempty=`<meta name="twitter:creator" content="[[*createdby:userinfo=`social_twitter_login`]]">`]]
        `:else=``]]
        [[++basetheme.social_twitter_site:notempty=`<meta name="twitter:site" content="[[++social_twitter_site]]">]]
        <meta name="twitter:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta name="twitter:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]">
        <meta name="twitter:image:src" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=480&h=270&zc=1`]]`:default=`[[++basetheme.design_url]]images/iconsite/twitter-image.png`]]">

        <!-- Social: Google+ / Schema.org  -->
        [[++basetheme.social_google_publisher:notempty=`<link rel="publisher" href="[[++basetheme.social_google_publisher]]">]]
        <!-- END SOCIAL BLOCK -->

        <!-- Controlling DNS prefetching-->
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="http://code.jquery.com" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://www.google-analytics.com" />

        <link rel="author" href="humans.txt" />
        <link rel="icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        
        [[Molt?
            &cacheFolder=`[[++basetheme.design_url]]min/`
            &jsSources=`
                [[++basetheme.design_url]]js/jquery/plugins/jquery.imgpreload.js
                ,[[++basetheme.design_url]]js/jquery/plugins/jquery.form.js
                ,[[++basetheme.design_url]]js/jquery/plugins/validation/jquery.validate.js
                ,[[++basetheme.design_url]]js/jquery/plugins/xhrPool.js
				,[[++basetheme.design_url]]js/app/lib/site.js
				,[[++basetheme.design_url]]js/app/lib/siteMode.js
				,[[++basetheme.design_url]]js/app/mode/themeMode.js
                ,[[++basetheme.design_url]]js/app/modules/images.js
				,[[++basetheme.design_url]]js/app/modules/formContacts.js
                ,[[++basetheme.design_url]]js/init.js
            `
            &cssSources=`
				[[++basetheme.design_url]]css/style.css
            `
            &styleHeadSources=`
                [[++basetheme.design_url]]css/style-head.css
            `
            &jquery=`//code.jquery.com/jquery-1.11.3.min.js`
        ]]
        
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script>
            var designUrl = \'[[++basetheme.design_url]]\';
        </script>
		
		<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->	
	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="[[$srcPathPrefix]]css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="[[$srcPathPrefix]]js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="[[$srcPathPrefix]]js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="[[$srcPathPrefix]]css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$(\'.popup-with-zoom-anim\').magnificPopup({
					type: \'inline\',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: \'auto\',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: \'my-mfp-zoom-in\'
			});
		});
		</script>
		
		<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->
		
    </head>
    <body itemscope itemtype="http://schema.org/[[*class_key:is=`Ticket`:then=`Article`:else=`WebSite`]]">
        <!-- Social: Google+ / Schema.org  -->
        <meta itemprop="name" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta itemprop="description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]">
        <link itemprop="image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=1000&h=700`]]`:default=`[[++basetheme.design_url]]images/iconsite/social-image.png`]]">',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'srcPathPrefix' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'srcPathPrefix',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '../assets/basetheme-design/',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/basetheme-elements/chunks/base/srcPathPrefix.tpl',
          'content' => '../assets/basetheme-design/',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'headerBaseAlt' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'headerBaseAlt',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '
<div class="header">	
    <div class="wrap"> 
      	<div class="header-top">
	         <div class="logo">
				<a href="index.html"><img src="[[$srcPathPrefix]]images/logo.png" alt=""/></a>
			 </div>
			  <div class="cssmenu">
								        
			        [[pdoMenu?
                        &parents=`0`
                        &level=`1`
                        &showHidden=`0`
                                            
                    ]]
					
			<!--	    
					<ul>
						<li><a href="[[++site_url]]">Home</a></li> 
						<li><a href="[[~7]]">Plans & Pricing</a></li> 
						<li><a href="[[~3]]">Blog</a></li> 
						<li><a href="[[~6]]">Features</a></li> 
						<li><a href="[[~5]]">Contact</a></li>
					</ul>
					
					-->
					
			    </div>
		       <div class="clear"></div>
		 </div>

		<!-- НАЧАЛО ЭКРАНИРОВАНИЯ СЛАЙДЕРА
		 
	     <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						</div>
						<div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/3.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		<div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
					     <div class="clear"></div>
					 </div>
			      </article>
				</div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
               </ul>
        </div>
		
            	 <script src="[[$srcPathPrefix]]js/jquery.wmuSlider.js"></script> 
				       <script>
       						 $(\'.example1\').wmuSlider();         
   						</script> 	           	      
      </div>
	  
		КОНЕЦ ЭКРАНИРОВАНИЯ СЛАЙДЕРА -->
				
	</div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/basetheme-elements/chunks/base/headerBaseAlt.tpl',
          'content' => '
<div class="header">	
    <div class="wrap"> 
      	<div class="header-top">
	         <div class="logo">
				<a href="index.html"><img src="[[$srcPathPrefix]]images/logo.png" alt=""/></a>
			 </div>
			  <div class="cssmenu">
								        
			        [[pdoMenu?
                        &parents=`0`
                        &level=`1`
                        &showHidden=`0`
                                            
                    ]]
					
			<!--	    
					<ul>
						<li><a href="[[++site_url]]">Home</a></li> 
						<li><a href="[[~7]]">Plans & Pricing</a></li> 
						<li><a href="[[~3]]">Blog</a></li> 
						<li><a href="[[~6]]">Features</a></li> 
						<li><a href="[[~5]]">Contact</a></li>
					</ul>
					
					-->
					
			    </div>
		       <div class="clear"></div>
		 </div>

		<!-- НАЧАЛО ЭКРАНИРОВАНИЯ СЛАЙДЕРА
		 
	     <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						</div>
						<div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/3.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		<div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/1.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-left">
						    <img src="[[$srcPathPrefix]]images/2.png" alt=""/> 
						 </div>
					   	<div class="slider-right">
							<h3>consectetuer adipiscing :<br>Lorem ipsum dolor</h3>
							<p class="top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						    <p class="middle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="btn"><a href="plans.html">More Details</a></div>
						 </div>
					     <div class="clear"></div>
					 </div>
			      </article>
				</div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
               </ul>
        </div>
		
            	 <script src="[[$srcPathPrefix]]js/jquery.wmuSlider.js"></script> 
				       <script>
       						 $(\'.example1\').wmuSlider();         
   						</script> 	           	      
      </div>
	  
		КОНЕЦ ЭКРАНИРОВАНИЯ СЛАЙДЕРА -->
				
	</div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'indexContent' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'indexContent',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '	   <div class="main">
	   	  <div class="wrap">
	   	    <div class="content-top">
				
				[[!pdoResources?
					&showHidden=`1`
					&includeContent=`1`
					&hideContainers=`1`
					&includeTVs=`mainArticleImage`
					&processTVs=`1`
							
					&parents=`[[++basetheme.id_blog]]`
					&depth=`0`
					&limit=`4`
					&debug=`0`
					&tpl=`articleHomePreviewTpl`
				]]
				
				<div class="clear"></div>
			</div>
		 
		 <!-- НАЧАЛО ЭКРАНИРОВАНИЯ ПОРТФОЛИО
		 
	     <div class="content-middle">
			<div class="middle-top">
		        <h2>Recent Work</h2>
				 <ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="app card icon logo web"> </span></li>
					<li><span class="filter" data-filter="app"> </span></li>
					<li><span class="filter active" data-filter="app card icon logo1 web"> </span></li>
				 </ul>
			    <div class="clear"></div>
			</div>
		    <div class="container">
		        <div id="portfoliolist" style="     " class="">
		           <div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
					 <div class="portfolio-wrapper">	
						<p class="low-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit tempor incididunt</p>
						<p class="thick">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					 </div>
				   </div>	
		 <div class="portfolio-right">
		   <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic.jpg" alt="image"></a>
        		<h3><a href="project.html">Project One</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic1.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Two</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic2.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Three</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
			<div class="clear"></div>
		  </div>
		  <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic3.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Four</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic4.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Five</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic5.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Six</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
    		<div class="clear"></div>
		  </div>
		</div>
			<div class="clear"></div>
		</div>
		  <div class="clear"></div>
	    </div>
	</div>
	<script type="text/javascript" src="[[$srcPathPrefix]]js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$(\'#portfoliolist\').mixitup({
					targetSelector: \'.portfolio\',
					filterSelector: \'.filter\',
					effects: [\'fade\'],
					easing: \'snap\',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$(\'#portfoliolist .portfolio\').hover(
					function () {
						$(this).find(\'.label\').stop().animate({bottom: 0}, 200, \'easeOutQuad\');
						$(this).find(\'img\').stop().animate({top: -30}, 500, \'easeOutQuad\');				
					},
					function () {
						$(this).find(\'.label\').stop().animate({bottom: -40}, 200, \'easeInQuad\');
						$(this).find(\'img\').stop().animate({top: 0}, 300, \'easeOutQuad\');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
	
	КОНЕЦ ЭКРАНИРОВАНИЯ ПОРТФОЛИО-->
	
	  </div>
   </div>
   	',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/basetheme-elements/chunks/content/indexContent.tpl',
          'content' => '	   <div class="main">
	   	  <div class="wrap">
	   	    <div class="content-top">
				
				[[!pdoResources?
					&showHidden=`1`
					&includeContent=`1`
					&hideContainers=`1`
					&includeTVs=`mainArticleImage`
					&processTVs=`1`
							
					&parents=`[[++basetheme.id_blog]]`
					&depth=`0`
					&limit=`4`
					&debug=`0`
					&tpl=`articleHomePreviewTpl`
				]]
				
				<div class="clear"></div>
			</div>
		 
		 <!-- НАЧАЛО ЭКРАНИРОВАНИЯ ПОРТФОЛИО
		 
	     <div class="content-middle">
			<div class="middle-top">
		        <h2>Recent Work</h2>
				 <ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="app card icon logo web"> </span></li>
					<li><span class="filter" data-filter="app"> </span></li>
					<li><span class="filter active" data-filter="app card icon logo1 web"> </span></li>
				 </ul>
			    <div class="clear"></div>
			</div>
		    <div class="container">
		        <div id="portfoliolist" style="     " class="">
		           <div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
					 <div class="portfolio-wrapper">	
						<p class="low-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit tempor incididunt</p>
						<p class="thick">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					 </div>
				   </div>	
		 <div class="portfolio-right">
		   <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic.jpg" alt="image"></a>
        		<h3><a href="project.html">Project One</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic1.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Two</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic2.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Three</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
			<div class="clear"></div>
		  </div>
		  <div class=portfolio-top>
			<div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic3.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Four</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>		
		    <div class="product_box margin_r_10">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic4.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Five</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>
			<div class="product_box margin_r_last">
				<a href="project.html"><img src="[[$srcPathPrefix]]images/pic5.jpg" alt="image"></a>
        		<h3><a href="project.html">Project Six</a></h3>
        		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm. <a href="project.html">More...</a></p>
    		</div>	
    		<div class="clear"></div>
		  </div>
		</div>
			<div class="clear"></div>
		</div>
		  <div class="clear"></div>
	    </div>
	</div>
	<script type="text/javascript" src="[[$srcPathPrefix]]js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$(\'#portfoliolist\').mixitup({
					targetSelector: \'.portfolio\',
					filterSelector: \'.filter\',
					effects: [\'fade\'],
					easing: \'snap\',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$(\'#portfoliolist .portfolio\').hover(
					function () {
						$(this).find(\'.label\').stop().animate({bottom: 0}, 200, \'easeOutQuad\');
						$(this).find(\'img\').stop().animate({top: -30}, 500, \'easeOutQuad\');				
					},
					function () {
						$(this).find(\'.label\').stop().animate({bottom: -40}, 200, \'easeInQuad\');
						$(this).find(\'img\').stop().animate({top: 0}, 300, \'easeOutQuad\');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
	
	КОНЕЦ ЭКРАНИРОВАНИЯ ПОРТФОЛИО-->
	
	  </div>
   </div>
   	',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footerBase' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footerBase',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '
	<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->
	
	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_footer span_1_of_footer">
					<h3>About Portfolio</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venia sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Recent Posts</h3>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<div class="link"><a href="#">View all Posts</a></div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Twitter Widget</h3>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 1 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 2 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Flickr Widget</h3>
					<div class="gallery">
						<ul>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g1.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g2.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g3.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g4.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g5.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g6.jpg" alt=""/></a></li>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<img src="[[$srcPathPrefix]]images/g_zoom.jpg" alt=""/>
									<h2>Photo View</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  			</div>
							</div>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

 <div class="footer-bottom">
	 	   <div class="wrap">
		 	 <div class="footer-logo">
				<a href="index.html"><img src="[[$srcPathPrefix]]images/logo.png" alt=""/></a>
			 </div>
		 	<div class="copy">
			     <p>© 2014 Design by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		 	<div class="clear"></div>
	      </div>
		</div>
	</div>
	
	<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->

[[++basetheme.ga_tracking_id:notempty=`
<script>
    (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
    ga(\'create\', \'[[++basetheme.ga_tracking_id]]\', \'[[++basetheme.ga_tracking_name]]\');
    ga(\'send\', \'pageview\');
</script>
`]]
</body>
</html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/basetheme-elements/chunks/base/footerBase.tpl',
          'content' => '
	<!-- НАЧАЛО ВРЕЗКИ ТЕМЫ -->
	
	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_footer span_1_of_footer">
					<h3>About Portfolio</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venia sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Recent Posts</h3>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<p class="txt2"><span class="txt3">soluta nobis eleifend option</span><br>Lorem ipsum dolor sit amet, consectetuer.</p>
					<div class="link"><a href="#">View all Posts</a></div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Twitter Widget</h3>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 1 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="recent-tweet">
						<div class="recent-tweet-icon">
							<span> </span>
						</div>
						<div class="recent-tweet-info">
							<p>Ds which don\'t look even slightly believable. If you are going to use nibh euismod tincidunt ut laoreet<a href="#">About 2 Hour Ago</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="col_1_of_footer span_1_of_footer">
					<h3>Flickr Widget</h3>
					<div class="gallery">
						<ul>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g1.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g2.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g3.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g4.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g5.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="[[$srcPathPrefix]]images/g6.jpg" alt=""/></a></li>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<img src="[[$srcPathPrefix]]images/g_zoom.jpg" alt=""/>
									<h2>Photo View</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  			</div>
							</div>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

 <div class="footer-bottom">
	 	   <div class="wrap">
		 	 <div class="footer-logo">
				<a href="index.html"><img src="[[$srcPathPrefix]]images/logo.png" alt=""/></a>
			 </div>
		 	<div class="copy">
			     <p>© 2014 Design by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		 	<div class="clear"></div>
	      </div>
		</div>
	</div>
	
	<!-- КОНЕЦ ВРЕЗКИ ТЕМЫ -->

[[++basetheme.ga_tracking_id:notempty=`
<script>
    (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
    ga(\'create\', \'[[++basetheme.ga_tracking_id]]\', \'[[++basetheme.ga_tracking_name]]\');
    ga(\'send\', \'pageview\');
</script>
`]]
</body>
</html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'phpthumbof' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'phpthumbof',
          'description' => 'Identical to pthumb. Retained for backwards compatibility.
Documentation: https://github.com/oo12/phpThumbOf',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '/**
 * pThumb
 * Copyright 2013-2014 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * Forked from phpThumbOf 1.4.0
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 */
/**
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $input
 * @var string|array $options
 *
 */

if (empty($input)) {  // Exit quietly if no file name given
	return;
}

$scriptProperties[\'debug\'] = isset($debug) ? $debug : false;


static $pt_settings = array();

if (empty($pt_settings)) {
	if (!$modx->loadClass(\'phpThumbOf\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load phpThumbOf class.\');
		return $input;
	}
}

$pThumb = new phpThumbOf($modx, $pt_settings, $scriptProperties);

$result = $pThumb->createThumbnail($input, $options);

if (!empty($toPlaceholder) || $result[\'outputDims\']) {
	if ($result[\'width\'] === \'\' && $result[\'file\'] && $dims = getimagesize($result[\'file\']) ) {
			$result[\'width\'] = $dims[0];
			$result[\'height\'] = $dims[1];
	}
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholders(array(
			$toPlaceholder => $result[\'src\'],
			"$toPlaceholder.width" => $result[\'width\'],
			"$toPlaceholder.height" => $result[\'height\']
		));
		$output = \'\';
	}
	if ($result[\'outputDims\']) {
		$output = "src=\\"{$result[\'src\']}\\"" . ($result[\'width\'] ? " width=\\"{$result[\'width\']}\\" height=\\"{$result[\'height\']}\\"" : \'\');
	}
}
else {
	$output = $result[\'src\'];
}

if ($debug && $result[\'success\']) {  // if debugging is on and createThumbnail was successful, log the debug info
	$pThumb->debugmsg(isset($pThumb->phpThumb->debugmessages) ? \':: Processed ::\' : ":: Loaded from cache: {$result[\'src\']}", true);
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_pthumb.debug_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'phpthumbof:default',
              'area' => '',
              'desc_trans' => 'Write debug messages to the MODX error log.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * pThumb
 * Copyright 2013-2014 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * Forked from phpThumbOf 1.4.0
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 */
/**
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $input
 * @var string|array $options
 *
 */

if (empty($input)) {  // Exit quietly if no file name given
	return;
}

$scriptProperties[\'debug\'] = isset($debug) ? $debug : false;


static $pt_settings = array();

if (empty($pt_settings)) {
	if (!$modx->loadClass(\'phpThumbOf\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load phpThumbOf class.\');
		return $input;
	}
}

$pThumb = new phpThumbOf($modx, $pt_settings, $scriptProperties);

$result = $pThumb->createThumbnail($input, $options);

if (!empty($toPlaceholder) || $result[\'outputDims\']) {
	if ($result[\'width\'] === \'\' && $result[\'file\'] && $dims = getimagesize($result[\'file\']) ) {
			$result[\'width\'] = $dims[0];
			$result[\'height\'] = $dims[1];
	}
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholders(array(
			$toPlaceholder => $result[\'src\'],
			"$toPlaceholder.width" => $result[\'width\'],
			"$toPlaceholder.height" => $result[\'height\']
		));
		$output = \'\';
	}
	if ($result[\'outputDims\']) {
		$output = "src=\\"{$result[\'src\']}\\"" . ($result[\'width\'] ? " width=\\"{$result[\'width\']}\\" height=\\"{$result[\'height\']}\\"" : \'\');
	}
}
else {
	$output = $result[\'src\'];
}

if ($debug && $result[\'success\']) {  // if debugging is on and createThumbnail was successful, log the debug info
	$pThumb->debugmsg(isset($pThumb->phpThumb->debugmessages) ? \':: Processed ::\' : ":: Loaded from cache: {$result[\'src\']}", true);
}

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'pdofield' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoField',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'id' => 
            array (
              'name' => 'id',
              'desc' => 'pdotools_prop_id',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса.',
              'area_trans' => '',
            ),
            'field' => 
            array (
              'name' => 'field',
              'desc' => 'pdotools_prop_field',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 'pagetitle',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_field_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Контекст ресурса, для выборки его родителей. Нужен для работы параметров "&top" и "&topLevel".',
              'area_trans' => '',
            ),
            'top' => 
            array (
              'name' => 'top',
              'desc' => 'pdotools_prop_top',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&top".',
              'area_trans' => '',
            ),
            'topLevel' => 
            array (
              'name' => 'topLevel',
              'desc' => 'pdotools_prop_topLevel',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&topLevel" от корня контекста.',
              'area_trans' => '',
            ),
            'default' => 
            array (
              'name' => 'default',
              'desc' => 'pdotools_prop_field_default',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите дополнительное поле ресурса, которое вернётся, если "&field" окажется пуст.',
              'area_trans' => '',
            ),
            'output' => 
            array (
              'name' => 'output',
              'desc' => 'pdotools_prop_field_output',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Указанная здесь строка вернётся, если и "&default" и "&field" оказались пусты.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'ultimate' => 
            array (
              'name' => 'ultimate',
              'desc' => 'pdotools_prop_ultimate',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Параметры &top и &topLevel работают как в сниппете UltimateParent.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdofield.php',
          'content' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
	$scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
	$tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
	$data = $pdoMenu->pdoTools->run();
	$data = $pdoMenu->pdoTools->buildTree($data);
	$tree = array();
	foreach ($data as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}
	if ($cache) {
		$pdoMenu->pdoTools->setCache($tree, $scriptProperties);
	}
}
if (!empty($tree)) {
	$output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша, в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пунтка меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертки внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пунка меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, каеи разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
	$scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
	$tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
	$data = $pdoMenu->pdoTools->run();
	$data = $pdoMenu->pdoTools->buildTree($data);
	$tree = array();
	foreach ($data as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}
	if ($cache) {
		$pdoMenu->pdoTools->setCache($tree, $scriptProperties);
	}
}
if (!empty($tree)) {
	$output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoResources' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoResources',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = $snippet->get(\'properties\');
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, array(\'output\' => $output)), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'pdotools_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Возвращать строку со списком id ресурсов, вместо оформленных результатов.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'publishedon',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'pdotools_prop_sortbyTV',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сортировка по ТВ параметру. Если он не указан в &includeTVs, то будет подключен автоматически.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'pdotools_prop_sortbyTVType',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Тип сортировки по ТВ параметру. Возможные варианты: string, integer, decimal и datetime. Если пусто, то ТВ будет отсортирован в зависимости от его типа: как текст, число или дата.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'pdotools_prop_sortdirTV',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки ТВ: по убыванию или возрастанию. Если не указан, то будет равен параметру &sortdir.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'pdotools_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Глубина поиска дочерних ресурсов от родителя.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'pdotools_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включаем поле "content" в выборку.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'pdotools_prop_tvFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список фильтрова по ТВ, с разделителями AND и OR. Разделитель, указанный в параметре "&tvFiltersOrDelimiter" представляет логическое условие OR и по нему условия группируются в первую очередь.  Внутри каждой группы вы можете задать список значений, разделив их "&tvFiltersAndDelimiter". Поиск значений может проводиться в каком-то конкретном ТВ, если он указан ("myTV==value"), или в любом ("value"). Пример вызова: "&tvFilters=`filter2==one,filter1==bar%||filter1==foo`". <br />Обратите внимание: фильтрация использует оператор LIKE и знак "%" является метасимволом. <br />И еще: Поиск идёт по значениям, которые физически находятся в БД, то есть, сюда не подставляются значения по умолчанию из настроек ТВ.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'pdotools_prop_tvFiltersAndDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий AND в параметре "&tvFilters". По умолчанию: ",".',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'pdotools_prop_tvFiltersOrDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '||',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий OR в параметре "&tvFilters". По умолчанию: "||".',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'pdotools_prop_idx',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вы можете указать стартовый номер итерации вывода результатов.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'pdotools_prop_first',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер первой итерации вывода результатов.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'pdotools_prop_last',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер последней итерации вывода результатов. По умолчанию он рассчитается автоматически, по формуле (total + first - 1).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'pdotools_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для первого ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'pdotools_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для последнего ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'pdotools_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для каждого второго ресурса.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'pdotools_prop_tplCondition',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса, из которого будет получено значение для выбора чанка по условию в "conditionalTpls".',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'pdotools_prop_tplOperator',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательный оператор для проведения сравнения поля ресурса в "tplCondition" с массивом значений и чанков в "conditionalTpls".',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'pdotools_prop_conditionalTpls',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'JSON строка с массивом, у которого в ключах указано то, с чем будет сравниваться "tplCondition", а в значениях - чанки, которые будут использованы для вывода, если сравнение будет успешно. Оператор сравнения указывается в "tplOperator". Для операторов типа "isempty" можно использовать массив без ключей.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'pdotools_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если вы укажете слово в этом параметре, то ВСЕ результаты будут выставлены в разные плейсхолдеры, начинающиеся с этого слова и заканчивающиеся порядковым номером строки, от нуля. Например, указав в параметре "myPl", вы получите плейсхолдеры [[+myPl0]], [[+myPl1]] и т.д.',
              'area_trans' => '',
            ),
            'loadModels' => 
            array (
              'name' => 'loadModels',
              'desc' => 'pdotools_prop_loadModels',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список компонентов, через запятую, чьи модели нужно загрузить для построения запроса. Например: "&loadModels=`ms2gallery,msearch2`".',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
          'content' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = $snippet->get(\'properties\');
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, array(\'output\' => $output)), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);