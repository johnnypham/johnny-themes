<?php
/**
 * Template Name: Portfolio Page
 *
 * Description: Johnny Dev
 * 
 *
 * Tip: Everthing Dev.
 *
 * @package WordPress
 * @subpackage Johnny_Themes
 * @since Johnny Themes 1.0
 */?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Portfolio | Johnny Pham</title>
		<meta name="description" content="Four Boxes Slideshow: Recreating the background image slideshow seen on Atelier Serge Thoroval's website" />
		<meta name="keywords" content="background slideshow, boxes, background image, four panels, css, tutorial" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
		<!--Menu-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu-primary/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu-primary/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu-primary/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/menu-primary/css/menu_bubble.css" />
		<script src="<?php bloginfo('template_directory'); ?>/menu-primary/js/snap.svg-min.js"></script>


		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--Menu-->	
	<script src="<?php bloginfo('template_directory'); ?>/search-fitter/js/jquery-2.1.1.js"></script>


		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/portfolio/css/component.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/hover/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/portfolio/css/default.css" />
		<script src="<?php bloginfo('template_directory'); ?>/portfolio/js/modernizr.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/hover/js/jquery.hoverdir.js"></script>	
	
<!--Search-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/search-fitter/css/style.css"> <!-- Resource style -->
	<script src="<?php bloginfo('template_directory'); ?>/search-fitter/js/modernizr.js"></script> <!-- Modernizr -->
<!--Search-->
	<style>
.menu-wrap a {
font-family:  'Open Sans', Arial, Tahoma;

}
</style>
	</head>

<body style="background:#fff" >
		<div class="container-1">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="http://vienpn.16mb.com/"><i class="fa fa-home"></i><span>Home</span></a>
						<a href="http://vienpn.16mb.com/?page_id=5"><i class="fa fa-archive"></i><span>Profile</span></a>
						<a href="http://vienpn.16mb.com/?page_id=14"><i class="fa fa-file-o"></i><span>Resume</span></a>
						<a href="#"><i class="fa fa-newspaper-o"></i><span>News</span></a>
						<a href="#"><i class="fa fa-inbox fa-envelope-o"></i><span>Contact</span></a>
						<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Analytics</span></a>

						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Reading List</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
					</svg>
				</div>
			</div>	
			<button class="menu-button" id="open-button">Open Menu</button>				
		</div>
		<div  style="height:auto;overflow: visible;background:#fff" class="container">
		
			<div class="main" style="margin-top:90px">
				<div style="display:none;width:100%;margin:0 auto;text-align:center">
					<a class="search_filter" id="wordpress" data-id="wordpress" href="#">Wordpress</a>
					<a class="search_filter" id="html" data-id="html" href="#">HTML/CSS - Bootstrap</a>
					<a class="search_filter" id="responsive" data-id="responsive" href="#">RESPONSIVE</a>
					<a class="search_filter" id="template" data-id="template-email" href="#">Template Email</a>
					<a class="search_filter" id="banner" data-id="baner" href="#">Baner</a>
					<a class="search_filter" id="node" data-id="node" href="#">Node</a>
				</div>
				<ul style="display:none"id="og-grid1" class="og-grid">
					<li data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="responsive">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="responsive">
	
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="responsive">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="html">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="responsive">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
			
					<li data-search="responsive">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
										
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="template">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
						
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						</a>
					</li>
					<li data-search="banner">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="node">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="node">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="node">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="node">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li data-search="node">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
				</ul>
				
			</div>
		</div><!-- /container -->
<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Html/Css</a></li>
					<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Wordpress</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="main cd-gallery">
			
				<ul id="og-grid" class="og-grid">
					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>

					<li class="mix color-1 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/>
						
							<div><span>Word Press</span></div>
						</a>

					</li>
					<li class="mix color-2 check3 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/2.jpg" alt="img02"/>
						<div><span>Word Press</span></div>
						</a>
					</li>
					<li class="mix color-2 check1 radio2 option3" data-search="wordpress">
						<a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/3.jpg" alt="img03"/>
						<div><span>Word Press</span></div>
						</a>
					</li>


				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					
					<div class="cd-filter-content">
						<input style="width:90%" type="search" placeholder="Try color-1...">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Check boxes</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">Option 1</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">Option 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Option 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Select</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".option1">Option 1</option>
								<option value=".option2">Option 2</option>
								<option value=".option3">Option 3</option>
								<option value=".option4">Option 4</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
		<script>
			
		</script>
		<script src="<?php bloginfo('template_directory'); ?>/portfolio/js/grid.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/portfolio/js/modernizr.custom.js"></script>
		<script>
			jQuery(function() {
				 $(' #og-grid>li>a ').each( function() { $(this).hoverdir(); } );

				// jQuery('.search_filter').on('click',function(){


				// 	jQuery('#og-grid').find('li').css('display','none');
				// 	var rearch = jQuery(this).attr('id');
				// 	jQuery('#og-grid').find('li[data-search=' + rearch +']').css('display','inline-block');
					
					
					
				// 	Grid.init();
				// 					})
				Grid.init();
			//	Grid.init({id:'#og-grid-2'});
				//Grid.init({id:'#og-grid-3'});

				// adding more items
				//jQuery('#og-additems').on( 'click', function() {
				//	var $items = jQuery( '<li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="#" data-largesrc="<?php bloginfo('template_directory'); ?>/portfolio/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="<?php bloginfo('template_directory'); ?>/portfolio/images/thumbs/1.jpg" alt="img01"/></a></li>' ).appendTo( $( '#og-grid' ) );
					
				//	Grid.addItems( $items );
				//	return false;
				//} );
// jQuery('#og-grid').find('a').on('click',function(){
// 	if(jQuery(this).parent().height()!=250){
// 		console.log(jQuery(this));
// 		jQuery(this).parent().css({'height':'250px'})
// 		console.log(jQuery(this).parent().height());
// 	}
	
// 	console.log(jQuery(this).parent().height());
// })
			});
		</script>

				<script src="<?php bloginfo('template_directory'); ?>/menu-primary/js/classie.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/menu-primary/js/main4.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/search-fitter/js/jquery.mixitup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/search-fitter/js/main.js"></script> <!-- Resource jQuery -->
	</body>
</html>