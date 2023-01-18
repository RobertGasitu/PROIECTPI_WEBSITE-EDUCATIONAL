<?php
   session_start();
   if(isset($_SESSION['id']) && $_SESSION['status'] != 'admin' )
      header("Location:index.php");
   else if(!isset($_SESSION['id']))
      header("Location:index.php");

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "proiect";
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql="SELECT *FROM teste";
      $result = $conn->query($sql);
      $teste = [];
      $intrebari = "";
      $raspunsuri = "";
      $corecte = "";
      while($row = $result->fetch_assoc()){
         $intrebari .= $row['intrebari'];
         $raspunsuri .= $row['raspunsuri'];
         $corecte .= $row['corecte'];
      }
      $intrebari = explode("!", $intrebari);
      $raspunsuri = explode("!", $raspunsuri);
      $corecte = explode("!", $corecte);
      $nr_intrebari_totale = count($corecte);

?>
<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Quiz</title>
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
<br>
<script>
   function selectHandler(e) {
      var i = e.target.selectedIndex - 1;
      if(i === -1)
         return;
      var intrebare = <?php echo json_encode($intrebari); ?>[i];
      var varianta1 = <?php echo json_encode($raspunsuri); ?>[i * 3];
      var varianta2 = <?php echo json_encode($raspunsuri); ?>[i * 3 + 1];
      var varianta3 = <?php echo json_encode($raspunsuri); ?>[i * 3 + 2];
      var corecte = <?php echo json_encode($corecte); ?>[i].split('');
      var inputs = e.target.parentElement.querySelectorAll('input');
      inputs[0].value = intrebare;
      inputs[1].value = varianta1;
      inputs[2].value = varianta2;
      inputs[3].value = varianta3;
      inputs[4].checked = corecte.includes('a');
      inputs[5].checked = corecte.includes('b');
      inputs[6].checked = corecte.includes('c');
   }
   function resetSelect(e) {
      e.target.parentElement.querySelector('select').value = '';
   }
</script>
<form method="POST" action ="teste_sql.php">
   <?php
      $nr_intrebari = 10;
      if(isset($_GET['nr-intrebari'])) {
         $nr_intrebari = $_GET['nr-intrebari'];
      }
      echo "<input type='hidden' name='nr-intrebari' value='$nr_intrebari'>";

      for($i = 1; $i <= $nr_intrebari; $i++) {
         echo "<div>
         <input onchange='resetSelect(event)' type='text' name='intrebare$i' placeholder='Intrebarea $i' ><br>
         <select name='intrebare' onchange='selectHandler(event)'>
         <option selected value=''>Refoloseste o intrebare</option>;
         ";

         for($j = 0; $j < $nr_intrebari_totale; $j++) {
            echo "<option value='{$intrebari[$j]}'>{$intrebari[$j]}</option>";
         }

         echo "
         </select>
         <input onchange='resetSelect(event)' type='text' class='varianta' name='raspuns$i-1' placeholder='a)' ><br>
         <input onchange='resetSelect(event)' type='text' class='varianta' name='raspuns$i-2' placeholder='b)' ><br>
         <input onchange='resetSelect(event)' type='text' class='varianta' name='raspuns$i-3' placeholder='c)' ><br>
         
         <p>Selecteaza raspunsurile corecte:</p>
         <input onchange='resetSelect(event)' type='checkbox'  name='corect_a-$i' >a
         <input onchange='resetSelect(event)' type='checkbox'  name='corect_b-$i' >b
         <input onchange='resetSelect(event)' type='checkbox'  name='corect_c-$i' >c<br>
         </div>";
      }
   ?>
    <br>

    <input type="submit" class="submit" name="TRIMITE">

</form>

</div>


</body>


</html>