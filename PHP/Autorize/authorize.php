<?
    session_start();

    if($_POST['Submit']){
        if(($_POST['user_name']=="jakepps")&&($_POST['user_pass']=="123"))
        {
            $_SESSION['logged_user'] = $_POST['user_name'];
            header("Location: secretplace.php");
            exit;
        }
    }
?>
<html>
    <head>
        <title>Вводи пароль</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <p> Вы ввели неверный пароль! </p>
    </body>
</html>
