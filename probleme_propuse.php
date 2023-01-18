<?php
	session_start();
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Siruri de caractere</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class='container'>

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

<div class="text">
	<p>Pentru a stapani mai bine tot ceea ce tine de o pregatire mai buna a acestui capitol voi atasa aici o serie de cateva probleme pentru un antrenament mai bun !</p>
</div>


<div class="text">
	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 1</b></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Intr-un text cu cel mult 100 de caractere, cuvintele sunt formate din litere mici ale alfabetului englez si sunt separate prin cate un spatiu. Scrieti un program C/C++ care citeste de la tastatura un text de tipul mentionat si afiseaza pe ecran, pe linii separate, toate cuvintele sale pentru care numarul de vocale este strict mai mic decat numarul de consoane. Daca nu exista niciun astfel de cuvant, se afiseaza pe ecran mesajul nu exista. Se considera vocale literele din multimea a, e, i, o, u.</p>
	<p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> ei au plantat tamarix ea a adus iasomie</b> se afiseaza pe ecran , nu neaparat in aceasta ordine cuvintele  <b style="color : #0a0abf">plantat ; tamarix</b>.</p>

</div>
<br>
<div class="text">
	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 2</b></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Numim citat intr-un text o secventa de caractere din acel text care incepe cu un caracter si se termina cu un caracter , celelalte caractere ale secventei fiind diferite de el.  Un text de cel mult 100 de caractere (litere mici ale alfabetului englez, spatii si caracterele ) contine cel  putin  un  citat.  Textul  nu  contine  alte  caractere "< ">decat  cele  care  marginesc  citatele, si  oricare doua citate nu au nici caractere <"" > si nici alte caractere in comun.  Scrieti un program C/C++ care citeste de la tastatura un text de tipul precizat si il transforma in memorie prin inlocuirea tuturor literelor mici cuprinse in citate cu literele mari corespunzatoare, celelalte ramanand nemodificate, ca in exemplu. Programul afiseaza pe ecran textul obtinut. </p>
	<p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> mai bine sa fii un < om de valoare> decat un < om de succes></b>   se afiseaza pe ecran   <b style="color : #0a0abf">mai bine sa fii un < OM DE VALOARE> decat un < OM DE SUCCES></b>.</p>


</div>
<br>
<div class="text">
	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 3</b></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Intr-un text cu cel mult 100 de caractere cuvintele sunt formate numai din litere mari si mici ale alfabetului englez si sunt separate prin cate un spatiu. Scrieti un program care citeste de la tastatura un text de tipul precizat, apoi un numÄƒr natural, n, [1,102), afiseaza pe ecran, pe linii separate, cuvintele din text care au exact n litere. Cuvintele sunt afisate in ordinea apartiei lor in text, iar daca nu exista niciun astfel de cuvÃant, se afiseaza pe ecran mesajul nu exista.Programul citeste de la tastatura numarul textul dat, apoi numarul n. </p>
	<p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> Fat Frumos este cel mai viteaz</b> si <b style="color : #f57842"> n=6</b>  se afiseaza pe ecran , nu neaparat in aceasta ordine   <b style="color : #0a0abf">Frumos viteaz</b>.</p>


</div>
<br>
<div class="text">
	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 4</b></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Se considera un cuvânt format din cel putin doua si cel mult 100 de caractere, numai litere mici ale alfabetului englez.Scrieti un program care citeste de la tastatura un cuvânt de tipul precizat si afiseaza pe ecran mesajul DA în cazul în care cuvântul contine doar consoane si, eventual, vocala i, sau mesajul NU în caz contrar. </p>
	<p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> inscriptibil</b> se afiseaza pe ecran    <b style="color : #0a0abf">DA</b> iar pentru <b style="color : #f57842"> inestimabil</b> se afiseaza pe ecran <b style="color : #0a0abf">NU</b>.<p>


</div>
<br>
<div class="text">
	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 5</b></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Se da un sir de caractere ce contine cuvinte formate din litere mici ale alfabetului englez, separate prin unul sau mai multe spatii. Înaintea primului cuvânt nu exista spatii, si nici dupa ultimul. Sa se modifice sirul dat, astfel încât sa se înlocuiasca fiecare cuvânt cu exact trei litere din sir cu simbolul *. </p>
	<p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> bun este izvorul ce are apa rece</b> se afiseaza pe ecran    <b style="color : #0a0abf">* este izvorul ce * * rece</b>.<p>


</div>
<br>
<div class="footer"><p>	&#169; Copyright Reserved	&#169;</p></div>

</body>



</html>