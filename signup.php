
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA FEMME SignUp</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body style=" background: url('signUp\ bg.png') no-repeat center center fixed; background-size: cover;
position: relative;
display:table;
height:100%;
width:100%;" class="signup">
  
<div class="container-fluid">
     <div class="row">
        <div class="col-md-2"></div>
         <div class="col-md-4">
             <!--form start-->
             <form class="form-container" method="Post">
               <h3>LOGIN </h3>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <p>Not a registered user? <a href="register.php" style="color: yellow;">REGISTER HERE</a></p>
                <button type="submit" class="btn btn-block btn-warning" style="color: white;" name="submit">LOG IN</button>
              </form>
             <!--form end-->
            
         </div>
     </div>
</div>

<?php
    session_start();
?>
<?php

include('config.php');
if (isset($_POST["submit"])) {


  $sql = "SELECT * FROM register WHERE email= '" . $_POST["email"] . "' AND pass= '" . $_POST["pass"] . "'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // $_SESSION["email"]= $_POST["email"];
    // $_SESSION['userstatus']= "yes";
    echo "<script>location.replace('welcome.html');</script>";
    // echo "u are supposed to redirect to ur profile";
  } else {
    echo "<span style='color:red;'>Please, check  username and password</span>";
  }
  $conn->close();
}

?>
</body>
</html>