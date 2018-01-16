

<?php

$dbc = mysqli_connect("localhost","root","","users"); // (Adress , Användarnamn , Lösenord , Databas)


$Username = $_POST['Username'];
$Password = $_POST['Password'];


$sql = mysqli_query($dbc, "select * from users where username='$username' and password='$password'");
                
$row = mysqli_fetch_array($sql);

if($row == null){
	
	echo("failed");
	
}

else{
	
	echo("Successfully loged in");
	
	
	}
?>