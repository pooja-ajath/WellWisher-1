<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WellWisher</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
<link href="css/master.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/iview/css/iview.css" type='text/css' media='all' />
<link rel="stylesheet" href="plugins/iview/css/skin/style.css" type='text/css' media='all' />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src= "js/jquery-migrate-1.2.1.js" ></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>

<body>
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">


  

  <!-- HEADER -->
 <?php include'header.php';?>

  <div class="ui-title-page" style="background-color: #2986e2;text-align: center;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>CONTACT US</h1>
          <div class="ui-subtitle-page">Egestas dolor erat vamus suscip ipsum estduin</div>
        </div>
      </div>
    </div>
  </div><!-- end ui-title-page -->



  <main class="main-content">
    <section class="section">
      <div class="container" style="background-color: white;padding: 60px;">
        <div class="row">
          <div class="col-xs-12">
            <div class="map">
              <img src="media/map.jpg" height="400" width="1170" alt="Map">
            </div>
            <i class="decor-brand"></i>
            <ul class="list-contacts unstyled wow bounceInUp" data-wow-delay=".5s">
              <li>
                <i class="icon icon-pointer"></i>
                Plot 38, Street 39, UpHill Town, <br>Newyork, USA
              </li>
              <li>
                <i class="icon icon-call-in"></i>
                <a href="tel:+5222345678">+522  234  5678 </a><br>
                <a href="tel:0(800)12658740">0 (800) 126  58740</a>
              </li>
              <li>
                <i class="icon icon-envelope-open"></i>
                <a href="mailto:info@healthcare-agency.org">info@healthcare-agency.org</a> <br>
                <a href="mailto:care@domain.com">care@domain.com</a>
              </li>
            </ul>
          </div>
        </div><!-- end row -->

        <div class="row wow bounceInUp" data-wow-delay=".5s">
          <div class="col-xs-12">
            <h2 class="ui-title-block text-center">Drop <strong>us a Message</strong></h2>
            <div class="ui-subtitle-block text-center">Purus sapien consequat vitae sagittis facilisis</div>
          </div>
        </div><!-- end row -->


        
        
      <form novalidate id="contactForm" class="ui-form wow bounceInUp " data-animation="bounceInUp" name="sentMessage animated">
      
          <div class="row">
            <div class="col-lg-3 col-lg-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
          <div class="form-group">   <div class="input-group">  
            
                <input type="text" data-validation-required-message="Please enter" required  placeholder="Your Name" id="name" name="name"  >
                <i class="icon icon-user"></i>
                  
              </div>
               <p class="help-block text-danger"></p>
               </div>
        <div class="form-group">    <div class="input-group"> 
             
             <input type="email" data-validation-required-message="Please enter" required  id="email" name="email"  placeholder="Email Address">
                <i class="icon icon-envelope-open"></i>
                   </div>
               <p class="help-block text-danger"></p>
               </div>
             <div class="form-group"><div class="input-group">  
           
                <input type="tel" data-validation-required-message="Please enter" required  id="phone" name="phone" placeholder="Phone" >
                <i class="icon icon-call-end"></i>
                     </div>
               <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-12">
           <div class="form-group form-group-text">   <div class="input-group"> 
  <textarea data-validation-required-message="Please enter a message." required id="message" placeholder="Your Message *"  rows="9"></textarea>
                <i class="icon icon-bubbles"></i>
              </div></div>
              
                <p class="help-block text-danger"></p>
                          <div id="success"></div>
                          
                          
              <div class="text-right">
                <button class="btn bg-color_primary">SEND COMMENT</button>
              </div>
            </div>
          </div><!-- end row -->
        </form>
        
           <!--Contact form--> 
                <script src="plugins/contact/jqBootstrapValidation.js"></script> 
                <script src="plugins/contact/contact_me.js"></script>


      </div><!-- end container -->
    </section><!-- end section -->


  </main><!-- end main-content -->


 <?php include'footer.php'?>