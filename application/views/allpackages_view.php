<?php 
$attributes = array('id' => 'frmallpackages','name' => 'frmallpackages');
echo form_open_multipart('allpackages',$attributes); ?> 
  <?php
  if($package){
  ?>
  <div class="row">
    <div class="col-xs-12 col-md-9 col-md-offset-2 text-center">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class=""></i>Total Package</h3>
        </div>
        <div class="panel-body">
          <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
          <thead >
          <tr >
            <th>Package Id</th>
            <th>TotalPerson/Booked</th> 
            <th>Package Name</th> 
            <th>Cost</th> 
            <th>Create Date</th> 
            <th>Check In</th> 
            <th>Check Out</th>
          </tr>
          </thead>
          <tbody>
          <?php
          foreach ($package as $row){
                     $tot=0;
            foreach ($pkgTotals as $ptot) {
            if($ptot->package_id==$row->c_pkg_id) $tot=$ptot->c_total_person;
            }?>                             
          <tr class="bg-success">
            <td><?=$row->c_pkg_id?></td>
            <td><?=$row->total_person?>/<?=$tot?></strong></td>
            <td><?=$row->c_pkg_name?></td>
            <td><?=$row->c_pkg_cost?></td>
            <td><?=$row->c_pkg_create_date?></td>
            <td><?=$row->c_pkg_chkIN_date?></td>
            <td><?=$row->c_pkg_chkOut_date?></td>
<!--       <td>
            <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmallpackages','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmallpackages',<?=$row->c_pkg_id?>,'deletePakage')"><i class="fa fa-times-circle"></i></button>
            </td> -->
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













