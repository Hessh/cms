<?php
/*
Plugin Name: Scroll To Top
Description: Button that scrolls page to top
Author:      Håkon Hess
Version:     1.0
*/

wp_enqueue_style("scroll-to-top", plugin_dir_url('__FILE__') . "scroll-to-top/scroll-to-top.css");
wp_enqueue_script("scroll-to-top", plugin_dir_url('__FILE__') . "scroll-to-top/scroll-to-top.js");

function scroller()
{
    echo '<button class="scroll-button" onclick="topScroll()"><span class="material-icons">arrow_upward</span></button>';
}

function scrollerShortcode()
{
	ob_start();
	scroller();

	return ob_get_clean();
}

add_shortcode('scroll-to-top', 'scrollerShortcode');
