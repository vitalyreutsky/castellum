<?php
$title_image = get_field('title_image');
$iphone_image = get_field('iphone_image');
$about_items = get_field('about_us_items');
$info_items = get_field('info_items');
?>

<section class="mission">
  <div class="container">
    <div class="mission__inner">
      <div class="mission__about">
        <div class="mission__about-inner" style="background-image: url(<?php echo wp_get_attachment_url($iphone_image) ?>);">
          <?php if ($title_image) : ?>
            <div class="mission__about-title-image">
              <?php echo wp_get_attachment_image($title_image, 'full'); ?>
            </div>
          <?php endif; ?>

          <div class="mission__about-us about-us">
            <div class="about-us__items swiper">
              <div class="about-us__wrapper swiper-wrapper">
                <?php foreach ($about_items as $about_item) :
                  $color_title = $about_item['item']['color_title'];
                  $title = $about_item['item']['title'];
                  $text = $about_item['item']['text'];
                ?>
                  <div class="about-us__item swiper-slide">
                    <h3 class="about-us__title" style="--color-title: <?php echo $color_title; ?>;"><?php echo $title; ?></h3>
                    <p class="about-us__text"><?php echo $text; ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="about-us__btns">
            </div>
          </div>
        </div>
      </div>

      <div class="mission__info">
        <div class="mission__info-items">
          <?php foreach ($info_items as $key => $info_item) :
            $activeItem = $key == 0 ? 'active' : null;
            $title = $info_item['title'];
            $subtitle = $info_item['subtitle'];
            $text = $info_item['text'];
          ?>
            <div class="mission__info-item accordion__item <?php echo $activeItem; ?>">
              <div class="mission__info-head accordion__head <?php echo $activeItem; ?>">
                <p class="mission__info-title"><?php echo $title; ?></p>
                <p class="mission__info-subtitle"><?php echo $subtitle; ?></p>
              </div>
              <div class="mission__info-body">
                <p class="mission__info-text"><?php echo $text; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>