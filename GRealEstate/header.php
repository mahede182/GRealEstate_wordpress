<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php echo language_attributes();?>"> <!--<![endif]-->
<!-- langueges set in back end -->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<!-- Now you can select in dashboard charset... -->
	<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/<?php echo get_template_directory_uri();?>/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
		<?php wp_head(); ?>
</head>
<body <?php body_class('home-page');?>>
<!-- include custom class in body. it help for SEO -->
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="<?php echo site_url();?>">Home</a></li>
				   <li><a href="<?php echo site_url('/about');?>">About</a></li>
				   <li><a href="<?php echo site_url('/projects');?>">Projects</a></li>
				   <li><a href="<?php echo site_url('/contact');?>">Contact</a></li>
				</ul>
			</div>
			<a href='<?php echo site_url();?>' class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" /></a>
		</div>
	</div>
</header>