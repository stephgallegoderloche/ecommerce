
<div class="row">
<h2>Les dernières news</h2>
	<article class=" main-content">


		<?php
		if (is_page()) {
		  $cat=get_cat_ID($post->post_title); //use page title to get a category ID
		  $posts = get_posts ("cat=$cat&showposts=5");
		  if ($posts) {
		    foreach ($posts as $post):
		      setup_postdata($post); ?>
		      <?php get_template_part( 'template-parts/extrait', get_post_format() ); ?>
		    <?php endforeach;
		  }
		}
		?>

	</article>
</div>
