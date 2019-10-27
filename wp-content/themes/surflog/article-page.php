<?php
/* 
*  Template Name: Article Template
*  Template Post Type: post
*/
?>

<?php get_header($name = null) ?>

<div class="container-fluid-gray">
    <div class="hero">
        <img class="hero-img" style="background-image: url(<?php the_post_thumbnail() ?>);" alt="Banner image">
    </div>
    <div class="article-container">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php
include 'assets/includes/surfer.php';
include 'assets/includes/post-carousel.php';
?>
<?php get_footer($name = null) ?>