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
    <div class="container product-container">
        <div class="product-table">
            <div class="row title-row">
                <div class="col-12">
                    <h1 class="main-title text-center"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row info-box">
                <div class="col-lg-8 col-sm-12 order-sm-one">
                    <img class="image-destination" src="<?php echo get_field('image') ?>">
                </div>
                <div class="col-lg-4 col-sm-12 order-sm-two">
                    <div class="text-container">
                    <h2>Test</h2>
                    <p><?php echo get_field('description_text') ?></p>
                    </div>
                    <div class="maps-container">
                    <iframe src="<?php echo get_field('google_maps') ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="button-container">
                    <a href="<?php echo get_field('booking_link') ?>" target="_blank"><button>Book your trip now</button></a>
                    </div>
                </div>
            </div>
            <div class="row text-box">
                <div class="col-12">
                    <h2 class="text-center">A typical day</h2>
                    <p><?php echo get_field('typical_day') ?></p>
                </div>
            </div>
            <div class="row include-box">
                <div class="col-12">
                    <h2 class="text-center">Includes</h2>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h3>Facilities</h3>
                    <li class="checkmark"><?php echo get_field('facility_1') ?></li>
                    <li class="checkmark"><?php echo get_field('facility_2') ?></li>
                    <li class="checkmark"><?php echo get_field('facility_3') ?></li>
                    <li class="checkmark"><?php echo get_field('facility_4') ?></li>
                </div>
                <div class="col-lg-6 col-sm-12">
                <h3>Close by</h3>
                    <li class="checkmark"><?php echo get_field('close_by_1') ?></li>
                    <li class="checkmark"><?php echo get_field('close_by_2') ?></li>
                    <li class="checkmark"><?php echo get_field('close_by_3') ?></li>
                    <li class="checkmark"><?php echo get_field('close_by_4') ?></li>
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
