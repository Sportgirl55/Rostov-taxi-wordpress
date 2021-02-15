<?php
/*
Template Name: Страница - бронирование
*/
?><?php include 'header.php'?>
<main class="main page">
  <?php include 'includes/hero.php'?>

  <?php include 'includes/block-phones.php'?>
  <div class="container_form">
    <span class="title-page form_title">Заполните форму</span>
    <form class="form form-booking" action='./send.php' method='post'>

      <div class="field">
        <label class="label" for="name">
          <span>Ваше имя*</span>
          <input class="input" id="name" type="text" name="name" placeholder="Ваше имя*" required>
        </label>
      </div>

      <div class="field">
        <label class="label" for="phone">
          <span>Телефон*</span>
          <input class="input" id="phone" type="tel" name="phone" placeholder="Телефон*" required>
        </label>
      </div>

      <div class="field">
        <label class="label" for="email">
          <span>Ваш email</span>
          <input class="input" id="email" type="email" name="email" placeholder="Ваш email">
        </label>
      </div>

      <div class="field">
        <label class="label" for="info">
          <span>Дополнительная информация</span>
          <textarea class="input" id="info" name="info" placeholder="Дополнительная информация"></textarea>
        </label>
      </div>

      <div class="field field-group">
        <label class="label" for="where">
          <span>Откуда*</span>
          <input class="input" id="where" type="text" name="where" placeholder="Откуда*" required>
        </label>

        <label class="label" for="somewhere">
          <span>Куда*</span>
          <input class="input" id="somewhere" type="text" name="somewhere" placeholder="Куда*"
            value="<?php echo $_GET['title']; ?>" required>
        </label>
      </div>

      <div class="field field-group">
        <label class="label" for="date">
          <span>Дата*</span>
          <input class="input" id="date" type="date" name="date" placeholder="Дата*" required>
        </label>

        <label class="label" for="time">
          <span>Время*</span>
          <input class="input" id="time" type="time" name="time" placeholder="Время*" required>
        </label>
      </div>

      <div class="field field-group">
        <label class="label" for="passengers">
          <span>Количество пассажиров*</span>
          <input class="input" id="passengers" type="number" name="passengers" placeholder="Количество пассажиров*"
            required>
        </label>

        <label class="label" for="children">
          <span>Количество детей*</span>
          <input class="input" id="children" type="number" name="children" placeholder="Количество детей*" required>
        </label>
      </div>

      <div class="radio">
        <div class="radio-group">
          <span>Крупногабаритный багаж*</span>

          <label class="label" for="luggage1">
            <input class="radio-button" id="luggage1" type="radio" name="luggage" value="Да" required>
            Да
          </label>

          <label class="label" for="luggage2">
            <input class="radio-button" id="luggage2" type="radio" name="luggage" value="Нет" required>
            Нет
          </label>

        </div>

        <div class="radio-group">
          <span>Оборудование для перевозки детей*</span>

          <label class="label" for="equipment1">
            <input class="radio-button" id="equipment1" type="checkbox" name="cradle" value="Люлька">
            Люлька
          </label>

          <label class="label" for="equipment2">
            <input class="radio-button" id="equipment2" type="checkbox" name="armchair" value="Кресло">
            Кресло
          </label>

          <label class="label" for="equipment3">
            <input class="radio-button" id="equipment3" type="checkbox" name="belt" value="Адаптер для ремня">
            Адаптер для ремня
          </label>

          <label class="label" for="equipment4">
            <input class="radio-button" id="equipment4" type="checkbox" name="No" value="Нет">
            Нет (12+)
          </label>

        </div>
      </div>

      <div class="field">
        <label class="label" for="rate">
          <span>Категория транспорта*</span>
          <select name="rate" id="rate">
            <option value="Стандарт">Стандарт</option>
            <option value="Комфорт">Комфорт</option>
            <option value="Бизнес">Бизнес</option>
          </select>
        </label>
      </div>

      <div class="radio">
        <div class="radio-group">
          <span>Квитанция о поездке*</span>

          <label class="label" for="receipt1">
            <input class="radio-button" id="receipt1" type="radio" name="receipt" value="Нет" required>
            Нет
          </label>

          <label class="label" for="receipt2">
            <input class="radio-button" id="receipt2" type="radio" name="receipt" value="Да" required>
            Нужен БСО
          </label>
        </div>

        <div class="radio-group">
          <span>Встреча с табличкой*</span>

          <label class="label" for="tablet1">
            <input class="radio-button" id="tablet1" type="radio" name="tablet" value="Да" required> 
            Да
          </label>

          <label class="label" for="tablet2">
            <input class="radio-button" id="tablet2" type="radio" name="tablet" value="Нет" required>
            Нет
          </label>
        </div>

        <div class="radio-group">
          <span>Молчаливый водитель</span>

          <label class="label" for="driver1">
            <input class="radio-button" id="driver1" type="radio" name="driver" value="Да">
            Да
          </label>

          <label class="label" for="driver2">
            <input class="radio-button" id="driver2" type="radio" name="driver" value="Нет">
            Нет
          </label>
        </div>
      </div>

      <button class="order-btn" type="submit">Забронировать</button>
    </form>
  </div>
</main>
<?php include 'footer.php'?>