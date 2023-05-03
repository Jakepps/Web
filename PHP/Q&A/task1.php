<?php
session_start();
?>

<link rel="stylesheet" type="text/css" href="style.css">

<p class="question">Вопрос 1:</p>
<p class="text">Что такое HTTP?</p>
<form action="task2.php" method="post">
  <input class="answer" type="text" name="answer1"/>
  <input class="submit" type="submit"/>
</form>
