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
    <div class="hero">
        <div class="row title-row">
            <div class="col-12">
                <h1 class="title text-center"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="container product-container">
        <div class="row info-box product-content">
            <div class="col-lg-8 col-sm-12 order-sm-one">
                <div class="destination-image" style="background-image: url('<?php echo get_field('image') ?>')"></div>
            </div>
            <div class="col-lg-4 col-sm-12 order-sm-two">
                <div class="text-container">
                    <h2>Location</h2>
                    <?php echo get_field('description_text') ?>
                </div>
                <div class="maps-container">
                    <iframe class="text-center" src="<?php echo get_field('google_maps') ?>" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="button-container">
                    <a href="<?php echo get_field('booking_link') ?>" target="_blank"><button>Book your trip now</button></a>
                </div>
            </div>
        </div>
        <div class="row text-box product-content">
            <div class="col-12">
                <h2 class="text-center">Destination information</h2>
                <?php echo get_field('typical_day') ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Facilities</h3>
                <li class="checkmark"><?php echo get_field('facility_1') ?></li>
                <li class="checkmark"><?php echo get_field('facility_2') ?></li>
                <li class="checkmark"><?php echo get_field('facility_3') ?></li>
                <li class="checkmark"><?php echo get_field('facility_4') ?></li>
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Close by</h3>
                <li class="checkmark"><?php echo get_field('close_by_1') ?></li>
                <li class="checkmark"><?php echo get_field('close_by_2') ?></li>
                <li class="checkmark"><?php echo get_field('close_by_3') ?></li>
                <li class="checkmark"><?php echo get_field('close_by_4') ?></li>
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Things to do</h3>
                <li class="checkmark"><?php echo get_field('todo_1') ?></li>
                <li class="checkmark"><?php echo get_field('todo_2') ?></li>
                <li class="checkmark"><?php echo get_field('todo_3') ?></li>
                <li class="checkmark"><?php echo get_field('todo_4') ?></li>
            </div>
            <div class="col-12 button-container">
                <a href="<?php echo get_field('booking_link') ?>" target="_blank"><button>Book your trip now</button></a>
            </div>
        </div>
    </div>
</div>
<?php
include 'assets/includes/surfer.php';
include 'assets/includes/post-carousel.php';
get_footer();
?>