<?php
SESSION_START();
$servername = "localhost";
$dbserver = "root";
$passwor = "";
if(isset($_POST["n1"]))
{
$firstname=$_POST['n1'];
$lastname=$_POST['n2'];
$email=$_POST['n3'];
$password=$_POST['n4'];
 $mobile=$_POST['n5'];   
    

// Create connection
$con = mysql_connect($servername, $dbserver, $passwor);
// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
else{
	echo "";
}
mysql_select_db("db");
$sql="insert into guest (firstname,lastname,email,password,mobile) values ('$firstname','$lastname','$email','$password','$mobile');";
$query=mysql_query($sql);
//echo $query + "Blank";
if($query)
{
	echo "";
}
else
{
	echo $sql;
	echo "not inserted.mysql_error()";
}


mysql_close($con);
}
?>


<html lang="en">
<head>
<title>Signup Form</title> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
div {
     
    background-color: whitesmoke;
    width: 400px;
    height: 500px;
	padding: 10px;
    margin: 20px;
    
}
body{
 background-image: url("dd.jpg");
 background-repeat: no-repeat;
 background-size:1500px 800px;
 
 }

</style>
</head>
<body >
<nav class="navbar navbar-inverse navbar-fixed-top">
 
   
      <a class="navbar-brand">Doctor Finding</a>
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      
      <li><a href="abt.html">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</nav>
    <br><br><br><br>
<center>
  <form name="REGISTRATION" action="" method="POST">
   
	  
	  <center>
 <form action="/action_page.php">
    <div class="form-group">
	  <h1> Sign Up</h1>
      <label for="first name">First Name:</label>
<input type="first name" class="form-control" id="fname" placeholder="Enter first name" name="n1" required>
   <label for="last name">Last Name:</label>
<input type="last name" class="form-control" id="lname" placeholder="Enter last name" name="n2" required>
      <label for="email">Email:</label>
<input type="email" class="form-control" id="em" placeholder="Enter email" name="n3" required>
      <label for="password">Password:</label>
<input type="password" class="form-control" id="pass" placeholder="Enter password" name="n4" required>
	  <label for="mobile no.">Mobile No.:</label>
<input type="mobile no." class="form-control" id="mo" placeholder="Enter mobile no." name="n5"rrequired>
      
        <label><input type="checkbox" name="remember"> Remember me</label><br>
   <center>
       <input type="button" class="btn btn-info" value="submit" required onclick="location.href ='login.php';">
        </center>
  </div>
</center>
      </div>
  </form>
</center>
</body>
</html>

