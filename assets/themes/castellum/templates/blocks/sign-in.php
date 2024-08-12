<?php
$sign_in_title = geT_field('log_in_title', 'options');
$sign_in_text = geT_field('log_in_text', 'options');
$sign_up_title = get_field('sign_up_title', 'options');

$success_text_form = get_field('success_text_form', 'options');
$success_sign_in_text = get_field('success_sign_in_text', 'options');
$success_reset_password_text = get_field('success_reset_password_text', 'options');

$reset_password_title = get_field('reset_password_title', 'options');
$reset_password_text = get_field('reset_password_text', 'options');
?>

<section class="sign-in">
  <?php get_template_part('templates/elements/rotate-bg'); ?>
  <div class="sign__elems"></div>
  <div class="container">
    <div class="form__items">
      <div class="sign-in__form form">
        <?php if ($sign_in_title) : ?>
          <h2 class="form__title sign-in__title"><?php echo $sign_in_title; ?></h2>
        <?php endif; ?>

        <div class="form__wrapper form__wrapper--main">
          <form action="#" class="form__item" method="POST" enctype="multipart/form-data">
            <div class="form__inner">
              <div class="form__input-item form__input-item--mail">
                <label class="form__label" for="email"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?></label>
                <input class="form__input input-reset form__input-mail" type="email" name="E-mail" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?>" id="email" required />
              </div>

              <div class="form__input-item form__input-item--password">
                <label class="form__label" for="password"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Passwort' : 'Password'; ?></label>
                <input class="form__input input-reset form__input-password" type="password" name="Password" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Passwort' : 'Password'; ?>" id="password" required />
              </div>
            </div>

            <button class="form__btn-reset-pass btn-reset"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Ihr Passwort zurücksetzen?' : 'Reset your password?'; ?></button>

            <button class="form__btn btn btn--purple btn-reset"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Senden' : 'Send'; ?></button>


            <?php if ($sign_in_text) : ?>
              <div class="form__sign-in-join">
                <p><?php echo $sign_in_text; ?></p>

                <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/anmelden/' : '/sign-up/'; ?>"><?php echo $sign_up_title; ?></a>
              </div>
            <?php endif; ?>
          </form>

          <?php
          get_template_part('templates/elements/form-success', null, array('success_sign_in_text' => $success_sign_in_text));
          ?>
        </div>
      </div>

      <?php get_template_part('templates/elements/form-reset-password', null, array(
        'reset_password_title' => $reset_password_title,
        'reset_password_text' => $reset_password_text,
        'success_reset_password_text' => $success_reset_password_text
      )); ?>
    </div>
  </div>
</section>