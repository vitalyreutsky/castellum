<?php
$title = get_field('title');
$text = get_field('text');
$button_text = get_field('button_text');
$items = get_field('items');
?>

<?php if (is_page_template('page-rewards.php')) : ?>
   <section class="traffic">
      <div class="container">
         <div class="traffic__inner">
            <div class="traffic__items">
               <?php foreach ($items as $item) : ?>
                  <div class="traffic__item tooltip-wrapper">
                     <?php echo wp_get_attachment_image($item['icon'], 'full'); ?>

                     <?php if ($item['text']) : ?>
                        <p class="tooltip"><?php echo $item['text']; ?></p>
                     <?php endif; ?>
                  </div>
               <?php endforeach; ?>
            </div>

            <div class="traffic__text">
               <?php if ($title) : ?>
                  <h2 class="traffic__title main-title"><?php echo $title; ?></h2>
               <?php endif; ?>
               <?php if ($text) : ?>
                  <p class="traffic__desc"><?php echo $text; ?></p>
               <?php endif; ?>
               <?php if ($button_text) : ?>
                  <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="traffic__btn btn btn-reset btn--bg btn--bg-green" data-da=".traffic__inner,1024,first"><?php echo $button_text; ?></a>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>