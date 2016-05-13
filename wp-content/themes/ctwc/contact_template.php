<?php
/**
 * Template Name: Contact  Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/content', 'page'); ?> -->

<div class="row">
	<div class="col-md-6" id="sidebar_service">
   	
<address>
	your address
	State New York, NY





</address>
     

	</div>


<div class="col-md-6">
	


<?php the_content(); ?>

</div>


</div>





<?php endwhile; ?>
