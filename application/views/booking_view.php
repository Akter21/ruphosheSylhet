<?php 
$attributes = array('id' => 'frmbooking','name' => 'frmbooking');
echo form_open_multipart('booking',$attributes); ?> 

<input type="hidden" name="hidEx1" id="hidEx1" />
    
<?=$message?>

<div class="continer">
  <div class="row">
    <div class="col-xs-12 col-md-4">
        <label>Number of person:</label></br>
        <label>Adult:</label>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-users"></i></span>
        <input type="text" name="cadult" id="cadult" value="" class="form-control form-group" placeholder="Adult"/>
      </div>
      <label>Child:</label>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-child"></i></span>
        <input type="text" name="cchild" id="cchild" value="" class="form-control form-group" placeholder="Child"/>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <label style="color:red">PAYMENT METHOD:</label>
      </br>
      <label>Bkash:</label>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
        <input type="text" name="bkash" id="bkash" value="" class="form-control form-group" placeholder="bkash transaction no"/>
      </div>
      <label>Cash:(If you pay by bkash then select other)</label>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
          <select name="cash" id="cash"  value="" class="form-control form-group" />>
            <option>cash</option>
            <option>other</option>
          </select>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <label style="color:red">Booking Date:</label>
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-money"></i></span>
          <input type="date" name="issuedate" id="issuedate" value="" class="form-control form-group" placeholder=""/>
        </div>
    </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12 text-center"> 
        <?php
        if($bookings){
        ?>
        <?php
        foreach ($bookings as $row) {
        ?>                             
    <div class="col-xs-12 col-md-4">
      <a><img class="img-fluid img-thumbnail" src="<?=base_url().$row->p_pic?>" alt="..." style="height:250px"></a>
      <a style="color:black; font-size: 16px;"><strong>Package Name :</strong><?=$row->c_pkg_name?>
        <input type="hidden" name="hidPkgNm_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_name?>"></a>

      <a style="color:black; font-size: 16px;"><strong>Package No :</strong><?=$row->c_pkg_id?>
        <input type="hidden" name="hidPkgId_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_id?>"></a><br>
      <a style="color:black; font-size: 16px; "><strong>Cost :</strong><strong><?=$row->c_pkg_cost?></strong>
        <input type="hidden" name="hidRate_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_cost?>">Taka</a></br>
        <a style="color:red;  font-size: 16px; "><b>This Package is left for:   </b>  <strong style="color:black;  font-size: 20px; "><?=$row->total_person?> </strong> <b>. persons</b>
        
       </br>
      <a style="color:black"><?=$row->c_pkg_desc?>
        <input type="hidden" name="hidPkgpdesc_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_desc?>">
      </a> 
      </br>
      <a style="color:black"><strong>Check In :</strong><?=$row->c_pkg_chkIN_date?>
        <input type="hidden" name="hidPkgchkIN_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_chkIN_date?>"></a> 
      </br>
      <a style="color:black"><strong>Check Out :</strong><?=$row->c_pkg_chkOut_date?>
        <input type="hidden" name="hidPkgchkOut_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_chkOut_date?>"></a>
      <a><input type="button" value="Add" class="btn btn-success form-control" onClick="validateBooking('frmbooking',<?=$row->c_pkg_id?>,'addClient')" /></a> 
    </div>
      <?php
      }
      ?>
      <?php
      }
      ?>
    </div>  
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
</form>
</div>

 

