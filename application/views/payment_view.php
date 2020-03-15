<?php 
$attributes = array('id' => 'frmpayment','name' => 'frmpayment');
echo form_open_multipart('cbooking',$attributes);?> 



<input type="hidden" name="hidEx1" id="hidEx1" />
<input type="hidden" name="hidAdult" id="hidAdult" value="<?php if($srchData) echo $srchData['srcAdult']?>" />
<input type="hidden" name="hidChild" id="hidChild" value="<?php if($srchData) echo $srchData['srcChild']?>"/>
<input type="hidden" name="hidDate" id="hidDate" value="<?php if($srchData) echo $srchData['srcDate']?>"/>
<input type="hidden" name="hidPkgId" id="hidPkgId" value="<?php if($srchData) echo $srchData['srcPkgId']?>"/>
<!--   <style>
body {
    background-image: url("<?=base_url()?>assets/images/greycolor.png");
    background-repeat: repeat-x;
}
</style> -->
 

<?=$message?>
<!-- <link href="<?=base_url()?>assets/css/base/background3.css" rel="stylesheet" type="text/css"> -->
<div class="continer">
  <div class="row">
    <div class="col-xs-12 col-md-4">
      <label>Number of person:</label><br>
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
    <div class="col-xs-12 col-md-4"><br>
      <label style="color:red">Booking Date:</label>
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-money"></i></span>
          <input type="date" name="issuedate" id="issuedate" value="" class="form-control form-group" placeholder=""/>
         <!--   <input type="text" name="bkash" id="bkash" value="" class="form-control form-group" placeholder="Bkash Transaction Id"/> -->
              <input type="button" value="Click to book" class="btn btn-primary form-control" onClick="formsubmit('frmpayment',<?=$row->c_pkg_id?>,'addToPayment')" /></a> 
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 "> 
            <?php
            if($bookings){
            ?>
            <?php
              foreach ($bookings as $row) {
                $tot=0;
                foreach ($pkgTotals as $ptot) {
                  if($ptot->package_id==$row->c_pkg_id) $tot=$ptot->c_total_person;
                  }
            ?>                             
      <div class="col-xs-12 col-md-4">
        <a><img class="img-fluid img-thumbnail" src="<?=base_url().$row->p_pic?>" alt="..." style="height:250px font-size: 20px;">
        </a>
        <a style="color:black; font-size: 16px;"><strong>Package Name :</strong><?=$row->c_pkg_name?>
            <input type="hidden" name="hidPkgNm_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_name?>">
        </a> 
        <a style="color:black; font-size: 16px;"><strong>Package No :</strong><?=$row->c_pkg_id?>
            <input type="hidden" name="hidPkgId_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_id?>">
        </a><br>
        <a style="color:black; font-size: 16px;"><strong>Cost :</strong><?=$row->c_pkg_cost?>
            <input type="hidden" name="hidRate_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_cost?>">Taka
        </a></br>
            <a style="color:red;  font-size: 15px; ">
          <b>This Package for: </b>  
          <strong style="color:black;  font-size: 20px; "><?=$row->total_person?></strong> 
          <b>persons. Booked by:</b> <strong style="color:black;  font-size: 20px; "><?=$tot?></strong><br>
        <a style="color:black"><?=$row->c_pkg_desc?>
            <input type="hidden" name="hidPkgpdesc_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_desc?>">
        </a></br>
        <a style="color:black; font-size: 16px;"><strong>Check In :</strong><?=$row->c_pkg_chkIN_date?>
          <input type="hidden" name="hidPkgchkIN_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_chkIN_date?>">
        </a></br>
        <a style="color:black; font-size: 16px;"><strong>Check Out :</strong><?=$row->c_pkg_chkOut_date?>
          <input type="hidden" name="hidPkgchkOut_<?=$row->c_pkg_id?>" value="<?=$row->c_pkg_chkOut_date?>">
        </a>
        <a>
       <!--    <input type="button" value="Add" class="btn btn-success form-control" onClick="validatecBooking('frmcbooking',<?=$row->c_pkg_id?>,'addClient')" /></a>
           <a> -->
          <input type="button" value="Click to book" class="btn btn-primary form-control" onClick="validatecBooking('frmcbooking',<?=$row->c_pkg_id?>,'payment')" /></a>  
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



