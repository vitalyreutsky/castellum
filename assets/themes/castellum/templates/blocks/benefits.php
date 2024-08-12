<?php
$title = get_field('title');
$text = get_field('text');
$buttont_text = get_field('button_text');
$items = get_field('items');
?>

<?php if (is_page_template('page-rewards.php')) : ?>
  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <div class="benefits__info">
          <?php if ($title) : ?>
            <h2 class="benefits__title main-title"><?php echo $title; ?></h2>
          <?php endif; ?>
          <?php if ($text) : ?>
            <p class="benefits__text"><?php echo $text; ?></p>
          <?php endif; ?>
          <?php if ($buttont_text) : ?>
            <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="benefits__btn btn btn-reset btn--bg btn--bg-light" data-da=".benefits__inner,1024,last"><?php echo $buttont_text; ?></a>
          <?php endif; ?>
        </div>

        <div class="benefits__cards">
          <?php foreach ($items as $item) : ?>
            <div class="benefits__card">
              <?php echo $item['text']; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>