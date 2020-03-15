<?php 
$attributes = array('id' => 'frmcustomerwelcome','name' => 'frmcustomerwelcome');
echo form_open_multipart('customerlogin', $attributes); ?>
<br/><br/>	
<div class="row">
    <div class="col-xs-12 col-md-12">
        <?php
        if($name){
        ?>
        <?php
        foreach ($name as $row){
        ?>

        <legend style="color:red;font-size:50px;"> Welcome : <?=$row->customer_name?></legend>
        <p style="color:black;font-size:25px;">Our journey has been Starting from 2017. In our resort you can book your packages by online. There are severel plans in our resort . You can enjoy natural beauty here. There are swimming pool , big lounge and many more different kinds of trees . There are also a restaurent , here you can enjoy indian, thai , Bangla and continental dishes. we try to give our best so that you can enjoy your holiday with us</p>
        <?php
        }
        ?>
        <?php
        }
        ?>
        </form>
        <div id="CustRes" name="CustRes">
            <fieldset class="roundedBox">
               <!--  <legend>Welcome To Holiday Planner</legend> -->
                <script src="<?=base_url()?>static/js/highcharts.js"></script>
                <script src="<?=base_url()?>static/js/exporting.js"></script>
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </fieldset>
        </div>
    </div>
</div>           
</form>
