<?php
/* 
*  Template Name: Article Template
*  Template Post Type: post
*/
?>

<?php get_header($name = null) ?>

<div class="container-fluid-gray">
    <div class="article-container">

        <h1><?php the_title();?></h1>


        <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>

    </div>
    <?php 
    include 'assets/includes/surfer.php';
    include 'assets/includes/post-carousel.php';
    ?>
</div>

<?php get_footer($name = null) ?>
