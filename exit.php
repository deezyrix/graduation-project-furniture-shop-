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
    <title>Заявки</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <div class="intro"></div>
    <style>
        .intro {height: 100vh; background: url("img/table.jpg") center no-repeat; background-size: cover;}  
    </style>
</body>
</html>


<?php
    ini_set('display_errors', 0);

    setcookie('user', $user['manager_login'], time() + 3600, "/");

    header('Refresh: 0; URL=/');
?>