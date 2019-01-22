<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

			<h1><?php the_title() ?></h1>
	<div class="single-container">
		<div class="left-photo">
		<img class="imgsingle" src='<?php the_post_thumbnail_url('small') ?>' alt="image a la une" style="width: 100%">
		</div>
		<div class="right-container">
			<?php the_field('prix')?>
			<?php

			$id = get_the_ID();
			$myterms = get_the_terms($id, 'ville');

			if ($myterms): ?>

				<ul>

					<?php foreach ($myterms as $myterm): ?>

						<p>Ville :<?php echo $myterm->name; ?></p>

					<?php endforeach; ?>

				</ul>

			<?php endif; ?>

			<p>Nombre de piéces :<?php the_field('nb_piece')?></p>
			<p>Info :<?php the_field('info')?> </p>
			<?php the_field('description')?>
		</div>


	</div>



	<?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>