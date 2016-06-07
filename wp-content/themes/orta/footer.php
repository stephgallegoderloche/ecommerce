<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<footer>
			<div class="row rassurance">
				<div class="small-6 large-12 columns rassu">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/24_hours.png" alt="24_hours">
					<h3>Retour Rapide</h3>
				</div>
				<div class="small-6 large-12 columns rassu">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/credit.png" alt="24_hours">
					<h3>Paiement Sécurisé</h3>
				</div>
				<div class="small-6 large-12 columns rassu">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/livraison.png" alt="24_hours">
					<h3>Livraison Rapide</h3>
				</div>
				<div class="small-6 large-12 columns rassu">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/box.png" alt="24_hours">
					<h3>Emballage Adapté</h3>
				</div>
			</div>
			<div class="row">
        	   	<div class="small-6 large-3 columns footinfo">
        	   		<h4>Informations</h4>
        	   		<ul>
        	   			<li> <a href="#">À propos de nous</a></li>
        	   			<li><a href="<?php echo bloginfo('home')?>/contact/">Contactez-nous</a></li>
        	   			<li><a href="#">Confidentialité</a></li>
        	   			<li><a href="#">Plan du site</a></li>
        	   			<li><a href="#">Crédits</a></li>
        	   		</ul>
        	   	</div>
        	   	<div class="small-6 large-3 columns footinfo">
        	   		<h4>Newsletter</h4>
        	   		<form action="index.html" method="post" class="subscribe-form">
        	   			  <input type="email" name="email" class="subscribe-input" placeholder="Votre adresse mail..." >
        	   			  <button type="submit" class="subscribe-submit"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/multimedia.png" alt=""> </button>
        	   		</form>
        	   		<div class="sociaux">
        	   			<h5>Suivez-nous</h5>
        	   			<ul>
        	   				<li> <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/social-twitte.png" alt=""> </a> </li>
        	   				<li> <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/social-facebook.png" alt=""> </a> </li>
        	   				<li> <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/social-dribbble.png" alt=""> </a> </li>
        	   				<li> <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/behance.png" alt=""> </a> </li>
        	   			</ul>
        	   		</div>
        	   	</div>
        	   	<div class="small-6 large-3 columns footinfo">
        	   		<h4>Aide et assistance</h4>
        	   		<ul>
        	   			<li><a href="#">Mentions légales</a></li>
        	   			<li><a href="<?php echo bloginfo('home')?>/retour/">Livraison et retour</a></li>
        	   			<li><a href="#">C G T</a></li>
        	   		</ul>
        	   	</div>
        	   	<div class="footinfo">
        	   		<h4>Paiement sécurisé</h4>
        	   		<ul>
        	   			<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/creditmini.png" alt="creditmini">VIsa / Master Card</a></li>
        	   			<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/paypal.png" alt="paypal">Paypall</a></li>
        	   			<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/emailbutton.png" alt="emailbutton">Mail de confirmation</a></li>
        	   		</ul>
        	   	</div>
			</div>
	   <hr>
	   <div class="row copy">
	       <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sources/signs.png" alt="copyright">Tous droits réservé à Orta. 2016</a>
	   </div>
	    </footer>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js">

</script>
<script type="text/javascript">
//$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
    	loop:true,
    	margin:10,
    	nav:false,
    	responsive:{
    		0:{
    			items:1
    		},
    		600:{
    			items:3
    		},
    		1000:{
    			items:3
    		}
    	}
    });
//});
/*$('.owl-carousel').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:3
		},
		1000:{
			items:3
		}
	}
})*/
</script>
<script type="text/javascript">
	$('.add_to_cart_button').append('<div class="imgbutton"></div>')
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type="text/javascript">
$(document).ready(function(){

    //$('.petitmenu').each(function()
    //{

        $(this).find('.titreun').on('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).find('.titredeux').toggle()
        });

        $(this).find('.titredeux').on('click', function(e){
            console.log($(this).find('.contenu'));
            e.preventDefault();
            e.stopPropagation();
            $(this).find('.contenu').slideDown()
        });

    //});

});
</script>


</body>
</html>
