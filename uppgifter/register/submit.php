<?php

$dbc = mysqli_connect("localhost","root","","users"); // (Adress , Användarnamn , Lösenord , Databas)


$Username = $_POST['Username'];
$FirstName = $_POST['Firstname'];
$LastName = $_POST['Lastname'];
$Mail = $_POST['Mail'];
$Birthdate = $_POST['Birthdate'];
$Password = $_POST['Password'];




$query = "Insert into form (Username, First_name, Last_name, Mail, Birthdate, Password) VALUES ('$Username','$FirstName','$LastName','$Mail','$Birthdate ','$Password');";


mysqli_query($dbc,$query);

if($mysqli_$query($dbc,$query);{
	echo "Du är nu registerade";
}

else{
	echo "Fel uppgifter, försök igen"
	
}
?>