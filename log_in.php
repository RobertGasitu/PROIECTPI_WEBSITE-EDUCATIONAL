<?php
session_start();
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "proiect";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error)

{

die("Connection failed: " . $conn->connect_error);

}

if(!empty($_POST['username'])  && !empty($_POST['parola']))
{

$username = $_POST['username'];
$password = $_POST['parola'];

$sql="SELECT *FROM autentificare WHERE username='$username'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$hash = $row['password'];

if(password_verify($password, $hash)) 
{
  header("Location:login.php?info=gresit"); 


} else {

	header("Location:login.php?info=correct");
	$_SESSION['id'] = $row['id'];
	$_SESSION['nume'] = $row['nume'];
	$_SESSION['prenume'] = $row['prenume'];
	$_SESSION['username'] = $row['username'];
	$_SESSION['status'] = $row['status'];

	
}




}