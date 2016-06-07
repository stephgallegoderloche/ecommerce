<section id="recent" class="row">
<div class="small-12 columns">

        <h3 class="titre_section">Les Nouveautés</h3>

        <div class="owl-carousel">
            <?php /*<ul class="row">*/ ?>


            <?php
                $args = array( 'post_type' => 'product', 'product_cat' => 'montre', 'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <!-- debut du style css et html
                ================================== -->

                    <div class="item">

                        <?php if (has_post_thumbnail( $post->ID )) : ?>
                            <?= get_the_post_thumbnail($post->ID, 'shop_catalog'); ?>
                        <?php else: ?>
                            <img src="<?= woocommerce_placeholder_img_src(); ?>" alt="Placeholder" width="65px" height="115px" />
                        <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                               <span class="price"><?php echo $product->get_price_html(); ?></span><br>
                               <!--<a class="custombutton" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Ajouter au panier</a>-->
                               <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                               <a href="<?php the_permalink(); ?>" class="linkproduct"></a>
                    </div>


                        <!-- fin de la boucle -->
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        <?php /*</ul>*/ ?>
        </div>

</div>
  <!-- /row-fluid -->
</section><!-- /recent -->
<div class="row">
    <a class="gdbouton" href="http://localhost:8080/ecommerce/news/">
        <div class="center">Voir tous les produits</div>
    </a>
</div>
