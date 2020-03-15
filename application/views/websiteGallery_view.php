<?php 
$attributes = array('id' => 'frmwebsiteGallery','name' => 'frmwebsiteGallery');
echo form_open_multipart('gallery',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />


<div class="continer"><br>
  <div class="row">
    <div class="col-xs-12 col-md-9 col-md-offset-2 ">
      <?=$message?>       
    </div>
    <div class="col-xs-12 col-md-3 col-md-offset-2">
      <h1>GALLERY</h1>  
      <input type="file" name="galleryimages" id="galleryimages" class="filestyle" data-buttonName="btn-primary"/>
      <textarea class="form-control" placeholder="Description" name="gallerydes" id="gallerydes" type="text"> </textarea>
      <input type="button" onClick="validateaddGallery('frmwebsiteGallery',0,'addGallery')" class="btn btn-success form-control" value="Submit" />
    </div>
  </div> <br>
  <div class="row">
    <div class="col-xs-12 col-md-9 col-md-offset-2  table-responsive"> 
      <?php
      if($addGallery){
      ?>

      <table class="col-xs-12 col-md-9 table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
      <thead class="bg-success">
        <tr class="bg-success">
          <th>Picture</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($addGallery as $row){
        ?>                             
        <tr class="bg-success">
          <td><img src="<?=base_url().$row->gallery_img?>" alt="..." style="height:50px" class="img-thumbnail"></td>
          <td><?=$row->gallery_desc?></td>
          <td>
          <!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmwebsiteGallery',,'editArea')"><i class="fa fa-edit"></i></button> -->
          <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmwebsiteGallery', <?=$row->p_id?>, 'deleteGallery')"><i class="fa fa-times-circle"></i></button>
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