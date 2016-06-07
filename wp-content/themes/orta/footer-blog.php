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


</body>
</html>
