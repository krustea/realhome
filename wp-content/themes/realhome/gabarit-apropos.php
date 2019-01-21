<?php /* Template Name: Gabarit A propos */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
<div class="propos-container">
    <img src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php the_title() ?>">
    <div class="propos-content">
        <?php the_content() ?>
    </div>


</div>
    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>