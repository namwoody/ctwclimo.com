<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  

<div class="row">
	<div class="col-md-3" id="sidebar_service">
   	

<div class="service_nav" id="services">
	<span>Select from the following to get specific &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; rates and information:</span>




<ul>

<?php wp_list_pages('title_li=&include=14,31,35,39,47'); ?>
</ul>

<ul>
		Additional Services
 		<li>Luxury Sedans &amp; SUVs</li>
 		<li>Stretch Limousines, Vans &amp; Buses (rates subject to change)</li>
 		<li>Domestic and International Services (rates subject to change)</li>
 		<li>Hybrid Services</li>
</ul>







</div>    
<div id="sidebar_image">

</div>



	</div>


<div class="col-md-9 col-xs-12">
	


<?php the_content(); ?>

</div>


</div>





<?php endwhile; ?>
