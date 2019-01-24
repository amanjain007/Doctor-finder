

<html lang="en">
<head>
<title>Login Form</title> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
div {
     
    background-color:whitesmoke;
    width: 400px;
    height: 400px;
	padding: 30px;
    margin: 40px;
    
}
body{
 background-image: url("ss.jpg");
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
      
      <li><a href="abt.html">ABOUT</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <li class="active"><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</nav>
    <br><br><br><br>
<center>
  <form name="Login" action="nic.php" method="POST">
    <div class="form-group">
	  
	  <center>
	  <h1>Login</h1>
<label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
<label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
	  <label><input type="checkbox" name="remember"> Remember me</label><br>
   <center> <button type="submit" class="btn btn-submit">Submit</button></center>
</center>
  </div>
  </form>
</center>
</body>
</html>

