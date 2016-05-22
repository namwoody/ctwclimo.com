<div id="top-bar">
  <div class="row">
    <div class="col-md-6">
      

    </div>

  <div class="col-md-6">
    
  <div class="quotes">
    <a href="#" data-toggle="modal" data-target="#myModal">
      Quick Quote or Book Now
    </a>


  </div>


<!-- start modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Booking</h4>
      </div>
      <div class="modal-body">
        <!-- start form -->
      <form id="formElem" name="formElem" action="" method="post">
   <table cellpadding="0" cellspacing="7" border="0" align="left" style="text-align:left;">
   <tbody><tr>
     <td><strong>Pick-up Location:</strong></td>
     <td><select name="pickuploc" id="pickuploc" class="home-select form-control" style="width:200px;"><option value="0" selected="selected">-- Select Pick-up Location --</option><option value="2">55 Test  Drive, Dallas, TX</option><option value="1">99 xxxxx Street, Houston, TX</option></select></td>
    </tr>
    <tr>
     <td><strong>Drop-Off Location:</strong></td>
     <td><select name="dropoffloc" id="dropoffloc" class="home-select form-control" style="width:200px;"><option value="0" selected="selected">-- Select Drop-off Location --</option><option value="2">55 Test  Drive, Dallas, TX</option><option value="1">99 xxxxx Street, Houston, TX</option></select></td>
    </tr>
   <tr>
     <td><strong>Car Type:</strong></td>
     <td><select name="car_type" id="car_type" class="form-control" style="width:auto !important">
     <option value="">---- All Types ----</option>
     <option value="1">limousine</option>
    </select></td>
    </tr>
    <tr>
     <td><strong>Pick-Up Date:</strong></td>
     <td><input id="txtFromDate" name="pickup" style="width:68px"  type="text" readonly="readonly" autocomplete="OFF" class="hasDatepicker">
      <span style="padding-left:0px;"><a id="datepickerImage" href="javascript:;"><img src="http://envato.bestsoftinc.net/wp-car/wp-content/plugins/car/front/images/month.png" height="16px" width="16px" style=" margin-bottom:-4px;" border="0"></a></span> <select name="pickUpTime" style="width:90px;">
  <option value="00:00:00">12:00 AM</option>
 <option value="00:30:00">12:30 AM</option>
 <option value="01:00:00">1:00 AM</option>
 <option value="01:30:00">1:30 AM</option>
 <option value="02:00:00">2:00 AM</option>
 <option value="02:30:00">2:30 AM</option>
 <option value="03:00:00">3:00 AM</option>
 <option value="03:30:00">3:30 AM</option>
 <option value="04:00:00">4:00 AM</option>
 <option value="04:30:00">4:30 AM</option>
 <option value="05:00:00">5:00 AM</option>
 <option value="05:30:00">5:30 AM</option>
 <option value="06:00:00">6:00 AM</option>
 <option value="06:30:00">6:30 AM</option>
 <option value="07:00:00">7:00 AM</option>
 <option value="07:30:00">7:30 AM</option>
 <option value="08:00:00">8:00 AM</option>
 <option value="08:30:00">8:30 AM</option>
 <option value="09:00:00" selected="selected">9:00 AM</option>
 <option value="09:30:00">9:30 AM</option>
 <option value="10:00:00">10:00 AM</option>
 <option value="10:30:00">10:30 AM</option>
 <option value="11:00:00">11:00 AM</option>
 <option value="11:30:00">11:30 AM</option>
 <option value="12:00:00">12:00 PM</option>
 <option value="12:30:00">12:30 PM</option>
 <option value="13:00:00">1:00 PM</option>
 <option value="13:30:00">1:30 PM</option>
 <option value="14:00:00">2:00 PM</option>
 <option value="14:30:00">2:30 PM</option>
 <option value="15:00:00">3:00 PM</option>
 <option value="15:30:00">3:30 PM</option>
 <option value="16:00:00">4:00 PM</option>
 <option value="16:30:00">4:30 PM</option>
 <option value="17:00:00">5:00 PM</option>
 <option value="17:30:00">5:30 PM</option>
 <option value="18:00:00">6:00 PM</option>
 <option value="18:30:00">6:30 PM</option>
 <option value="19:00:00">7:00 PM</option>
 <option value="19:30:00">7:30 PM</option>
 <option value="20:00:00">8:00 PM</option>
 <option value="20:30:00">8:30 PM</option>
 <option value="21:00:00">9:00 PM</option>
 <option value="21:30:00">9:30 PM</option>
 <option value="22:00:00">10:00 PM</option>
 <option value="22:30:00">10:30 PM</option>
 <option value="23:00:00">11:00 PM</option>
 <option value="23:30:00">11:30 PM</option>
</select></td>
    </tr>
    <tr>
     <td><strong>Drop-Off Date:</strong></td>
     <td><input id="txtToDate" name="dropoff" style="width:68px" type="text" readonly="readonly" autocomplete="OFF" class="hasDatepicker">
      <span style="padding-left:0px;"><a id="datepickerImage1" href="javascript:;"><img src="http://envato.bestsoftinc.net/wp-car/wp-content/plugins/car/front/images/month.png" height="18px" width="18px" style=" margin-bottom:-4px;" border="0"></a></span>  <select name="dropoffTime" style="width:90px;">
 <option value="00:00:00">12:00 AM</option>
 <option value="00:30:00">12:30 AM</option>
 <option value="01:00:00">1:00 AM</option>
 <option value="01:30:00">1:30 AM</option>
 <option value="02:00:00">2:00 AM</option>
 <option value="02:30:00">2:30 AM</option>
 <option value="03:00:00">3:00 AM</option>
 <option value="03:30:00">3:30 AM</option>
 <option value="04:00:00">4:00 AM</option>
 <option value="04:30:00">4:30 AM</option>
 <option value="05:00:00">5:00 AM</option>
 <option value="05:30:00">5:30 AM</option>
 <option value="06:00:00">6:00 AM</option>
 <option value="06:30:00">6:30 AM</option>
 <option value="07:00:00">7:00 AM</option>
 <option value="07:30:00">7:30 AM</option>
 <option value="08:00:00">8:00 AM</option>
 <option value="08:30:00">8:30 AM</option>
 <option value="09:00:00" selected="selected">9:00 AM</option>
 <option value="09:30:00">9:30 AM</option>
 <option value="10:00:00">10:00 AM</option>
 <option value="10:30:00">10:30 AM</option>
 <option value="11:00:00">11:00 AM</option>
 <option value="11:30:00">11:30 AM</option>
 <option value="12:00:00">12:00 PM</option>
 <option value="12:30:00">12:30 PM</option>
 <option value="13:00:00">1:00 PM</option>
 <option value="13:30:00">1:30 PM</option>
 <option value="14:00:00">2:00 PM</option>
 <option value="14:30:00">2:30 PM</option>
 <option value="15:00:00">3:00 PM</option>
 <option value="15:30:00">3:30 PM</option>
 <option value="16:00:00">4:00 PM</option>
 <option value="16:30:00">4:30 PM</option>
 <option value="17:00:00">5:00 PM</option>
 <option value="17:30:00">5:30 PM</option>
 <option value="18:00:00">6:00 PM</option>
 <option value="18:30:00">6:30 PM</option>
 <option value="19:00:00">7:00 PM</option>
 <option value="19:30:00">7:30 PM</option>
 <option value="20:00:00">8:00 PM</option>
 <option value="20:30:00">8:30 PM</option>
 <option value="21:00:00">9:00 PM</option>
 <option value="21:30:00">9:30 PM</option>
 <option value="22:00:00">10:00 PM</option>
 <option value="22:30:00">10:30 PM</option>
 <option value="23:00:00">11:00 PM</option>
 <option value="23:30:00">11:30 PM</option>
</select></td>
    </tr>
  
    <tr>
     <td></td>
     <td align="left">
     <button id="btn_room_search" name="btn_room_search" class="btn btn-danger" type="submit" style="float:left">
     Search</button></td>
    </tr>
   </tbody></table>
  </form>    





        <!-- end form -->








      </div>

      <!-- end modal-body -->
      <div class="modal-footer" id="modal-footer">
       
      </div>
    </div>
  </div>
</div>





<!-- end modal -->





  

  </div>  





  </div>


</div>     


<div class="container">
  <div class="row">
    <div class="col-md-4" id="logo">
        <a  href="#">
                 <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="ctwc logo"  width="260px;" / >   
                </a>
    </div>

<div class="col-md-8"  id="top_address_bar">
  <p class="email"><strong>Email</strong>ctwclimo@gmail.com</p> 
  <p class="phone_number"><strong>Call Us</strong>203-707-2388</p>
  

</div>



  </div>

<div class="row">
  <div class="col-md-12">
       <!-- start navigation -->
      <div id="navigation">
             <?php
       if (has_nav_menu('primary_navigation')) :
         wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
       endif;
       ?>
    </div><!-- end navigation -->


  </div>


</div>





</div>
