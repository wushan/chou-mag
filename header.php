<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <style>
    /*#loader-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 2000;
      background-color: #ffffff;
      -webkit-transition: 0.3s all ease-in-out;
      transition: 0.3s all ease-in-out;
    }
    #loader-overlay p {
      display: block;
      width: 300px;
      height: 140px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -70px 0 0 -150px;
    }
    #loader-overlay img {
      display: block;
      width: 70px;
      height: 70px;
      margin: 0 auto 15px auto;
    }*/

    </style>
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
    <style>
      #wpadminbar {
        display: none;
      }
      html {
        margin-top: 0 !important;
      }

    </style>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	 <!-- <div id="loader-overlay">
    <p>
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/infinity.gif">
      讀取中，若等待時間過長，請按強制重新整理 Ctrl + F5 ( Command + Shift + R )
    </p>
   </div> -->
  <!-- SB-Sites -->
		<div id="sb-site">
		<div id="container">

			<header class="header header-fix" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" itemscope itemtype="http://schema.org/Organization">
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<svg width="203px" height="34px" viewBox="0 0 203 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
							    <!-- Generator: Sketch 3.2.2 (9983) - http://www.bohemiancoding.com/sketch -->
							    <title>chou  chou + /</title>
							    <desc>Created with Sketch.</desc>
							    <defs></defs>
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							        <g id="chou--chou-+-/" sketch:type="MSLayerGroup" transform="translate(-1.000000, -10.000000)" font-size="48" font-family="Baskerville" fill="#FFFFFF" font-weight="normal">
							            <text id="chou/chou" sketch:type="MSTextLayer">
							                <tspan x="0" y="43">chou</tspan>
							                <tspan x="94.4765625" y="43" font-size="29">/</tspan>
							                <tspan x="109.585449" y="43">chou</tspan>
							            </text>
							        </g>
							    </g>
							</svg>

						</a>
					</p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<a href="javascript:;" class="sb-toggle-left mobile-trigger js-mobile-trigger">
							<i class="fa fa-bars fa-2x"></i>
						</a>
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
            <ul class="nav panel">
              <li>
                <a href="<?php echo home_url(); ?>/wp-login.php?action=register">Sign in</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/wp-login.php">login</a>
              </li>
            </ul>
					</nav>

				</div>

			</header>
