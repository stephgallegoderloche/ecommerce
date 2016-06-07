<?php
/*
Template Name: bracelet
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<?php
    $args = array( 'post_type' => 'product', 'product_cat' => 'bracelet', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

    <div class="small-4 columns prod">
        <div class="titreproduit"><?php the_title() ?></div>
        <div> <a href="<?php the_permalink();?>"> <?php the_post_thumbnail() ?></a></div>
        <div class="">
            <a href="#"> <img id="coeur" src="<?= _URL_IMAGES; ?>/icons/coeur.png" alt="favoris" /></a>
        </div>
        <div class=""><?php the_excerpt() ?></div>
        <div class="">
            <?php $price = $product->price ?>
            <?php  echo $price ?>€
        </div>
        <div class="btachat">
            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
        </div>
    </div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
