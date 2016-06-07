<?php
/**
 * The template for displaying pages
 *Template Name: Page retour
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
 <?php if ( have_posts() ) : ?>

     <?php /* Start the Loop */ ?>
     <?php while ( have_posts() ) : the_post(); ?>
 <?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="row">
    <div class="small-12 large-12 columns ">
        <?php the_content(); ?>
    </div>
</div>
             <div class="row retour">
                <div class="small-12 large-6 columns ">
                    <h2>NOS EXPERTS SONT À VOTRE ÉCOUTE :</h2>
                    <div class="small-12 large-6 columns inforetour ">
                        <h3>Par téléphone :</h3>
                        <p>
                            <strong>03 67 43 33 04</strong>
                        </p>
                        <p>
                            Une équipe d'experts passionnés vous répond du lundi au vendredi de <span> 9h30 à 12h30 et de 13h30 à 18h30.</span>
                        </p>
                    </div>
                    <div class="small-12 large-6 columns maisretour">
                        <h3>mais aussi :</h3>
                        <a href="<?php echo bloginfo('home')?>/contact/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/multimedia.png" alt="mail" /><strong>Envoyez-nous un message</strong> </a>
                    </div>
                    <div class="small-12 columns textretour">
                        <h5><strong>N’ HéSITEZ PAS à NOUS CONTACTER <br>
                                    Nous NOUS FERONS UN PLAISIR <br>
                                    DE VOUS SATISFAIRE.</strong></h5>
                    </div>
                </div>
                <div class="small-12 large-6 columns avis">
                    <h2>C'EST VOUS QUI LE DITES !</h2>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/avis.png" alt="avis" />
                </div>
             </div>

	   <?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<?php // No Posts Found ?>

<?php endif; ?>


 </div>


 <?php get_footer();
