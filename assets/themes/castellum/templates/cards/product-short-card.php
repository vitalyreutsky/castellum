<?php
$product_id = $args['product_id'];
$id = get_field('id', $product_id);
$title = get_the_title($product_id);
$rate = get_field('rate', $product_id);
$geo = get_field('geo', $product_id);
?>

<div class="product-card swiper-slide main-slider__slide">
   <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="product-card__link"></a>
   <div class="product-card__wrapper">
      <div class="product-card__top">
         <div class="product-card__logo">
            <?php
            echo wp_get_attachment_image(get_post_thumbnail_id($product_id), 'full', false);
            ?>
         </div>
      </div>

      <div class="product-card__body">
         <span class="product-card__id">Id <?php echo $id; ?></span>
         <h4 class="product-card__title"><?php echo $title; ?></h4>
         <div class="product-card__tabs">
            <p class="product-card__rate product-card__tab"><span>Rate</span> <?php echo $rate; ?></p>
            <p class="product-card__geo product-card__tab"><span>Geo</span> <?php echo $geo; ?></p>
         </div>
         <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="product-card__btn btn btn-reset btn--purple"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Angebot Sichern' : 'Grab Offer'; ?></a>
      </div>
   </div>
</div>