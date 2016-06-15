<?php
/*
Template Name: bracelet
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="row recherchebrac">
    <h2>Filtres de recherche</h2>
    <div class=" small-12 large-3 columns">
        <div class="deroule">
            <select name="type">
                <option>Sélectionner un type </option>
                <option value="acheter">Cuir</option>
                <option value="vendre">Caoutchou</option>
                <option value="vendre">Acier</option>
                <option value="vendre">tissu</option>
            </select>
        </div>
    </div>
    <div class=" small-12 large-3 columns">
        <div class="deroule">
            <select name="type">
                <option>Sélectionner une marque</option>
                <option value="acheter">Brown</option>
                <option value="vendre">Rolex</option>
                <option value="vendre">Bell&Ross</option>
                <option value="vendre">Chanel</option>
            </select>
        </div>
    </div>
    <div class=" small-12 large-3 columns">
        <div class="deroule">
            <select name="type">
                <option>Sélectionner une taille</option>
                <option value="acheter">16 mm</option>
                <option value="vendre">18mm</option>
                <option value="vendre">20mm</option>
                <option value="vendre">22mm</option>
                <option value="vendre">Plus</option>
            </select>
        </div>
    </div>
    <div class=" small-12 large-3 columns">
        <div class="deroule">
            <select name="type">
                <option>Sélectionner le genre</option>
                <option value="acheter">Homme</option>
                <option value="vendre">Femme</option>
                <option value="vendre">Enfant</option>

            </select>
        </div>
    </div>
</div>
<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<?php
    $args = array( 'post_type' => 'product', 'product_cat' => 'bracelet', 'stock' => 1, 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

    <div class="small-4 columns brac">
        <div class="titrebrac"><?php the_title() ?></div>
        <div class="imbrac"> <a href="<?php the_permalink();?>"> <?php the_post_thumbnail() ?></a></div>
        <div class="coeurbrac">
            <a href="#"> <img id="coeur" src="<?= _URL_IMAGES; ?>/icons/coeur.png" alt="favoris" /></a>
        </div>
        <div class="extbrac"><?php the_excerpt() ?></div>
        <div class="prixbrac">
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
