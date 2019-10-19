<?php get_header(); ?>
<div class="container-fluid">
    <div class="hero">

    </div>
    <div id="product-container">
        <div class="product-table container">
            <div class="row title-row">
                <div class="col-12">
                    <h1 class="main-title text-center">TOURS</h1>
                </div>
            </div>
            <div class="product-row">
                <?php
                query_posts('cat=182');

                if (have_posts()) :
                    while (have_posts()) : the_post();
                        /*if (in_category('182')) {*/
                        ?>
                        <div class="product-box" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                            the_post_thumbnail_url();
                                                                                        } ?>)">
                            <a class="product-link" href="<?php the_permalink() ?>">
                                <?php the_title('<h3>', '</h3>', true); ?>
                            </a>
                        </div>
                <?php
                    /*}*/
                    endwhile;
                endif;

                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
    <?php include 'assets/includes/article-carousel.php' ?>
</div>
<?php get_footer(); ?>