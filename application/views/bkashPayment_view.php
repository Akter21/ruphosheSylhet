<?php 
$attributes = array('id' => 'frmbkashpayment','name' => 'frmbkashpayment');
echo form_open_multipart('cbooking',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />
<input type="hidden" name="hidAdult" id="hidAdult" value="<?php if($srchData) echo $srchData['srcAdult']?>" />
<input type="hidden" name="hidChild" id="hidChild" value="<?php if($srchData) echo $srchData['srcChild']?>"/>
<input type="hidden" name="hidPkgId" id="hidPkgId" value="<?php if($srchData) echo $srchData['srcPkgId']?>"/>
<?=$message?>
<div class="continer">
  <!--   <div class="jumbotron">
  <h2 class="text-center">Pay by bkash Or Card</h2>  
  </div> -->
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
              <h3 class="text-center">Booking Details</h3>
          </div>
        </div>
        <div class="panel-body">
          <table class="col-xs-12 col-md-9  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
          <thead class="bg-success">
          <tr>
          </tr>
          </thead>
          <tbody>
          <tr></tr>
          <tr>
            <td align="left" style="background:#c8c6d3;font-weight: bold;">Name</td>
            <td align="left" style="background:#c8c6d3;font-weight: bold;">Total Person</td>
            <td align="left" style="background:#c8c6d3;font-weight: bold;">Check IN</td>
            <td align="left" style="background:#c8c6d3;font-weight: bold;">Check Out</td>
         </tr>
         <tr>
          <td align="left" style="background:#ffffff;font-weight: bold;" ><?=$custInfo['name']?></td>
          <td align="left" style="background:#ffffff;font-weight: bold;" >Adult : <?=$srchData['srcAdult']?><br>Child : <?=$srchData['srcChild']?></td>
          <td align="left" style="background:#ffffff;font-weight: bold;" ><?=$package->c_pkg_chkIN_date?></td>
          <td align="left" style="background:#ffffff;font-weight: bold;" ><?=$package->c_pkg_chkOut_date?></td>
        </tr>
          <tr>
           <td  class="al-r" colspan="3" bgcolor="#faa448"><strong>Grand Total</strong> </td>  
             <td class="al-r" bgcolor="#faa448" style="padding-right:5px;"><strong> <span id="grandtotaldisplay">=<?php
             $adult=$package->c_pkg_cost;
             $child=$package->c_pkg_cost/2;
             $total=($adult*$srchData['srcAdult']+$child*$srchData['srcChild']);
             echo $total;
             ?> /TAKA </span></strong></td> 
          </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>  
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-4 ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <h3 class="text-center">Payment Details</h3>
           <h4 style="color:blue" class="text-center">Bkash Number : 01749776211</h4>
            <img class="img-responsive cc-img" src="<?=base_url()?>assets/img/bikashlogo.jpg" width="350" height="90">
          </div>
        </div>
        <div class="panel-body">
          <form role="form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>BKASH TRANSACTION NUMBER</label>
                        <div class="input-group">
                               <input type="text" name="bkash" id="bkash" value="" class="form-control form-group" placeholder="Bkash Transaction Id"/>
                            <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-xs-12">
              <input type="button" value="Submit" class="btn btn-danger form-control" onClick="validateBkashPayment('frmbkashpayment',0,'Bkashpayment')" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <h3 class="text-center">Payment Details</h3>
            <h4 style="color:blue" class="text-center">Rocket Number : 01749776211</h4>
            <img class="img-responsive cc-img" src="<?=base_url()?>assets/img/rocketlogo.png" width="326" height="100">
          </div>
        </div>
        <div class="panel-body">
          <form role="form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>TRANSACTION NUMBER</label>
                        <div class="input-group">
                               <input type="text" name="rocket" id="rocket" value="" class="form-control form-group" placeholder="Transaction number"/>
                            <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-xs-12">
              <input type="button" value="Submit" class="btn btn-danger form-control" onClick="validateRocketPayment('frmbkashpayment',0,'rocketpayment')" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 ">
      <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <h3 class="text-center">Payment Details</h3>
                <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
            </div>
        </div>
          <div class="panel-body">
            <form role="form">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group"><br><br>
                          <label>CARD NUMBER</label>
                          <div class="input-group">
                              <input type="tel" class="form-control" placeholder="Valid Card Number" />
                              <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-7 col-md-7">
                      <div class="form-group">
                          <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                          <input type="tel" class="form-control" placeholder="MM / YY" />
                      </div>
                  </div>
                  <div class="col-xs-5 col-md-5 pull-right">
                      <div class="form-group">
                          <label>CV CODE</label>
                          <input type="tel" class="form-control" placeholder="CVC" />
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group">
                          <label>CARD OWNER</label>
                           <input type="text" name="cardname" id="cardname" value="" class="form-control form-group" placeholder="Card Name"/>
                      </div>
                  </div>
              </div>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-xs-12">
                <input type="button" value="Submit" class="btn btn-danger form-control" onClick="validateCardPayment('frmbkashpayment',0,'CardPayment')" />
              </div>
            </div>
          </div>
        </div>
      </div>
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














