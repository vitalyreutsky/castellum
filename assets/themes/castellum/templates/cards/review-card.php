<?php
$review = $args['review'];
$rev_logo = $review['logo'];
$rev_title = $review['title'];
$rev_subtitle = $review['subtitle'];
$rev_text = $review['text'];
?>

<div class="reviews__item swiper-slide main-slider__slide">
   <div class="reviews__item-top">
      <?php if ($rev_logo) : ?>
         <div class="reviews__item-logo">
            <?php echo wp_get_attachment_image($rev_logo, 'full'); ?>
         </div>
      <?php endif; ?>

      <?php if ($rev_title || $rev_subtitle) : ?>
         <div class="reviews__item-info">
            <?php if ($rev_title) : ?>
               <h3 class="reviews__item-title"><?php echo $rev_title; ?></h3>
            <?php endif; ?>
            <?php if ($rev_subtitle) : ?>
               <p class="reviews__item-subtitle"><?php echo $rev_subtitle; ?></p>
            <?php endif; ?>
         </div>
      <?php endif; ?>
   </div>

   <?php if ($rev_text) : ?>
      <p class="reviews__item-text"><?php echo $rev_text; ?></p>
   <?php endif; ?>
</div>