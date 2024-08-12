        <?php
         $switcher = $args['switcher'];
         ?>
        <div class="switcher <?php echo ICL_LANGUAGE_CODE == 'de' ? 'switcher--de' : 'switcher--en' ?>">
           <a href="/" class="switcher__main-link"></a>
           <p class="switcher__name<?php echo ICL_LANGUAGE_CODE == 'en' ? ' active' : null; ?>"><?php echo substr($switcher[0]->lang, 0, 2); ?></p>
           <ul class="switcher__list list-reset">
              <?php foreach ($switcher as $key => $item) :
               ?>
                 <li class="switcher__item <?php echo implode(' ', $item->classes); ?>">
                    <a href="<?php echo $item->url; ?>" class="switcher__link"></a>
                 </li>
              <?php endforeach; ?>
           </ul>
           <p class="switcher__name<?php echo ICL_LANGUAGE_CODE == 'de' ? ' active' : null; ?>"><?php echo substr($switcher[1]->lang, 0, 2); ?></p>
        </div>