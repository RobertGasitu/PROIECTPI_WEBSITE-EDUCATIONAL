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
<p>&nbsp;&nbsp;In urma teoriei prezentate in paginile anterioare , va voi prezenta rezolvarile la unele din problemele de la siruri de caractere din subiectele de Bacalaureat din editile anterioare. Aceste rezolvari sunt utile de vizualizat pentru o intelegere mult mai buna a capitolului.</p>
</div>
<br>
     <div class="text">
      <p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 1</b></p>
      <p> &nbsp;&nbsp;&nbsp;&nbsp;Sa se scrie un program C++ care citeste de la tastatura un cuvant format din cel mult 20 de caractere, doar litere mici ale alfabetului englez. Programul determina transformarea cuvantului citit prin inlocuirea fiecarei vocale a cuvantului , cu litera mare corespunzatoare , restul literelor raman neschimbate. Se cere sa se afiseze pe ecran rezultatul obtinut . Se considera vocale literele din multimea {a,e,i,o,u}.</p>
      <p>&nbsp;&nbsp;Exemplu : pentru cuvantul <b style="color : #f57842">bacalaureat</b> se afiseaza pe ecran <b style="color : #f57842">bAcAlAUrEAt</b></p>
       <br>
       <p>&nbsp;&nbsp;<b style="color : #05ad10">Etape de rezolvare :</b></p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;1. Parcurgerea cuvantului este necesara, fapt ce duce la determinarea lungimii acestuia cu ajutorul functiei <b style="color : #05ad10">strlen</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;2. Verificarea daca litera este vocala, cu ajutorul functiei <b style="color : #05ad10">strchr</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;3. In cazul in care litera este vocala , transformarea acesteia in litera mare , cu ajutorul functei <b style="color : #05ad10">toupper</b>.</p>
       <br>
       <p>&nbsp;&nbsp;<b style="color : #f5425a">Rezolvare:</b></p>
       <br>
       <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[21];  <b class="com"> &nbsp;&nbsp;// Declararea cuvantului</b></p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;int </b>  lg , i; <b class="com">&nbsp;&nbsp; // Declararea variabilelor necesare : lg - pentru lungimea cuvantului ; i - pentru parcurgerea cuvantului</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cin<b style="color : #bd0829"> >> </b>cuv;  <b class="com"> &nbsp;&nbsp;// Citirea cuvantului</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;lg = strlen(cuv); <b class="com"> &nbsp;&nbsp;// Determinarea lungimii</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color : #3414ff">for</b>(i = 0 ; i < lg ; i++) <b class="com">&nbsp;&nbsp; // Parcurgerea cuvantului litera cu litera</b></p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(strchr(<b style="color : #3414ff">"aeiou"</b>,cuv[i])!=NULL) <b class="com">&nbsp;&nbsp; // Cu ajutorul functiei strchr (cauta cuv[i] in sirul "aeiou" , daca se gaseste inseamna ca este vocala)</b></p>	
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cuv[i]=toupper(cuv[i]); <b class="com">&nbsp;&nbsp; // Conversia din litera mica in litera mare</b> </p>
	    <br>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuv; <b class="com">&nbsp;&nbsp; // Afisarea rezultatului</b></p>

	    <p>}</p>
    </div>
 </div>
 <div class="text">
      <p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 2</b></p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Sa se scrie un program C++ care citeste de la tastatura un cuvant format din cel mult 20 de caractere si verifica daca acesta este <b style="color : #2c7d62">palindromic</b> . Un palindrom este un șir de caractere (de obicei cuvinte, fraze sau numere) care citit de la stânga la dreapta sau de la dreapta la stânga rămâne neschimbat. In cazul in care acesta este palindrom se afiseaza pe ecran DA , iar in caz contrar NU. </p>
      <p>&nbsp;&nbsp;Exemplu : Pentru cuvantul <b style="color : #f57842">radar</b> se afiseaza pe ecran <b style="color : #0a0abf">DA</b> , iar pentru cuvantul <b style="color : #f57842">info</b> se afiseaza pe ecran <b style="color : #0a0abf">NU</b>.</p>
       <br>
       <p>&nbsp;&nbsp;<b style="color : #05ad10">Etape de rezolvare :</b></p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;1. Pentru a face verificarea trebuie sa pastram o "copie" a cuvantului intr-o noua variabila cu ajutorul functiei <b style="color : #05ad10">strcpy</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;2. Creăm cuvantul invers ( de la dreapta la stanga) cu ajutorul functiei  <b style="color : #05ad10">strrev</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;3. Dupa crearea cuvantului invers, se compara cu copia cuvantului prin intermediul functei  <b style="color : #05ad10">strcmp</b>.</p>
       <br>
	    <p>&nbsp;&nbsp;<b style="color : #f5425a">Rezolvare:</b></p>
	    <br>
	    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[21],aux[21];  <b class="com"> &nbsp;&nbsp;// Declararea cuvantului si a copiei</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cin<b style="color : #bd0829"> >> </b>cuv;  <b class="com"> &nbsp;&nbsp;// Citirea cuvantului</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;strcpy(aux,cuv); <b class="com"> &nbsp;&nbsp;// Crearea copiei in aux</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;strrev(cuv); <b class="com"> &nbsp;&nbsp;// Se creaza cuvantul invers</b> </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(strcmp(cuv,aux) == 0) <b class="com">&nbsp;&nbsp; // Se verifica daca cuvintele sunt identice</b></p>	
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b><b style="color : #0a0abf">"DA"</b>; <b class="com">&nbsp;&nbsp; // Afisarea rezultatului</b></p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b>
	    	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b><b style="color : #0a0abf">"NU"</b>; <b class="com">&nbsp;&nbsp; // Afisarea rezultatului</b></p>
	    <p>}</p>
    </div>
   <br>
   </div>
   <br>
   <div class="text">
   	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 3</b></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Un text cu cel mult 100 de caractere conține cuvinte și numere, separate prin câte un spațiu. Cuvintele sunt formate numai din litere mici ale alfabetului englez, iar numerele sunt reale, pozitive, cu partea zecimală și partea întreagă separate prin simbolul virgulă, sau numai cu partea întreagă, ca în exemplu. Scrieți un program C/C++ care citește de la tastatură un text de tipul precizat și afișează pe ecran numărul de valori întregi din text. </p>  
    <p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> grus leucogeranus are 1,40 m inaltime si traieste intre 30 si 40 de ani</b> se afișează pe ecran  <b style="color : #0a0abf">2</b>.</p>
     <br>
       <p>&nbsp;&nbsp;<b style="color : #05ad10">Etape de rezolvare :</b></p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;1. Extragerea fiecarui cuvant este necesara pentru verificarea cerintei , astfel utilizam functia  <b style="color : #05ad10">strtok</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;2. Verificarea daca cuvantul este format din cifre, cu ajutorul functiei <b style="color : #05ad10">isdigit</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;3. In cazul in care cuvantul contine cifre , verificarea ca acesta este numar intreg , cautand ',' cu ajutorul functiei <b style="color : #05ad10">strchr</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;4. Contorizarea numerelor intregi cu ajutorul unei <b style="color : #05ad10">variabile simple</b>.</p>
     <br>
     <p>&nbsp;&nbsp;<b style="color : #f5425a">Rezolvare:</b></p>
     <br>
     <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> text[101],*p;  <b class="com"> &nbsp;&nbsp;// Declararea sirului si a pointer-ului necesar pentru extragerea cuvintelor</b></p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;int </b> cnt=0;  <b class="com"> &nbsp;&nbsp;// Declararea variabilei ce contorizeaza numerele intregi</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cin.getline(text,101);  <b class="com"> &nbsp;&nbsp;// Citirea sirului</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;p = strtok(text," "); <b class="com"> &nbsp;&nbsp;// Extragerea primului cuvant,tinand cont de separatorul " "</b></p><br>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while </b>(p!=NULL) ; <b class="com"> // Cat timp exista entitati, se prelucreaza</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p><br>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(isdigit(p[0]) <b class="com">  //Verificarea daca cuvantul extras contine cifre, prin interogarea primului caracter</b></p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(strchr(p,',')==NULL)<b class="com"> //Se cauta virgula in p , in cazul in care nu se gaseste cuvantul este numar intreg</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cnt++;<b class="com"> //Daca cuvantul respecta toate cerintele verificate mai sus, se contorizeaza</b></p><br>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p=strtok(NULL," "); <b class="com"> // Se trece la urmatorul cuvant</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
	      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cnt;<b class="com"> // Afisarea rezultatului</b></p>
	    <p>}</p>
    </div>
</div>
    <br>

   <div class="text">
   	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 4</b></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Într-un text cu cel mult 100 de caractere, cuvintele sunt formate din litere mici ale alfabetului englez și sunt separate prin câte un spațiu. Scrieți un program C/C++ care citește de la tastatură un text de tipul menționat și afișează pe ecran numărul de cuvinte ale sale formate dintr-un număr egal de vocale și consoane. Se consideră vocale literele din mulțimea a, e, i, o, u. </p>  
    <p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> cuvantul consoane are un numar de patru vocale si patru consoane</b> se afișează pe ecran  <b style="color : #0a0abf">6</b>.</p>
     <br>
       <p>&nbsp;&nbsp;<b style="color : #05ad10">Etape de rezolvare :</b></p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;1. Extragerea fiecarui cuvant este necesara pentru verificarea cerintei , astfel utilizam functia  <b style="color : #05ad10">strtok</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;2. Parcurgerea fiecarui cuvant extras, ceea ce duce la lungimea acestuia , aflata cu ajutorul functiei <b style="color : #05ad10">strlen</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;3. Contorizarea numarului de vocale si consoane din fiecare cuvant, cu ajutorul unor <b style="color : #05ad10">variabile simple</b> si cu functia <b style="color : #05ad10">strchr</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;4. In cazul in care cuvantul are numar egal de consoane si vocale, se contorizeaza prin utilizarea unei  <b style="color : #05ad10">variabile simple</b>.</p>
     <br>
     <p>&nbsp;&nbsp;<b style="color : #f5425a">Rezolvare:</b></p>
     <br>
     <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> text[101],*p;  <b class="com"> &nbsp;&nbsp;// Declararea sirului si a pointer-ului necesar pentru extragerea cuvintelor</b></p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;int </b> cnt=0,vocale,consoane,i,lg  <b class="com"> &nbsp;&nbsp;// Declararea variabilelor necesare</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cin.getline(text,101);  <b class="com"> &nbsp;&nbsp;// Citirea sirului</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;p = strtok(text," "); <b class="com"> &nbsp;&nbsp;// Extragerea primului cuvant,tinand cont de separatorul " "</b></p><br>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while </b>(p!=NULL) ; <b class="com"> // Cat timp exista entitati, se prelucreaza</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;consoane = 0,vocale = 0;<b class="com"> // Initializarea contoarelor pentru vocale si consoane pentru fiecare cuvant prelucrat</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lg = strlen(p)<b class="com"> // Determinarea lungimii cuvantului curent</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color : #3414ff">for</b>(i = 0 ; i < lg ; i++) <b class="com">&nbsp;&nbsp; // Parcurgerea cuvantului litera cu litera</b></p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(strchr("aeiou",p[i])!=NULL) <b class="com">  //Verificarea daca litera curenta este vocala</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vocale++;<b class="com"> // Daca este vocala, se incrementeaza contorul pentru vocale</b></p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;consoane++; <b class="com"> // In caz contrar, cel pentru consoane</b></p>	
	    <br>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(consoane == vocale)</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cnt++ <b class="com"> // Daca numarul de consoane este egal cu cel de vocale, se creste contorul (cnt) care numara aceste cuvinte "speciale"</b>;
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p=strtok(NULL," "); <b class="com"> // Se trece la urmatorul cuvant</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
	      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cnt;<b class="com"> // Afisarea rezultatului</b></p>
	    <p>}</p>
    </div>
</div>
    <br>
<div class="text">
   	<p>&nbsp;&nbsp;<b style="color : #f5425a">Problema 5</b></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Într-un text cu cel mult 100 de caractere, cuvintele sunt formate din litere mici ale alfabetului englez și sunt separate prin câte un spațiu. Scrieți un program C/C++ care citește de la tastatură un text de tipul menționat și il transforma in memorie prin stergerea caracterului din mijloc a tuturor cuvintelor cu numar impar de caractere , cele cu numar par de caractere raman neschimbate. </p>  
    <p>&nbsp;&nbsp;Exemplu >> Pentru textul : <b style="color : #f57842"> Maine voi merge la magazine</b> se afișează pe ecran  <b style="color : #0a0abf">Mane vi mege la magazine </b>.</p>
     <br>
       <p>&nbsp;&nbsp;<b style="color : #05ad10">Etape de rezolvare :</b></p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;1. Extragerea fiecarui cuvant este necesara pentru verificarea cerintei , astfel utilizam functia  <b style="color : #05ad10">strtok</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;2. Determinarea mijlocului fiecarui cuvant cu ajutorul functiei <b style="color : #05ad10">strlen</b> si stergerea caracterului  prin intermediul functiei <b style="color : #05ad10">strcpy</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;3. Dupa prelucrarea fiecarui cuvant , construirea noului sir, intr-o variabil auxiliara, prin intnermediul functiei <b style="color : #05ad10">strcat</b>.</p>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;4.Plasarea sirului final inapoi in sirul initial, prin intermediul functiei <b style="color : #05ad10">strcpy</b>.</p>
     <br>
     <p>&nbsp;&nbsp;<b style="color : #f5425a">Rezolvare:</b></p>
     <br>
     <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> text[101],aux[101]="",*p;  <b class="com"> &nbsp;&nbsp;// Declararea sirului  si a pointer-ului necesar pentru extragerea cuvintelor</b></p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;int </b> lg,mijloc  <b class="com"> &nbsp;&nbsp;// Declararea variabilelor necesare</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cin.getline(text,101);  <b class="com"> &nbsp;&nbsp;// Citirea sirului</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;p = strtok(text," "); <b class="com"> &nbsp;&nbsp;// Extragerea primului cuvant,tinand cont de separatorul " "</b></p><br>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while </b>(p!=NULL) ; <b class="com"> // Cat timp exista entitati, se prelucreaza</b> </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lg = strlen(p)<b class="com"> // Determinarea lungimii cuvantului curent</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mijloc=lg/2;<b class="com"> // Determinarea mijlocului cuvantului curent</b></p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b>(lg%2==1) <b class="com">  //Verificarea daca cuvantul are lungime impara</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(p+mijloc,p+mijloc+1);<b class="com"> // Stergerea caracterlui din mijloc</b></p><br>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcat(aux,p),strcat(aux," "); <b class="com"> // Introducerea cuvantului in noul sir, urmat de spatiul aferent</b></p>	
	    <br>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p=strtok(NULL," "); <b class="com"> // Se trece la urmatorul cuvant</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
	       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(text,aux);<b class="com"> // Inlocuirea sirului final in sirul initial.</b></p>
	      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>text;<b class="com"> // Afisarea rezultatului</b></p>
	    <p>}</p>
    </div>
</div>

   <div class="footer"><p>	&#169; Copyright Reserved	&#169;</p></div>


</body>



</html>