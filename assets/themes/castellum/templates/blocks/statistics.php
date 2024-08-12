<?php
$title = get_field('title');
$text = get_field('text');
$button_text = get_field('button_text');
$items = get_field('items');
?>

<?php if (is_page_template('page-affiliates.php')) : ?>
   <section class="statistics count-block">
      <div class="container">
         <div class="statistics__inner">
            <?php if ($title) : ?>
               <h2 class="statistics__title main-title"><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="statistics__items">
               <?php foreach ($items as $key => $item) :
                  $numCount = preg_replace('/[^0-9]/', '', $item['count']);
                  $numOther = preg_replace("/[^A-Za-z+?]/", '', $item['count']);
               ?>
                  <div class="statistics__item <?php echo $numCount < 5 ? 'count--small' : 'count--big'; ?>">
                     <div class="statistics__item-count count" data-target="<?php echo $numCount; ?>"><span>0</span><?php echo $numOther; ?><p>+</p>
                     </div>
                     <p class="statistics__item-text"><?php echo $item['text']; ?></p>
                  </div>
               <?php endforeach; ?>
            </div>

            <?php if ($button_text) : ?>
               <a href="#contacts" class="statistics__btn btn btn-reset btn--purple navigation__card"><?php echo $button_text; ?></a>
            <?php endif; ?>
         </div>
      </div>
   </section>
<?php endif; ?>