<?php
/* 
*  Template Name: Article Template
*  Template Post Type: post
*/
?>

<?php get_header($name = null) ?>

<div class="container-fluid-gray">
    <div class="hero">
        <h1 class="title text-center"><?php the_title(); ?></h1>
        <div class="overlay"></div>
        <?php if (has_post_thumbnail($post->ID)) : ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
            <div class="hero-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
        <?php endif; ?>
    </div>
    <div class="article-container">
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