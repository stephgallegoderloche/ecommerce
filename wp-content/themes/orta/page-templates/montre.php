<?php
/*
Template Name: Montre
*/
get_header(); ?>
<?php is_woocommerce();?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">
    <div class="row">
        <h2>Les nouveautés</h2>
        <div class="small-6 large-3 columns petitmenu">
            <div class="titreun">
                <a href="#" >Les marques</a>
                <div class="titredeux">
                    <form>
                        Frank Muller <INPUT type="checkbox" name="choix1" value="1"> <br>
                        Chopard <INPUT type="checkbox" name="choix2" value="2"> <br>
                        Chanel <INPUT type="checkbox" name="choix3" value="3"> <br>
                        Cartier <INPUT type="checkbox" name="choix4" value="4"> <br>
                        Breitling <INPUT type="checkbox" name="choix5" value="5"> <br>
                        Bréguet <INPUT type="checkbox" name="choix6" value="6"> <br>
                        Blancpain <INPUT type="checkbox" name="choix7" value="7"> <br>
                        Bell & Ross <INPUT type="checkbox" name="choix8" value="8"> <br>
                    </form>
                </div>
            </div>

            <div class="titreun">
                <a href="#" >Les montres</a>
                <div class="titredeux">
                    <a href="#" >Chronographe</a>
                    <div class="contenu">
                        <form>
                            Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                            Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                            Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                        </form>
                    </div>
                </div>

            <div class="titredeux">
                <a href="#">Plongée</a>
                <div class="contenu">
                    <form>
                        Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                        Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                        Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                    </form>
                </div>
            </div>
            <div class="titredeux">
                <a href="#" >GMT</a>
                <div class="contenu">
                    <form>
                        Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                        Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                        Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                    </form>
                </div>
            </div>
            <div  class="titredeux">
                <a href="#">Pilote</a>
                <div class="contenu">
                    <form>
                        Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                        Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                        Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                    </form>
                </div>
            </div>
            <div  class="titredeux">
                <a href="#">Régulateur</a>
                <div class="contenu">
                    <form>
                        Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                        Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                        Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                    </form>
                </div>
            </div>
                    <div class="titredeux">
                        <a href="#">Mono-aiguille</a>
                        <div class="contenu">
                            <div>
                                <form>
                                    Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                                    Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                                    Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="titredeux">
                        <a href="#">Dress-watch</a>
                        <div class="contenu">
                            <form>
                                Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                                Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                                Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                            </form>
                        </div>
                    </div>
                    <div class="titredeux">
                        <a href="#">Gousset</a>
                        <div class="contenu">
                            <form>
                                Automatiques <INPUT type="checkbox" name="choix1" value="1"> <br>
                                Mécanique <INPUT type="checkbox" name="choix2" value="2"> <br>
                                Quartz <INPUT type="checkbox" name="choix3" value="3"> <br>
                            </form>
                        </div>
                    </div>
                    </div>
                        <div class="se">
                            <form>
                                Connectée <INPUT type="checkbox" name="type1" value="9"> <br>
                            </form>
                        </div>

                <div class="titreun">
                    <a href="#">Les bracelets</a>
                </div>

                <div class="titreun">
                    <a href="#">Année de production</a>
                </div>

                <div  class="titreun">
                    <a href="#">Les plus vendus</a>
                </div>

                <div class="titreun">
                    <a href="#">Les plus appréciées</a>
                </div>

                <div class="titreun">
                        <a href="#" >Les mieux notées</a>
                </div>
        </div>
        <div class="small-6 large-9 columns">
            <div class="row">
<?php do_action( 'foundationpress_before_content' ); ?>

<?php
    $args = array( 'post_type' => 'product', 'product_cat' => 'montre', 'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

    <div class="small-4 columns prod">
        <div class="titreproduit"><?php the_title() ?></div>
        <div><?php the_post_thumbnail() ?></div>
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
</div>

<?php get_footer();
