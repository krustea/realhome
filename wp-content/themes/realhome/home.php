<?php get_header(); ?>

<?php $title = get_the_title(get_option('page_for_posts', true) ); ?>

<?php $img =wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); ?>


    <div class="bloc-top" style="background-image: url(<?php echo $img[0] ?>)">
        <h1><?php echo $title ?></h1>
    </div>
    <div class="containarticle">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (get_the_post_thumbnail_url()): ?>
                    <a class="prevarticle" href="<?php the_permalink() ?>">
                        <div >

                            <img src='<?php the_post_thumbnail_url( 'thumbnail' ) ?>' alt="image a la une">
                            <h3><?php the_title() ?></h3>
                            <p> &nbsp;<?php the_time( 'd F Y g:i' ) ?></p>
                            <?php the_excerpt() ?>

                        </div>
                    </a>
                <?php endif; ?>
            <?php endwhile;?>
        <?php endif;?>
    </div>
<?php get_footer(); ?>