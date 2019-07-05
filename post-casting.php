<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Post casting</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/base.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="css/fonts.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="includes/style.css"> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <?php include_once("includes/header.php")?>
      <div class="container-contact100" style="background-image: url('img/bg-01.jpg');">
      <div class="wrap-contact100">
         <form class="contact100-form validate-form">
            <span class="contact100-form-title">
               Post Your Models Requirements
            </span>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
               <span class="label-input100">Tell us your name *</span>
               <input class="input100" type="text" name="name" placeholder="Enter your name">
            </div>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
               <span class="label-input100">Enter your email *</span>
               <input class="input100" type="text" name="email" placeholder="Enter your email">
            </div>

            <div class="wrap-input100">
               <span class="label-input100">Your Website</span>
               <input class="input100" type="text" name="web" placeholder="http://">
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Message is required">
               <span class="label-input100">Message</span>
               <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
            </div>

            <div class="container-contact100-form-btn">
               <div class="wrap-contact100-form-btn">
                  <div class="contact100-form-bgbtn"></div>
                  <button class="contact100-form-btn">
                     Submit
                  </button>
               </div>
            </div>
         </form>
      </div>

      <span class="contact100-more">
            Call us on +91 9874563210
      </span>
   </div>



   <div id="dropDownSelect1"></div>
      <?php include_once("includes/footer.php")?>
      <script src="js/jquery-1.12.4.min.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/smooth-scroll.js"></script>
      <script src="js/modernizr.js"></script>
      <script src="js/instafeed.min.js"></script>
      <script src="js/jquery.gridrotator.js"></script>
      <script src="js/script.js"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>