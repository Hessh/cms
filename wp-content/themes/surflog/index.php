<?php
get_header();
?>

<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title">Blog</h1>
        <div class="overlay"></div>
        <?php while (have_posts()) : the_post(); if (in_category('Blog')) { ?>
            <div class="hero-img fade" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <?php } endwhile; ?>
    </div>
    <div id="blogg-container">
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
    <?php include 'assets/includes/surfer.php'; ?>
</div>
<?php get_footer() ?>