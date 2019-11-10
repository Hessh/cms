<?php get_header(); ?>
<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title">Explore your surfing opportunities</h1>
        <h2 class="title text-center">Find the best one, and go surf</h2>
        <div class="overlay"></div>
        <div class="hero-img"></div>
    </div>
    <div class="product-container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 order-sm-one">
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

    <?php
    include 'assets/includes/post-carousel.php';
    ?>
</div>

<?php get_footer(); ?>