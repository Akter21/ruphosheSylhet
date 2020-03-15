
 <?php 
$attributes = array('id' => 'frmwelcomecustomer','name' => 'frmwelcomecustomer');
echo form_open_multipart('home',$attributes); ?>
<!doctype html>
<html lang="en">
    <head>

          <link href="<?=base_url()?>assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="<?=base_url()?>assets/css/base/jquery.ui.all.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Holiday Planner</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/welcome/css/bootstrap.css">
        <link rel="stylesheet" href="assets/welcome/vendors/linericon/style.css">
        <link rel="stylesheet" href="assets/welcome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/welcome/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/welcome/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/welcome/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="assets/welcome/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="assets/welcome/css/style.css">
        <link rel="stylesheet" href="assets/welcome/css/responsive.css">

    </head>
    <body>
    <!--================Header Area =================-->
    
    <!--================Header Area =================-->
    <!--================Banner Area =================-->
    <section class="banner_area">
      <!--          <div class="booking_table d_flex align-items-center">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9"></div>
      <div class="container">

      <div class="banner_content text-center">

      <h6>Away from monotonous life</h6>
      <h2>Relax Your Mind</h2>
      <p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
      <a href="#" class="btn theme_btn button_hover">Get Started</a>
      </div>
      </div> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <!--    <li data-target="#myCarousel" data-slide-to="3"></li> -->
        <!--    <li data-target="#myCarousel" data-slide-to="4"></li> -->
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="height:650px" >
        <div class="carousel-item active">
          <img  src="<?=base_url()?>assets/welcome/image/img34.jpg" alt="Los Angeles">
        </div>
        <div class="carousel-item">
          <img  src="assets/welcome/image/slide2.jpg" alt="..." >
        </div>
        <div class="carousel-item">
          <img src="<?=base_url()?>assets/welcome/image/slide3.jpg"" alt="New York">
        </div>
        <!-- <div class="carousel-item active">
        <img  src="<?=base_url()?>assets/welcome/image/slide4.jpg" alt="Los Angeles">
        </div> -->
        <!--   <div class="carousel-item">
        <img  src="assets/welcome/image/slide5.jpg" alt="..." >
        </div>
        <div class="carousel-item">
        <img src="<?=base_url()?>assets/welcome/image/slide6.jpg"" alt="New York">
        </div> -->
      </div>
    </div>
    <!--================Banner Area =================-->
        
    <!--================ Packages  =================-->
    <section id="packages">
      <div class="container">
        <div class="section_title text-center"><br><br>
          <h2 class="title_color">Packages</h2>
          <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <div class="row mb_30">
          <?php
          if($package){
          ?>
          <?php
          foreach ($package as $row){
          ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="accomodation_item text-center">
                <div class="hotel_img">
                    <img class="img-fluid img-thumbnail" src="<?=base_url().$row->p_pic?>" alt="..." style="height:270px">
                </div>
                <a href="<?=base_url()?>index.php/customerlogin" class="btn theme_btn button_hover">Sign In for Booking</a>
                <!--      <h6 class="sec_h4">Check In :<?=$row->c_pkg_desc?></h6> -->
                <h6 class="sec_h4">Check In :<?=$row->c_pkg_chkIN_date?></h6>
                <h6 class="sec_h4">Check Out :<?=$row->c_pkg_chkOut_date?></h6>
                <h5 class="sec_h4">BDT<?=$row->c_pkg_cost?><small>/person</small></h5>
                <h6 class="sec_h4"><small>Half amount for child(age under 12)</small></h6>
              </div>
            </div>
            <?php
            }
            ?>
            <?php
            }
            ?>
          </div>
        </div>
    </section>
    <!--================   Packages       =================-->
        
    <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Facilities</h2>
                    <p>For Our Guests</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Thai, Chinese, Indian, and Bangla food</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                            <p>Indoor Sports are available here.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>Big swimming pool</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>You can rent car </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <p>Mordern gymnesium with all equipment</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Coffee Shop</h4>
                            <p>You can find diffrent blend of coffee</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->
        
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap" id="aboutus">
          <div class="container">
            <div class="row">
              <?php
              if($aboutUs){
              ?>
              <?php
              foreach ($aboutUs as $row){
              ?>
              <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                  <h2 class="title title_color">About Us</h2>
                  <p style="color:black;font-size:20px;"><?=$row->about_des?></p>
                </div>
            </div>
            <div class="col-md-6">
              <img class="img-fluid" src="<?=base_url().$row->aboutus_image?>" alt="img">
            </div>
            <?php
            }
            ?>
            <?php
            }
            ?>
          </div>
        </div>
        </section>
        <!--================ About History Area  =================-->
        <!--================     Google map      =================-->
        <section id="map">
          <div class="container">
            <div class="section_title text-center">
              <h2 class="title_color">Find Us</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.2282914080915!2d91.86853141447956!3d24.958346347475217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750544ad735bb4d%3A0x60a4e8497fb273a0!2sOsmani+International+Airport%2C+Sylhet!5e0!3m2!1sen!2sbd!4v1541417871458" width="1135" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>
        <!--================     Google map      =================-->
        <!--================ gallery  =================-->
        <section id="gallery">
          <div class="container">
            <div class="section_title text-center"><br>
              <h2 class="title_color">Gallary</h2>
              <p></p>
            </div>
            <div class="row mb_30">
              <?php
              if($galleryimage){
              ?>
              <?php
              foreach ($galleryimage as $row){
              ?>
              <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                  <div class="thumb">
                    <img class="img-fluid img-thumbnail" src="<?=base_url().$row->gallery_img?>" alt="..." style="height:270px">
                    <!--  <a src="<?=base_url().$row->p_portfoliodesc?>" class="btn theme_btn button_hover"></a> -->
                  </div>
                  <!--         <div class="details">
                  <div class="tags">
                  <a href="#" class="button_hover tag_btn">Travel</a>
                  <a href="#" class="button_hover tag_btn">Life Style</a>
                  </div>
                  <a href="#"><h4 class="sec_h4">Low Cost Advertising</h4></a>
                  <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.</p>
                  <h6 class="date title_color">31st January,2018</h6>
                  </div> -->  
                </div>
              </div>
              <?php
              }
              ?>
              <?php
              }
              ?>
            </div>
          </div>
        </section>
        <!--================ gallery  =================-->        
        <!--================        Team         =================-->
        <section id="team">
          <div class="container">
            <div class="section_title text-center"><br>
              <h2 class="title_color">Our Team</h2>
            </div>
            <div class="testimonial_slider owl-carousel">
              <?php
              if($team){
              ?>
              <?php
              foreach ($team as $row){
              ?>
              <div class="media testimonial_item">
                <img     class="rounded-circle" src="<?=base_url().$row->t_membersimg?>" alt="..." >
                  <div class="media-body">
                    <p style="color:black;font-size:30px;"><?=$row->t_name?></p>
                    <p style="color:blue;font-size:30px;"><?=$row->t_post?></p>
                  </div>
              </div>   
              <?php
              }
              ?>
              <?php
              }
              ?>
            </div>
          </div>
        </section>
        <!--================ team  =================-->
        
        <!--================ start footer Area  =================-->  
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
           <!--          <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>                    
                            </div>              
                        </div>
                    </div>              
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>   
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>   
                                    </div>                  
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>            
                </div> -->
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i aria-hidden="true"></i> by <a href="" target="_blank">Holiday Planner</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<!--                     <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div> -->
                </div>
            </div>
        </footer>













    </form>
    <!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/welcome/js/jquery-3.2.1.min.js"></script>
        <script src="assets/welcome/js/popper.js"></script>
        <script src="assets/welcome/js/bootstrap.min.js"></script>
        <script src="assets/welcome/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/welcome/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/welcome/js/mail-script.js"></script>
        <script src="assets/welcome/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/welcome/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/welcome/js/mail-script.js"></script>
        <script src="assets/welcome/js/stellar.js"></script>
        <script src="assets/welcome/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/welcome/js/custom.js"></script>
    </body>
</html>