<div class="small-12 medium-6 large-6 columns conteneurnouv">
    <div id="img-mini" class="watches-img">
        <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail(); ?></a>
    </div>
    <span>
        <h4><?php the_excerpt(); ?></h4>
        <h5><?php the_title(); ?></h5>
        <span class="price">
            <span class="amount">
                <?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?>€
            </span>
        </span>
        <a href="<?php the_permalink(); ?>">voir le produit</a>
    </span>
    <div class="btachat">
        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
    </div>
</div>
