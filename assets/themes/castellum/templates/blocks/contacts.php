 <?php
  $contacts_about_title = get_field('contacts_about_title');
  $contacts_about_text = get_field('contacts_about_text');
  $contacts_regions = get_field('contacts_regions');
  $contacts_form_title = get_field('contacts_form_title');

  $success_text_form = get_field('success_text_form', 'options');
  ?>

 <section class="contacts" id="contacts">
   <div class="container">
     <div class="contacts__inner">
       <div class="contacts__about">
         <h2 class="contacts__about-title main-title"><?php echo $contacts_about_title; ?></h2>

         <?php get_template_part('templates/elements/scroller'); ?>

         <p class="contacts__about-text">
           <?php echo $contacts_about_text; ?>
         </p>
       </div>

       <div class="form__items">
         <div class="contacts__form form">
           <h3 class="contacts__form-title form__title"><?php echo $contacts_form_title; ?></h3>

           <div class="form__wrapper">
             <form action="#" class="form__item" method="POST" enctype="multipart/form-data">
               <div class="form__inner">
                 <div class="form__input-item form__input-item--name">
                   <label class="form__label" for="name"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Vorname' : 'Name'; ?></label>
                   <input class="form__input input-reset form__input-name" type="text" name="Name" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Vorname' : 'Name'; ?>" id="name" maxlength="15" required />
                 </div>

                 <div class="form__input-item form__input-item--mail">
                   <label class="form__label" for="email"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?></label>
                   <input class="form__input input-reset form__input-mail" type="email" name="E-mail" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'E-Mail-Adresse' : 'E-mail'; ?>" id="email" required />
                 </div>

                 <div class="form__input-item form__input-item--message">
                   <label class="form__label" for="message"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Nachricht' : 'Message'; ?></label>
                   <textarea class="form__input input-reset" placeholder="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'Nachricht' : 'Message'; ?>" name="message" id="message"></textarea>
                 </div>
               </div>

               <button class="form__btn btn btn--purple btn-reset"><?php echo ICL_LANGUAGE_CODE == 'de' ? 'Senden' : 'Send'; ?></button>
             </form>

             <?php
              get_template_part('templates/elements/form-success', null, array('success_text_form' => $success_text_form));
              ?>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>