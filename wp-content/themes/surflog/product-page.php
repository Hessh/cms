<?php
/* 
*  Template Name: Product Template
*  Template Post Type: post
*/
?>

<?php
get_header();
$count_posts = wp_count_posts();

$published_posts = $count_posts->publish;

$number_of_pages = ceil($published_posts / $posts_per_page);

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<div class="container-fluid">
    <div class="hero"></div>
    <div class="product-container">
        <div class="product-table">
            <h1><?php the_title(); ?></h1>
            <div class="row title-row">
                <div class="col-12">
                    <h1 class="main-title text-center"></h1>
                </div>
            </div>
            <div class="row info-box">
                <div class="col-lg-8 col-sm-12 order-sm-one">
                    <img class="image-destination" src="<?php echo get_field('image') ?>">
                </div>
                <div class="col-lg-4 col-sm-12 order-sm-two">
                    <li class="bulletmark"><?php echo get_field('function_1') ?></li>
                    <li class="bulletmark"><?php echo get_field('function_2') ?></li>
                    <li class="bulletmark"><?php echo get_field('function_3') ?></li>
                    <li class="bulletmark"><?php echo get_field('function_4') ?></li>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include 'assets/includes/surfer.php';
    include 'assets/includes/post-carousel.php';
    get_footer();
?>
