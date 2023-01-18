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
 <div class="text">
	<p>	&nbsp;	&nbsp;Şirurile de caractere sunt de fapt succesiuni de caractere . Am învăţat deja să memorăm succesiuni de caractere cu ajutorul tablourilor , fie ele unidimensionale sau bidimensionale . Astfel s-a introdus  tipul <b style="color : #3910e0">char</b> . Acest tip de date a fost introdus din nevoia tehnologiei de a lucra cu litere.</p>
	<br>
	<p>&nbsp;&nbsp;Pentru a putea prelucra sirurile de caractere , trebuie sa utilizam biblioteca specifica acestora. Nescrierea acesteia inainte de main() , duce la imposibilitatea de a opera cu variabilele de tip <b style="color : #3910e0">char </b>. Asadar , vom folosi urmatoarea sintaxa : <b style="color :#1fa807">&nbsp;&nbsp;#include < cstring ></b> </p>
	<br>
	<p>&nbsp;&nbsp;În reprezentarea internă, după ultimul caracter valid din șir se află caracterul <b style="color : #30dde3">   '\0' </b> –  numit și caracter nul . Astfel, pentru reprezentarea în C/C++ a cuvântului <b style="color : #3910e0">info</b>, care are 4 caractere, se vor folosi 5 octeți, cu valorile: <b style="color : #3910e0">'i',&nbsp;&nbsp; 'n'&nbsp;&nbsp; 'f',&nbsp;&nbsp; 'o',&nbsp;&nbsp; '\0'</b>.</p>
	<br>
	<h2>Declararea unui șir de caractere</h2>
	<br>
	<p class="cod"><b style="color : #3910e0">&nbsp;&nbsp;char </b> cuvant[10] ; </p><br> 
<p>&nbsp;&nbsp; Explicatie : S-a declarat un șir care poate memora maxim 9 caractere, cu indici 0 1 ... 9. Șirul cuvant poate memora cel mult 9 caractere utile, după ultimul caracter util fiind memorat caracterul '\0'.</p>
	<br>
	<p>&nbsp;&nbsp;De asemenea, putem sa initializem variabila cuvant in felul urmator : <b style="color : #3910e0">&nbsp;&nbsp;char </b> cuvant[10]="text" . Se observa usor faptul cam utilizat doar 4 octeti, din cei 10 pe care i-am alocat, asadar nu este necesar sa initializam o variabila cu exact maximul pe care il poate stoca.</p>
	<br>
	<h2>Citirea unui șir de caractere</h2>
	<br>
	<p>1.Daca dorim sa citim un singur cuvant (un sir care nu contine spatii) putem utiliza comanda<b style="color : #0892bd"> cin</b> , asa cum suntem obisnuti sa o facem inca din clasa a IX-a.</p>
	<br>
	<div class="cod">
		<p>int main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuvant[10] ; // S-a declarat un sir ce poate contine maxim 9 caractere.</p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin >> </b> cuvant[10] ; // Se citeste acelasi sir , dar poate contine maxim 9 caractere. </p>
	    <p>}</p>
    </div>
    <br>
    <p>Obsevatie !Daca citim un sir, care are mai mult de 9 caractere, ca in exemplul anterior,citirea se opreste in dreptul celei de-a 9 litera.
    <br><br>
    <p>2.Daca dorim sa citim un sir de caractere care contine si spatii , si nu dorim ca citirea sa se opreasca in momentul in care compiler-ul ajunge la spatiu, putem utiliza comanda <b style="color : #0892bd"> cin.getline(,)</b>. Ceea ce mai trebuie precizat este faptul ca intre paranteze trebuie completat <b style="color : #bd0829"> numele variabilei</b> cat si <b style="color : #bd0829"> lungimea maxima</b> a acesteia.</p>
	<br><br>
	<div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> text[30] ;&nbsp;&nbsp;  // S-a declarat un sir ce poate contine maxim 29 caractere.</p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin.getline</b>(text,30); &nbsp;&nbsp;  // Se citeste acelasi sir , dar poate contine maxim 29 caractere. </p>
	    <p>}</p>
    </div>
    <br><br>
    <h2>Afisarea unui sir de caractere</h2>
    <br>
    <p>Afisarea se face standard , cu ajutorul operatorului <b style="color : #bd0829"> << </b>.</p>
    <br><br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuvant[10] ; </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin >> </b> cuvant[10] ;&nbsp;&nbsp; // Citim cuvantul INFO de la tastatura. </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuvant;&nbsp;&nbsp; // Se afiseaza pe ecran cuvantul INFO. </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuvant[2];&nbsp;&nbsp; // Se afiseaza pe ecran litera F , intrucat indexarea se face de la 0 ( vezi mai sus).
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuvant+1;&nbsp;&nbsp; // Se afiseaza pe ecran NFO ( de la pozitia 1 pana la sfarsit.)

	    <p>}</p>
    </div>
    <br><br>
</div>
	
<div class="footer">
	<p>	&#169; Copyright Reserved	&#169;</p>
	<?php
		if(isset($_SESSION['id']) && $_SESSION['status'] == 'admin' )
		{
			echo '<p color: red>Numele meu este !</p>'.$_SESSION['username'];
		}
	?>

</div>

</body>



</html>