<?php 
$attributes = array('id' => 'frmaddpkg','name' => 'frmaddpkg');
echo form_open_multipart('addpkg',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />

<div class="continer">
  <div class="row"><br>
    <div class="col-xs-12 col-md-4 col-md-offset-2 ">
<!--  <?php 
    date_default_timezone_set('Asia/Dhaka');
    echo date('H : i : s ');
    ?> -->
        <?=$message?>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title  text-center" style="font-size:20px;font-weight: bold;padding:20px;"><i class=""></i>Add Package</h3>
        </div>
        <div class="panel-body">
          <input type="file" name="packagesimages" id="packagesimages" class="filestyle" data-buttonName="btn-primary"/>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
          <input type="text" name="pname" id="pname" value="<?php if($addpkg) echo $addpkg->c_pkg_name?>" class="form-control" placeholder="Package name"
          />
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-money"></i></span>
          <input type="number" name="pcost" id="pcost" value="<?php if($addpkg) echo $addpkg->c_pkg_cost?>" class="form-control" placeholder="package cost"/>
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-book"></i></span>
          <textarea type="text" name="pdesc" id="pdesc" value="<?php if($addpkg) echo $addpkg->c_pkg_desc?>" class="form-control" placeholder="package description"/></textarea>
          </div>
          <label for="name">Check In and Check Out Date:</label>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input type="date" name="chkINdate" id="chkINdate" value="" class="form-control" placeholder="Check In"/>
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input type="date" name="chkOutdate" id="chkOutdate" value="" class="form-control" placeholder="Check Out"/>
          </div>
          <!-- <label style="color:white">Room:</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="bed"></i></span>
                    <select name="room" id="room" class="form-control form-group">
                      <option >Number of Rooms</option>
                      <option >1</option>
                      <option>2</option>
                      <option >3</option>
                    </select>
                </div> -->
          <label for="name">Total Person for this Pacakge:</label>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-users"></i></span>
          <input type="text" name="totalperson" id="totalperson" value="<?php if($addpkg) echo $addpkg->total_person?>" class="form-control" placeholder="Total Person"/>
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3">
          <input type="button" value="Add" class="btn btn-success form-control" onClick="validatePakage('frmaddpkg',0,'addPackage')" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-3">
      <?php
      if($packageUpdate){
      ?>
      <div class="row">
        <div class="col-xs-3">
          <input type="button" value="Update Package" class="btn btn-info form-control" onClick="processObject('frmaddpkg',<?=$addpkg->c_pkg_id?>,'updatePackage')" />
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
  </br>
  
  <div class="row">
        <?php
        if($addpkgs){
        ?>
    <div class="col-xs-12 col-md-10 col-md-offset-2 ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center"><i class=""></i>All Packages</h3>
        </div>
        <div class="panel-body">
          <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
          <thead class="bg-success">
          <tr>
            <th>Package Id</th>
            <th>Details</th> 
            <th>Package Name/Status</th> 
            <th>Cost</th> 
            <th>Create Date</th> 
            <th>Check In</th> 
            <th>Check Out</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php
          foreach ($addpkgs as $row) {
                 $tot=0;
                 $ptotamount=0;
                 $ptotchild=0;
                 $ptotadult=0;
            foreach ($pkgTotals as $ptot) {
              if($ptot->package_id==$row->c_pkg_id) $tot=$ptot->c_total_person;
            }
            foreach ($pkgTotalamount as $ptotal) {
              if($ptotal->package_id==$row->c_pkg_id) $ptotamount=$ptotal->c_total_amount;
            }
            foreach ($getpkgchild as $ctotal) {
              if($ctotal->package_id==$row->c_pkg_id) $ptotchild=$ctotal->c_child;
            }
            foreach ($getpkgadult as $atotal) {
            if($atotal->package_id==$row->c_pkg_id) $ptotadult=$atotal->c_adult;
            }
          ?>                            
          <tr class="bg-success" style="font-weight: bold">
          <td><?=$row->c_pkg_id?></td>
          <td>Total Person : <?=$row->total_person?>  <br>Booked By : <?=$tot?><br> Total Child : <?=$ptotchild?>
          <br>Total Adult : <?=$ptotadult?> <br>Total amount :  <?=$ptotamount?></td>
          <td>Name : <?=$row->c_pkg_name?><br> Status : <?=$row->package_status?></td>
          <td><?=$row->c_pkg_cost?></td>
          <td><?=$row->c_pkg_create_date?></td>
          <td><?=$row->c_pkg_chkIN_date?></td>
          <td><?=$row->c_pkg_chkOut_date?></td>
          <td><button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button>
          <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddpkg', <?=$row->c_pkg_id?>, 'deletePakage')"><i class="fa fa-times-circle"></i></button>

          <br><br>
          <input type="button" value="UPDATE STATUS" class="btn btn-success" onClick="processObject('frmaddpkg',<?=$row->c_pkg_id?>,'updateStatus')"/>
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






</form>
</div>

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