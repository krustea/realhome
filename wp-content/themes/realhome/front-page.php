<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="arttitle">
            <img class="imghome" src='<?php the_post_thumbnail_url('full') ?>' alt="image a la une" style="width: 100%">
            <div class="htitle">
                <h1 class="font-ralway-title">REAL HOME L'AGENCE QUI VOUS ACCOMPAGNE DANS VOTRE PROJET</h1>
            </div>
        </div>
        <div class="subhead">
            <?php if (get_field('titre')): ?>
                <div class="front-page-field"><h2><?php the_field('titre'); ?></h2></div>
            <?php endif; ?>
            <div class="front-page-content"><?php the_content() ?></div>
        </div>
        <div class="detail-container">


            <?php if (have_rows('detail')): ?>
                <?php while (have_rows('detail')) : the_row(); ?>
                    <div class="detail">
                        <?php the_sub_field('icone'); ?>
                        <h3><?php the_sub_field('detail_titre'); ?> </h3>
                        <p> <?php the_sub_field('detail_paragraphe'); ?> </p>
                    </div>
                <?php endwhile; ?>

            <?php else : ?>

                // no rows found

            <?php endif; ?>
        </div>

        <div class="accueil-propriete-container">
            <?php if (get_field('titre_accueil')):; ?>
                <div class="accueil-propriete-titre"><h3><?php the_field('titre_accueil'); ?></h3></div>
            <?php endif; ?>
            <?php if (get_field('description_accueil')):; ?>
                <div class="accueil-propriete-description"><?php the_field('description_accueil'); ?></div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$args = array(
    'post_type' => 'proprietes',
    'posts_per_page' => 6,
    'order' => 'ASC',
); ?>
<?php $the_query = new WP_Query($args); ?>

<div class="cardcontainer">
<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
    <?php endwhile; ?>
    <?php ?>
<?php endif; ?>
</div>
<?php wp_reset_postdata() ?>


<?php get_footer(); ?>