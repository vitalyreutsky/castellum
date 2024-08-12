<?php
$title = get_field('title');
$text_items = get_field('text_items');
$btn_text = get_field('button_text');
$iphone_image = get_field('image');
$reviews = get_field('reviews');
?>

<?php if (is_page_template('page-rewards.php')) : ?>
  <section class="hero__rewards">
    <div class="container">
      <div class="hero__rewards-container">
        <div class="hero__rewards-inner">
          <div class="hero__rewards-info">
            <div class="hero__rewards-info-inner">
              <?php if ($title) : ?>
                <h1 class="hero__rewards-title"><?php echo $title; ?></h1>
              <?php endif; ?>

              <div class="hero__rewards-items swiper">
                <div class="hero__rewards-items-wrapper swiper-wrapper">
                  <?php foreach ($text_items as $key => $item) : ?>
                    <div class="hero__rewards-item swiper-slide">
                      <p class="hero__rewards-item-text"><?php echo $item['text']; ?></p>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <?php if ($btn_text) : ?>
                <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="hero__rewards-btn btn btn-reset"><?php echo $btn_text; ?></a>
              <?php endif; ?>
            </div>

            <div class="hero__rewards-progress progress">
              <div class="progress__bar"></div>
            </div>
          </div>

          <?php if ($iphone_image) : ?>
            <div class="hero__rewards-image">
              <?php echo wp_get_attachment_image($iphone_image, 'full'); ?>
            </div>
          <?php endif; ?>

          <div class="hero__rewards-reviews hero__reviews">
            <div class="hero__reviews-items">
              <?php foreach ($reviews as $review) :
                $logo = $review['logo'];
                $text = $review['text'];
                $name = $review['name'];
              ?>
                <div class="hero__reviews-item">
                  <div class="hero__reviews-item-logo">
                    <?php echo wp_get_attachment_image($logo, 'full'); ?>
                  </div>

                  <div class="hero__reviews-item-body">
                    <p class="hero__reviews-item-text"><?php echo $text; ?></p>
                    <div class="hero__reviews-item-bottom">
                      <span class="hero__reviews-item-name"><?php echo $name; ?></span>
                      <span class="hero__reviews-item-date">1:31 pm</span>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
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

  <div class="rewards__scroller">
    <?php get_template_part('templates/elements/scroller'); ?>
  </div>
<?php endif; ?>