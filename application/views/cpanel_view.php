<?php 
$attributes = array('id' => 'frmcpanel','name' => 'frmcpanel');
echo form_open_multipart('cpanel', $attributes); ?>
<input type="hidden" name="hidEx1" id="hidEx1" />
           <?=$message?>
<br/><br/>	
<div class="row">
    <div class="col-xs-12 col-md-9 col-md-offset-2">
        <?php
        if($name){
        ?>
        <?php
        foreach ($name as $row){
        ?>

        <legend style="color:black;font-size:30px;"  class="text-center"><b> Welcome : <?=$row->usr_name?></b></legend>
        
        <?php
        }
        ?>
        <?php
        }
        ?>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>Statistics Overview</small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class=" col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-check fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-right">
                            <div class="huge"><?php echo $booking;?></div>
                        </div>
                    </div>
                </div>
                <a href="<?=base_url()?>index.php/totalbooking">
                    <div class="panel-footer">
                        <span class="text-center"><p style="color:black;font-size: 20px;font-weight:bold;">TOTAL BOOKING</p></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-money fa-5x"></i>
                        </div>
                        <div class="col-xs-9 col-md-12 text-right">
                            <div class="huge"><?php echo $amount;?></div>
                        </div>
                    </div>
                </div>
                <a href="<?=base_url()?>index.php/totalbooking">
                    <div class="panel-footer">
                        <span class="text-center" ><p style="color:black;font-size: 20px;font-weight:bold;">TOTAL AMOUNT</p></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 col-md-12 text-right">
                            <div class="huge"><?php echo $customer;?></div>
                        </div>
                    </div>
                </div>
                <a href="<?=base_url()?>index.php/registeredCustomer">
                    <div class="panel-footer">
                        <span class="text-center"><p style="color:black;font-size: 20px;font-weight:bold;">CUSTOMER</p></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 col-md-12 text-right">
                            <div class="huge"><?php echo $admin;?></div>
                        </div>
                    </div>
                </div>
                <a href="<?=base_url()?>index.php/adminregister">
                    <div class="panel-footer">
                        <span class="text-center"><p style="color:black;font-size: 20px;font-weight:bold;">ADMIN</p></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

<!--  <?=$message?>  --> 

    <?php
    if($mssg){
    ?>
    <div class="col-xs-12 col-md-9 col-md-offset-2"">
   
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center"><i class=""></i>Messages</h3>
        </div>
        <div class="panel-body">
          <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
          <thead class="bg-success">
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th> 
                <th>Message</th> 
                <th>Action</th> 
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($mssg as $row) {
            ?>                             
            <tr class="bg-success"  style="font-weight:bold">
                <td><?=$row->date?></td>
                <td><?=$row->name?></td>
                <td><?=$row->email?></strong></td>
                <td><?=$row->message?></td>
                <td>
                                <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmcpanel',<?=$row->contact_id?>,'deleteMessage')"><i class="fa fa-times-circle"></i></button>
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
</div></div>
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