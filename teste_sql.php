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


if(isset($_POST['TRIMITE']))
{
	$nr_intrebari = 10;
	if(isset($_POST['nr-intrebari'])) {
		$nr_intrebari = intval($_POST['nr-intrebari']);
	}
	$intrebari = "";
	$raspsunsuri = "";
	$corecte = "";
	for($i = 1; $i <= $nr_intrebari; $i++) {
		$intrebari .= $_POST["intrebare$i"] . '!';
		for($j = 1; $j <= 3; $j++) {
			$raspunsuri .= $_POST["raspuns$i-$j"] . '!';
		}
		if(isset($_POST["corect_a-$i"])) $corecte .= 'a';
		if(isset($_POST["corect_b-$i"])) $corecte .= 'b';
		if(isset($_POST["corect_c-$i"])) $corecte .= 'c';
		$corecte .= '!';
	}
	
	// $intrebari = $_POST['intrebare1'].'!'.$_POST['intrebare2'].'!'.$_POST['intrebare3'].'!'.$_POST['intrebare4'].'!'.$_POST['intrebare5'].'!'.$_POST['intrebare6'].'!'.$_POST['intrebare7'].'!'.$_POST['intrebare8'].'!'.$_POST['intrebare9'].'!'.$_POST['intrebare10'].'!';

	// $raspunsuri = $_POST['raspuns11'].'!'.$_POST['raspuns12'].'!'.$_POST['raspuns13'].'!'.$_POST['raspuns21'].'!'.$_POST['raspuns22'].'!'.$_POST['raspuns23'].'!'.$_POST['raspuns31'].'!'.$_POST['raspuns32'].'!'.$_POST['raspuns33'].'!'.$_POST['raspuns41'].'!'.$_POST['raspuns42'].'!'.$_POST['raspuns43'].'!'.$_POST['raspuns51'].'!'.$_POST['raspuns52'].'!'.$_POST['raspuns53'].'!'.$_POST['raspuns61'].'!'.$_POST['raspuns62'].'!'.$_POST['raspuns63'].'!'.$_POST['raspuns71'].'!'.$_POST['raspuns72'].'!'.$_POST['raspuns73'].'!'.$_POST['raspuns81'].'!'.$_POST['raspuns82'].'!'.$_POST['raspuns83'].'!'.$_POST['raspuns91'].'!'.$_POST['raspuns92'].'!'.$_POST['raspuns93'].'!'.$_POST['raspuns101'].'!'.$_POST['raspuns102'].'!'.$_POST['raspuns103'].'!';
		
		// $corecte="";
		
		// if(isset($_POST['corect_a1'])) $corecte.='a';
		// else if(isset($_POST['corect_b1'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a2'])) $corecte.='a';
		// else if(isset($_POST['corect_b2'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a3'])) $corecte.='a';
		// else if(isset($_POST['corect_b3'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a4'])) $corecte.='a';
		// else if(isset($_POST['corect_b4'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a5'])) $corecte.='a';
		// else if(isset($_POST['corect_b5'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a6'])) $corecte.='a';
		// else if(isset($_POST['corect_b6'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a7'])) $corecte.='a';
		// else if(isset($_POST['corect_b7'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a8'])) $corecte.='a';
		// else if(isset($_POST['corect_b8'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a9'])) $corecte.='a';
		// else if(isset($_POST['corect_b9'])) $corecte.='b';
		// else $corecte.='c';

		// if(isset($_POST['corect_a10'])) $corecte.='a';
		// else if(isset($_POST['corect_b10'])) $corecte.='b';
		// else $corecte.='c';

		
		$sql="INSERT INTO teste (intrebari,raspunsuri,corecte) values ('$intrebari','$raspunsuri','$corecte')";
		$result=$conn->query($sql);


 
    if(isset($_POST['TRIMITE']))
      header("Location:teste.php");
    
}

  
    
    






















































?>