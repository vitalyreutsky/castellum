<?php
$title = get_field('title');
$bg_logo = get_field('bg_logo');
$reviews = get_field('reviews');
?>

<?php if (is_page_template('page-advertisers.php')) : ?>
   <section class="reviews" style="--bg-logo: url('<?php echo wp_get_attachment_url($bg_logo); ?>');">
      <div class="container">
         <div class="reviews__inner">
            <div class="reviews__top main-slider__top">
               <h2 class="reviews__title main-title"><?php echo $title; ?></h2>

               <div class="main-slider__btns">
                  <div class="main-nav-item main-nav-item--next"></div>
                  <div class="main-nav-item main-nav-item--prev"></div>
               </div>
            </div>

            <div class="reviews__slider main-slider">
               <div class="reviews__items main-slider__items swiper">
                  <div class="reviews__items-wrapper swiper-wrapper">
                     <?php foreach ($reviews as $review) {
                        get_template_part('templates/cards/review-card', null, array('review' => $review));
                     }
                     ?>
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
<?php endif; ?>