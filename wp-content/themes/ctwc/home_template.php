<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  

<!-- bootstrap template -->


    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row" id="page-header">
          
            <!-- /.col-md-8 -->
   

  <div class="col-md-12">
 



 <?php 
    echo do_shortcode("[metaslider id=9]"); 
?>
 


            </div>


        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4" id="service_col">
                <h2>Services</h2>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/limo.jpg" class="img-rounded" width="260px;" />
                <br />
                <p style="padding-top: 10px;">
                    <ul>
                       <?php wp_list_pages('title_li=0&include=31,35,47,39,14');?>
                    </ul>



                </p>
                <a class="btn btn-default" href="/services">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4" id="about_col">
                <h2>About us</h2>
                <p>
                    CTWCLimo believes in offering the best possible transportation to all travelers in the Tri- State area through an unequalled level of quality service, stressing comfort and affordability. We offer door-to- door passenger transportation service for our clients.
             </p>
                <a class="btn btn-default" href="/about-us">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4" id="feedback_col">
                <h2>FeedBack</h2>
             <?php echo do_shortcode('[contact-form-7 id="23" title="Feeback"]'); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

     

    </div>
    <!-- /.container -->












<!-- end bootstrap template -->



<?php endwhile; ?>
