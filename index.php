<?php
/*
Template Name: Шаблон для главной
*/
?><?php get_header(); ?>

<main class="main">
  <?php include 'includes/hero.php'?>

  <?php include 'includes/block-phones.php'?>

  <section class="servises">
    <h2 class="title-section"><?php the_field('zagolovok_uslugi'); ?></h2>
    <div class="services__wrap container">
      <div class="wrapper-list-services">
        <div class="wrapper__item">
          <ul class="list">
            <?php
            if( have_rows('pervyj_spisok_uslugi') ):

                while ( have_rows('pervyj_spisok_uslugi') ) : the_row();
            ?>

            <li class="list__item"><?php the_sub_field('punkt_pervogo_spiska'); ?></li>
            <?php
            endwhile;

            else :

                       endif;
            ?>
          </ul>
        </div><!-- wrapper__item -->
        <div class="wrapper__item">
          <h2 class="title-section sub-title"><?php the_field('podzagolovok_vtorogo_spiska'); ?></h2>
          <ul class="list">

            <?php
            if( have_rows('vtoroj_spisok_uslugi') ):

                   while ( have_rows('vtoroj_spisok_uslugi') ) : the_row();
            ?>

            <li class="list__item"><?php the_sub_field('punkt_vtorogo_spiska_uslugi'); ?></li>
            <?php
            endwhile;

            else :

            endif;
            ?>
          </ul>
        </div><!-- wrapper__item -->
      </div> <!-- wrapper-list-services -->

      <div class="contacts__item">
        <p class="item-title"><?php the_field('podzagolovok_kontakty'); ?></p>
        <p class="about-text">Позвонить по телефонам:</p>
        <div class="contacts__phones">
          <?php include 'includes/phones.php'?>
        </div>

        <p class="about-text">Связаться через мессенджеры:</p>

        <div class="messengers">
          <?php include 'includes/messengers.php'?>
        </div>

        <p class="about-text">Написать в соц. сети:</p>

        <ul class="list list_social contacts__social">
          <?php include 'includes/social.php'?><?php include 'includes/messengers.php'?>
        </ul>

        <p class="item-title">Заполнить форму <a href="http://sveta-wp/бронирование/">бронирования</a></p>
      </div><!-- contacts__item -->
    </div><!-- container -->
  </section><!-- servises -->

  <div class="booking">
    <p class="booking__slogan">Забронируйте поездку прямо сейчас</p>
    <p class="booking__call">Позвоните нам <?php include 'includes/phones.php'?></p>
    <p class="booking__online">или забронируйте <a href="http://sveta-wp/бронирование/">онлайн</a> на сайте</p>
    <a class="order-btn" href="http://sveta-wp/бронирование/">Забронировать</a>
  </div><!-- booking -->

  <div class="rates">
    <div class="container">
      <h2 class="title-section"><?php the_field('zagolovok_tarify'); ?></h2>
      <ul class="list list_rates">

        <?php
              $args_news = array(
                'cat'=> 2,
                  'showposts' => 150,
                  'offset' => 0,
              );
              $recent = new WP_Query($args_news);
              while($recent->have_posts()) : $recent->the_post();
            ?>

        <li class="list__item">

          <div class="rates__content">
            <div class="rates__thumb">
              <h3 class="rates__title"><?php the_title() ?></h3>
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
            </div>
            <div class="rates__info">
              <?php the_content(); ?>
            </div>
          </div>

          <div class="booking__btn">
            <a class="booking__link" href="http://sveta-wp/бронирование/">Заказать</a>
          </div>
        </li><!-- list__item -->

        <?php endwhile; wp_reset_query(); ?>

      </ul>

    </div><!-- container -->
  </div><!-- rates -->

  <section class="features">
    <h2 class="title-section"><?php the_field('zagolovok_dopolnitelnye_preimushhestva'); ?></h2>
    <ul class="list list_features container">

      <?php
              $args_news = array(
                'cat'=> 4,
                  'showposts' => 150,
                  'offset' => 0,
              );
              $recent = new WP_Query($args_news);
              while($recent->have_posts()) : $recent->the_post();
            ?>

      <li class="list__item">
        <div class="features__icon">
          <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
        </div>
        <h3 class="features__title"><?php the_title() ?></h3>
        <div class="list__desc">
          <?php the_content(); ?>
        </div>
      </li><!-- list__item -->

      <?php endwhile; wp_reset_query(); ?>

    </ul>
  </section><!-- features -->

  <section class="routs" id="routs">
    <h2 class="title-section"><?php the_field('zagolovok_napravleniya'); ?></h2>
    <div class="container">
      <ul class="list list_routs">

        <?php
              $args_news = array(
                'cat'=> 3,
                  'showposts' => 150,
                  'offset' => 0,
              );
              $recent = new WP_Query($args_news);
              while($recent->have_posts()) : $recent->the_post();
            ?>
        <li class="list__item">
          <img class="routs__img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
          <h3 class="routs__title"><?php the_title() ?></h3>
          <a class="booking__link" href="http://sveta-wp/бронирование/?title=<?php the_title() ?>">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->


        <?php endwhile; wp_reset_query(); ?>


      </ul>
    </div>
  </section><!-- routs -->

</main>
<?php get_footer(); ?>