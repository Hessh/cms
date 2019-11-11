<?php
get_header();
?>

<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title text-center sm-none">Blog posts from recent travelers</h1>
        <h1 class="title text-center lg-none">Blog posts</h1>
        <div class="overlay"></div>
        <?php while (have_posts()) : the_post();
            if (in_category('Blog')) { ?>
                <div class="hero-img fade" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <?php }
        endwhile; ?>
    </div>
    <div class="blogg-container">
        <div class="row blogg-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    if (in_category('Blog')) {
                        ?>
                        <div class="article-box col-lg-4 col-sm-12">
                            <div class="blogg-banner">
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php if (has_post_thumbnail()) {
                                                                the_post_thumbnail_url();
                                                            } ?>"></a>
                            </div>
                            <div class="text-container">
                                <?php the_title('<h3>', '</h3>', true); ?>
                                <?php the_excerpt()?>
                                
                            </div>
                            <div class="button-container">
                                <a href="<?php the_permalink() ?>"><button>Read more</button></a>
                            </div>
                        </div>
            <?php
                    }
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>