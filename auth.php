<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>

<body>
    <div class="intro"></div> <style>.intro {height: 100vh; background: url("img/authorization.jpg") center no-repeat; background-size: cover;}</style>
</body>
</html>

<?php 
    $manager_login = $_POST['manager_login'];
    $manager_pass = $_POST['manager_pass'];

    // Подключаемся к БД
    include('connect_callme.php');


    // Выбор юзера в соответствии с введёнными данными
    $result = $db->query("SELECT * FROM `managers` WHERE `manager_login` = '$manager_login' AND `manager_pass` = '$manager_pass'");

    // Конвертация в ассоциативный массив
    $user = $result->fetch_assoc();
    // Проверка кол-ва элементов внутри массива, если не найдено, то выход
    echo '<script language="javascript">';
    if(empty($user) or count($user) == 0) {

        ob_start();
        echo 'alert("Неверная комбинация логина/пароля.")';
        header('Refresh: 0; URL=http://diplomniysait2/authorization.php');
        ob_end_flush();
        
        echo '</script>';
    }
    
    else {
    setcookie('user', $user['manager_login'], time() + 86400, "/");

    $db->close();
    
    header('Refresh: 0; URL=http://diplomniysait2/table.php');
}

    
?> 