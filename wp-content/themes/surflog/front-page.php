<?php get_header(); ?>
<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title">Explore your surfing opportunities</h1>
        <h2 class="title text-center">Find the best one, and go surf</h2>
        <div class="overlay"></div>
        <div class="hero-img"></div>
    </div>
    <div class="product-container">
        <div class="product-table">

        <?php $post_objects = get_field('post_objects');
            if ( $post_objects ): ?>

            <ul> <?php foreach( $post_objects as $post):?>
        <?php setup_postdata($post); ?> 
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_field('front page') ?>
        </li>
        <?php endforeach; ?>
    
    </ul>
    <?php wp_reset_postdata();?>
    <?php endif
   
    ?>

    <?php
    include 'assets/includes/post-carousel.php';
    ?>
    </div>
    </div>
</div>
<?php get_footer(); ?>

<!--
<div class="col-lg-12 col-sm-12 order-sm-one">
                     <div class="product-image">/div>
                 </div>