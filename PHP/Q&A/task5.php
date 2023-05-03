<?php
session_start();
$answer4 = $_POST['answer4'];
$_SESSION['answer4'] = $answer4;
?>

<link rel="stylesheet" type="text/css" href="style.css">

<p class="question">Вопрос 5:</p>
<p class="text">Какие протоколы используются для безопасной передачи данных в Интернете? (Ответ через запятую, большими буквами, без пробелов)</p>
<form action="task6.php" method="post">
  <input class="answer" type="text" name="answer5"/>
  <input class="submit" type="submit"/>
</form>

