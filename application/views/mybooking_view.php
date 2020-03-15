<!DOCTYPE html>
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
    <link href="<?=base_url()?>assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<body>
<h1>Your Booking History</h1>
<?php 
$attributes = array('id' => 'frmmybooking','name' => 'frmmybooking');
echo form_open_multipart('mybooking',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />
<!--  <?=$message?>  -->
<div class="row">
  <div class="col-sm-12">
    <?php
    if($mybookings){
    ?>
    <table class="col-xs-12 table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
      <thead class="bg-success">
        <tr>
          <th>Booking Info</th>
          <th>Total Person</th>
          <!-- <th>Package Name</th> -->
          <th>Package</th>
          <th>Check IN and Out</th>
          <th>Total amount</th>
          <th>Payment By</th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($mybookings as $row) {
          ?>                             
        <tr class="bg-success"  style="font-weight:bold">
          <td>Booking Id : <?=$row->c_id?> <br>Book Date :<?=$row->book_date?></td>
          <td>Adult :<?=$row->c_adult?><br>Child :<?=$row->c_child?><br>Total:<?=$row->c_total_person?></td>
          <td>Id :<?=$row->package_id?><br>Name :<?=$row->c_pakage?></td>
          <td>Check IN :<?=$row->c_pkg_chkIN_date?><br>Check Out:<?=$row->c_pkg_chkOut_date?>
          </td>
          <td><?=$row->c_total_amount?></td>
          <td>Bkash : <?=$row->bkash_payment?><br>Card :<?=$row->card_payment?><br>Roacket : <?=$row->rocket_payment?></td>
        </tr>
          <?php
          }
          ?>
      </tbody>
    </table>
          <?php
          }
          ?>
  </div>
</div>
</form>
<script type="text/javascript">
  $('.form_datetime').datetimepicker({
  //language:  'fr',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  forceParse: 0,
  showMeridian: 1
  });
  $('.form_date').datetimepicker({
       // language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_time').datetimepicker({
       // language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>
<script type="text/javascript">
//    $('input[type=file]').bootstrapFileInput();
$(":file").filestyle({buttonName: "btn-primary"});
//$(":file").filestyle({input: false});


// for data table
$(document).ready(function() {
$('#dataTables-example').dataTable();
});
</script>
</body>
</html>

