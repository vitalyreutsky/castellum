<?php
$title = get_field('title');
$items = get_field('items');
?>

<section class="offers">
   <div class="container">
      <div class="offers__inner">
         <h2 class="offers__title main-title"><?php echo $title; ?></h2>

         <div class="offers__items">
            <?php foreach ($items as $key => $item) :
               $ind = $key + 1;
               $text = $item['text'];
            ?>
               <div class="offers__item">
                  <div class="offers__item-wrapper">
                     <span class="offers__item-label"><?php echo $ind; ?></span>
                     <div class="offers__item-text">
                        <?php echo $text; ?>
                     </div>
                     <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="offers__item-btn btn-reset btn btn--green"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Jetzt Beitreten' : 'Join Now'; ?></a>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </div>
</section>