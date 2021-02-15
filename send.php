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

mail ( $email_admin , $subject , $message );
  