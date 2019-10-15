<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Surflog
 */

get_header();
$count_posts = wp_count_posts();

$published_posts = $count_posts->publish;

$number_of_pages = ceil($published_posts / $posts_per_page);

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<div id="blogg-container">
    <div class="blogg-table">
        <div class="row title-row">
            <div class="col-12">
                <h1 class="main-title text-center">BLOGG</h1>
            </div>
        </div>
        <div class="blogg-row">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
            <div class="article-box">
                <div class="blogg-banner">
                    <a href="<?php the_permalink() ?>">
                        <img src="<?php if (has_post_thumbnail()) {
                                                the_post_thumbnail_url();
                                            } ?>"></a>
                </div>
                <a href="<?php the_permalink() ?>">
                    <?php the_title('<h3>', '</h3>', true); ?>
                    <?php the_excerpt() ?>
                    <button>Les mer</button>
                </a>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div id="blogg-nav">
            <?php previous_posts_link("<");?>
            <span id="page-counter"><?php echo $paged; ?> / <?php echo $number_of_pages ?></span>
            <?php next_posts_link(">");?>
        </div>
    </div>
</div>
<?php get_footer() ?>

<?php/*
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			/*while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 *
				*get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();*/
?>