<?php 
    $pass_new = $_POST['pass_new'];
    $pass_new_repeat = $_POST['pass_new_repeat'];

    $login = $_COOKIE['user'];

    // Подключаемся к БД
    include('connect.php');

    if ($pass_new == $pass_new_repeat) {

    $sql = "UPDATE managers SET manager_pass='$pass_new' WHERE manager_login='$login'";

    if (mysqli_query($db, $sql)) {
        echo '<script language="javascript">';

        ob_start();
        echo 'alert("Пароль успешно изменён.")';
        header('Refresh: 0; URL=http://diplomniysait2/password.php');
        ob_end_flush();
        
        echo '</script>';
        mysqli_close($db);
    } else {
        echo "Ошибка: " . mysqli_error($db);
    }
    
    

    }

    else {
        echo '<script language="javascript">';

        ob_start();
        echo 'alert("Пароли не совпадают.")';
        header('Refresh: 0; URL=http://diplomniysait2/password.php');
        ob_end_flush();
        
        echo '</script>';
    }

    ?> 

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Смена пароля</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<style>
    .intro {height: 100vh; background: url("img/table.jpg") center no-repeat; background-size: cover;}
</style>

<body>

    <div class="intro"> </div>
</body>
</html>