<?php /*Template Name: Gabarit contact */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ): ?>

	<?php while ( have_posts() ): the_post(); ?>
		<h1 class="contact-title"><?php the_title(); ?></h1>
		<?php
		$image = get_field('image-contact');?>
        <img src="<?php echo $image ?>" alt="map">
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif ?>

<?php get_footer() ?>
