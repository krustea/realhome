<?php get_header(); ?>
    <div class="ville-link hvr-underline-from-center">
        <a href="<?php echo site_url()?>/nos-proprietes/">Tous</a>


		<?php $villes = get_terms('ville', array(
			'hide_empty' => false,
		)); ?>

		<?php foreach ($villes as $ville) { ?>

            <a href="<?php echo get_term_link($ville->slug, 'ville'); ?>"><?php echo $ville_name = $ville->name; ?></a>


		<?php } ?>

    </div>
<div class="cardcontainer">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

        <div class="propcard">
            <a href="<?php the_permalink() ?>">
                <div class="imgcard" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                <h4><?php the_title() ?></h4>

				<?php

				$id = get_the_ID();
				$myterms = get_the_terms($id, 'ville');

				if ($myterms): ?>

                    <ul>

						<?php foreach ($myterms as $myterm): ?>

                            <p><?php echo $myterm->name; ?></p>

						<?php endforeach; ?>

                    </ul>

				<?php endif; ?>
                <p class="prix"><?php the_field('prix') ?></p>
                <div class="infocard">
                    <span><?php the_field('surface') ?></span>
                    <span><?php the_field('chambre') ?></span>
                    <span><?php the_field('sdb') ?></span>
                </div>

            </a>
        </div>

	<?php endwhile;?>
<?php endif;?>
</div>
<?php get_footer(); ?>