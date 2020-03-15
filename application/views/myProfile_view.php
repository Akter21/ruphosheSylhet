<?php 
$attributes = array('id' => 'frmmyprofile','name' => 'frmmyprofile');
echo form_open_multipart('myProfile',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />

<div class="container">
         <?=$message?> 
  <div class="col-xs-12 col-md-9 col-md-offset-2 ">      
    <?php
    if($editprofile){
    ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title  text-center" style="font-size:20px;font-weight: bold;padding:20px;"><i class=""></i>Edit Your Profile</h3>
      </div>
      <div class="panel-body">
        <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">                            
          <tr>
            <td align="left" style="background:#ffffff;font-weight: bold; padding: 12px ">Name : </td>
            <td align="left" style="background:#ffffff;" colspan="8">
              <input class="form-control" placeholder="Your Name" name="cusname" id="cusname"  type="text" value="<?php if($edit) echo $edit->customer_name?>">
            </td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;font-weight: bold; padding: 12px">Address : </td>
            <td>  
              <input class="form-control" placeholder="Your Address" name="cusaddress" id="cusaddress"  type="text" 
                   value="<?php if($edit) echo $edit->customer_address?>">
            </td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;font-weight: bold; padding: 12px ">Phone : </td>
            <td align="left" style="background:#ffffff;" colspan="8">
              <input class="form-control" placeholder="Your Phone" name="cusphone" id="cusphone"  type="text" 
                   value="<?php if($edit) echo $edit->customer_phone?>">
            </td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;font-weight: bold; padding: 12px">Email : </td>
            <td>  
             <input class="form-control" placeholder="Your Email" name="cusemail" id="cusemail"  type="text" 
                   value="<?php if($edit) echo $edit->customer_email?>">
            </td>
          </tr>
        </table> 
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-5">
      <?php
      if($profileUpdate){
      ?>
      <div class="row">
        <div class="col-xs-3 col-md-5">
          <input type="button" value="Update Profile" class="btn btn-info form-control" onClick="processObject('frmmyprofile',<?=$edit->customer_id?>,'updateProfile')" />
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
    <div class="col-xs-12 col-md-9 col-md-offset-2 ">
  <?php
  if($personalinfo){
  ?>

    <?=$message?>       
    <div class="panel panel-default" style="color:black; font-size:20px;  font-weight:bold;">
      <div class="panel-heading">
        <h3 class="panel-title text-center"style="color:black; font-size:30px; font-weight:bold;" ><i class=""></i>Personal Information</h3>
      </div>
      <div class="panel-body">
        <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
          <?php
          foreach ($personalinfo as $row) {
          ?>                             
          <tr></tr>
          <tr>
            <td align="left" style="background:#ffffff;">Id</td>
            <td align="left" style="background:#ffffff;" colspan="8"><?=$row->customer_id?></td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;">Name</td>
            <td align="left" style="background:#ffffff;" colspan="8"><?=$row->customer_name?></td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;">Address</td>
            <td align="left" style="background:#ffffff;" colspan="8"><?=$row->customer_address?></td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;">Phone</td>
            <td align="left" style="background:#ffffff;" colspan="8"><?=$row->customer_phone?></td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;">Email</td>
            <td align="left" style="background:#ffffff;" colspan="8"><?=$row->customer_email?></td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;">Registration Date</td>
            <td align="left" style="background:#ffffff;" colspan="8"><?=$row->customer_reg_date?></td>
          </tr>
          <tr>
            <td align="left" style="background:#ffffff;">Edit</td>
            <td><button type="button" class="btn btn-success btn-circle" onClick="processObject('frmmyprofile','<?=$row->customer_id?>','editMyprofile')"><i class="fa fa-edit"></i></button>
            </td>
          </tr>
          <?php
          }
          ?>
        </table> 
        <?php
        }
        ?>  
      </div>
    </div>
  </div></form>
</div>