<?php
$bg_text_big = get_field('bg_text_big', 'options');
$bg_text_middle = get_field('bg_text_middle', 'options');
$bg_text_small = get_field('bg_text_small', 'options');
?>

<div class="rotate__bg">
   <div class="rotate__bg-img rotate__bg-img--big">
      <?php echo wp_get_attachment_image($bg_text_big, 'full'); ?>
   </div>

   <div class="rotate__bg-img rotate__bg-img--middle">
      <?php echo wp_get_attachment_image($bg_text_middle, 'full'); ?>
   </div>


   <div class="rotate__bg-img rotate__bg-img--small">
      <?php echo wp_get_attachment_image($bg_text_small, 'full'); ?>
   </div>
</div>