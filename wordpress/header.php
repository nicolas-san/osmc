<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="<?php echo get_bloginfo ( 'description' );  ?>">

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#f0f0f0">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/mstile-144x144.png">
        <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/mstile-70x70.png">
        <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/mstile-150x150.png">
        <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/mstile-310x310.png">
        <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/mstile-310x150.png">
        
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="OSMC Feed" href="/feed?cat=-42" />
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					<div id="inner-header-content">
						<div id="logo-img"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-l.png"></a></div>
							<?php // if you'd like to use the site description you can un-comment it below ?>
							<?php // bloginfo('description'); ?>

							<nav role="navigation" class="pure-menu-horizontal nav-header">
								<?php bones_main_nav(); ?>
							</nav>
							<i class="fa fa-bars" id="nav-res-toggle"></i>
					</div>
				</div> <?php // end #inner-header ?>

			</header> <?php // end header ?>
