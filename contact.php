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
    <title></title>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" type="text/css" href="css/style.css">
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">

</head>
<body>

<?php  include 'menu.php';  ?>



<div class="button day" id="button" onclick="switcher()">
  <div class="mover" id="mover">
    <svg class="icon sun" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
    <svg class="icon moon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
  </div>
  <script src= "js/script.js"> </script>
</div>



<style>
    .p3 {
  font-family: "Lucida Console", Courier, monospace;
}
</style>



<div class="center" >

<h1>Christos Kyriacou</h1>
<p class="p3">University of Patras</p>
<p class="p3">CEID</p>
<p class="p3">ckyriakou@ceid.upatras.gr</p>
<p class="p3">6940784326</p>  
   
</div>



     





<div>
  <section class="my-5">
    
        <h2 class="text-center"><br><br><br>Let's get in touch...</h2>     


    <div class="w-50 m-auto">
       <form action="userinfo.php" method="post">
            <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" autocomplete="off" class="form-control">
            </div>

        
      
         <div class="form-group">
             <label>E-mail</label>
             <input type="text" name="email" autocomplete="off" class="form-control">
         </div>

         
      
          <div class="form-group">
             <label>Mobile</label>
             <input type="text" name="mobile" autocomplete="off" class="form-control">
         </div>

       
         <div class="form-group">
             <label>Comments</label>
             <textarea class="form-control" name="comments"> </textarea>
                         
          </div>
          <button type="Submit" class="btn btn-success">Submit</button>
             
       </form>

    <div>
    
  </section>
</div>











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
<p class="p-3 bg-dark text-white text-center">&copy; Copyrights 2020
    <br>
    All rights reserved
    <br>
    | Powered by -Christos Kyriacou- |
    </p>
</footer>

</body>

</html>