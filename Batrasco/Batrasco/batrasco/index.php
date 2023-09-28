<html>
<head>
   <title>
      Batangas Tranport Cooperative
   </title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body {
    line-height: 1;
    background-image: url("images/login1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 80%; /* Center horizontally and move down 20% from the top */
    opacity: 1.8px;
}
h2, h1, p {
	margin-top: 350px;
}
h2 {
 	text-align: center;
 	margin-top: 220px;
 	color: white;
 	font-weight: bold;
}
h1, p {
	color:  white;
	text-align: center;
	font-size: 50px;
	margin-top: 60px;
	font-weight: bold;
    font-family: 'Libre Baskerville', serif;
}
.logout-btn {
    position: absolute;
    top: 10px;
    right: 10px;
}
.logout-btn a {
    text-decoration: none;
    background-color: #ADD8E6;
    color: #FFFFFF;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
}
.logout-btn a:hover {
    background-color: #008B8B;
}
/*---------------------ICON STYLING-----------------------------*/
.icon-container {
    position: absolute; /* Change from "relative" to "absolute" */
    top: 850px; /* Adjust the top position as needed */
    right: 20px; /* Adjust the right position as needed */
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
/* Style the "fa fa-angle-up" icon in blue */
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
    color: #752500;
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
  display: flex; /* Make the text and icon align horizontally */
  align-items: center; /* Center vertically */
}
.choice i {
  margin-right: 5px;
}
.choice:hover {
    background-color: #f0f0f0;
}
</style>

<body image= >

<h2 class="intro-welcome">Welcome to</h2>
<h1 class="intro">Batangas Transport</h1>
<p class="intro">Cooperative</p>

<div class="icon-container">
          <div class="circle-icon">
            <div class="inner-circle">
              <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
  <div class="choices">
    <div class="choice" onclick="window.location.href = 'login.php'">
      <i class="fa fa-sign-in" aria-hidden="true"></i> Login
    </div>
    <div class="choice" onclick="window.location.href = 'registration.php'">
      <i class="fa fa-user-plus" aria-hidden="true"></i> Register
    </div>
  </div>
</div>

</body>


</html>