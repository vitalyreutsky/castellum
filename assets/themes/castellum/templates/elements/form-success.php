<?php
$success_text_form = $args['success_text_form'];
$success_sign_in_text = $args['success_sign_in_text'];
$success_reset_password_text = $args['success_reset_password_text'];
?>
<?php if ($success_text_form) : ?>
   <div class="form__success">
      <?php echo $success_text_form; ?>
   </div>
<?php endif; ?>

<?php if ($success_reset_password_text) : ?>
   <div class="form__success form__success--reset">
      <p><?php echo $success_reset_password_text; ?></p><span></span>
   </div>
<?php endif; ?>

<?php if ($success_sign_in_text) : ?>
   <div class="form__success form__success--sign-in">
      <p><?php echo $success_sign_in_text; ?></p>
   </div>
<?php endif; ?>