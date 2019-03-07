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

 <?php include'header.php';
?>


<main class="main-content" style="margin-top: 0px; margin-bottom: 0px;background-image: linear-gradient(111deg, rgb(255, 139, 0) 50%, white 50%);">
    <section class="section">
      <div class="container" style="    background-image: url(media/bg/bg_11.jpg);
    background-color: white;
    background-size: cover;
    background-repeat: no-repeat;padding-top: 20px;padding-bottom:20px; ">
        <div class="row">
          <div class="col-xs-12">
             <h1 style="text-align: center;color: #2986e2;">Login Here</h1>
            <div class="ui-subtitle-block ui-subtitle-block_form">Please fill-in the form below and make an oppointment with any of our specialist doctors</div>
            <i class="decor-brand"></i>
          </div>
        </div><!-- end row -->
          
        
		
        <form class="form-appointment ui-form" >
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="input-group">
                <input type="text" placeholder="Username">
              </div>
              
            </div>
          </div>
          <div class="row">  
            <div class="col-md-6 col-md-offset-3">
              <div class="input-group">
                <input type="password" placeholder="Password">
              </div>
              
            </div>
          </div><!-- end row -->
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
          	<p style="color: #000000; font-size: 15px">Forgot your password? no worries,<a href="#" style="color:#2986e2;">  Click Here  </a>  reset your password.</p>
          	</div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
             
             
              <button class="btn bg-color_primary">Login <i class="fa fa-user"></i></button>
            </div>
          </div><!-- end row -->
        </form><!-- end form-appointment -->
      </div><!-- end container -->
    </section><!-- end section -->


  </main>

 <?php include'footer.php';?>