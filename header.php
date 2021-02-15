<?php

  include 'includes/db.php';

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700;800&family=Open+Sans:wght@400;700&family=Roboto:wght@700&display=swap"
    rel="stylesheet">
  <title>РостовЮгТрансфер</title>
  <?php wp_head();?>
</head>

<body>
  <header class="header-page">
    <div class="container container_header">
      <a class="logo" href="/">
        <img class="logo__round" src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Логотип РостовЮг Трансфер">
      </a>
      <div class="logo__text">
        <a class="logo" href="/">
          <picture class="logo__text">
            <source srcset="<?php bloginfo('template_url') ?>/img/logo-mobile.svg" media="(max-width: 480px)">
            <source srcset="<?php bloginfo('template_url') ?>/img/logo-tablet.svg" media="(max-width: 1024px)">
            <img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="Логотип РостовЮг Трансфер">
          </picture>
        </a>
        <span class="logo__text-tiny">Междугороднее такси</span>
      </div>


      <div class="header-contact-menu">
        <div class="messengers messengers_header">
          <?php include 'includes/messengers.php'?>
        </div>
        <div class="phones phones_header">
          <?php include 'includes/phones.php'?>
        </div>
        <nav class="nav">
          <ul class="list main-menu">
            <li><a href="index.php">Главная</a></li>
            <li><a href="index.php#services">Услуги</a></li>
            <li><a href="index.php#routs">Направления</a></li>
            <li><a href="http://sveta-wp/бронирование/">Бронирование</a></li>
            <li><a href="http://sveta-wp/o-nas/">О нас</a></li>
            <li><a href="index.php#contact">Контакты</a></li>
          </ul>
          <button class="hamb" type="button">
            <span class="visually-hidden">открыть меню</span>
            <span class="hamb__line"></span>
          </button>
          <button class="close-menu" type="button">
            <span class="visually-hidden">закрыть меню</span>
          </button>
        </nav><!-- nav end -->
      </div><!-- header-contact-menu -->
    </div><!-- container -->
  </header>