<?php get_header(); ?>

<?php $title = get_the_title(get_option('page_for_posts', true) ); ?>

<?php $img =wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); ?>


    <div class="bloc-top" style="background-image: url(<?php echo $img[0] ?>)">
        <h1><?php echo $title ?></h1>
    </div>
<div class="home-main-container">
    <div class="containarticle">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (get_the_post_thumbnail_url()): ?>
                        <div class="article-preview" >
                            <img src='<?php the_post_thumbnail_url( 'thumbnail' ) ?>' alt="image a la une">
                            <h3><?php the_title() ?></h3>
                            <p> &nbsp;<?php the_time( 'd F Y g:i' ) ?></p>
                            <?php the_excerpt() ?>
                            <a class="more-button" href="<?php the_permalink() ?>">Lire la suite</a>
                        </div>
                <?php endif; ?>
            <?php endwhile;?>
        <?php endif;?>
    </div>

<div>
    <?php get_sidebar('sidebar') ?>
</div>
</div>
<?php get_footer(); ?>