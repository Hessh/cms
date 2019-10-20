<?php
/* 
*  Template Name: Product Template
*  Template Post Type: post
*/
?>

<?php get_header($name = null) ?>

<div class="hero">

</div>

<div class="container-fluid-gray">

    <div class="product-container">
        <div class="product-table">
            <div class="row title-row">
                <div class="col-12">
                    <h1 class="main-title text-center"></h1>
                </div>
            </div>
            <div class="product-row">
                <div class="product-box">
                    <div class="col-6">
                            <div class="product-banner">
                            </div>
                            </div>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title('<h3>', '</h3>', true); ?>
                                    <?php the_excerpt() ?>
                                    <button>BESTILL</button>
                                </a>
                </div>
            </div>
        

        <h1><?php the_title();?></h1>


             <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

         <?php endwhile; endif;?>

         </div>
    </div>
</div>

<?php get_footer($name = null) ?>