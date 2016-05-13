<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/content', 'page'); ?> -->

<div class="row">
	<div class="col-md-3" id="sidebar_service">
   	

<div class="service_nav" id="services">
	<span>Select from the following to get specific &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; rates and information:</span>


<ul>
New York City
<li><a href="">Manhattan</a></li>								
<li><a href="">Bronx</a></li>								
<li><a href="">Brooklyn</a></li>								
<li><a href="">Staten Island</a></li>								
<li><a href="">Borough to Borough</a></li>

</ul>

<ul>
Out-of-Town Rates
<li><a href="">Connecticut</a></li>								
<li><a href="">Long Island</a></li>								
<li><a href="">New Jersey</a></li>								
<li><a href="">New York State</a></li>								
<li><a href="">Pennsylvania</a></li>
<li><a href="">Westchester</a></li>	    

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
	<?php echo supsystic_tables_get(1); ?>


<?php the_content(); ?>

</div>


</div>





<?php endwhile; ?>
