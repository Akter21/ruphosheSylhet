<?php 
$attributes = array('id' => 'frmtransaction','name' => 'frmtransaction');
echo form_open_multipart('transaction',$attributes); ?>
<input type="hidden" name="hidEx1" id="hidEx1" />
 
 
<div class="continer"> 
<div class="row"><br>
    <div class="col-xs-12 col-md-4 col-md-offset-2">
         <?=$message?> 
        <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title  text-center"><i class=""></i> ADD Transaction</h3>
            </div>
            <div class="panel-body"> 
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-book"></i></span>
                  <input class="form-control" placeholder="transaction Id" name="transid" id="transid"  type="text" autofocus>
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-money"></i></span>
                  <input class="form-control" placeholder="Amount" name="transamount" id="transamount"  type="text" autofocus>
                </div>
              <!-- Change this to a button or input when using this as a form -->
                <input type="button" onClick="validatetransaction('frmtransaction',0,'addtransaction')" class="btn btn-lg btn-success btn-block" value="Submit" /> 
            </div>
        </div>   
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-2 ">
        <?php
        if($getTransaction){
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><i class=""></i>Transaction</h3>
            </div>
            <div class="panel-body">
                <table class="col-xs-12 col-md-5  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
                <thead class="bg-success">
                <tr>
                    <th>Transaction Id</th>
                    <th>Amount</th>
                    <th>Date</th> 
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($getTransaction as $row) {
                ?>                             
                <tr class="bg-success"  style="font-weight:bold">
                    <td><?=$row->transaction_ref_id?></td>
                    <td><?=$row->transaction_amount?></td>
                    <td><?=$row->transation_date?></strong></td>
                    <td>
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmtransaction',<?=$row->transaction_id?>,'deleteTransaction')"><i class="fa fa-times-circle"></i></button>
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
    <div class="col-xs-12 col-md-5"> 
        <?php
        if($bookings){
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><i class=""></i>Bookings</h3>
            </div>
            <div class="panel-body">
                <table class="col-xs-12 col-md-5  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
                <thead class="bg-success">
                <tr>
                    <th>Booking Id</th>
                    <th>Bkash Transaction</th>
                    <th>Rocket Transaction</th> 
                    <th>Card</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($bookings as $row) {
                ?>                             
                <tr class="bg-success"  style="font-weight:bold">
                    <td><?=$row->c_id?></td>
                    <td><?=$row->bkash_payment?></td>
                    <td><?=$row->rocket_payment?></td>
                    <td><?=$row->card_payment?></td>
                    <td><?=$row->c_total_amount?></td>
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