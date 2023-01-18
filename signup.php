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
	   	 	<li><a href="probleme_propuse.[h[]]">PROBLEME PROPUSE</a></li>
	   	 	<li><a href="teste.php">TEST</a></li>
	   	 	<li><a href="contact.php">CONTACT</a></li>
	   	 	<li><a href="signup.php">LOGIN</a></li>
	   	 </ul>
           
		
	  </nav>

   </header>
</div>

<section class="contact-form">
	<form action="sign_up.php" method="POST">
		<label for="nume">Nume:</label><br>
		<input type="text" id="nume" name="nume" placeholder="Nume" required><br>
		<label for="prenume" class="form-half">Prenume:</label><br>
		<input type="text" id="prenume" name="prenume" placeholder="Prenume" required><br>
  		<label for="email">Username:</label><br>
  		<input type="text" id="nume" name="username" placeholder="Username" required><br>
  		<label for="nume">Parola:</label><br>
  		<input type="password" name="parola" placeholder="Parola" required><br>

  		<input type="submit" class="submit" name="SUBMIT">

    
	</form>
	<?php
		if(isset($_GET['info']) && $_GET['info'] == 'ok')
		{
			echo '<p color: green>Contul a fost creat cu succes !</p>';
		}
		else if(isset($_GET['info']) && $_GET['info'] == 'eroare')
		{
			echo '<p color: red>A aparut o eroare !</p>';
		}else if(isset($_GET['info']) && $_GET['info'] == 'exista')
		{
			echo '<p color: red>Username-ul exista deja !</p>';
		}
	?>

</section>

<div class="text2">
	<a href="login.php">Ai deja cont ? Apasa aici !</a>
</div>



	

<br>
	

</body>


</html>