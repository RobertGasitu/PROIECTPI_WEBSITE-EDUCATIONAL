<?php
  session_start();
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

</div>
<div id="quiz"></div>
				<button id="submit">Submit</button>
				<div id="results" style="font-size :30px;margin-bottom: 25px"></div>

  <a style="display:none" id="fisier" href="" download>DESCARCA TEST-UL</a>
</body>
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
  $sql = "SELECT * FROM teste WHERE id=$_GET[id]";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  $intrebari = explode("!",$row['intrebari']);
  $raspunsuri = explode("!",$row['raspunsuri']);
  $corecte = explode("!",$row['corecte']);
  $nr_intrebari = count($corecte) - 1;
?>

  <script>var myQuestions = [];</script>
  
  <?php 
    for($i = 0; $i < $nr_intrebari; $i++) {
      $index = $i + 1;
      echo "
        <script>
          myQuestions.push({
            question: '$index. {$intrebari[$i]}',
            answers: {
              a: '{$raspunsuri[$i * 3]}',
              b: '{$raspunsuri[$i * 3 + 1]}',
              c: '{$raspunsuri[$i * 3 + 2]}'
            },
            correctAnswers: '{$corecte[$i]}'.split('')
          });
        </script>
      ";
    }
  ?>
<script>
console.log(myQuestions);
var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');
generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);
function generateQuiz(questions, quizContainer, resultsContainer, submitButton){
  function showQuestions(questions, quizContainer){
    var output = [];
    var answers;
    for(var i=0; i<questions.length; i++){
      answers = [];
      // Pentru fiecare raspuns valabil adaugam un buton radio
      for(letter in questions[i].answers){
        answers.push(
          '<label>'
            + '<input type="checkbox" name="question'+i+'" value="'+letter+'">'
            + letter + ': '
            + questions[i].answers[letter]
          + '</label>'
        );
      }
      // Pentru fiecare intrebare si raspuns afisam
      output.push(
        '<div class="question">' + questions[i].question + '</div>'
        + '<div class="answers">' + answers.join("<br>") + '</div>'
      );
    }
    quizContainer.innerHTML = output.join('');
  }
  function showResults(questions, quizContainer, resultsContainer){
    // gather answer containers from our quiz
    var answerContainers = quizContainer.querySelectorAll('.answers');
    var userAnswer = '';
    var numCorrect = 0;
    var fisier = '';
    
    var file = document.querySelector('#fisier');
    for(var i=0; i<questions.length; i++){
      userAnswer = (answerContainers[i].querySelectorAll('input[name=question'+i+']:checked')||[]);
      // Raspuns Corect Verde
      fisier += questions[i].question + '\n';
      var expectedCorrectAnswers = questions[i].correctAnswers.length;
      var actualCorrectAnswers = 0;
      var selectedAnswers = [];
      for(var j = 0; j < userAnswer.length; j++) {
        selectedAnswers.push(userAnswer[j].value);
        if(questions[i].correctAnswers.includes(userAnswer[j].value)) {
          actualCorrectAnswers++;
        }
      }
      fisier += 'a. ' + questions[i].answers.a + '\n';
      fisier += 'b. ' + questions[i].answers.b + '\n';
      fisier += 'c. ' + questions[i].answers.c + '\n';
      fisier += 'Raspunsurile tale : ' + selectedAnswers + '\n' + 'Raspunsul corect: ' + questions[i].correctAnswers + '\n\n';
      if(userAnswer.length === expectedCorrectAnswers && actualCorrectAnswers === expectedCorrectAnswers){
        numCorrect++;
        answerContainers[i].style.color = 'lightgreen';
      }
      // Raspuns Gresit sau Gol Rosu
      else{
        answerContainers[i].style.color = 'red';
      }
    }
    // Afisarea Notei+Mesaj
    if(numCorrect<=Math.floor(questions.length * 0.4)){
      resultsContainer.innerHTML ='Ai obținut nota ' + numCorrect + '/' + questions.length + '.' + 'Trebuie sa inveti mai mult!';
    }
    else if(numCorrect<=Math.floor(questions.length * 0.8)){
      resultsContainer.innerHTML ='Ai obținut nota ' + numCorrect + '/' + questions.length +'.' + 'Esti pe drumul cel bun, mai reia chestiunile pe care nu le stii!';
    }
    else {
      resultsContainer.innerHTML ='Ai obținut nota ' + numCorrect + '/' + questions.length + '.' + 'Felicitari!';
    }
    fisier += 'Ai obtinut nota : ' + numCorrect + '/' + questions.length ;
    file.href = 'data:application/octet-stream,' + encodeURIComponent(fisier);
    file.download = 'intrebari.txt';
    file.style.display='block';
  }
  // Afisarea Intrebarilor
  showQuestions(questions, quizContainer);
  // Afisarea Rezultatului
  submitButton.onclick = function(){
    showResults(questions, quizContainer, resultsContainer);
  }
}
</script>


</html>