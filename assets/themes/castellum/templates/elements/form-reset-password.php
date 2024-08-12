<?php
$reset_password_title = $args['reset_password_title'];
$reset_password_text = $args['reset_password_text'];

$success_text_form = $args['success_text_form'];
$success_reset_password_text = $args['success_reset_password_text'];
?>

<div class="form form__reset">
   <?php if ($reset_password_title) : ?>
      <h2 class="form__title form"><?php echo $reset_password_title; ?></h2>
   <?php endif; ?>

   <div class="form__wrapper form__reset-wrapper">
      <form action="#" class="form__item form__reset-pass" method="POST" enctype="multipart/form-data">
         <?php if ($reset_password_text) : ?>
            <p class="form__reset-text"><?php echo $reset_password_text; ?></p>
         <?php endif; ?>

         <div class="form__inner">
            <div class="form__input-item form__input-item--mail">
               <label class="form__label" for="email-pass"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?></label>
               <input class="form__input input-reset form__input-mail" type="email" name="E-mail" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?>" id="email-pass" required />
            </div>
         </div>

         <div class="form__reset-btns">
            <button class="form__btn btn btn--purple btn-reset"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Senden' : 'Send'; ?></button>
            <button class="form__btn btn btn--purple btn-reset form__btn-cancel"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Abbrechen' : 'Cancel'; ?></button>
         </div>
      </form>

      <?php
      get_template_part('templates/elements/form-success', null, array(
         'success_text_form' => $success_text_form,
         'success_reset_password_text' => $success_reset_password_text,
      ));
      ?>
   </div>
</div>