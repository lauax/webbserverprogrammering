<?php

$dbc = mysqli_connect("localhost","root","","users"); // (Adress , Anv�ndarnamn , L�senord , Databas)


$Username = $_POST['Username'];
$FirstName = $_POST['Firstname'];
$LastName = $_POST['Lastname'];
$Mail = $_POST['Mail'];
$Birthdate = $_POST['Birthdate'];
$Password = $_POST['Password'];




$query = "Insert into form (Username, First_name, Last_name, Mail, Birthdate, Password) VALUES ('$Username','$FirstName','$LastName','$Mail','$Birthdate ','$Password');";


mysqli_query($dbc,$query);

if($mysqli_$query($dbc,$query);{
	echo "Du �r nu registerade";
}

else{
	echo "Fel uppgifter, f�rs�k igen"
	
}
?>