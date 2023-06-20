<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Coki's Beauty</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

      <!-- Favicon -->
      <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
      
      <script>
         function Report(){
        var report = document.getElementById("Report");
        var name = document.getElementById("Name").value;
        var email = document.getElementById("Email").value;
        var message = document.getElementById("Message").value;
        report.innerHTML = '<div class= "container rounded-5 p-4" style = "background-color : #FFFFFF";><b>Thanks for the response!</b><p>The following are your respond :<br> Name : ' + name + ' <br> Email : ' + email + '<br> My Message : </p>' + message + "</div>";
        event.preventDefault();
    };
      </script>

<script>
    window.onload = function() {
        var readButtons = document.querySelectorAll('.read_bt'); // Mengambil semua elemen dengan kelas "read_bt"
        readButtons.forEach(function(button) {
            button.onclick = function() {
                alert('Hallo, enjoy your shopping in our website!');
            };
        });
    };
</script>
   </head>
   <body>

      <!-- header section start -->
      <div class="header_section sticky-header">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between sticky-top">
               <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="index.php">Home</a>
               <a href="products.php">Products</a>
               <a href="about.html">About</a>
               <a href="client.php">Client</a>
               <a href="contact.html">Contact</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>

               <h1 class="coki">Coki's Beauty</h1>

            </nav>
         </div>
      </div>
      <!-- header section end -->


      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Beauty <br>Kit</h1>
                           <p class="banner_text">focusing on women across the country, we believe that everyone should have equal access to share their passion in beauty.</p>
                           <div class="read_bt"><a href="#">Welcome !</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Beauty <br>Kit</h1>
                           <p class="banner_text">focusing on women across the country, we believe that everyone should have equal access to share their passion in beauty.</p>
                           <div class="read_bt"><a href="#">Welcome !</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Beauty <br>Kit</h1>
                           <p class="banner_text"> focusing on women across the country, we believe that everyone should have equal access to share their passion in beauty.</p>
                           <div class="read_bt"><a href="#">Welcome !</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Beauty <br>Kit</h1>
                           <p class="banner_text">focusing on women across the country, we believe that everyone should have equal access to share their passion in beauty. </p>
                           <div class="read_bt"><a href="#">Welcome !</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- product section start -->
      <div class="product_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="product_taital">Our Products</h1>
                  <p class="product_text"> Coki now carries more than 150 beauty brands and more than 5,000 product selections, curated to serve you better.</p>
               </div>
            </div>
            <div class="product_section_2 layout_padding">
               <div class="row">

                  <!-- PHP -->
                  <?php 
                     include 'katalog.php';
                     mysqli_close($conn);
                  ?>
                  
               </div>
               <div class="seemore_bt"><a href="#">Back</a></div>
            </div>
         </div>
      </div>
      <!-- product section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_main">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <h1 class="about_taital">About Our beauty store</h1>
                        <p class="about_text">Coki was founded in 2015 to provide better experience of beauty online shopping nationally. Our founders believes that women should feel confident and convenient in their pursue of various beauty products. Coki now carries more than 50 beauty brands and more than 5,000 product selections, curated to serve you better.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div><img src="images/about-img.png" class="image_3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- customer section start -->
      <div class="customer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="customer_taital">What customers says</h1>
               </div>
            </div>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">

                  <div class="carousel-item active">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/Ashila.jpeg"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Ashila ayang Mark only </h3>
                              <p class="dolor_text">Skintific glowing set bagus bangett bikin aku glowing wing wing. semoga dengan aku pake ini, ayang mark jadi lirik aku aamiin.  </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- PHP -->
                  <?php 
                     include 'review.php';
                  
                  
                  ?>
                  <!-- Generated By PHP -->


               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- customer section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_taital">Get In Touch</h1>
                  <p class="contact_text">You may call our Customer Service hotline at 03-27779222. The Customer Service hotline is available from 8 am to 7 pm on Mondays to Sundays (including public holidays).</p>
               </div>
               <div class="col-md-6">
                  <div class="contact_main">
                     <div class="contact_bt"><a onclick="showContact()" href="#!">Contact Form</a></div>
                  </div>
               </div>
            </div>
            
            <div class="form" id="form">
            </div>
         </div>
               
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <h3 class="address_text">Contact Us</h3>
                     <div class="address_bt">
                        <ul>
                           <li>
                              <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : Paris, France. </span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +62 812654789</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : cokibeauty@gmail.com </span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-4 center">
                     <h3 class="Coki_Fashion">COKI'S BEAUTY </h3>
                     <p class="dummy_text">Coki is your personal beauty platform which allows integrated access to our e-commerce and online media site. On COKI , you can manage, track and review your shopping history and be a content creator by contributing to article/video/review/glossary to our digital media website Beauty Journal.</p>
                  </div>
                  <div class="col-sm-4">
                     <div class="main">
                        <h3 class="address_text">Best Products</h3>
                        <p class="ipsum_text">Our best seller product is Skintific and Cosrx brand.  </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text"> 2023 &copy;PT.Kinan skin Indonesia. All rights reserved. </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
<script>
         $opened = false
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
         function showContact(){
            var form = document.getElementById("form")
            if(!$opened){

               form.innerHTML = '<div class="row">' +
                  '<div class="col">' +
                     '<div class="form-group">' +
                        '<label for="Name"><h2>Name</h2></label>' +
                        '<input type="text" class="form-control" placeholder="Keenan Thysira" id="Name">' +
                        '<br><br>' +
                        '<div class="form-group">' +
                           '<label for="Email"><h2>Email address</h2></label>' +
    '<input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Keenan@hotmail.com">' +
    '</div>' +
    '<br><br>' +
    '<div class="form-group">' +
    '<label for="Message"><h2>Write Your Message</h2></label>' +
    '<textarea name="Message" ' +
    'class="form-control" ' +
    'id="Message" ' +
    'cols="30" ' +
    'rows="10" ' +
    'form="contactUsForm">Write your message here...</textarea>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '<div class="col">' +
      '<div class="Report" id="Report"></div>' +
      '</div>' +
      '</div>' +
      '<br><br>' +
      '<button type="submit" class="btn btn-primary" onclick="Report()"><p>Submit</p></button>';
      $opened = true;
   }
   else{
      form.innerHTML = ""
      $opened = false;
   }
      
         
         }
      </script> 
      <script src="js/fungsiku.js"></script>
      

    <script>
        function showAlert() {
            alert('Silahkan kunjungi sosial media berikut : instagram @CokiBeauty, tiktok @kiBauty untuk melakukan transaksi pembelian lebih lanjut');
        }
    </script>

   </body>
</html>