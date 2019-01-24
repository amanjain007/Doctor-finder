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
$sql="insert into doc (firstname,lastname,email,password,mobile) values ('$firstname','$lastname','$email','$password','$mobile');";
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
      <li class="active"><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Doctor signup</a></li>
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
      
        <div class="container">
  <form class="form-inline" action="" method="POST">
      <label for="email">Name:</label>
    <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name">
      <label for="email">Location:</label>
    <input type="Location" class="form-control" id="location" placeholder="Enter your location" name="location">
     <label for="email">Qualification</label>
    <input type="Qualification" class="form-control" id="qualification" placeholder="Enter your qulificaion" name="qualification">
  <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <label for="pwd">mobile</label>
    <input type="mobile" class="form-control" id="mn" placeholder="Enter mobile no" name="mn">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
      
      <input type="file" name="fileToUpload" id="fileToUpload">
  </form>
</div>
   <center> <button type="submit" class="btn btn-submit">Submit</button></center>
  </div>
</center>
      </div>
  </form>
</center>
</body>
</html>

