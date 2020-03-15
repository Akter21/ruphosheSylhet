  </head>
  <body style="padding-top: 0px">
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?=$this->config->item('site_name')?></a>
         
        </div>
        <div class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
            <li><a href="<?=base_url()?>index.php/cbooking"><i class="fa fa-users"></i>Book Now </a></li>
            <li><a href="<?=base_url()?>index.php/mybooking"><i class="fa fa-plus"></i>My Bookings</a></li>
            <li><a href="<?=base_url()?>index.php/myProfile"><i class="fa fa-user"></i>My profile</a></li>
            <li><a href="<?=base_url()?>index.php/Customerlogin/logout"><i class="fa fa-power-off"></i> Logout</a></li>
          </div><!--/.navbar-collapse -->     
      </div>
    </div>	
  <!-- Main jumbotron for a primary marketing message or call to action -->	
<div class="container">
