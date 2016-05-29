<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css" >
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fractionslider.css" >
<!-- Google Place library -->

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fractionslider.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script src="https://cdn.jsdelivr.net/jquery.geocomplete/1.6.4/jquery.geocomplete.min.js"></script>
<script>
$(function () {	
	$("#location").geocomplete({
	 
	
	});

});
</script> -->
<!-- end muti layer slider -->

<script src="text/javascript">
    
$(window).load(function(){
    $('.slider').fractionSlider({
        'fullWidth':            true,
        'controls':             true, 
        'pager':                true,
        'responsive':           true,
        'dimensions':           "1000,400",
        'increase':             false,
        'pauseOnHover':         true
    });

});
    
</script>
</head>
