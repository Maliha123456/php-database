<?php
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
     
		if($username == "" || $password == "")
		{
			echo "Empty!!!!";
		}
		else
		{
			
$dbname = "php1";
  $dbuser = "root";
  $dbpass = "";
  $host = "localhost";
  $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
  $sql = "select * from user1 where username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
if(count($row) > 0){
      header('location: index.html');
    }else{
      echo  "Invalid user .....try again";
 		
	}}}

?>