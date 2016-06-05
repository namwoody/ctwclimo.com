<?php
/**
 * Template Name: Contact  Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/content', 'page'); ?> -->

<div class="row">
	<div class="col-md-6" id="sidebar_service">
   	


   	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.421558207028!2d-73.70629968514055!3d40.752751979327456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2627f05ed4cd9%3A0x49f3318a6c78acf7!2s271-08+77th+Ave%2C+Queens%2C+NY+11040!5e0!3m2!1sen!2sus!4v1465165013309" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<address>
	271-08 77th Ave, 
	<br />Queens, NY 11040
	Tel:- 203-707-2388
	ctwclimo@gmail.com


</address>
     

	</div>


<div class="col-md-6">
	


<?php the_content(); ?>

</div>


</div>





<?php endwhile; ?>
