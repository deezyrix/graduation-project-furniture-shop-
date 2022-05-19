<?php
//Подключаемся к БД
include "connect_callme.php";


//Запрос на удаление
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $select="DELETE FROM applications WHERE application_id=$id";
    //echo $select;
    mysqli_query($db, $select) or die( mysqli_error($db) );
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Заявки</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    
    <header>

        <div class="header__menu position__middle">
            <div class="header__menu__logo">W I S M E B E L</div>
            
            <nav>
                <a class="header__menu__nav" href="exit.php">ВЫХОД</a> 
            </nav>                     
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
                                <th>Дата</th>
                                <th>Действие</th>
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
                                                    <a href='?del=".$result['application_id']."' >❌</a>
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
        /* Стилизация таблицы */
        .callme__yellow {position: relative;}
        .callme__yellow__table {width: 95%; max-height: 95%; background-color: #FFF; overflow-y: auto; border: 1px solid;}
        .callme_yellow__table__content {width:100%; height: auto; background: #FFF; align-items: center;}
        table {width: 100%; border-collapse: collapse;}
        table td {padding: 10px; text-align: center;}

        /* Предотвращение хайда ссылки "На главную" */
        .header__menu__nav {display: block;}
        /* Замена бэкграунта "На главную" */
        .intro {height: 100vh; background: url("img/table.jpg") center no-repeat; background-size: cover;}
        .margintop {height: 24.2vh;}
        /* Боковые блоки */
        .callme__picture {position: relative; width: 16.66%; background: #FFF; background-size: cover;}
        /* Центральный блок */
        .callme__yellow {width: 66.67%;}
        /* Боковые картинки */
        .callme__picture img {max-width: 90%; margin-left: 5%;height: auto;}
        /* Ссылка на страницу авторизации */
        .span {background-color: #F7E967; font-size: 50px; text-align: center; font-weight: 600;}
        .span a {font-style: italic;}
        .span a:hover {text-decoration: underline;}
        @media screen and (max-aspect-ratio: 1/1){
            .callme__picture {width: 25%;}
            .callme__yellow {width: 75%;}
        }
    </style>
</body>

</html>