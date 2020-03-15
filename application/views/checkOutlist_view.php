<?php 
$attributes = array('id' => 'frmcheckOutlist','name' => 'frmcheckOutlist');
echo form_open_multipart('checkOutlist',$attributes); ?> 

<input type="hidden" name="hidEx1" id="hidEx1" />
<!--  <?=$message?>  -->
<?php
    if($checkOutlist){
    ?>
<div class="col-xs-12 col-md-10 col-md-offset-2 ">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title text-center" style="font-size:20px;font-weight: bold; padding:20px;">Check Out List</h3>
    </div>
    <div class="panel-body">
      <table class="col-xs-12 col-md-10  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
      <thead class="bg-success">
      <tr>
      <th>Booking Info</th>
      <th>Total Person</th>
      <th>Package</th>
      <th>Check IN and Out</th>
      <th>Payment</th>
      </tr>
      </thead>
      <tbody>
      <?php
      foreach ($checkOutlist as $row) {
      ?>                             
      <tr class="bg-success"  style="font-weight:bold">
      <td>Booking Id : <?=$row->c_id?><br>Name : <?=$row->customer_name?> </td> 
      <td>Adult : <?=$row->c_adult?><br>Child : <?=$row->c_child?><br>Total : <?=$row->c_total_person?></td>
      <td>Package Id : <?=$row->package_id?><br>Name : <?=$row->c_pakage?></td>
      <td>Check In : <?=$row->c_pkg_chkIN_date?><br>Check Out : <?=$row->c_pkg_chkOut_date?><br><br>Total : <?=$row->c_total_amount?></td>

      <td>Bkash : <?=$row->bkash_payment?><br>Card : <?=$row->card_payment?></td>
 <!--      <td><input type="button" value="Delete" class="btn btn-danger" onClick="deleteObj('frmcheckOutlist',<?=$row->c_id?>,'deleteCheckOutlist')"/></td> -->
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