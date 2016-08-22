<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lees_Art
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

 <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- FontAwesome Icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

 <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
   

<?php wp_head(); ?>

 <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lees_art' ); ?></a>

	<!-- ====================================================== HEADER ====================================================== -->  

   <header class='navbar navbar-default navbar-static-top'>
    <nav class='container' role='navigation'>
        <div class='navbar-header brand-name'>
    
        <a href='index.html' class='pull-left brand-font'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lee-logo8.png" class="img-responsive lees-logo" alt="Lee's Art logo"></a>

        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
        </button>
        </div><!-- Navbar Header -->

		<?php
			wp_nav_menu( array(

				'theme_location'   => 'primary',
				'container'	       => 'nav',
				'container_class'  => 'navbar-collapse collapse',	
				'menu_class'	   => 'nav navbar-nav navbar-right',	
			) );
		?>

       
    	</nav>
    </header>
