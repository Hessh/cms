<?php
get_header();
$count_posts = wp_count_posts();

$published_posts = $count_posts->publish;

$number_of_pages = ceil($published_posts / $posts_per_page);

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<div class="container-fluid">
    <div class="hero">

    </div>
    <div id="blogg-container">
        <div class="blogg-table">
            <div class="row title-row">
                <div class="col-12">
                    <h1 class="main-title text-center">BLOG</h1>
                </div>
            </div>
            <div class="blogg-row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        if (in_category('Blog')) {
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
                        }
                    endwhile;
                endif;
                ?>
            </div>
            <div id="blogg-nav">
                <?php previous_posts_link("<"); ?>
                <span id="page-counter"><?php echo $paged; ?> / <?php echo $number_of_pages ?></span>
                <?php next_posts_link(">"); ?>
            </div>
        </div>
    </div>
    <?php include 'assets/includes/surfer.php'; ?>
</div>
<?php get_footer() ?>