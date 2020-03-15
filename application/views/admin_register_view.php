<?php 
$attributes = array('id' => 'frmregister','name' => 'frmregister');
echo form_open_multipart('adminregister',$attributes); ?>  
<input type="hidden" name="hidEx1" id="hidEx1"/>



  <div class="row"><br>
    <div class="col-xs-12 col-md-4 col-md-offset-2">  
      <?=$message?>
      <div class="panel panel-default">
        <div class="panel-heading ">
          <h3 class="panel-title text-center" style="font-size:20px;font-weight: bold;padding:20px;"><i class=""></i>Admin Registration</h3>
        </div>
        <div class="panel-body">
          <input type="file" name="profilepic" id="profilepic" class="filestyle" data-buttonName="btn-primary"/>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input class="form-control" placeholder="Admin Name" name="admname" id="admname" type="text" 
          value="<?php if($register) echo $register->usr_name?>">  
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-key"></i></span>
          <input class="form-control" placeholder="Password" name="admpass" id="admpass" type="password" value=""> 
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <textarea class="form-control" placeholder="Address" name="admadd" id="admadd" type="text" 
          value=""></textarea> 
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input class="form-control" placeholder="Email" name="admemail" id="admemail" type="text" value="<?php if($register) echo $register->usr_email?>">  
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
          <input class="form-control" placeholder="Registration Date" name="admregdate" id="admregdate" type="date" value="">  
          </div>
          <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input class="form-control" placeholder="Phone" name="admphone" id="admphone" type="text" value="<?php if($register) echo $register->usr_phone?>">  
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
              <input type="button" onClick="validateAdminRegister('frmregister',0,'addAdmin')" class="btn btn-success form-control" value="Submit" />
            </div>
            <!--    <div class="col-xs-12 col-md-6">
              <input type="button" value="Search" class="btn btn-danger form-control" onClick="formsubmit('frmregister','searchAdmins')"/>
            </div> -->
          </div>
        </div>
      </div>
    </div>   
  </div> 
  <div class="row">
    <div class="col-xs-12 col-md-2 col-md-offset-3">
      <?php
      if($adminUpdate){
      ?>
      <input type="button" value="Update Admin" class="btn btn-info form-control" onClick="processObject('frmregister',<?=$register->usr_id?>,'updateAdmin')" />
    </div>
      <?php
      }
      ?>
  </div>
  <!-- <hr/> --></br>
  <div class="row">
    <?php
    if($alladmins){
    ?>
    <div class="col-xs-12 col-md-9 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center" style="font-size:20px;font-weight: bold;padding:20px;"><i class=""></i>All Admin</h3>
        </div>
        <div class="panel-body">
          <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
          <thead >
            <tr >
            <th>Admin</th>
            <th>Address</th> 
            <th>Email</th> 
            <th>Registration date</th> 
            <th>Phone</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          foreach ($alladmins as $row) {
          ?>
          <tr class="bg-success" style="font-weight: bold">  
            <td><strong>Id :</strong><?=$row->usr_id?><br><strong>Name :</strong>
            <?=$row->usr_name?></td>
            <!--<td><?=$row->usr_pass?></td> -->
            <td><?=$row->usr_add?></td>
            <td><?=$row->usr_email?></td>
            <td><?=$row->usr_reg_date?></td>
            <td><?=$row->usr_phone?></td>  
            <td>
            <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmregister',<?=$row->usr_id?>,'editAdmin')"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmregister',<?=$row->usr_id?>,'deleteAdmin')"><i class="fa fa-times-circle"></i></button>          
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
  </div></form>   




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


