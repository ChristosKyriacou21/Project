<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location:reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location:login-user.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>


  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>



<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>


    <title></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

    

    <?php  include 'menu.php';  ?>

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

     <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\pic1.png"  width="1100" height="500">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images\pic2.jpg"  width="1100" height="500">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="images\hd pic2.jpg" width="1100" height="500">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
     </a>

    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>




<div class="button day" id="button" onclick="switcher()">
  <div class="mover" id="mover">
    <svg class="icon sun" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
    <svg class="icon moon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
  </div>
  <script src= "js/script.js"> </script>
</div>










<section class="my-5">

    <div class="py-5">
        <h2 class="text-center">About</h2>
    </div>

 <div class="container-fluid">
    <div class="row">

        <div class="col-lg-5 col-10">
            <img src="images/languages.png" class="img-fluid aboutimg">
        </div>

         <div class="col-lg-6 col-12">
            <h2 class="diplay-4">Languages</h2>
            <p class="py-3">1)HTML<br> 2)CSS<br>3)JAVASCRIPT<br>4)C<br>5)PHP<br>6)MYSQL</p>
            <a href="about.php" class="btn btn-success"> Check It </a>
         </div>

        </div>
    </div> 
</section>









<section class="my-5">

    <div class="py-5">
        <h2 class="text-center">Hardware</h2>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/sensors/ARDUINO.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Arduino Uno</h4>
                             <p class="card-text">Quantity: x2</p>

                             <div class="popup" id="popup-1">
                                 <div class="overlay"></div>
                                        <div class="content">
                                             <div class="close-btn" onclick="togglePopup()">&times;</div>
                                                <h1>Arduino Uno</h1>
                                                <p>Το Arduino Uno είναι ένας πίνακας μικροελεγκτών που βασίζεται στο ATmega328P
                                                    <br>
                                                     <br>Διαθέτει:
                                                      <br> 14 ψηφιακούς ακροδέκτες εισόδου / εξόδου,
                                                      <br> 6 αναλογικές είσοδοι,
                                                      <br> ένας κεραμικός συντονιστής 16 MHz,
                                                      <br> μια σύνδεση USB,
                                                      <br> μια υποδοχή τροφοδοσίας, 
                                                      <br> μια κεφαλίδα ICSP 
                                                      <br> κουμπί επαναφοράς.</p>
                                            </div>
                                    </div>                          
                            
                            <a class="btn btn-primary" onclick="togglePopup()">Details</a>
                             </div>
                          
                </div>
                <script src= "js/details.js"> </script>
            </div>


            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/sensors/Humidity HT11.png" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Humidity ht11</h4>
                             <p class="card-text">Quantity: x2</p>

                                 <div class="popup" id="popup-2">
                                     <div class="overlay"></div>
                                        <div class="content">
                                             <div class="close-btn" onclick="togglePopup1()">&times;</div>
                                                <h1>Arduino Uno</h1>
                                                <p>ejkfkvjdf</p>
                                            </div>
                                    </div>                          
                           
                             <a class="btn btn-primary" onclick="togglePopup1()">Details</a>
                          </div>
                </div>
                <script src= "js/details1.js"> </script>
            </div>




            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/sensors/Photoresistor.png" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Photoresistor</h4>
                             <p class="card-text">Quantity: x2</p>
                             <div class="popup" id="popup-3">
                                 <div class="overlay"></div>
                                        <div class="content">
                                             <div class="close-btn" onclick="togglePopup2()">&times;</div>
                                                <h1>Arduino Uno</h1>
                                                <p>HELLOOO</p>
                                            </div>
                                    </div>                          
                            <script src= "js/details2.js"> </script>
                            <a class="btn btn-primary" onclick="togglePopup2()">Details</a>
                          </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/sensors/breadboard.png" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Breadboard</h4>
                             <p class="card-text">Quantity: x2</p>
                             <div class="popup" id="popup-4">
                                 <div class="overlay"></div>
                                        <div class="content">
                                             <div class="close-btn" onclick="togglePopup3()">&times;</div>
                                                <h1>Arduino Uno</h1>
                                                <p>HELLOOO</p>
                                            </div>
                                    </div>                          
                            <script src= "js/details3.js"> </script>
                            <a class="btn btn-primary" onclick="togglePopup3()">Details</a>
                          </div>
                </div>
            </div>

        
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/sensors/xbee series 2.png" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">XBEE Series 2</h4>
                             <p class="card-text">Quantity: x2</p>
                             
                             
                             <div class="popup" id="popup-5">
                                 <div class="overlay"></div>
                                        <div class="content">
                                             <div class="close-btn" onclick="togglePopup4()">&times;</div>
                                                <h1>Arduino Uno</h1>
                                                <p>HELLOOO</p>
                                            </div>
                                    </div>                          
                                     <script src= "js/details4.js"> </script>
                                        <a class="btn btn-primary" onclick="togglePopup4()">Details</a>
      
                          </div>
                </div>
            </div>
      



            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/sensors/capasitive soil.png" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Capasitive Soil</h4>
                             <p class="card-text">Quantity: x2 </p>
                             <div class="popup" id="popup-6">
                                 <div class="overlay"></div>
                                        <div class="content">
                                             <div class="close-btn" onclick="togglePopup5()">&times;</div>
                                                <h1>Capasitive Soil</h1>
                                                <p>HELLOOO</p>
                                            </div>
                                    </div>                          
                            <script src= "js/details5.js"> </script>
                            <a class="btn btn-primary" onclick="togglePopup5()">Details</a>
                          </div>
                </div>
            </div>

        </div>
    </div>


</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">  
                 <div class="space">
                
                <img src="images/pic3.jpg"  class="img-fluid pb-3">
        
            </div>
                </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
            </div>
            </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>

        
        </div>
    </div>


</section>




<div class="arrow">
    <a href="#" title="Back to Top"><span class="fas fa-angle-up"></span></a>
  </div>
  
<nav>
    <div class="logo">
    </div>
</nav>

<div class="content">
    <h2 class="header"> </h2>

</div>






<footer>
<p class="p-3 bg-dark text-white text-center position:absolute
    bottom:0">&copy; Copyrights 2020
    <br>
    All rights reserved
    <br>
    | Powered by -Christos Kyriacou- |
    </p>
</footer>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> src="https://cdnjs.cloudeflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  


</body>
</html>