<?php
   session_start();  
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>The toiletPaper Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/toiletpaper.css" rel="stylesheet">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">The toiletPaper Company</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#cube">Cube</a></li>
        <li><a href="#services">SERVICE</a></li>
        <li><a href="#ship">SHIP</a></li>
        <li><a href="#bill">BILL</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><?php if(isset($_SESSION['email'])){ ?>
        <a href="../login-system/logout.php">LOGOUT</a>
<?php }else{ ?>
  <a href="../login-system/index.php" >LOGIN</a>
<?php } ?></li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Container (About Section) -->
<div id="cube" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>BUILD YOUR CUBE</h2><br>
      <h4>Select your content that you wish to have on your CUBE! </h4><br>
      <form>
           <select class="form-dropdown validate[required]" style="width:250px" id="cube" name="cube">
           <?php
$servername = "localhost";
$username = "Beeper";
$password = "abc123";

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"accounts"); //set the database name

                   $menu=" "; 
                   
                  $sql="SELECT news.Title FROM news UNION
                        SELECT magazine.Title FROM magazine UNION
                        SELECT  book.Title FROM book"; //selection query
                  $rs = mysqli_query($conn, $sql);//odbc_exec($conn,$sql);

                   
                   if (mysqli_num_rows($rs) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($rs)) {
                     $menu .= "<option value=".$row['Title'].">" . $row['Title']. "</option>";
    }
}

                  echo $menu;
                  
                  mysqli_close($conn); 

?> 
</select>          
          
      </form>      
      <br><button class="btn btn-default btn-lg">Add Selection</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Cube Details</h2><br>
    
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>Select your service</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
        <form action=""> 
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>TRY THE FIRST CUBE ON US</h4>
      <h4> $0.00</h4> 
      <p><input type="radio" name="service" value="trial"> Free trial<br></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>SINGLE BUT YOU MINGLE</h4>
      <h4> $6.99</h4>
      <p><input type="radio" name="service" value="single"> Single</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>FAMILY PLAN FOR 4</h4>
      <h4> $14.99</h4>
      <p><input type="radio" name="service" value="family"> Family</p>
      </form>
    </div>
  </div>
  <br><br>

</div>

<!-- Container (Ship to Section) -->
<div id="ship" class="container-fluid text-center bg-grey">
  <h2>SHIP TO ADDRESS</h2><br>
   <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form">
        <fieldset>
          <!-- Form Name -->
          <legend>Address Details</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 1" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Post Code" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->  

<!-- Container (Billing Section) -->
<div id="bill" class="container-fluid text-center bg-grey">
  <h2>BILL TO ADDRESS</h2><br>
   <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form">
        <fieldset>
          <!-- Form Name -->
          <legend>Billing Details</legend>
                    <!-- Text input-->
          <div class="form-group">
<!--            <label class="col-sm-2 control-label" for="textinput">First Name</label>-->
            <div class="col-sm-10">
              <input type="text" placeholder="First Name" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
<!--            <label class="col-sm-2 control-label" for="textinput">Line 2</label>-->
            <div class="col-sm-10">
              <input type="text" placeholder="Last Name" class="form-control">
            </div>
          </div>

          <!-- Text Card Number-->
          <div class="form-group">
<!--            <label class="col-sm-2 control-label" for="textinput">City</label>-->
            <div class="col-sm-10">
              <input type="text" placeholder="Credit Card #" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
<!--            <label class="col-sm-2 control-label" for="textinput">State</label>-->
            <div class="col-sm-4">
              <input type="text" placeholder="Card Expiry Date" class="form-control">
            </div>

<!--            <label class="col-sm-2 control-label" for="textinput">Postcode</label>-->
            <div class="col-sm-4">
              <input type="text" placeholder="CVS" class="form-control">
            </div>
          </div>          

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Montreal, CA</p>
      <p><span class="glyphicon glyphicon-phone"></span> 1.514.123.4567</p>
      <p><span class="glyphicon glyphicon-envelope"></span> reception@thetoiletPaperCompany.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(45.516414, -73.676078);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC20qbfRWOhhheNitGW4BcjsocQ1VetM8k=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

