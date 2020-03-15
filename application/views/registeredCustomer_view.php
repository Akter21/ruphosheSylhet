<?php 
$attributes = array('id' => 'frmregisteredCustomer','name' => 'frmregisteredCustomer');
echo form_open_multipart('registeredCustomer',$attributes); ?> 

<input type="hidden" name="hidEx1" id="hidEx1" />
<!--  <?=$message?>  --> 
<div class="row"><br>
  <div class="col-xs-12 col-md-10 col-md-offset-2">
    <?php
    if($allcus){
    ?>
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        <h3 class="panel-title" style="font-size:20px;font-weight: bold;padding:20px;"><i class="fa-fw"></i>Customer information</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="dataTables-example"> 
            <thead class="bg-success">
            <tr class="bg-success">
              <th>Customer Id</th>
              <th>Customer Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Registration date</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($allcus as $row) {
            ?>                             
            <tr class="bg-success"  style="font-weight:bold">
              <td><?=$row->customer_id?></td>  
              <td><?=$row->customer_name?></td>
              <td><?=$row->customer_address?></td>  
              <td><?=$row->customer_phone?></td>  
              <td><?=$row->customer_email?></td>
              <td><?=$row->customer_reg_date?></td>
              <td>
              <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmregisteredCustomer',<?=$row->customer_id?>,'deleteCustomer')"><i class="fa fa-times-circle"></i></button> 
              </td>
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












