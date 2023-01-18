<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "proiect";

$conn = new mysqli($servername, $username, $password, $dbname);

$nume=$_POST['nume'];

$prenume=$_POST['prenume'];

$email=$_POST['email'];


$mesaj=$_POST['mesaj'];

if ($conn->connect_error)

{

die("Connection failed: " . $conn->connect_error);

}

$sql="INSERT INTO contact (nume,prenume,email,mesaj) values('$nume','$prenume','$email'  ,'$mesaj')";

$result = $conn->query($sql);

if ($result == TRUE)

{

echo "Adaugat cu succes !";

}

else

{

echo $conn->error;

}

$conn->close();

?>
