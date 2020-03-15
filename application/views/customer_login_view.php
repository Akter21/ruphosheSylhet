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
    <!-- MetisMenu CSS -->
    <!--link href="<?=base_url()?>assets/bootstrap-3.3.5/css/metisMenu.min.css" rel="stylesheet"-->
    <!--link href="<?=base_url()?>assets/css/bootstrap/sb-admin-2.css" rel="stylesheet"-->
    <link href="<?=base_url()?>assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/base/background2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container"><br/>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading" align="center">
                    <img src="<?=base_url()?>assets/images/<?=$this->config->item('site_logo');?>" class="img-responsive" />
                    <h3 class="panel-title">Please Sign In customer</h3>
                </div>
                <div class="panel-body">
				<?php 
				$attributes = array('id' => 'frmcusLogin','name' => 'frmcusLogin');
				echo form_open_multipart('welcome/verify',$attributes); ?> 
                 <input type="hidden" name="hidEx1" id="hidEx1"/>
                <fieldset>
        			<div class="form-group input-group">
        				<span class="input-group-addon"><i class="fa fa-user fa-spin"></i></span>
                            <input class="form-control" placeholder="Customer" name="Customer" id="Customer" type="text" autofocus>
                    </div>
        			<div class="form-group input-group">
        				<span class="input-group-addon"><i class="fa fa-key fa-spin"></i></span>
                            <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="">
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <input type="button" onClick="validatecustomerLogin('frmcusLogin','')" class="btn btn-lg btn-success btn-block" value="Login" />
                </fieldset>
                <a  onclick="location.href='<?php echo base_url();?>index.php'">Back to home page</a> 
                </form>
            </div>
            <div class="panel-heading" align="center">
                <?=$this->config->item('developed_by');?>
            </div>
                    
        </div>
    </div>
</div>
<?=$message?>
<hr/>
<div class="col-xs-12 col-md-6 col-md-offset-4">
  <a style="color:white;">Copyright &copy; All rights reserved by Holiday Planner</a>
</div>		
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url()?>assets/js/jquery-1.11.2.js"></script>
<script src="<?=base_url()?>assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site.js"></script>
</body>
</html>

