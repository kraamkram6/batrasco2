<?php
 require ('connection.php'); 
?>	



<!DOCTYPE html>
<html>
<head>
   <title>
      Registration 
   </title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: none;
    background-color: #F4F1ED;
}

.login-form {
    text-align: center;
    background-color: #003566;
    padding: 10px;
    color: white;
    width: 420px;
    height: 500px;
    margin-top: 5px;
    position: relative; /* Add this to make room for the icon */
}

h2 {
    margin-top: 10px;
    color: white;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    color: #752500;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 300px;
    height: 48px;
    padding: 5px;
    margin-bottom: 0.5px;
    border: none;
    background-color: white;
    color: #752500;
}

input[type="submit"] {
    width: 140px;
    margin: 1px;
    padding: 5px;
    justify-content: center;
    align-content: center;
    display:flex;
    background-color: #752500;
    border: none;
    color: white;
    cursor: pointer;
}

.log-label {
    padding-bottom: 10px;
    font-size: 25px;
}

input::placeholder {
    color: #752500;
    padding-left: 30px;
}

.icon-container {
    position: absolute; /* Change from "relative" to "absolute" */
    top: 850px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    cursor: pointer;  
}

.circle-icon {
    width: 50px;
    height: 50px;
    background-color: #003566;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
.inner-circle {
  width: 20px; /* Size of the inner circle */
  height: 20px; /* Size of the inner circle */
  background-color: white;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.inner-circle i.fa-angle-up {
  color: blue;
}

.arrow-up {
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 15px solid white;
}

.choices {
    position: absolute;
    top: 60px;
    right: 50%; /* Adjust this to center the choices box */
    transform: translateX(50%);
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    display: none;
    flex-direction: column;
    color: #FFFFFF;
    font-weight: bold;
}

.icon-container:hover .choices {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: auto; /* Reset the top position */
    bottom: 50px; /* Adjust the position above the icon */
    right: 50px;
    background-color: #003566;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;

}

.choice {
    cursor: pointer;
    padding: 5px;
    text-align: center;
}

.choice:hover {
    background-color: #f0f0f0;
}


</style>
  </head>
  
<body>

   <div class="login-form">
     <?php 
    if(isset($_POST['sign_up'])){
      $name = $_POST['name'];
      $uname = $_POST['username'];
      $passw = $_POST['password'];
      $repass = $_POST['repassword'];

      if($passw==$repass) {
        $password = password_hash($passw, PASSWORD_DEFAULT);
        $sql = "INSERT INTO registration VALUES(null, '$name', '$uname', '$password')";

        if(mysqli_query($db,$sql)){
          echo "Registered";
        }else {
           echo "Unsuccesful register";
        }
       
      }else {
        echo "Username or password doesn't match";
      }
    }
    ?>
        <h2 class="log-label">Account Information</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data" autocomplete="off">
           
            <input type="text" id="Name" name="name" placeholder="Name" required><br><br>

           
            <input type="text" id="username" name="username" placeholder="Username" required><br><br>

           
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>

           
            <input type="password" id="confirm_password" name="repassword" placeholder="Confirm password" required><br><br>



            <input type="submit" name="sign_up" value="REGISTER">


        </form>

    </div>

    
   
</body>
<div class="icon-container">
        <div class="circle-icon">
                        <div class="inner-circle">

            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>
        <div class="choices">
            <div class="choice" onclick="window.location.href = 'login.php'">Login</div>
            <div class="choice" onclick="window.location.href = 'index.php'">Homepage</div>
        </div>
</html>
  