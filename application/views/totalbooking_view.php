<?php 
$attributes = array('id' => 'frmatotalbooking','name' => 'frmatotalbooking');
echo form_open_multipart('totalbooking',$attributes); ?> 

<input type="hidden" name="hidEx1" id="hidEx1" />
   
  <?php
    if($clients){
    ?>
<div class="col-xs-12 col-md-10 col-md-offset-2 ">
<!--   <?=$message?>  -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title text-center" style="font-size:20px; font-weight: bold;  padding:20px;"><i class=""></i>All Booking</h3>
    </div>
    <div class="panel-body">
      <table class="col-xs-12 col-md-10  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
      <thead class="bg-success">
      <tr>
        <th>Booking Id</th>
        <th>Booking Date</th>
        <th>Check IN and Out</th>
        <th>Total amount</th>
        <th>Payment</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      foreach ($clients as $row) {
      ?>                           
      <tr class="bg-success">
        <td style="font-weight:bold"><b>Booking Id:<?=$row->c_id?><br><?=$row->customer_name?></b></td>
        <td style="font-weight:bold"> Book date:<?=$row->book_date?></td>
        <td  style="font-weight:bold">Check IN:<?=$row->c_pkg_chkIN_date?><br>Check Out:<?=$row->c_pkg_chkOut_date?><br>Status : <?=$row->booking_status?></td>
        <td><span class="btn-sm btn-success"><b><?=$row->c_total_amount?></b></span><br><br><span class="btn-sm btn-success"><b>Payment : <?=$row->c_status?></b></span></td>
        <td><span class="btn-sm btn-danger"><b>Bkash : <?=$row->bkash_payment?></b></span><br><br><span class="btn-sm btn-info"><b>Card : <?=$row->card_payment?></b></span><br><br><span class="btn-sm btn-primary"><b>Rocket : <?=$row->rocket_payment?></b></span></td>
        <td><input type="button" value="Details" class="btn btn-info" onClick="processObject('frmatotalbooking',<?=$row->c_id?>,'getDetails')"/><br>
              <input type="button" value="Delete" class="btn btn-danger" onClick="deleteObj('frmatotalbooking',<?=$row->c_id?>,'deleteClients')"/> 
        </td>

      </tr>
      <?php
      }
      ?>
      </tbody>
            <!--       <tr>
                    <td colspan="2" rowspan="4" style="padding:20px;"><b>TOTAL</b></td>
                    <td><b>AMOUNT</b><td>
                    <td><span class="btn-lg btn-info"><b><?php echo $sum;?></b></span></td><td colspan="2"></td>
                  </tr>
                  <tr>
                    <td><b>BOOKING</b></td>
                    <td></td>
                    <td><span class="btn-lg btn-info"><b><?php echo $count;?></b></span></td>
                    <td colspan="2"></td>
                  </tr> -->
      </table>
      <?php
      }
      ?>
    </div>  
  </div>
</div>

<?php
if($getdetails){
?>
<div class="col-xs-12 col-md-9 col-md-offset-2 ">
  <div class="panel panel-default">
    <div class="panel-heading">
     <button class="btn btn-sm btn-success" onclick="location.href='<?php echo base_url();?>index.php/totalbooking'">Back</button>
      <h3 class="panel-title text-center"style="color:black; font-weight:bold;" ><i class=""></i>Details</h3>
    </div>
    <div class="panel-body">
      <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
      <?php
      foreach ($getdetails as $row) {
      ?>                            
      <tr>
        <td align="left" style="font-weight:bold;" colspan="8" >Booking Details</td>
      </tr>
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Booking Number</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->c_id?></td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Customer Id</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->customer_id?></td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Customer Name</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->customer_name?></td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Address</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->customer_address?></td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Phone</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->customer_phone?></td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Email</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->customer_email?></td></tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Registration Date</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->customer_reg_date?></td>
      </tr>
      
      <tr>
        <td align="center" style="font-weight:bold;background:#eeeeee;">Check-In Date</td>
        <td align="center" style="font-weight:bold;background:#eeeeee;">Check-Out Date</td>
        <td align="center" style="font-weight:bold;background:#eeeeee;">Total Person</td>
        <td align="center" style="font-weight:bold;background:#eeeeee;">Amount</td>
        <td align="center" style="font-weight:bold;background:#eeeeee;">Package Id</td>
        <td align="center" style="font-weight:bold;background:#eeeeee;">Package Name</td>
      </tr>
      <tr>
        <td align="center" style="font-weight:bold;background:#ffffff;"><?=$row->c_pkg_chkIN_date?></td>
        <td align="center" style="font-weight:bold;background:#ffffff;"><?=$row->c_pkg_chkOut_date?></td>
        <td align="center" style="font-weight:bold;background:#ffffff;">Adult:<?=$row->c_adult?>
          <br>Child:<?=$row->c_child?>
        </td>
        <td align="center" style="font-weight:bold;background:#ffffff;"><?=$row->c_total_amount?></td>
        <td align="center" style="font-weight:bold;background:#ffffff;"><?=$row->package_id?></td>
        <td align="center" style="font-weight:bold;background:#ffffff;"><?=$row->c_pakage?></td>
      
      <tr>
          <td align="left" style="font-weight:bold;background:#eeeeee;" colspan="8">Payment Details</td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Card</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->card_payment?></td>
      </tr>
      
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Bkash Transaction Id</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->bkash_payment?></td>
      </tr>
       <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Rocket Transaction Id</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->rocket_payment?></td>
      </tr>

      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Payment Status</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->c_status?></td>
      </tr>
       <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Status</td>
        <td align="left" style="font-weight:bold;background:#ffffff;" colspan="8"><?=$row->booking_status?></td>

      </tr>     
      <tr>
        <td align="left" style="font-weight:bold;background:#ffffff;">Actions</td>
        <td colspan="8">
          <input type="button" value="Add To Check In List" class="btn btn-success" onClick="processObject('frmatotalbooking',<?=$row->c_id?>,'addToCheckinlist')"/>
          <input type="button" value="Add To Check Out List" class="btn btn-primary" onClick="processObject('frmatotalbooking',<?=$row->c_id?>,'addToCheckOutlist')"/>
          <input type="button" value="Add To Archive List" class="btn btn-danger" onClick="processObject('frmatotalbooking',<?=$row->c_id?>,'addToArchivelist')"/>
          <input type="button" value="UPDATE PAYMENT" class="btn btn-success" onClick="processObject('frmatotalbooking',<?=$row->c_id?>,'updatePayment')"/>
        </td>
      </tr>
      <?php
      }
      ?>
      </table> 
      <?php
      }
      ?>  <hr>
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
<!-- </body>
</html> -->












