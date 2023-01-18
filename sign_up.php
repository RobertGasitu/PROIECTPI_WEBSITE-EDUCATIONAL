<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "proiect";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error)

{

die("Connection failed: " . $conn->connect_error);

}
if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username'])  && !empty($_POST['parola']))
{
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$username = $_POST['username'];
$parola = $_POST['parola'];

$password_hashed = password_hash($parola, PASSWORD_DEFAULT);

$sql = "SELECT username FROM autentificare where username='$username'";
$result = $conn->query($sql);
$check = mysqli_num_rows($result);
if($check > 0)
{
	header("Location:signup.php?info=exista");
	die("Connection failed: " . $conn->connect_error);
}
else
{
	$sql="INSERT INTO autentificare (nume,prenume,username,password) values('$nume','$prenume','$username','$password_hashed')";

	$result = $conn->query($sql);

	header("Location:signup.php?info=ok");
}

}else{

	header("Location ../signup.php?info=eroare");
}



$conn->close();



?>