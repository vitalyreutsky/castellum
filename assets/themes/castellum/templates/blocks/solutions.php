<?php
$subtitle = get_field('subtitle');
$title = get_field('title');
$text = get_field('text');
$items = get_field('items');
?>

<?php if (is_page_template('page-advertisers.php')) : ?>
   <section class="solutions">
      <div class="container">
         <div class="solutions__body">
            <p class="solutions__subtitle"><?php echo $subtitle; ?></p>
            <h2 class="solutions__title main-title"><?php echo $title; ?></h2>
            <p class="solutions__text"><?php echo $text; ?></p>

            <div class="solutions__items<?php echo ICL_LANGUAGE_CODE == 'de' ? ' solutions__items--de' : null; ?>">
               <?php foreach ($items as $item) : ?>
                  <div class="solutions__item">
                     <div class="solutions__item-els">
                        <div class="solutions__item-el"></div>
                        <div class="solutions__item-subel"></div>
                     </div>
                     <div class="solutions__item-inner">
                        <?php if ($item['title']) : ?>
                           <h5 class="solutions__item-title"><?php echo $item['title']; ?></h5>
                        <?php endif; ?>

                        <?php if ($item['text']) : ?>
                           <p class="solutions__item-text"><?php echo $item['text']; ?></p>
                        <?php endif; ?>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>