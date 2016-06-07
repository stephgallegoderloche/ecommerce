<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<div class="row" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
    <div  class="article">
        <div class="imgart large-5 medium-5 small-12 columns">
        	<?php echo get_the_post_thumbnail( $page->ID, 'extrait' ); ?>
        </div>
        
        <div class="infoart large-6 medium-6 small-12 columns">
        	<h6><?php the_title(); ?></h6>

        	<div class="contenu">
            	<?php foundationpress_entry_meta(); ?>
                <?php the_excerpt(); ?>
            </div>
        	<div class="boutlire">
        		<a href="<?php the_permalink(); ?>">Lire la suite</a>
        	</div>
        </div>
    </div>
</div>
