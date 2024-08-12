<?php
$success_sign_in_text = get_field('success_sign_in_text', 'options');
$sig_in_title = geT_field('log_in_title', 'options');
$sign_up_title = get_field('sign_up_title', 'options');
$sign_up_text = get_field('sign_up_text', 'options');
?>

<section class="sign-up">
  <?php get_template_part('templates/elements/rotate-bg'); ?>
  <div class="sign__elems">
    <div class="sign__elem"></div>
    <div class="sign__elem"></div>
  </div>
  <div class="container">
    <div class="form__items">
      <div class="sign-up__form form">
        <?php if ($sign_up_title) : ?>
          <h2 class="form__title sign-up__title"><?php echo $sign_up_title; ?></h2>
        <?php endif; ?>

        <div class="form__wrapper">
          <form action="#" class="form__item" method="POST" enctype="multipart/form-data">
            <div class="form__inner">
              <div class="form__input-item form__input-item--name">
                <label class="form__label" for="name"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Vorname' : 'Name'; ?></label>
                <input class="form__input input-reset form__input-name" type="text" name="Name" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Vorname' : 'Name'; ?>" id="name" maxlength="15" required />
              </div>

              <div class="form__input-item form__input-item--last-name">
                <label class="form__label" for="last-name"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Nachname' : 'Last Name'; ?></label>
                <input class="form__input input-reset form__input-last-name" type="text" name="Last Name" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Nachname' : 'Last Name'; ?>" id="last-name" maxlength="15" required />
              </div>

              <div class="form__input-item form__input-item--mail">
                <label class="form__label" for="email"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?></label>
                <input class="form__input input-reset form__input-mail" type="email" name="E-mail" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?>" id="email" required />
              </div>

              <div class="form__input-item form__input-item--site">
                <label class="form__label" for="site"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Ihre Produkt-Website' : 'Your product website'; ?></label>
                <input class="form__input input-reset form__input-site" type="text" name="Site" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Ihre Produkt-Website' : 'Your product website'; ?>" id="site" maxlength="15" required />
              </div>

              <div class="form__input-item form__input-item--city">
                <label class="form__label" for="city"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Stadt' : 'City'; ?></label>
                <input class="form__input input-reset form__input-city" type="text" name="City" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Stadt' : 'City'; ?>" id="city" maxlength="15" required />
              </div>

              <div class="form__input-item form__input-item--adress">
                <label class="form__label" for="adress"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Adresse' : 'Address'; ?></label>
                <input class="form__input input-reset form__input-adress" type="text" name="Adress" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Adresse' : 'Address'; ?>" id="adress" maxlength="15" required />
              </div>
            </div>

            <button class="form__btn btn btn--purple btn-reset"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Senden' : 'Send'; ?></button>

            <?php if ($sign_up_text) : ?>
              <div class="sign-up__text">
                <p><?php echo $sign_up_text; ?></p>

                <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/einloggen/' : '/sign-in/'; ?>"><?php echo $sig_in_title; ?></a>
              </div>
            <?php endif; ?>
          </form>

          <?php
          get_template_part('templates/elements/form-success', null, array('success_sign_in_text' => $success_sign_in_text));
          ?>
        </div>
      </div>
    </div>
  </div>
</section>