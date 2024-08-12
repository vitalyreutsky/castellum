<?php
$error_image = get_field('error_image', 'options');
$error_btn_text = get_field('error_button_text', 'options');
$error_text = get_field('error_text', 'options');

get_header();
?>
<main class="main">
   <section class="error__page">
      <div class="container">
         <div class="error__page-inner">
            <?php
            if ($error_image) : ?>
               <div class="error__page-image">
                  <?php echo wp_get_attachment_image($error_image, 'full'); ?>
               </div>
            <?php endif; ?>

            <?php if ($error_btn_text) : ?>
               <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/' : '/'; ?>" class="error__page-btn btn btn-reset btn--purple"><?php echo $error_btn_text; ?></a>
            <?php endif; ?>

            <?php if ($error_text) : ?>
               <p class="error__page-text"><?php echo $error_text; ?></p>
            <?php endif; ?>
         </div>
      </div>
   </section>
</main>
<?php
get_footer(); ?>