<?php
$title = get_field('hero_title');
$items = get_field('hero_items');
$main_items = $items['main_items'];
$secondary_items = $items['secondary_items'];
?>

<section class="hero">
  <div class="container">
    <div class="hero__wrapper">
      <div class="hero__text">
        <?php if ($title) : ?>
          <h1 class="hero__title"><?php echo $title; ?></h1>
        <?php endif; ?>
      </div>

      <div class="hero__items hero__slider">
        <div class="hero__main-items main-items swiper">
          <div class="main-items__wrapper swiper-wrapper">
            <?php foreach ($main_items as $main_item) : ?>
              <div class="main-item swiper-slide">
                <?php echo $main_item['text']; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="hero__secondary-items secondary-items">
          <?php foreach ($secondary_items as $secondary_item) : ?>
            <div class="secondary-item">
              <?php echo $secondary_item['text']; ?>

              <a href="#contacts" class="secondary-item__btn navigation__card btn btn-reset"><?php echo $secondary_item['button_text']; ?></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="hero__lines">
    <div class="hero__lines-inner">
      <div class="line line--one">
        <img loading="lazy" src="/assets/themes/castellum/assets/app/img/line-one.svg" class="image" width="2110" height="666" alt="Line One">
      </div>

      <div class="line line--second">
        <img loading="lazy" src="/assets/themes/castellum/assets/app/img/line-second.svg" class="image" width="2110" height="666" alt="Line Second">
      </div>
    </div>
  </div>
</section>