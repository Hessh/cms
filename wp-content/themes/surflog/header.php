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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://gmpg.org/xfn/11" rel="profile">

    <?php wp_head(); ?>


</head>

<body>
    <header class="header-front-page">
        <div class="header-left">
            <a href="<?php echo get_home_url(); ?>">
                <img src="http://hessh.no/cms/wp-content/uploads/2019/10/logo-orange.png" alt="SurfGuru logo">
            </a>
        </div>
        <div class="header-right">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container' => 'nav',
                    'menu_class' => 'navigation'
                )
            ); ?>
        </div>
    </header>