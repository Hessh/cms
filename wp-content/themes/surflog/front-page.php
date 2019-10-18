<?php get_header("front-page"); ?>
<div id="blogg-container">
    <div class="blogg-table">
        <div class="row title-row">
            <div class="col-12">
                <h1 class="main-title text-center">PRODUCT</h1>
            </div>
        </div>
        <div class="blogg-row">
            <?php
            query_posts('cat=182');

            if (have_posts()) :
                while (have_posts()) : the_post();
                    /*if (in_category('182')) {*/
                    ?>
                    <div class="article-box">
                        <div class="product-banner" style="background-image: url(<?php if (has_post_thumbnail()) {the_post_thumbnail_url();} ?>)">
                            <a class="product-link" href="<?php the_permalink() ?>">
                                <?php the_title('<h3>', '</h3>', true); ?>
                            </a>
                        </div>
                        <a href="<?php the_permalink() ?>">

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
<?php get_footer(); ?>