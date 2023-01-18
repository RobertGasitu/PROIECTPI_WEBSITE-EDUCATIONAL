<?php
	session_start();
?>

<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Teste</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div>

   <header>
	<img src="logo.png" alt="robi's logo">

	   <nav>
	   	 <ul>
	   	 	<li><a  href="index.php">INTRODUCERE</a></li>
	   	 	<li><a  href="functii.php">FUNCȚII</a></li>
	   	 	<li><a  href="probleme_rezolvate.php">PROBLEME REZOLVATE</a></li>
	   	 	<li><a  href="probleme_propuse.php">PROBLEME PROPUSE</a></li>
	   	 	<li><a  href="teste.php">TEST</a></li>
	   	 	<li><a  href="contact.php">CONTACT</a></li>
	   	 	<?php 
	   	 		if(!isset($_SESSION['id']))
	   	 			echo '<li><a  href="signup.php">LOGIN</a></li>';
	   	 		else echo '<li><a  href="log_out.php">LOGOUT</a></li>';
	   	 	?>
	   	 </ul>
           
		
	  </nav>

   </header>
</div>
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
$sql="SELECT *FROM teste";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){?>
<div class="quest_list"> 
<a href="quiz.php?id=<?php echo $row['id'] ?>">
<p>TESTUL <?php echo $row["id"] ?></p>

</a>
</div>

<?php } ?>




	<?php 


	if(isset($_SESSION['id']) && $_SESSION['status'] == 'admin' )
		echo "<br><form action='test.php'>
			<label for='nr-intrebari'>Nr. intrebari</label>	
			<input type='number' name='nr-intrebari' id='nr-intrebari' min='1' max='50' value='10'>
			<br>
			<input class='quest_list' type='submit' value='ADAUGA TEST' >
		</form>";
	?>


</div>
</body>
</html>