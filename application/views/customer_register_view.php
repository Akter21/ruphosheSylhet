<!DOCTYPE html>
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
    <link href="<?=base_url()?>assets/css/base/background2.css" rel="stylesheet" type="text/css">

    <!-- MetisMenu CSS -->
    <!--link href="<?=base_url()?>assets/bootstrap-3.3.5/css/metisMenu.min.css" rel="stylesheet"-->
    <!--link href="<?=base_url()?>assets/css/bootstrap/sb-admin-2.css" rel="stylesheet"-->
    <link href="<?=base_url()?>assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <div class="login-panel panel panel-default">
          <div class="panel-heading" align="center" style="color:black;  font-size: 20px;>
            <h3 class="panel-title" >Registration Form</h3>
          </div>
    </div>  -->
  </head>
<div class="jumbotron">
  <h5 style="font-size:40px; text-align:center; font-weight: bold;">Customer Registration Form</h5>
</div>
<body>

<div class="container" >  
  <div class="row"><br>
    <div class="col-xs-12 col-md-6 col-md-offset-3 ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title  text-center"><i class=""></i> PLEASE FILL THE FORM</h3>
        </div>
        <div class="panel-body"> 
        <?php 
        $attributes = array('id' => 'frmcustomerregister','name' => 'frmcustomerregister');
        echo form_open_multipart('customerregister',$attributes); ?> 
        <input type="hidden" name="hidEx1" id="hidEx1"/>
        <?=$message?>
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input class="form-control" placeholder="Your Name" name="cusname" id="cusname"  type="text" autofocus>
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input class="form-control" placeholder="Password" name="cuspass" id="cuspass" 
           type="password" value="">
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-book"></i></span>
          <textarea class="form-control" placeholder="Your address" name="cusaddress" id="cusaddress"      type="text" autofocus></textarea>
        </div>
          <!--   <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa"></i></span>
          <input class="form-control" placeholder="Your nid" name="cusnid" id="cusnid"            type="password" value="">
          </div> -->
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input class="form-control" placeholder="Your phone" name="cusphone" id="cusphone" type="text" value="">
          </div>
          <!--    <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input class="form-control" placeholder="Date of birth" name="cusdob" id="cusdob" type="date" value="">
          </div> -->
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input class="form-control" placeholder="Email" name="cusemail" id="cusemail" type="text" value="">
          </div>
          <!-- Change this to a button or input when using this as a form -->
            <input type="button" onClick="validatecustomerRegister('frmcustomerregister',0,'addCustomer')" class="btn btn-lg btn-success btn-block" value="Submit" />
       
          <a href="<?=base_url()?>index.php"><i style="font-size:20px;   font-weight: bold;">Back to home</i></a> 
          </form>
        </div>
      </div>   
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-md-offset-4">
  <p style="color:white;">Copyright &copy; All rights reserved by Ruposhe Sylhet</p>
  </div>
</div>
<script src="<?=base_url()?>assets/js/jquery-1.11.2.js"></script>
<script src="<?=base_url()?>assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site.js"></script>  
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


