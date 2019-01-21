<?php /* Template Name: Gabarit proprietes */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
<div>
	<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title() ?></h1>
	<?php endwhile;?>
</div>
<?php the_content() ?>
<?php endif;?>

<?php $Posts = get_the_ID() ?>







<?php
$args = array(
	'post_type' => 'proprietes',
	'posts_per_page' => 10,
	'order' => 'ASC',
); ?>
<?php $the_query  = new WP_Query($args);?>

<?php if ( $the_query->have_posts() ) : ?>
     <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	 <a href="<?php the_permalink() ?>">
         <?php the_title() ?>
		 <?php

         $id = get_the_ID();
		 $myterms = get_the_terms($id,'genre');

		 if( $myterms ): ?>

             <ul>

				 <?php foreach( $myterms as $myterm ): ?>

                     <p><?php echo $myterm->name; ?></p>

				 <?php endforeach; ?>

             </ul>

		 <?php endif; ?>

     </a>
     <?php endwhile; ?>
    <?php  ?>
<?php endif; ?>


<?php get_footer() ?>
