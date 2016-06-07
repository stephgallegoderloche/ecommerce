<?php
/*
Template Name: nouveautes
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
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
            <?php
    		$args = array(
    		'post_type' => 'product',
    		'stock' => 1,
    		'posts_per_page' =>4,
    		'meta_key' => 'total_sales',
    		'orderby' => 'meta_value_num',
    		);

    		$loop = new WP_Query( $args );
    		if ( $loop->have_posts() ) {
    		while ( $loop->have_posts() ) : $loop->the_post();
    		get_template_part( 'template-parts/extrait-montre', get_post_format() );

    		endwhile;
    		} else {
    		echo __( 'No products found' );
    		}

    		wp_reset_query();

    		?>
        </div>

    </div>
    <div class="row">

             <nav id="post-nav">
                 <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
                 <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
             </nav>

    </div>
</div>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
