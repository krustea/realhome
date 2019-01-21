<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="arttitle">
            <img class="imgone" src='<?php the_post_thumbnail_url( 'full' ) ?>' alt="image a la une"
                 style="width: 100%">
            <div class="htitle">
                <h1><?php the_title() ?></h1>
                <?php
                $category = get_the_category();
                $category[0]->slug;
                ?>
                <div class="cattitle">
                    <p> Catégorie :
                        <a href="<?php bloginfo( 'url' ) ?>/category/<?php echo $category[0]->slug ?>"><?php echo $category[0]->name ?> </a>
                    </p>


                    <p> &nbsp;<?php the_time( 'd F Y g:i' ) ?></p>
                </div>
                <!--	--><?php //the_category(); ?>


            </div>
        </div>
        <div class="artdivcont">
            <div class="artdiv">
                <p><?php _e( 'Mon article', 'krustea' ) ?></p>
                <p><?php the_content() ?></p>

                <?php comments_template(); ?>
            </div>
            <div class="custom-sidebar">
                <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'sidebar' ) ) : ?>
                <?php endif; ?>
            </div>
        </div>
        <?php the_content() ?>

    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>