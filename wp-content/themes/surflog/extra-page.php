<?php
/* 
*  Template Name: Extra-page Template 
*  Template Post Type: page
*/
?>

<?php get_header($name = null) ?>
<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <div class="article-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>
    <?php 
    include 'assets/includes/surfer.php';
    include 'assets/includes/post-carousel.php';
    ?>
</div>
<?php get_footer(); ?>