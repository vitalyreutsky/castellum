<?php
$regions_scroller = get_field('regions_scroller', 'options');
?>

<div class="scroller">
   <ul class="scroller__inner list-reset">
      <?php foreach ($regions_scroller as $region) : ?>
         <li class="scroller__item tooltip-wrapper">
            <?php echo wp_get_attachment_image($region['region_icon']); ?>

            <?php if ($region['region_name']) : ?>
               <p class="tooltip"><?php echo $region['region_name']; ?></p>
            <?php endif; ?>
         </li>
      <?php endforeach; ?>
   </ul>

   <ul class="scroller__inner list-reset" aria-hidden="true">
      <?php foreach ($regions_scroller as $region) : ?>
         <li class="scroller__item tooltip-wrapper">
            <?php echo wp_get_attachment_image($region['region_icon']); ?>

            <?php if ($region['region_name']) : ?>
               <p class="tooltip"><?php echo $region['region_name']; ?></p>
            <?php endif; ?>
         </li>
      <?php endforeach; ?>
   </ul>
</div>