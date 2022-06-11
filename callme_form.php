<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка отправлена!</title>
</head>

<body>
    <div class="intro"></div>
</body>
</html>


<?php

//задаём
$callme_name = $_POST['callme_name'];
$callme_phone = $_POST['callme_phone'];

//подключаемся к БД
include('connect.php');

//запрос
if (trim($_POST['callme_name'] OR $_POST['callme_phone']) === '') {   
    header('Refresh: 1; URL=http://diplomniysait2/');
} else {
$sql = "INSERT INTO `applications` (`application_id`, `application_name`, `application_phone`, `application_date`)
VALUES (NULL, '$callme_name', '$callme_phone', NOW())";
}


//уведомление
$result=mysqli_query($db, $sql);
echo '<script language="javascript">';
if($result='TRUE')
ob_start();
echo 'alert("Спасибо! Мы свяжемся с вами в течение дня.")';
header('Refresh: 0; URL=/#scroll-4');
ob_end_flush();

echo '</script>';

?>