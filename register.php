<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WELLWISHERS</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
<link href="css/master.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/iview/css/iview.css" type='text/css' media='all' />
<link rel="stylesheet" href="plugins/iview/css/skin/style.css" type='text/css' media='all' />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.js" ></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>

<body>
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >

  
  <!-- Loader end -->
<?php include'header.php';
?>

<main class="main-content" style="margin-top: 0px; margin-bottom: 0px;background-image: linear-gradient(120deg, rgb(255, 139, 0) 50%, white 50%);">

    <section class="section">
      <div class="container" style="    background-image: url(media/bg/bg_11.jpg);
    background-color: white;
    background-size: cover;
    background-repeat: no-repeat;padding-top: 20px;padding-bottom:20px; ">
      <div class="row">
          <div class="col-xs-12">
          <h1 style="text-align: center;color: #2986e2;">Register Here</h1>
            <div class="ui-subtitle-block ui-subtitle-block_form">Please fill-in the form below and make an oppointment with any of our specialist doctors</div>
            <i class="decor-brand"></i>
          </div>
        </div><!-- end row -->

        <form class="form-appointment ui-form">
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <div class="input-group">
                <input type="text" placeholder="First Name">
              </div>
              <div class="input-group">
                <input type="email" placeholder="Email Address">
              </div>
              <div class="input-group">
                <input class="datetimepicker" type="text" placeholder="Date Of Birth">
                <i class="icon icon-calendar"></i>
              </div>
			  <div class="input-group">
                <input type="email" placeholder="User Name">
              </div>
			  <div role="select" class="jelect">
                <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">Select State</div>
                <ul class="jelect-options">
                  <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">Delhi</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Mumbai</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Punjab</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Haryana</li>
                </ul>
              </div>
             
            </div>
            <div class="col-md-5">
              <div class="input-group">
                <input type="text" placeholder="Last Name">
              </div>
              <div class="input-group">
                <input type="tel" placeholder="Phone #">
              </div>

			  <div role="select" class="jelect">
                <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">Select your Gender</div>
                <ul class="jelect-options">
                  <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">Male</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Female</li>
                </ul>
              </div>
			   <div class="input-group">
                <input type="password" placeholder="Password #">
              </div>
			  			  <div role="select" class="jelect">
                <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">Select City</div>
                <ul class="jelect-options">
                  <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">New Delhi</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Andheri</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Amritsar</li>
                  <li data-val='1' tabindex="0" role="option" class="jelect-option">Faridabad</li>
                </ul>
              </div>
            </div>
          </div><!-- end row -->
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
             
              <button class="btn bg-color_primary">Register <i class="fa fa-user"></i></button>
            </div>
          </div><!-- end row -->
        </form><!-- end form-appointment -->
      </div><!-- end container -->
    </section><!-- end section -->


  </main>

<?php include'footer.php';?>