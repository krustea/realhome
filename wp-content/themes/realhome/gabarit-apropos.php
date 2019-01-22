<?php /* Template Name: Gabarit A propos */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
<div class="propos-container">
    <div class="imgproposdiv"><img class="imgpropos" src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php the_title() ?>"></div>
    <div class="propos-content">
        <?php the_content() ?>
    </div>
</div>

    <div class="detail-container">
        <?php if (have_rows('aproposrepet')): ?>
            <?php while (have_rows('aproposrepet')) : the_row(); ?>
                <div class="detail">
                    <?php the_sub_field('icone'); ?>
                    <h3><?php the_sub_field('titre'); ?> </h3>
                    <p> <?php the_sub_field('description'); ?> </p>
                </div>
            <?php endwhile; ?>

        <?php else : ?>

            // no rows found

        <?php endif; ?>

    </div>

        <h3 class="titre-equipe"><?php the_field('equipe'); ?></h3>

    <div class="agent-container">

        <?php if (have_rows('notre_equipe')): ?>
            <?php while (have_rows('notre_equipe')) : the_row(); ?>
                <div class="card-agent">
                    <?php
                    $image = get_sub_field('image');?>
                    <img class="imgagent" src="<?php echo $image['url']; ?>" />
                    <h3><?php the_sub_field('fullname'); ?> </h3>
                    <p> <?php the_sub_field('profession'); ?> </p>
                </div>
            <?php endwhile; ?>

        <?php else : ?>

            // no rows found

        <?php endif; ?>


    </div>
    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>