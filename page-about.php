<?php
/*
Template Name: Стараница о нас
*/
?><?php get_header(); ?>
<main class="about-main">
  <?php include 'includes/hero.php'?>

  <?php include 'includes/block-phones.php'?>

  <section class="about">
    <h2 class="title-section"><?php the_field('zagolovok_o_nas'); ?></h2>

    <div class="service-taxi container">
      <p class="item-title"><?php the_field('podzagolovok_o_nas'); ?></p>
      <div class="wrapper-transfer">
        <div class="item transfer-img">
          <?php 

        $image = get_field('kartinka_o_nas');
        $size = 'full'; 

        if( $image ) {
          ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          <?php 
        }

        ?>
        </div>
        <div class="item transfer-text">
          <div class="about-text">
            <?php the_field('tekst_o_nas'); ?>
          </div>
        </div>
      </div>
    </div><!-- service-taxi -->


    <div class="transfer container">
      <p class="item-title"><?php the_field('podzagolovok_transfer'); ?></p>
      <div class="wrapper-transfer">
        <div class="item transfer-text">
          <div class="about-text">
            <?php the_field('tip_transfera'); ?>
            <ul class="list">
              <li>
                - встреча с табличкой,
              </li>
              <li>
                - помощь с багажом,
              </li>
              <li>
                - отслеживание прилета/отлета самолетов
              </li>
              <li>
                и многое другое.
              </li>
            </ul>
          </div>
        </div>
        <div class="item transfer-img">
          <?php 

$image = get_field('kartinka_transfera');
$size = 'full'; 

if( $image ) {
  ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          <?php 
}

?>
        </div>
      </div>
    </div><!-- transfer -->

  </section><!-- about -->

</main>
<?php get_footer(); ?>