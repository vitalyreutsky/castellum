<?php
$title = get_field('title');
$products_short_list = get_field('products_short_list');
$use_blur = get_field('use_blur');
?>

<section class="products__list<?php echo $use_blur ? ' products__list--blur' : null; ?>">
   <div class="container">
      <div class="products__list-inner">
         <div class="products__list-top main-slider__top">
            <?php if ($title) : ?>
               <h2 class="products__list-title main-title"><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="main-slider__btns">
               <div class="main-nav-item main-nav-item--next"></div>
               <div class="main-nav-item main-nav-item--prev"></div>
            </div>
         </div>

         <div class="products__list-slider main-slider">
            <div class="products__list-items products__cards main-slider__items">
               <div class="products__cards-wrapper swiper-wrapper">
                  <?php foreach ($products_short_list as $key => $product_id) {
                     get_template_part('templates/cards/product-short-card', null, array('product_id' => $product_id));
                  } ?>
               </div>
            </div>

            <div class="main-slider__btns">
               <div class="main-nav-item main-nav-item--next"></div>
               <div class="main-nav-item main-nav-item--prev"></div>
            </div>
         </div>
      </div>
   </div>
</section>