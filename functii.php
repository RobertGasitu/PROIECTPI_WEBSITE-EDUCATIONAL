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
	   	 </ul>
           
		
	  </nav>

   </header>
</div>
<div class="text">
	<p>&nbsp;	&nbsp;Functiile asociate sirurilor de caractere au fost create din dorinta de a scurta anumite operatii frecvente care se pot face asupra variabilelor de tip <b style="color : #3910e0">char</b> . Vom discuta despre doua tipuri de functii : cele predestinate sirurilor de caractere , respectiv cele care se adreseaza caracterelor in sine.</p>
    <br>
    <h1>Funcții pentru caractere </h1>
    <br>
    <h2>1.Functia isalnum</h2>
    <br>
    <p>&nbsp;&nbsp;In general, utilizam aceasta functie pentru a verifica daca un caracter este<b style="color : #3910e0"> cifra , litera mica</b> sau <b style="color : #3910e0"> litera mare</b> . Aceasta functie returneaza ceva diferit de 0 daca verifica conditia de mai sus, sau 0 , in caz contrar. </p>
    <br>
    <p>Acesta ar fi o posibila implementare , utila in unele probleme de bacalaureat:</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( isalnum(caracter)!=0 )  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Este caracter alfanumeric."; </b> //Daca se citeste caracterul 'A' se afiseaza DA.
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu este caracter alfanumeric";</b> // Daca se citeste caracterul '#' se afiseaza NU.
	    <p>}</p>
    </div>
    <br>
    <h2>2.Functia isalpha</h2>
    <br>
    <p>Aceasta functie verifica daca un caracter este <b style="color : #3910e0">  litera mica</b> sau <b style="color : #3910e0"> litera mare</b> . Returneaza o valoare diferita de 0 daca se verifica conditia , si 0 in caz contrar. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( isalpha(caracter)!=0 )  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Este litera!"; </b> //Daca se citeste caracterul 'r' se afiseaza DA.
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu este litera !";</b> // Daca se citeste caracterul '@' se afiseaza NU.
	    <p>}</p>
    </div>
    <br>
    <h2>3.Functia isdigit</h2>
    <br>
    <p>Aceasta functie verifica daca un caracter este <b style="color : #3910e0"> cifra</b>  . Returneaza o valoare diferita de 0 daca se verifica conditia , si 0 in caz contrar. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( isdigit(caracter)!=0 )  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Este cifra"; </b> //Daca se citeste caracterul '9' se afiseaza DA.
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu este cifra";</b> // Daca se citeste caracterul 'D' se afiseaza NU.
	    <p>}</p>
    </div>
    <br>
    <h2>4.Functia islower</h2>
    <br>
    <p>Aceasta functie verifica daca un caracter este <b style="color : #3910e0"> litera mica</b>  . Returneaza o valoare diferita de 0 daca se verifica conditia , si 0 in caz contrar. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( islower(caracter)!=0 )  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Este litera mica"; </b> //Daca se citeste caracterul 'C' se afiseaza DA.
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu este litera mica";</b> // Daca se citeste caracterul 'c' se afiseaza NU.
	    <p>}</p>
    </div>
    <br>
    <h2>4.Functia isupper</h2>
    <br>
    <p>Aceasta functie verifica daca un caracter este <b style="color : #3910e0"> litera mare</b>  . Returneaza o valoare diferita de 0 daca se verifica conditia , si 0 in caz contrar. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( isupper(caracter)!=0 )  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Este litera mare"; </b> //Daca se citeste caracterul 'M' se afiseaza DA.
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu este litera mare";</b> // Daca se citeste caracterul 'n' se afiseaza NU.
	    <p>}</p>
    </div>
     <br>
    <h2>5.Functia ispunct</h2>
    <br>
    <p>Aceasta functie verifica daca un caracter este <b style="color : #3910e0"> semn de punctuatie</b>.Practic este inversa functiei isalnum . Returneaza o valoare diferita de 0 daca se verifica conditia , si 0 in caz contrar. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( ispunct(caracter)!=0 )  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Este semn de punctuatie (caracter special)"; </b> //Daca se citeste caracterul '#' se afiseaza DA.
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu este";</b> // Daca se citeste caracterul 'u' se afiseaza NU.
	    <p>}</p>
    </div>
    <br>
    <h2>6.Functia tolower</h2>
    <br>
    <p>Aceasta functie converteste o <b style="color : #3910e0"> litera mare</b> in   <b style="color : #3910e0"> litera mica</b>. Daca caracterul este deja litera mica , sau daca acesta este un caracter ne-alfanumeric , caracterul nu se modifica. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp; caracter=tolower(caracter) </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< caracter ; // Daca caracterul este 'A' se afiseaza 'a', iar daca caracterul este '$' se afiseaza '$'
	    <p>}</p>
    </div>
    <br>
    <h2>7.Functia toupper</h2>
    <br>
    <p>Aceasta functie converteste o <b style="color : #3910e0"> litera mica</b> in   <b style="color : #3910e0"> litera mare</b>. Daca caracterul este deja litera mare , sau daca acesta este un caracter ne-alfanumeric , caracterul nu se modifica. </p>
    <br>
     <p>Exemplu de implementare : </p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> caracter ;  </p>
	    <p><b style="color : #0892bd">&nbsp;&nbsp;&nbsp;&nbsp;cin</b> >> caracter;  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp; caracter=toupper(caracter) </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< caracter ; // Daca caracterul este 'e' se afiseaza 'E', iar daca caracterul este ';' se afiseaza ';'
	    <p>}</p>
    </div>
   <br><br>
   <h1>Funcții pentru siruri de caractere </h1>
   <br>
   <h2>1.Functia strlen</h2>
    <br>
    <p>Aceasta functie returneaza lungimea unui string , adica numarul de caractere de la inceputul sirului pana la caracterul nul , care nu se numara. Este una dintre cele mai folosite functii , mai ales in problemele de bacalaureat intrucat este utila in parcurgerea unor siruri.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[10]="vacanta" ;  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>strlen(cuv);&nbsp;&nbsp; // Se afiseaza pe ecran 7
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>strlen(cuv+2);&nbsp;&nbsp; // Se afiseaza pe ecran 5 (String-ul asociat lui cuv+2 este "canta" , care are lungimea 5.)
	    
	    <p>}</p>
    </div>
    <br>
    <h2>2.Functia strcpy</h2>
    <br>
    <p class="cod">char* strcpy( char* dest, const char* src );</p>
    <br>
    <p>Aceasta functie copiază caracterele din șirul aflat la adresa src, inclusiv caracterul nul, în șirul al cărui prim element se află la adresa din dest.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[10] ;  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;strcpy( cuv , "copiere" ); // In string-ul cuv s-a depozitat cuvantul "copiere"
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuv;&nbsp;&nbsp; // Se afiseaza pe ecran copiere
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;strcpy( cuv , cuv+2 ); // Peste "copiere" se pune cuv+2 ( "piere") </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuv;&nbsp;&nbsp; // Se afiseaza pe ecran : piere
	    
	    <p>}</p>
    </div>
    <br>
    <p>Dupa cum se vede, functia strcpy este foarte utila in momentul in care dorim sa stergem anumite caractere dintr-un string.
    <br>
    <h2>3.Functia strcat</h2>
    <br>
    <p class="cod">char *strcat( char *dest, const char *src );</p>
    <br>
    <p>Adaugă (concatenează) caracterele din șirul aflat la adresa src, inclusiv caracterul nul, la șirul al cărui prim element se află la adresa din dest.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[10]="Siruri" ;  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;strcat( cuv , "concatenate" ); // In string-ul cuv s-a concatenat la final cuvantul "concatenate"
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuv;&nbsp;&nbsp; // Se afiseaza pe ecran "Siruriconcatenate"
	    
	    
	    <p>}</p>
    </div>
    <br>
    <p>Aceasta functie este adesea folositoare cand prelucram propozitii si dorim sa inlocuim un anumit cuvant cu altceva.</p>
     <br>
     <h2>4.Functia strrev</h2>
    <br>
    <p>Aceasta functie inverseaza un string.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[10]="info" ;  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;strrev( cuv ); // Se inverseaza cuvantul de la sfarsit spre inceput.
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>cuv;&nbsp;&nbsp; // Se afiseaza pe ecran ofni
	    <p>}</p>
    </div>
    <br>
    <p>Aceasta functie este foarte folositoare pentru a verifica daca un cuvant este <b style="color : #2c7d62">palindromic</b>.</p>
    <br>
     <h2>5.Functia strchr</h2>
    <br>
    <p class="cod">char *strchr( char * str, char ch );</p>
    <br>
    <p>Caută caracterul ch în șirul al cărui prim caracter se află în memorie la adresa din str . Funcția returnează adresa NULL, dacă caracterul ch nu apare în șirul str , respectiva adresa primei apariții al lui ch în str , dacă ch apare în str.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[15]="informatica" ;  </p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char  </b> *p = strchr(cuv,'f') ; // Pointer-ul se pozitioneaza la prima aparitie a literei "f". </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>p;&nbsp;&nbsp; // Se afiseaza pe ecran formatica</p>
	    <p>}</p>
    </div>
    <br>
    <p>In general , utilizam adesea functia strchr in problemele de bacalaureat cand dorim sa contorizam / prelucram  <b style="color : #2c7d62">vocalele</b> dintr-un cuvant.</p>
    <br>
    <h2>6.Functia strrchr</h2>
    <br>
    <p class="cod">char *strrchr( char * str, char ch );</p>
    <br>
    <p>Caută caracterul ch în șirul al cărui prim caracter se află în memorie la adresa din str . Funcția returnează adresa NULL, dacă caracterul ch nu apare în șirul str , respectiva adresa ultimei apariții al lui ch în str , dacă ch apare în str.
    </p>
    <br>
    <p>Se observa usor ca singura diferenta dintre <b style="color : #3910e0"> strchr </b> si <b style="color : #3910e0"> strrchr </b> consta in faptul ca strchr cauta prima pozitie, iar strrchr cauta ultima pozitie.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[15]="matematica" ;  </p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char  </b> *p = strrchr(cuv,'t') ; // Pointer-ul se pozitioneaza la ultima aparitie a literei 't'. </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>p;&nbsp;&nbsp; // Se afiseaza pe ecran tica</p>
	    <p>}</p>
    </div>
    <br>
    <h2>7.Functia strstr</h2>
    <br>
    <p class="cod">char *strstr( char * s, char * t );</p>
    <br>
    <p>Caută șirul t în șirul al cărui prim caracter se află în memorie la adresa din s. Funcția returnează adresa NULL, dacă șirul t nu apare în șirul s, respectiva adresa primei apariții al lui t în s, dacă t apare în s.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[10]="informatica" ;  </p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char  </b> *p = strstr(cuv,"ma") ; //Se cauta sirul "ma" in cuv iar pointer-ul se pozitioneaza la prima aparitie a sirului "ma". </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>p;&nbsp;&nbsp; // Se afiseaza pe ecran matica</p>
	    <p>}</p>
    </div>
    <br>
    <p>In general , utilizam adesea functia strstr in problemele legate de  <b style="color : #2c7d62">prefixe / sufixe</b> dintr-un cuvant.</p>
    <br>
    <h2>8.Functia strcmp</h2>
    <br>
    <p class="cod">int strcmp( char * s, char * t );</p>
    <br>
    <p>Compară lexicografic cele două șiruri de caractere , si se ivesc urmatoarele 3 situatii :</p>
    <br>
    <p>&#8226; Dacă șirul <b style="color : #3910e0"> s </b> este lexicografi mai mic decât <b style="color : #3910e0"> t </b> funcția va returna o valoare negativă.</p>
    <p>&#8226; Dacă șirul <b style="color : #3910e0"> s </b> este lexicografi mai mare decât <b style="color : #3910e0"> t </b> funcția va returna o valoare pozitivă.</p>
    <p>&#8226; Dacă cele două șiruri sunt identice funcția va returna valoarea 0.</p>
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[10]="info" , cuv2[10]="INFO" ;  </p>
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if</b> ( strcmp(cuv,cuv2) == 0 ) // Aceasta este metoda de comparare a 2 cuvinte.  </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Cuvintele sunt egale" </b>  
	    <p><b style="color : #0a0abf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</b></p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<< <b style="color : #0a0abf">"Nu sunt egale cuvintele";</b> // Se va afisa NU, chiar daca la prima vedere cuvintele par egale, in limbajul C++ conteaza si faptul ca este litera mare sau mica ( codul ASCI este diferit).
	    <p>}</p>
    </div>
    <br>
    <h2>9.Functia strtok</h2>
    <br>
    <p class="cod">char *strtok( char *str, const char *sep );</p>
    <br>
    <p>Aceasta functie se foloseste in general atunci cand ai o propozitie si vrei sa lucrezi cu fiecare cuvant in parte. Este cea mai folosita functie intalnita in problemele de Bacalaureat, asa ca este esential sa stim sa operam cu ea ! In str se afla sirul in care cautam , iar sep reprezinta separatorii pe care ii utilizam pentru a "sparge" sirul str.</p>
    <br>
    <p> In exemplul de mai jos, vom vedea o varianta foarte usoara de a lucra cu <b style="color : #bd0829"> strtok </b> . Vom sparge o propozitie in cuvinte, afisand pe cate o linie fiecare cuvant al acesteia.
    <br>
    <div class="cod">
		<p><b style="color : #bf0ab9">int</b> main() </p>
		<p>{</p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char </b> cuv[50]="Lucram cu functii" ;  </p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;char  </b> *p = strtok(cuv," ") ; // Propozita este "sparta" dupa separatorul spatiu " . </p>
	    <p><b style="color : #3910e0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while </b>(p!=NULL) ; // Cat timp exista entitati, se prelucreaza . </p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout<b style="color : #bd0829"> << </b>p<b style="color : #bd0829"> << </b>endl;&nbsp;&nbsp; // Se afiseaza pe ecran cuvintele pe lini seperate.</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p=strtok(NULL," "); // Se trece la urmatorul cuvant</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
	    
	    <p>}</p>
	    <p> La final se afiseaza pe ecran : </p>
	    <p>Lucram</p>
	    <p>cu</p>
	    <p>functii</p>
    </div>
    <br>

</div>






<div class="footer"><p>	&#169; Copyright Reserved	&#169;</p></div>

</body>



</html>