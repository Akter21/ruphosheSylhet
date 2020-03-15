<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title></title>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/adminassets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/adminassets/css/sb-admin.css" rel="stylesheet">
<!-- Morris Charts CSS -->
<link href="<?=base_url()?>assets/adminassets/css/plugins/morris.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="<?=base_url()?>assets/adminassets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Ruposhe Sylhet Admin</a>
        </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <?php 
            $attributes = array('id' => 'frmmenu','name' => 'frmmenu');
            echo form_open_multipart('menu',$attributes); ?> 
            <div class="sidebar-header d-flex align-items-center">
                <?php
                if($name){
                ?>
                <?php
                foreach ($name as $row){
                ?>
                <br>
                <p class="text-center">
                <img class="img-circle" width="70" src="<?=base_url().$row->usr_pic?>" alt="..."></p>
                <li style="color:red;font-size:23px;font-weight:bolder;" class="text-center"><i ></i> Welcome : <?=$row->usr_name?>
                </li>
                <br>
                <hr>
                <?php
                }
                ?>
                <?php
                }
                ?>
                </form>
            </div>
            <li><a href="<?=base_url()?>index.php/cpanel"><i class="fa fa-fw fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="<?=base_url()?>index.php/totalbooking"><i class="fa fa-fw fa fa-users"></i>All Bookings</a></li>
            <li><a href="<?=base_url()?>index.php/transaction"><i class="fa fa-fw fa fa-money"></i>Transaction</a></li>
            <li><a href="<?=base_url()?>index.php/checkInlist"><i class="fa fa-fw fa fa-mail-forward"></i>Check In list</a></li>
            <li><a href="<?=base_url()?>index.php/checkOutlist"><i class="fa fa-fw fa fa fa-mail-reply"></i>Check Out list</a></li>
             <li><a href="<?=base_url()?>index.php/archive"><i class="fa fa-fw fa fa fa-archive"></i>Archive list</a></li>
   
            <li><a  href="<?=base_url()?>index.php/addpkg"><i class="glyphicon glyphicon-plus-sign"></i>Add Package</a></li>
          
            <li><a href="<?=base_url()?>index.php/registeredCustomer"><i class=" fa fa-fw fa fa-plus"></i>All Customers</a></li>
           
            <li><a href="<?=base_url()?>index.php/adminregister"><i class="fa fa-fw fa fa-users"></i>All Admins</a></li>
         
            <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Edit Website<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li><a href="<?=base_url()?>index.php/websiteEditTeam"><i class="fa fa-fw fa fa-users"></i>Team</a></li>
                <li><a href="<?=base_url()?>index.php/aboutus"><i class="fa fa-fw fa fa-book"></i>About Us</a></li>
                <li><a href="<?=base_url()?>index.php/gallery"><i class="fa fa-fw fa fa-image"></i>Gallery</a></li>
            </ul></li>
            <li><a href="<?=base_url()?>index.php/login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>                  
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    </nav>

<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>

