<?php /*Template Name: Gabarit contact */ ?>
<?php get_header(); ?>


<?php if ( have_posts() ): ?>

	<?php while ( have_posts() ): the_post(); ?>
        <h1 class="contact-title"><?php the_title(); ?></h1>

        <div id="map"></div>
        <div class="contact-container">

           <div class="info-contact"><?php the_field('info-contact') ?></div>
            <div class="form-contact"> <?php echo do_shortcode('[contact-form-7 id="102" title="Contact form 1"]') ?></div>

        </div>
	<?php endwhile; ?>
<?php endif ?>

<?php get_footer() ?>
