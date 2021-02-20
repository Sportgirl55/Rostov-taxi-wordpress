<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$info = $_POST['info'];
$where = $_POST['where'];
$somewhere = $_POST['somewhere'];
$date = $_POST['date'];
$time = $_POST['time'];
$passengers = $_POST['passengers'];
$children = $_POST['children'];
$luggage = $_POST['luggage'];
$cradle = $_POST['cradle'];
$armchair = $_POST['armchair'];
$belt = $_POST['belt'];
$No = $_POST['No'];
$rate = $_POST['rate'];           
$receipt = $_POST['receipt'];
$tablet = $_POST['tablet']; 
$driver = $_POST['driver']; 
        
$subject = 'Заказ такси';
$email_admin = 'test@test.ru';
        
$message = 
'Ваше имя* ' . $name . "\n" . 
'Телефон* ' . $phone . "\n" . 
'Ваш email ' . $email . "\n" .
'Дополнительная информация ' . $info . "\n" . 
'Откуда* ' . $where . "\n" .
'Куда* ' . $somewhere . "\n" .
'Дата* ' . $date . "\n" .
'Время* ' . $time . "\n" .
'Количество пассажиров* ' . $passengers . "\n" .
'Количество детей* ' . $children . "\n" .
'Крупногабаритный багаж* ' . $luggage . "\n" .
'Оборудование для перевозки детей* : ' . "\n" .
' - ' . $cradle . "\n" .
' - ' . $armchair . "\n" .
' - ' . $belt . "\n" .
' - ' . $No . "\n" .
'Категория транспорта* ' . $rate . "\n" .
'Квитанция о поездке* ' . $receipt . "\n" .
'Встреча с табличкой* ' . $tablet . "\n" .
'Молчаливый водитель ' . $driver . "\n";

if ($_POST['check'] != 'stopSpam') exit('Spam decected');

mail ( $email_admin , $subject , $message );
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Форма бронирования</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700;800&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="container page__send">
    <?php
  if (mail) {
  ?>
    <p class="send__success send__message">Ваша заявка успешно отправлена!</p>
    <a href="/">Вернуться на главную</a>
    <?php } else {
    ?>
    <p class="send__no-success send__message">Ваша заявка не отправлена!Попробуйте ещё раз</p>
    <a href="/">Вернуться на главную</a>
    <?php } ?>
  </div>

</body>

</html>