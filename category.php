<?php

$db = new PDO("mysql:host=localhost;dbname=goods","root","");
//$db = new PDO("mysql:host=localhost;dbname=deezyrix_goods","deezyrix_goods","Mebel2022");
// $cat=$_GET['cat'];
$info = [];

$cat=$_GET['cat'];
// если мы можем в переменную query сохранить такой-то запрос,
// то берём информацию, через pdo предотвращаем повторение, ассоциативный массив
if ($query = $db->query("SELECT * FROM `$cat`")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
        print_r($db->errorInfo());
    }

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Продукция</title>
    
</head>

<body>
    
    <header>

        <div class="header__menu position__middle">
            <div class="header__menu__logo"><a href="/">W I N  W I N S</a></div>
            
            <nav><a class="header__menu__nav" href="/index.html#scroll-2">НАЗАД</a></nav>                
        </div>
        
    </header>

    <div class="intro">
   
    <main>
        <!-- <div class="margintop"></div> -->

        <div class="goods">
            <div class="goods__wrap">
                <!-- <div class="goods__wrap__inner"> -->
                    <!-- <div class="production__goods__content__head heading"><p class="position__middle">ПРОДУКЦИЯ</p></div> -->
                    <!-- <div class="goods__wrap__inner__content"> -->
                        <!-- foreach (способ перебора массивов), берём инфу, через двоеточие повторяем код -->
                        <?php foreach ($info as $result): ?>

                        <div class="goods__card">
                            <div class="goods__card__image"><img src="img/furn/<?php echo $result['product_img']?>" alt="jpg"></div>
                            <div class="goods__card__text2"><?php echo $result['product_name']?></div>
                            <div class="goods__card__text3"><?php echo $result['product_desc']?></div>
                            <div class="goods__card__text4">Цена: <?php echo $result['product_price']?>₽</div>
                        </div>
                                                
                        <?php endforeach; ?>
                                           
                    <!-- </div> -->
                <!-- </div> -->
            </div>          
        </div>

    </main>

    <style>
        .intro { height: 100%; background: url("img/intere-dizayn-belyy-kreslo.jpg") center no-repeat; background-size: cover; }
    </style>
</body>

</html>