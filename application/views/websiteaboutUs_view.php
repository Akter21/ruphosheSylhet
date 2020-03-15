<?php 
$attributes = array('id' => 'frmwebsiteaboutUs','name' => 'frmwebsiteaboutUs');
echo form_open_multipart('aboutus',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />
<div class="continer">
  <div class="row">
    <div class="col-xs-12 col-md-9 col-md-offset-2 ">
      <?=$message?>       
    </div>
    <div class="col-xs-12 col-md-3 col-md-offset-2">
      <h1>About us </h1>  
      <input type="file" name="aboutUsimages" id="aboutUsimages" class="filestyle" data-buttonName="btn-primary"/>
      <input type="text" class="form-control" placeholder="Description" name="aboutUsdes" id="aboutUsdes"
      value="<?php if($about) echo $about->about_des?>" 
       />
      <input type="button" onClick="validateaboutus('frmwebsiteaboutUs',0,'addaboutus')" class="btn btn-success form-control" value="Submit" /> 
      <?php
      if($UpdateAboutus){
      ?>
      <div class="row">
        <div class="col-xs-3 col-md-6">
          <input type="button" value="Update About" class="btn btn-info form-control" onClick="processObject('frmwebsiteaboutUs',<?=$about->aboutus_id?>,'updateAbout')" />
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div> 
  </br>
<div class="row">
    <div class="col-xs-12 col-md-9 col-md-offset-2">
      <?php
      if($aboutus){
      ?> 
      <table class="col-xs-12 col-md-12 table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
      <thead class="bg-success">
      <tr class="bg-success">
      <th>Images</th>
      <th>Description</th>
      <th></th>
      </tr>
      </thead>
      <tbody>
      <?php
      foreach ($aboutus as $row){
      ?>                             
      <tr class="bg-success">
      <td><img src="<?=base_url().$row->aboutus_image?>" alt="..." style="height:50px" class="img-thumbnail"></td>
      <td><?=$row->about_des?></td>
      <td>
      <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmwebsiteaboutUs',<?=$row->aboutus_id?>,'editAboutus')"><i class="fa fa-edit"></i></button> 
      <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmwebsiteaboutUs', <?=$row->aboutus_id?>, 'deleteAboutus')"><i class="fa fa-times-circle"></i></button>
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
</form>
</div>  
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