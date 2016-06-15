<?php
/*
Template Name: blog
*/
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,300' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header row" role="banner">
        <section>
            <div class="haut">
                <div class="gauche">
                    <p>NOUVELLES</p>
                </div>
                <div class="droite">
                    <p>10 MONTRES AUTOMATIQUES À MOINS DE 500€</p>
                </div>
                <div class="droiteicon">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebook.png" alt="logo" /></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitter.png" alt="logo" /></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagram.png" alt="logo" /></a>
                </div>
            </div>

        </section>
		<section>
			<div class="row petitmenu">
                <div class="small-3 columns logopetit">
    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/logopetit.png" alt="logo" /></a>
    			</div>
                <div class="large-offset-1 large-8 columns menut">
                    <nav id="site-navigation" class="main-navigation " role="navigation">
                        <div class="petitm">
                        <?php wp_nav_menu( array( 'theme_location' => 'blog' ) ); ?>
                        </div>
                    </nav>
                </div>
			</div>

		</section>
        <section>
            <div class="slide">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/slider.png" alt="slide">
                </div>
                <div class="btg">
                    <a href="#">lire la suite</a>
                </div>
                <div class="btd">
                    <a href="#">lire la suite</a>
                </div>
            </div>
        </section>
	</header>


	<section class="container">


<!--    partie NEWS  -->
<div class="row">
    <div class="small-6 large-8 columns">
        <h2>Les dernières News</h2>
		<div class="row">
        <article class="small-6 large-5 columns artblog">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image1.png" alt="image" />
            <div class="cont">
                <h5>Les plus belles montres du moment</h5>
                <h6> le 15 / 04 /16 par Jean Griffin</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                </p>
            </div>
            <div class="btblog">
                <a href="">Lire la suite</a>
            </div>
            <div class="socblog">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
            </div>
        </article>
        <article class="small-6 large-offset-1 large-5 columns artblog">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image2.png" alt="logo" />
            <div class="cont">
                <h5>Les temps de la technologie</h5>
                <h6> le 11/ 04 /16 par Ivon stross</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                </p>
            </div>
            <div class="btblog">
                <a href="">Lire la suite</a>
            </div>
            <div class="socblog">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
            </div>
        </article>
    </div>

	<div class="row">
	<article class="small-6 large-5 columns artblog">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image3.png" alt="image" />
		<div class="cont">
			<h5>Les dernieres montres </h5>
			<h6> le  7 / 04 /16 par Aria Trons</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
			</p>
		</div>
		<div class="btblog">
			<a href="">Lire la suite</a>
		</div>
		<div class="socblog">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
		</div>
	</article>
	<article class="small-6 large-offset-1 large-5 columns artblog">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image4.png" alt="logo" />
		<div class="cont">
			<h5>Comment fonctionne un mouvement automatique ?</h5>
			<h6>  le  1 / 04 /16 par Angel Higord</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
			</p>
		</div>
		<div class="btblog">
			<a href="">Lire la suite</a>
		</div>
		<div class="socblog">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
		</div>
	</article>
	</div>
<!--    partie Dans le monde  -->
<div class="row">
	<h2>Dans le monde</h2>
<article class="small-6 large-5 columns artblog">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image5.png" alt="image" />
	<div class="cont">
		<h5>Que deviennent nos montres ? </h5>
		<h6> le 17 / 05 /16 par Thom Dison</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
		</p>
	</div>
	<div class="btblog">
		<a href="">Lire la suite</a>
	</div>
	<div class="socblog">
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
	</div>
</article>
<article class="small-6 large-offset-1 large-5 columns artblog">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image6.png" alt="logo" />
	<div class="cont">
		<h5>A qui profite l’industrie des montres ?</h5>
		<h6>  le  1 / 04 /16 par Angel Higord</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
		</p>
	</div>
	<div class="btblog">
		<a href="">Lire la suite</a>
	</div>
	<div class="socblog">
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
	</div>
</article>
</div>
<!--    partie Les dernières innovations  -->
<div class="row">
	<h2>Les dernières innovations</h2>
<article class="small-6 large-5 columns artblog">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image7.png" alt="image" />
	<div class="cont">
		<h5>A quoi ressembleron nos montres ? </h5>
		<h6> le 17 / 05 /16 par Djin Houlafa</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
		</p>
	</div>
	<div class="btblog">
		<a href="">Lire la suite</a>
	</div>
	<div class="socblog">
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
	</div>
</article>
<article class="small-6 large-offset-1 large-5 columns artblog">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/image8.png" alt="logo" />
	<div class="cont">
		<h5>La montre du futur?</h5>
		<h6> le  1 6/ 04 /16 par Iro Moui</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
		</p>
	</div>
	<div class="btblog">
		<a href="">Lire la suite</a>
	</div>
	<div class="socblog">
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
		<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
	</div>
</article>
</div>





<!--     sidebar  -->
	</div>
    <div class=" small-6 large-3 columns sided">
    	<article class="artside">
    		<div class="titreside">
    			<a href="">A propos</a>
    		</div>
			<div class="para">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
			</div>
			<div class="socblog">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
            </div>
    	</article>

		<article class="artside">
    		<div class="titreside">
    			<a href="">Recherche</a>
    		</div>
			<div class="rec">
				<?php get_product_search_form( $echo = true );?>
			</div>
			<div class="socblog">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
            </div>
    	</article>

		<article class="artside">
    		<div class="titreside">
    			<a href="">Archives</a>
    		</div>
			<div class="para">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/calendrier.png" alt="calendrier" />
			</div>
			<div class="socblog">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
            </div>
    	</article>

		<article class="artside">
			<div class="titreside">
				<a href="">Catégories</a>
			</div>
			<div class="listeside">
				<ul>
					<li><a href="#">Marques</a></li>
					<li><a href="#">Nouveautés</a></li>
					<li><a href="#">Montres</a></li>
					<li><a href="#">Montres écologiques</a></li>
					<li><a href="#">L’art de créer</a></li>
				</ul>
			</div>
			<div class="socblog">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
			</div>
		</article>

		<article class="artside">
			<div class="titreside">
				<a href="">Les derniers postes</a>
			</div>
			<div class="listeside">
				<ul>
					<li><a href="#">TEST DE LA MONTRE GPS</a></li>
					<li><a href="#">DÉCOUVERT SUR KICKSTARTER</a></li>
					<li><a href="#">LES DERNIERE TENDANCE</a></li>
					<li><a href="#">L’HISTOIRE DU BRACELET NATO</a></li>

				</ul>
			</div>
			<div class="socblog">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/facebookbr.png" alt="logofacebook" /></a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/twitterbr.png" alt="logotwitter" /></a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/instagrambr.png" alt="logoinstagram" /></a>
			</div>
		</article>


<article class="artside">
	<div class="titreside">
		<a href="">Les partenaires</a>
	</div>
	<div class="listeside">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/brand.png" alt="brand" />
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/franck.png" alt="franck" />
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/chanel-logo.png" alt="chanel" />
	</div>

</article>

    </div>
</div>



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
