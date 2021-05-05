<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM register WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO register (email,pass,cpass,mobile)
							VALUES ('" . $_POST["email"] ."','" . $_POST["pass"] . "','" . $_POST["cpass"] . "','" . $_POST["mobile"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('signup.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA FEMME REGISTER</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body style=" background: url('la\ femme\ registration\ bg.png') no-repeat center center fixed; background-size: cover;position: relative;display:table;height:100%;
width:100%;">
   <div class="container-fluid">
    <div class="row">
       <div class="col-lg-2"></div>
     
        <div class="col-md-4">
            <!--form start-->
            <form class="formreg-container" method="POST">
              <h3 style="text-align: center;">REGISTER </h3>
               <div class="form-group">
                 <label for="exampleInputEmail2">Email address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                 
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword2">Password</label><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
               </div>
               <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpass" required> 
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2">Mobile Number</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile number" name="mobile" required> 
              </div>
              
        
               <button type="submit" class="btn btn-block btn-warning" style="color: white;"name="submit">REGISTER</button>
             </form>
            <!--form end-->
           
        </div>
    </div>
</div>
<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM register WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO register (email,pass,cpass,mobile)
							VALUES ('" . $_POST["email"] ."','" . $_POST["pass"] . "','" . $_POST["cpass"] . "','" . $_POST["mobile"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('signup.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 

</body>
</html>