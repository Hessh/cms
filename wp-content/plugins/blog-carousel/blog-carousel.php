<?php
/*
Plugin Name: blog-carousel
Plugin URI:  https://hessh.no/cms/
Description: Carousel for blog posts
Author:      Sofie Jønsson
Author URI:  webpage relevant for author
Version:     plugin version
License:     GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'Hey, you dont have access to this file!' );

class blog-carousel {

   function __construct() {

    }

}

if ( class_exists( 'blog-carousel' ) ) {
    $blog-carousel = new blog-carousel();
}