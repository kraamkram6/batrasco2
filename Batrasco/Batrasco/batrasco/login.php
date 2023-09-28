<?php 
  session_start();
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>
      Batangas Transport Cooperative
   </title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

	body {
		background-color: #F4F1ED;
	}
	.form-group {
		width: 250px;
		margin-top: 50px;
		margin-left: 40%;
	}
	.form-group2 {
		width: 250px;
		margin-top: 10px;
		margin-left: 40%;
	}
	.form-control blue-placeholder-border {
		margin-left 300px;
		width: 20px;
	}
/* Apply styles to the input fields */
.form-control {
  color: #003566; /* Set text color to blue */
  margin-left: 10%;
  margin-top: 2px;
}

.form-control::placeholder {
  color: #003566; /* Set placeholder text color to blue */
}

/* Apply styles to the login button */
.btn-default {
  background-color: #003566; /* Set button background color to blue */
  color: white; /* Set button text color to white */
  width: 150px;
  height: 30px;
}

#button {
	margin-left: 42%;
	margin-top: 20px;
}

#batangas {
	margin-top: -100px;
	margin-left: 768px;
  width: 17%;
}
.logo { 
  width: 20px;
  height: 250px;
  margin-left: 0.1%;
  margin-bottom: 3%;
 }
.Sign {
  color: #003566; 
  margin-left: 40%;
 }
p {
	color: #003566;;
	margin-left: 43%;
	margin-top: 10px;
}
a {
	color: #752500;
	margin-left: 2%;
}
.login {
  width: 350px;
  margin-left: 720px;
  color: #003566;
  margin-top: 40px;
}

</style>
<body>
	<div class="logo" id="batrasco" alt="batrasco logo">
      <img src="images/logo.png"style="width:90px; height:90px;"> 
  </div>
	<img src="images/login.png" id="batangas"alt="batangas logo" >
 	
  <form name="login" action="" method="post">
      <div class="login">
           <p class="Sign"> Sign in to continue </p>
        <input class="form-control" type="text" name="username" placeholder="Username" required="required"><br>
        <input class="form-control" type="password" name="password" placeholder="Password" required="required"> <br>
        <input class="btn btn-default"type="submit" name="submit" id="button" value="LOGIN" style="color: white; width: 150px; margin: 20px; margin-left: 38%;justify-content: center; align-content: center; display: flex; height: 30px; font-family: 'DM Sans', sans-serif;">
      </div>
    </form>

	<p>Don't have an account yet?<a href="registration.php">REGISTER</a></p>
	

<?php

  if(isset($_POST['submit']))
  {
    $count=0;
  $res=mysqli_query($db, "SELECT * FROM `admin` WHERE username='$_POST[username]' AND password='$_POST[password]'");

    $row= mysqli_fetch_assoc($res);

    $count=mysqli_num_rows($res);

    if($count==0)
    {
      ?>
         
          <script type="text/javascript">
            alert("Doesn't match with username");
          </script>
          
    <?php
    }
    else
    {
      /*-----------IF password and username match------------*/

      $_SESSION['login_user'] = $_POST['username'];
      // $_SESSION['id'] = $row['id'];
      $_SESSION['pic']= $row['pic'];

      ?>
        <script type="text/javascript">
          window.location="index.php"
        </script>
      <?php
    }
  }

?>

	</body>
</html>
