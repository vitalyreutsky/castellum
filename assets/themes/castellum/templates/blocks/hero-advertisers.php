<?php
$title = get_field('hero_title');
$bg_image = get_field('hero_bg');
$bg_image_mobile = get_field('hero_bg_mobile');
$btn_text = get_field('hero_text_button');
$items = get_field('hero_items');
$subtext = get_field('hero_subtext');
?>

<?php if (is_page_template('page-advertisers.php')) : ?>
  <section class="hero hero__advertisers" style="--bg-desktop: url('<?php echo wp_get_attachment_url($bg_image); ?>'); --bg-mobile: url('<?php echo wp_get_attachment_url($bg_image_mobile); ?>');">
    <div class="container">
      <div class="hero__wrapper">
        <div class="hero__text">
          <?php if ($title) : ?>
            <h1 class="hero__title main-title"><?php echo $title; ?></h1>
          <?php endif; ?>

          <a href="#contacts" class="hero__btn btn btn-reset btn--green navigation__card"><?php echo $btn_text; ?></a>
        </div>

        <div class="hero__advertisers-body">
          <div class="hero__advertisers-items swiper">
            <div class="hero__advertisers-wrapper swiper-wrapper">
              <?php foreach ($items as $item) : ?>
                <div class="hero__advertisers-item swiper-slide" style="background-color: <?php echo $item['color']; ?>;">
                  <p><?php echo $item['title']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <?php if ($subtext) : ?>
            <p class="hero__subtext"><?php echo $subtext; ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>