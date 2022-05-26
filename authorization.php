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
    <title>Авторизация</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    
    <header>

        <div class="header__menu position__middle">
            <div class="header__menu__logo">W I N  W I N S</div>
            
            <nav>
                <a class="header__menu__nav" href="index.html">НА ГЛАВНУЮ</a>
            </nav>                     
        </div>
        
    </header>

    <div class="intro">

    <main>
        <div class="margintop"></div>
        
        
        <div class="callme">
            <div class="about__yellow">
                <div class="about__yellow__content position__middle heading">КАБИНЕТ МЕНЕДЖЕРА</div>
            </div>
            <div class="callme__yellow">

            <?php
            ini_set('display_errors', 0);
            if($_COOKIE['user'] == ''):
            ?>

                <form class="callme__yellow__inner position__middle" method="POST" action="auth.php">
                    <div class="callme__yellow__inner__head"><div class="callme__yellow__inner__head__content heading">АВТОРИЗАЦИЯ</div></div>
                    <div class="callme__yellow__inner__forms">
                        <div class="callme__yellow__inner__forms__form">
                            <input required type="text" name="manager_login" class="callme__yellow__inner__forms__form__input" placeholder="Логин">
                        </div>

                        <div class="callme__yellow__inner__forms__form separator"><!--Разделитель между формами--></div>

                        <div class="callme__yellow__inner__forms__form">
                            <input required type="password" name="manager_pass" class="callme__yellow__inner__forms__form__input" placeholder="Пароль">
                        </div>
                    </div>
                    <div class="callme__yellow__inner__text"><div class="callme__yellow__inner__text__content position__middle"></div></div>
                    <div class="callme__yellow__inner__send"><div class="callme__yellow__inner__send__content"><button type="submit" name="commit" class="callme__yellow__inner__send__content__button"><div class="callme__yellow__inner__send__content__button__text position__middle">Войти</div></button></div></div>
                </form>

            <?php else: ?>
                <div class="about__yellow__content position__middle heading"> <?=$_COOKIE['user']?>, ВЫ УЖЕ АВТОРИЗОВАНЫ!<br><a href='table.php'>перейти в меню управления</a> </div>
            <?php endif; ?>

            </div>
        </div>

        
    </main>

    </div>



    <style>
        /* Предотвращение хайда ссылки "На главную" */
        .header__menu__nav {display: block;}
        /* Замена бэкграунта "На главную" */
        .intro {height: 100vh; background: url("img/authorization.jpg") center no-repeat; background-size: cover;}
        /* Отступ */
        .margintop {height: 24.2vh;}
        /* Размер блока */
        .callme {}
        /* Перекраска левого блока */
        .about__yellow {background-color: #FFF;}
        /* Центрирование в блоке */
        .about__yellow__content {text-align: center;}
        /* Подчёркивание ссылки */
        .about__yellow__content a {font-style: italic;}
        .about__yellow__content a:hover {text-decoration: underline}
        
        @media screen and (max-aspect-ratio: 1/1){
            .about__yellow {display: none;}
            .callme__yellow {width: 100%;}
        }
    </style>
</body>

</html>