<?php get_header(); ?>
<div class="home-main-container">
    <div class="single-article">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post() ?>
                <h1><?php the_title() ?></h1>


                <p><?php the_field( 'paragraphe-1' ) ?></p>
                <img class="article-img" src='<?php the_post_thumbnail_url( 'medium' ) ?>' alt="image a la une">

                <p><?php the_field( 'paragraphe-2' ) ?></p>
                <h2><?php the_field( 'titre-2' ) ?></h2>
                <p><?php the_field( 'paragraphe-3' ) ?></p>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
    <div>
		<?php get_sidebar( 'sidebar' ) ?>
    </div>
</div>
<?php get_footer() ?>
