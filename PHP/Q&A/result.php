<?php
session_start();
$answer10 = $_POST['answer10'];
$_SESSION['answer10'] = $answer10;

$questions = array(
    '1' => array(
        'question' => 'Что такое HTTP?',
        'answer' => 'Протокол передачи данных в Интернете',
    ),
    '2' => array(
        'question' => 'Какие HTTP методы вы знаете?',
        'answer' => 'GET, POST, PUT, DELETE, PATCH, HEAD',
    ),
    '3' => array(
        'question' => 'Какие виды HTTP-запросов вы знаете?',
        'answer' => 'Запрос с телом и запрос без тела',
    ),
    '4' => array(
        'question' => 'Что такое DNS и как он работает?',
        'answer' => 'Система, которая преобразует доменные имена в соответствующие IP-адреса',
    ),
    '5' => array(
        'question' => 'Какие протоколы используются для безопасной передачи данных в Интернете? (Ответ через запятую, большими буквами, без пробелов)',
        'answer' => 'SSL,TLS',
    ),
    '6' => array(
        'question' => 'Что такое AJAX?',
        'answer' => 'Технология, которая позволяет обновлять содержимое веб-страницы без перезагрузки всей страницы',
    ),
    '7' => array(
        'question' => 'Какие протоколы используются для электронной почты? (Ответ через запятую, большими буквами, без пробелов)',
        'answer' => 'SMTP,POP3,IMAP',
    ),
    '8' => array(
        'question' => 'Что такое RESTful API?',
        'answer' => 'Архитектурный стиль, который используется для создания веб-сервисов',
    ),
    '9' => array(
        'question' => 'Какой метод можно использовать в JavaScript для проверки, является ли значение переменной массивом?',
        'answer' => 'Array.isArray()',
    ),
    '10' => array(
        'question' => 'Нравится ли вам WEB?',
        'answer' => 'Да',
    ),

);

$num_correct = 0;
$wrong_answers = array();

foreach ($questions as $num => $data) {
    if (isset($_SESSION['answer'.$num]))
    {
        if ($_SESSION['answer'.$num] == $data['answer'])
            $num_correct++;
        else
        {
            $wrong_answers[$num] = array(
                'input' => $_SESSION['answer'.$num],
                'correct' => $data['answer']
            );
        }
    }
    else
    {
        $wrong_answers[$num] = array(
            'input' => 'Ничего не было введено',
            'correct' => $data['answer']
        );
    }
}

echo "<p>Вы ответили правильно на $num_correct из ".count($questions)." вопросов.</p>";

if (!empty($wrong_answers)) {
    echo "<p>Неправильные ответы:</p>";
    foreach ($wrong_answers as $num => $answer) {
        echo "<p>Вопрос $num: Ваш ответ: {$answer['input']}, Правильный ответ: {$answer['correct']}</p>";
    }
}

// очищаем сессию
session_unset();
session_destroy();
?>
