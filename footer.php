
  <footer class="footer-page">
    <div class="container">
      <h2 class="title-section" id="contact">Контакты</h2>
      <h3 class="phones-title">Наши телефоны</h3>
      <div class="phones phohes_footer">
        <?php include 'includes/phones.php'?>
      </div>
      <p class="email-footer">
        Эл. почта: <a href="mailto:taxiizrostova@gmail.com">taxiizrostova@gmail.com</a>
      </p>
      <h3 class="social-title">Мы в соц. сетях</h3>
      <ul class="list list_social footer__social">

        <?php include 'includes/social.php'?>

      </ul>
      <ul class="list footer__menu">
        
        <li><a href="/">Главная</a></li>
        <li><a href="/#services">Услуги</a></li>
        <li><a href="/#routs">Направления</a></li>
        <li><a href="http://sveta-wp/bronirovanie/">Бронирование</a></li>
        <li><a href="http://sveta-wp/o-nas/">О нас</a></li>
        <li><a href="/#contact">Контакты</a></li>
      </ul>
      <div class="copyright">
        <div class="law">
          <a href="#">Пользовательское соглашение</a>
          <a href="#">Оферта</a>
        </div>
        <span>&copy; <?php echo date('Y') ?> РостовЮгТрансфер</span>
        <a class="author" href="#">Design by S. Polyanskay@</a>
      </div><!-- copyright -->
    </div><!-- container -->
    <button class="btn-up" type="button"><span class="visually-hidden">Наверх</span></button>
  </footer>  

  <?php wp_footer();?>
  
  </footer>
</body>

</html>