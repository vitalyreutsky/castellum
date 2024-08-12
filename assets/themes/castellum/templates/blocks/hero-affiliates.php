<?php
$title = get_field('title');
$text = get_field('text');
$button_text = get_field('button_text');

$items = get_field('items');
?>

<?php if (is_page_template('page-affiliates.php')) : ?>
   <section class="hero__affiliates">
      <?php get_template_part('templates/elements/rotate-bg'); ?>
      <div class="container">
         <div class="hero__affiliates-inner">
            <div class="hero__affiliates-text">
               <div class="hero__affiliates-text-body">
                  <?php if ($title) : ?>
                     <h2 class="hero__affiliates-title main-title"><?php echo $title; ?></h2>
                  <?php endif; ?>

                  <?php if ($button_text) :  ?>
                     <a href="#contacts" class="hero__affiliates-btn btn btn--purple btn-reset navigation__card"><?php echo $button_text; ?></a>
                  <?php endif; ?>
               </div>
            </div>

            <div class="hero__affiliates-slider hero__slider">
               <div class="hero__affiliates-items main-item hero__main-items">
                  <div class="hero__affiliates-items-wrapper main-items__wrapper swiper-wrapper">
                     <?php foreach ($items as $item) : ?>
                        <div class="hero__affiliates-item main-item swiper-slide">
                           <p class="hero__affiliates-item-text"><?php echo $item['text']; ?></p>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>

               <?php if ($text) : ?>
                  <p class="hero__affiliates-desc"><?php echo $text; ?></p>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>