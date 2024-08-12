<?php
$product_id = $args['product_id'];
$method_of_obtaining = get_field('method_of_obtaining', $product_id);
$title = get_the_title($product_id);
$rate = get_field('rate', $product_id);
$desc = get_field('description', $product_id);
?>

<div class="product-card swiper-slide main-slider__slide">
   <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="product-card__link"></a>
   <div class="product-card__wrapper">
      <div class="product-card__top">
         <p class="product-card__hide-text"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Für den Zugang anmelden' : 'Sign Up to Access'; ?></p>

         <div class="product-card__logo">
            <?php
            echo wp_get_attachment_image(get_post_thumbnail_id($product_id), 'full', false);
            ?>
         </div>
      </div>

      <div class="product-card__body">
         <span class="product-card__method"><?php echo $method_of_obtaining; ?></span>
         <h4 class="product-card__title"><?php echo $title; ?></h4>
         <div class="product-card__text">
            <p class="product-card__rate"><?php echo $rate; ?></p>
            <p class="product-card__desc"><?php echo $desc; ?></p>
         </div>
         <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>" class="product-card__btn btn btn-reset btn--purple"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Angebot Sichern' : 'Grab Offer'; ?></a>
      </div>
   </div>
</div>