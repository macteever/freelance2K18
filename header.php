<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="https://twitter.com/Webmaster_bdx" rel="publisher" />
		<link href="https://www.facebook.com/webmaster.bordeaux/" rel="publisher" />
		<link href="https://www.linkedin.com/in/nicolas-metivier-b169a8115/" rel="publisher" />

    	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
    	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="page-loader">
			<img class="m-l-auto m-r-auto" src="<?=get_template_directory_uri().'/assets/img/logo-neutreB.svg'?>" alt="Webmaster Création de Site Internet Bordeaux Poitiers Nicolas Métivier"/>
		</div>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header anim-300 clear" role="banner">
				<!-- nav -->
				<div class="container-fluid menu-container anim-300">
                 <?php require 'includes/header-left.php'; ?>
            </div>
				<!-- /nav -->
			</header>
			<!-- /header -->
			<nav class="nav-mobile" role="navigation">
				<div class="row h-100 align-items-center">
					<?php wp_nav_menu( array( 'theme_location' => 'burger-menu' ) ); ?>
				</div>
			</nav>
