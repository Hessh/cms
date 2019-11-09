<?php get_header(); ?>
<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title">Explore your surfing opportunities</h1>
        <h2 class="title text-center">Find the best one, and go surf</h2>
        <div class="overlay"></div>
        <div class="hero-img"></div>
    </div>
    <div id="product-container">
        <div class="product-table container">
            <?php 
            foreach( get_field('featured_post') as $post ):
            serup_postdata( $post );
            ?>

            <div class="row product-box">
            <div class="col-lg-8 col-sm-12 order-sm-one"><?php echo get_field('image_01') ?>
                <a href="<?php the_parmalink(); ?>">
                <?php the_post_thumbnail('featured-medium'); ?>
                <h3 class="article-title"><?php the_title(); ?></h3>
                </a>
            </div>
        
    <?php 
    wp_reset_postdata();
            endforeach;
            ?>
        </div>
        </div>
    </div>

    <?php
    include 'assets/includes/surfer.php';
    include 'assets/includes/post-carousel.php';
    ?>
</div>
<?php get_footer(); ?>

<!--
<div class="col-lg-12 col-sm-12 order-sm-one">
                     <div class="product-image">/div>
                 </div>