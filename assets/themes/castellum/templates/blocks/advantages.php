<?php
$title = get_field('title');
$text = get_field('text');
$bg_image = get_field('bg_image');
$items = get_field('items');
?>

<?php if (is_page_template('page-advertisers.php')) : ?>
  <section class="advantages" style="background-image: url('<?php echo wp_get_attachment_url($bg_image); ?>');">
    <div class="container">
      <div class="advantages__inner">
        <div class="advantages__text">
          <?php if ($title) : ?>
            <h2 class="advantages__title main-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php if ($text) : ?>
            <p class="advantages__desc"><?php echo $text; ?></p>
          <?php endif; ?>
        </div>

        <div class="advantages__items">
          <?php foreach ($items as $item) : ?>
            <div class="advantages__item">
              <div class="advantages__item-icon">
                <?php echo wp_get_attachment_image($item['icon']); ?>
              </div>

              <p class="advantages__item-text"><?php echo $item['text']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>