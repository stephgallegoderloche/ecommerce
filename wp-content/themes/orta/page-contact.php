<?php
/**
 * The template for displaying pages
 *Template Name: Page contact
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="row">
    <div class="small-12 large-12 columns titrecont">
        <h2>Contactez-nous</h2>
    </div>
</div>
 <div id="page-contact" role="main">
     <?php if (have_posts()) : ?>
         <?php while (have_posts()) : the_post(); ?>

             <div class="row">
                <div class="small-12 large-6 columns contcontact">
                    <?php the_content(); ?>
                </div>
                <div class="small-12 large-6 columns formulaire">
                    <?php echo do_shortcode(Form_contact); ?>
                </div>
             </div>

	   <?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<?php // No Posts Found ?>

<?php endif; ?>


 </div>
 <?php
 require('nouveautes.php');
 require('blog-article.php')
 ?>

 <?php get_footer();
