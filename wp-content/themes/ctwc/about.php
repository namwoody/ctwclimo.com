<?php
/**
 * Template Name: about Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/content', 'page'); ?> -->

<div class="row">
	

<div class="col-md-12 col-xs-12">
	<?php echo supsystic_tables_get(1); ?>


<?php the_content(); ?>

</div>


</div>





<?php endwhile; ?>
