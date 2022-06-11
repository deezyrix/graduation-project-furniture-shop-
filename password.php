<?php
//Подключаемся к БД
include "connect.php";

//Запрос на удаление
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    mysqli_query($db,
    "DELETE FROM applications_deleted WHERE application_id=$id") 
    or die(mysqli_error($db));
    header("location:removed.php");
    die();
}

//Берём данные
$select="SELECT * FROM applications_deleted";
$query=mysqli_query($db,$select);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/password.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Изменить пароль</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    
    <header>

        <div class="header__menu position__middle">
            <div class="header__menu__logo"><a href="/">W I N  W I N S</a></div>
            
            <nav>
            <a class="header__menu__nav" href="table.php">ЗАЯВКИ</a> 
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
            <div class="callme__picture"><div class="position__middle"><img src="img/password.png"></div></div>
            <div class="callme__yellow"><p class="position__middle span">ВЫ НЕ АВТОРИЗОВАНЫ!<br><a href='authorization.php'>авторизация</a></p></div>
            <div class="callme__picture" id="width_hide"><div class="position__middle"><img src="img/password.png"></div></div>
        </div>
    </main>

    <?php else: ?>

    <main>
        <div class="margintop"></div>
        <div class="callme">
            <div class="callme__picture" id="width_hide"><div class="position__middle"><img src="img/password.png"></div></div>
            
            <div class="callme__yellow">
                <div class="callme__yellow__table">
                    <div class="callme_yellow__table__content">
                        
                        <form class="callme__yellow__inner position__middle" method="POST" action="password_change.php">
                        <div class="callme__yellow__inner__head"><div class="callme__yellow__inner__head__content heading"> ПАРОЛЬ <?=$_COOKIE['user']?> </div></div>
                        
                        <div class="callme__yellow__inner__forms">

                            
                            <div class="callme__yellow__inner__forms__form">
                                <input required type="password" name="pass_new" class="callme__yellow__inner__forms__form__input" placeholder="Новый пароль">
                            </div>

                            <div class="callme__yellow__inner__forms__form separator"><!--Разделитель между формами--></div>

                            <div class="callme__yellow__inner__forms__form">
                                <input required type="password" name="pass_new_repeat" class="callme__yellow__inner__forms__form__input" placeholder="Подтверждение пароля">
                            </div>

                                                        
                        </div>
                        <div class="callme__yellow__inner__text"><div class="callme__yellow__inner__text__content position__middle"></div></div>
                        <div class="callme__yellow__inner__send"><div class="callme__yellow__inner__send__content"><button type="submit" name="commit" class="callme__yellow__inner__send__content__button"><div class="callme__yellow__inner__send__content__button__text position__middle">Изменить</div></button></div></div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="callme__picture"><div class="position__middle"><img src="img/password.png"></div></div>
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