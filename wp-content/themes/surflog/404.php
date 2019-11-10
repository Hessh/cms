<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Surflog
 */

get_header();
?>

<div class="container-fluid" style="min-height: calc(100vh - 10rem)">
	<div class="container">
		<h2>Ooops, page not found</h2>
		<a href="javascript:history.back()"><button>Go Back</button></a>
	</div>
</div>

<?php
get_footer();
