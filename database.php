<!DOCTYPE html>
<html>
<head>
	<title>PHP-DATABASE</title>
</head>
<body>

	<h1>Database Connection</h1>

	<?php 

	if(isset($_POST['submit'])){ 
	$name = $_POST['name'];	
	$username = $_POST['username'];
	$email =$_POST['email'];
	$password = $_POST['password'];


    $dbname = "php1";
  $dbuser = "root";
  $dbpass = "";
  $host = "localhost";
  $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
  $sql = "insert into user1(name,email,username,password) values('$name', '$email', '$username', '$password')";
  if(mysqli_query($conn, $sql)){
      header('location: login.html');
    }else{
      echo "try again";
    }
	    }
	
	
	
	?>

</body>
</html>