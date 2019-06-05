<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Start your project here-->
  <div class="a">
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
            <div class="logo">
                    <img src="img/Logo_main.png" class="img-fluid">
                  </div>
       <h1 class="text-center" style="color: rgb(245, 236, 238);font-weight:bold">Guess the Winner!</h1>
       <h5 class="text-center">Win the pop-corn</h5>
     </div>
   </div>
 </div>
     <div class="container">
     <?php

if(isset($_POST['save']))
{
  $sql = "INSERT INTO data (username,email,location,team)
  VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["location"]."','".$_POST["phone"]."','".$_POST["email"]."')";

  $result = mysqli_query($conn,$sql);
}

?>
   
       <div class="row">
         <form>
         <div class="col-4" style="text-align:right">
            <img src="img/bcci-logo-344.png" class="img-fluid" style="width: 250px"><br>
          <button type="button" class="btn btn-primary"><input type="radio" value="india" name="team">India</button>
         </div>
         <div class="col-4">
           <img src="img/cup2.png" class="img-fluid" style="width: 200px" id="media">
         </div>
         <div class="col-4">
            <img src="img/log.png" class="img-fluid"><br>
            <button type="button" class="btn btn-primary"><input type="radio" value="s africa" name="team">s africa</button>
         </div>
         </form>
               </div>
    
     </div>
     <div class="container">
     <?php

if(isset($_POST['save']))
{
  $sql = "INSERT INTO data (username,email,location,team)
  VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["location"]."','".$_POST["email"]."')

  $result = mysqli_query($conn,$sql);
}

?>
<form action="about.php" method="post">
     <div class="row">
    <div class="col-md-4">

    <input type="text" class="form-control" name="username" placeholder="Please enter name" style="width: 50%" required>
    </div>
    <div class="col-md-4">
        
        <input type="text" class="form-control" name="email" placeholder="Please enter your Email" style="width: 50%" required>
    </div>
    <div class="col-md-4">
      
        <input type="text" class="form-control" name="location" placeholder="Enter your location" style="width: 50%" required>
    </div>
  </div>
  <button type="submit" class="btn btn-warning" name="save" id="btnn">Submit</button>
 </div>
 </form>
 </div>
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
