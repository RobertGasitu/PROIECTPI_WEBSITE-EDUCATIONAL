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
	   	 	<li><a href="probleme_propuse.[h[]]">PROBLEME PROPUSE</a></li>
	   	 	<li><a href="teste.php">TESTE</a></li>
	   	 	<li><a href="contact.php">CONTACT</a></li>
	   	 	<li><a href="signup.php">LOGIN</a></li>
	   	 </ul>
           
		
	  </nav>

   </header>
</div>

<section class="contact-form">
	<form action="log_in.php" method="POST">
  		<label for="email">Username:</label><br>
  		<input type="text" id="nume" name="username" placeholder="Username" required><br>
  		<label for="nume">Parola:</label><br>
  		<input type="password" name="parola" placeholder="Parola" required><br>

  		<input type="submit" class="submit" name="TRIMITE">

    
	</form>
 		<?php
		if(isset($_GET['info']) && $_GET['info'] == 'gresit')
			{
			echo '<p color: green>Username-ul sau parola este gresita !</p>';
			}
			else if(isset($_GET['info']) && $_GET['info'] == 'correct') {
				echo '<p color: green>M-am conectat!</p>';
				header("Location:index.php");

			}
		?>




</section>

<br>
	

</body>


</html>