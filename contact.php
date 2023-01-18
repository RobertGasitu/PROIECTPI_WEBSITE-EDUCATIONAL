<?php
	session_start();
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Șiruri de caractere</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class='container'>

   <header>
	<img src="logo.png" alt="robi's logo">

	   <nav>
	   	 <ul>
	   	 	<li><a href="index.php">INTRODUCERE</a></li>
	   	 	<li><a href="functii.php">FUNCȚII</a></li>
	   	 	<li><a href="probleme_rezolvate.php">PROBLEME REZOLVATE</a></li>
	   	 	<li><a href="probleme_propuse.php">PROBLEME PROPUSE</a></li>
	   	 	<li><a href="teste.php">TEST</a></li>
	   	 	<li><a href="contact.php">CONTACT</a></li>
	   	 	<?php 
	   	 		if(!isset($_SESSION['id']))
	   	 			echo '<li><a  href="signup.php">LOGIN</a></li>';
	   	 		else echo '<li><a  href="log_out.php">LOGOUT</a></li>';
	   	 	?>
	   	 </ul>
           
		
	  </nav>

   </header>


<section class="contact-form">
	<form action="contact_form.php" method="POST">
		<label for="nume">Nume:</label><br>
		<input type="text" id="nume" name="nume" placeholder="Nume" required><br>
		<label for="prenume" class="form-half">Prenume:</label><br>
		<input type="text" id="prenume" name="prenume" placeholder="Prenume" required><br>
  		<label for="email">E-Mail:</label><br>
  		<input type="email" id="email" name="email" placeholder="E-Mail" autocomplete="on"><br>
  		<label for="mesaj">Mesaj/Problema propusa:</label><br>
  		<textarea name="mesaj" placeholder="Mesaj" required></textarea><br>
  		<input type="submit" class="submit" name="SUBMIT">


	</form>
	</section>
	

<br><br>
	

</body>


</html>