<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Surflog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://gmpg.org/xfn/11" rel="profile">

	<?php wp_head(); ?>


</head>

<body>
<header>
        <div class="logo-container">
            <a href="<?php echo get_home_url(); ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                echo '<img class="logo" src="' . esc_url($custom_logo_url) . '" alt="logo">';
                ?>
            </a>
        </div>

        <?php wp_nav_menu (

            array(

                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )

             /* wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'main-menu'
        )); */

        );?>

       
        <div id="burger-menu">&#9776;</div>
    </header>
