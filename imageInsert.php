<?php
require('auth.php');
 $connect = mysqli_connect("localhost", "mvm_Admin", "Mvm@Mvm", "school_mvm");
 if(isset($_POST["insert"]))
 {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $date=$_POST["edate"];
      $place=$_POST["place"];
      $heading=$_POST["ehead"];
      $content=$_POST["edesc"];
      $query ="INSERT INTO events(date,place,img,header,data) VALUES ('$date','$place','$file','$heading','$content')";
      if(mysqli_query($connect, $query))
      {
           echo '<script>alert("Image Inserted into Database")</script>';
      }
 }
 ?>
 <!DOCTYPE html>
 <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
 <![endif]-->
 <!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
 <![endif]-->
 <!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->






 <head>
     <title>Maharishi Vidya Mandir</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="College Education Responsive Template">
     <meta name="author" content="Esmet">
     <meta charset="UTF-8">

     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

     <!-- CSS Bootstrap & Custom -->
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
     <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
     <link href="css/animate.css" rel="stylesheet" media="screen">

     <link href="style.css" rel="stylesheet" media="screen">

     <!-- Favicons -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
     <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
     <link rel="shortcut icon" href="images/ico/favicon.ico">

     <!-- JavaScripts -->
     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
     <script src="js/modernizr.js"></script>
     <!--[if lt IE 8]>
 	<div style=' clear: both; text-align:center; position: relative;'>
             <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
         </div>
     <![endif]-->
     <script src="https://maps.googleapis.com/maps/api/js?key=key&callback=myMap"></script>
     <script language="JavaScript">
   /**
     * Disable right-click of mouse, F12 key, and save key combinations on page
     * By Arthur Gareginyan (arthurgareginyan@gmail.com)
     * For full source code, visit http://www.mycyberuniverse.com
     */function myMap() {
 var mapOptions = {
     center: new google.maps.LatLng(51.5, -0.12),
     zoom: 10,
     mapTypeId: google.maps.MapTypeId.HYBRID
 }
 var map = new google.maps.Map(document.getElementById("map"), mapOptions);
 }
   window.onload = function() {
     document.addEventListener("contextmenu", function(e){
       e.preventDefault();
     }, false);
     document.addEventListener("keydown", function(e) {
     //document.onkeydown = function(e) {
       // "I" key
       if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
         disabledEvent(e);
       }
       // "J" key
       if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
         disabledEvent(e);
       }
       // "S" key + macOS
       if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
         disabledEvent(e);
       }
       // "U" key
       if (e.ctrlKey && e.keyCode == 85) {
         disabledEvent(e);
       }
       // "F12" key
       if (event.keyCode == 123) {
         disabledEvent(e);
       }
     }, false);
     function disabledEvent(e){
       if (e.stopPropagation){
         e.stopPropagation();
       } else if (window.event){
         window.event.cancelBubble = true;
       }
       e.preventDefault();
       return false;
     }
   };
 </script>
 </head>
      <body>


        <header class="site-header">
          <div class="container">
              <div class="row">


                  <div class="col-md-3">
                      <div class="logo">
                          <a href="index.html" rel="home">
                              <img src="images/logo.png" style="width:50%;height:50%" alt="Universe">
                          </a>
                      </div> <!-- /.logo -->
                  </div> <!-- /.col-md-4 -->

                  <div class="col-md-6 header-right">

                    <center><h2 style="color:white; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; font-style: normal; font-variant: normal;">MAHARISHI VIDYAMANDIR KMB</h2></center>
                      <ul class="small-links">

                          <li><a href="delete.php">Logout</a></li>
                      </ul>
                  </div> <!-- /.header-right -->
                  <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html" rel="home">
                            <img src="images/maharishi.png" style="width:55%;height:55%;" alt="Universe">
                        </a>
                    </div> <!-- /.logo -->
                  </div> <!-- /.header-left -->
              </div>
          </div> <!-- /.container -->


        </header> <!-- /.site-header -->

        <div class="container">
        <div class="row">

          <nav class="navbar navbar-default">
          <div class="container-fluid">

            <ul class="nav navbar-nav">
              <li><a href="forms.html">basic changes</a></li>
              <li class="active"><a href="#">Event uploads</a></li>
              <li><a href="insertGallery.php">Gallery uploads</a></li>
            </ul>
          </div>
        </nav>
</div>
</div>

        <div class="container">
            <div class="row">
        <div class="col-md-2">
        </div>
                <!-- Here begin Main Content -->
                <div class="col-md-8">
                    <div class="row">

                    <form method="post" enctype="multipart/form-data">
                    <div class="contact-form clearfix">
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="date">Date:</label>
                                <span class="small-text">Date of event</span>
                            </span>
                            <input type="date" id="edate" name="edate">
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="place">Place:</label>
                                <span class="small-text">Place of event</span>
                            </span>
                            <input type="text" id="place" name="place" maxlength="20">
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="eimg">Image:</label>
                                <span class="small-text">Image of event</span>
                            </span>
                         <input type="file" name="image" id="image" />
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="ehead">Heading:</label>
                                <span class="small-text">Heading of event</span>
                            </span>
                            <input type="text" id="ehead" name="ehead"  maxlength="20">
                        </p>

                        <p class="full-row">
                            <span class="contact-label">
                                <label for="edesc">Description:</label>
                                <span class="small-text">Description of event</span>
                            </span>
                            <input type="text" id="edesc" name="edesc"  maxlength="50">
                        </p>

                        <p class="full-row">
                            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
                        </p>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
           </div>
         </div>
       </div>
           <!-- begin The Footer -->
           <footer class="site-footer">
               <div class="container">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="footer-widget">
                               <h4 class="footer-widget-title">Contact Us</h4>
                               <p style="font-weight:bold">MVM school short description
                                </br></br>
                                Mailing address:</br>Ammachathiram, Thirubuvanam (PO), </br> Mayiladthurai Main Road.</p>

                                <br />
                                 Phone Numbers:</br>+91 435 2462666</br>+91 435 2462766</p>
                           </div>
                       </div>

                       <div class="col-md-8">
                           <div class="footer-widget">
                               <h4 class="footer-widget-title">Maps</h4>
                       <div id="map" style="width:90%;height:200px;background:yellow">




           </footer> <!-- /.site-footer -->


           <script src="bootstrap/js/bootstrap.min.js"></script>
           <script src="js/plugins.js"></script>
           <script src="js/custom.js"></script>

       </body>

       </html>
