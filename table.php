<?php
//Подключаемся к БД
include "connect.php";


//Запрос на удаление
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    mysqli_multi_query($db,
    "INSERT INTO applications_deleted (application_id, application_name, application_phone, application_date, removed_at) 
    SELECT application_id, application_name, application_phone, application_date, NOW() FROM applications WHERE application_id=$id; 
    DELETE FROM applications WHERE application_id=$id") 
    or die(mysqli_error($db));
    header("location:table.php");
    die();
}


//Берём данные
$select="SELECT * FROM applications";
$query=mysqli_query($db,$select);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Заявки</title>
</head>

<body>
    
    <header>

        <div class="header__menu position__middle">
            <div class="header__menu__logo"><a href="/">W I N  W I N S</a></div>
            
            <nav>
            <a class="header__menu__nav" href="password.php">ПАРОЛЬ</a> 
            <a class="header__menu__nav" href="removed.php">ИСТОРИЯ</a> 
                
            </nav>     
            <nav><a class="header__menu__nav" href="exit.php">ВЫХОД</a> </nav>                
        </div>
        
    </header>

    <div class="intro">

    <?php
    ini_set('display_errors', 0);
    if($_COOKIE['user'] == ''):
    ?>

    <main>
        <div class="margintop"></div>
        <div class="callme">
            <div class="callme__picture"><div class="position__middle"><img src="img/headerphone.png"></div></div>
            <div class="callme__yellow"><p class="position__middle span">ВЫ НЕ АВТОРИЗОВАНЫ!<br><a href='authorization.php'>авторизация</a></p></div>
            <div class="callme__picture" id="width_hide"><div class="position__middle"><img src="img/headerphone.png"></div></div>
        </div>
    </main>

    <?php else: ?>

    <main>
        <div class="margintop"></div>
        <div class="callme">
            <div class="callme__picture" id="width_hide"><div class="position__middle"><img src="img/headerphone.png"></div></div>
            
            <div class="callme__yellow">
                <div class="callme__yellow__table position__middle">
                    <div class="callme_yellow__table__content">
                        <table border="1" cellpadding="0">
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Телефон</th>
                                <th>Дата подачи</th>
                                <th>Удалить</th>
                            </tr>
                            <?php 
                                $num=mysqli_num_rows($query);
                                if ($num>0) {
                                    while ($result=mysqli_fetch_assoc($query)) {
                                        echo "
                                            <tr>
                                                <td>".$result['application_id']."</td>
                                                <td>".$result['application_name']."</td>
                                                <td>".$result['application_phone']."</td>
                                                <td>".$result['application_date']."</td>
                                                <td>
                                                    <a href='?del=".$result['application_id']."' >❎</a>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>                       
                        </table>
                    </div>
                </div>
            </div>

            <div class="callme__picture"><div class="position__middle"><img src="img/headerphone.png"></div></div>
        </div>
    </main>

    <?php endif; ?>

    </div>



    <style>
        /* Замена бэкграунта "На главную" */
        .intro {height: 100vh; background: url("img/table.jpg") center no-repeat; background-size: cover;}
    </style>
</body>

</html>