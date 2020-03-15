<?php 
$attributes = array('id' => 'frmcbooking','name' => 'frmcbooking');
echo form_open_multipart('cbooking',$attributes);?> 

<input type="hidden" name="hidEx1" id="hidEx1" />
<input type="hidden" name="hidAdult" id="hidAdult" value="<?php if($srchData) echo $srchData['srcAdult']?>" />
<input type="hidden" name="hidChild" id="hidChild" value="<?php if($srchData) echo $srchData['srcChild']?>"/>

<input type="hidden" name="hidPkgId" id="hidPkgId" value="<?php if($srchData) echo $srchData['srcPkgId']?>"/>
<!--   <style>
body {
    background-image: url("<?=base_url()?>assets/images/greycolor.png");
    background-repeat: repeat-x;
}
</style> -->
<!--  <link href="<?=base_url()?>assets/css/base/background3.css" rel="stylesheet" type="text/css"> -->

<?=$message?>
<!-- <link href="<?=base_url()?>assets/css/base/background3.css" rel="stylesheet" type="text/css"> -->
<div class="continer">
  <!--   <div class="jumbotron"> -->
  <div class="row">
    <div class="col-xs-12 col-md-4">
      <label style="font-size:20px;">Number of person:</label><br>
      <label style="">Adult:</label>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-users"></i></span>
        <input type="number" name="cadult" id="cadult" value="" class="form-control form-group" placeholder="Adult"/>
      </div>
       <label style="">Child:</label>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-child"></i></span>
        <input type="number" name="cchild" id="cchild" value="" class="form-control form-group" placeholder="Child"/>
      </div>
    </div>
    <div class="col-xs-12 col-md-4"><br>
    </div>
  </div>
  <div class="row">
    <?php
    if($bookings){
    ?>
    <?php
    foreach ($bookings as $row) {
    $tot=0;
      foreach ($pkgTotals as $ptot) {
        if($ptot->package_id==$row->c_pkg_id) $tot=$ptot->c_total_person;
      }?>                             
    <div class="col-xs-12 col-md-4"> 
      <div class="panel panel-default text-center"> 
        <a><img class="img-fluid img-thumbnail" src="<?=base_url().$row->p_pic?>" alt="..." style="height:500px font-size: 20px;">
        </a><br>
        <a style="color:black; font-size: 16px;"><strong>Package Name :</strong><?=$row->c_pkg_name?>
            <input type="hidden" name="hidPkgNm_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_name?>">
        </a> 
        <a style="color:black; font-size: 16px;"><strong>Package No :</strong><?=$row->c_pkg_id?>
            <input type="hidden" name="hidPkgId_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_id?>">
        </a><br>
        <a style="color:black; font-size: 16px;"><strong>Cost :</strong><?=$row->c_pkg_cost?>
            <input type="hidden" name="hidRate_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_cost?>">Taka
        </a></br>
            <a style="color:red;  font-size: 15px; ">
          <b>This Package for: </b>  
          <strong style="color:black;  font-size: 18px; "><?=$row->total_person?></strong> 
          <b>persons.<br>Booked by:</b> <strong style="color:black;  font-size: 18px; "><?=$tot?></strong>
          <strong style="color:red;  font-size: 15px; "> persons.</strong><br>
        <a style="color:black;"><?=$row->c_pkg_desc?>
            <input type="hidden" name="hidPkgpdesc_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_desc?>">
        </a></br>
        <a style="color:black; font-size: 16px;"><strong>Check In :</strong><?=$row->c_pkg_chkIN_date?>
          <input type="hidden" name="hidPkgchkIN_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_chkIN_date?>">
        </a></br>
        <a style="color:black; font-size: 16px;"><strong>Check Out :</strong><?=$row->c_pkg_chkOut_date?>
          <input type="hidden" name="hidPkgchkOut_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_chkOut_date?>">
        </a>
        <a>
          <input type="button" value="Click to book" class="btn btn-primary form-control" onClick="validatecBooking('frmcbooking','<?=$row->c_pkg_id.'_'.$row->total_person.'_'.$tot?>','addToPayment')" /></a>  
      </div> 
    </div>
        <?php
        }
        ?>
        <?php
        }
        ?>
    </div><br>
<p style="font-variant: bold; font-size: 50px;" class="text-center">About Us</p>

  <div class="row">           
    <?php
    if($aboutus){
    ?>
    <?php
    foreach ($aboutus as $row){
    ?>
    <div class="col-md-6 d_flex align-items-center">
      <div class="about_content ">
        <h2 class="title title_color">Ruposhe Sylhet</h2>
        <p style="color:black;font-size:20px;"><?=$row->about_des?></p>
      </div>
    </div>
    <div class="col-md-6">
      <img class="img-fluid" src="<?=base_url().$row->aboutus_image?>" alt="img">
    </div>
    <?php
    }
    ?>
    <?php
    }
    ?>
  </div><br>
  <div class="row">
    <div class="section_title text-center">
      <h2 class="title_color">Find Us</h2>
    </div><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.939847308819!2d91.81530368510913!3d24.48754097205454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751756869cc84bd%3A0x5bb00befd3418c67!2zQmFzaHRvbGEg4Kas4Ka-4KaB4Ka24Kak4Kay4Ka-!5e0!3m2!1sen!2sbd!4v1541564322680" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div><br>
  <div class="row"><br>
    <div class="section_title text-center"><br>
        <h2 class="title_color">Gallary</h2>
    </div>
    <div class="row mb_30">
      <?php
      if($galleryimage){
      ?>
      <?php
      foreach ($galleryimage as $row){
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="single-recent-blog-post">
          <div class="thumb">
            <img class="img-fluid img-thumbnail" src="<?=base_url().$row->gallery_img?>" alt="..." style="height:270px">
          </div> 
        </div>
      </div>
      <?php
      }
      ?>
      <?php
      }
      ?>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-md-offset-4">
      <a style="color:white;">Copyright &copy; All rights reserved by Ruposhe Sylhet</a>
  </div>   
  </div>

<!-- </div> -->
  <!-- Modal -->
    <div class="modal fade alertModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="alert"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" autofocus>Close</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>




































































































































































































































































































































































































































<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Welcome to <?=$this->config->item('site_name')?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">
   <!-- Date time picker -->
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- Social Buttons CSS -->
    <link href="<?=base_url()?>assets/css/social-buttons.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/jquery/jquery-1.11.2.js"></script>
    <script src="<?=base_url()?>assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/js/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?=base_url()?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/js/dataTables/dataTables.bootstrap.js"></script>


<script src="<?=base_url()?>assets/js/bootstrap.file-input.js"></script>


    <!-- Tooltip Plugin JavaScript -->
    <script src="<?=base_url()?>assets/js/tooltip.js"></script>


    <script type="text/javascript" src="<?=base_url()?>assets/js/site.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap-filestyle.min.js"> </script>  

  <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

    <link rel="stylesheet" href="<?=base_url()?>assets/css/base/jquery.ui.all.css">

 

        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>