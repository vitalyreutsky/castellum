 <?php
   $locations = get_nav_menu_locations();
   $nav_items = wp_get_nav_menu_items($locations['header-menu']);
   $switcher = wp_get_nav_menu_items($locations['switcher']);
   $auth = wp_get_nav_menu_items($locations['auth']);
   $site_logo_dark = get_field('site_logo_dark', 'options');
   $site_logo_light = get_field('site_logo_light', 'options');
   ?>

 <header class="header <?php echo !isset($_COOKIE["first-visit"]) ? 'header--first-visit' : null; ?>">
    <div class="container">
       <div class="header__wrapper">
          <?php if ($site_logo_dark) : ?>
             <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/' : '/'; ?>" class="header__logo header__logo--dark">
                <?php echo App\Base\SvgSupport::get_inline_svg_by_id($site_logo_dark); ?>
             </a>
          <?php endif; ?>

          <?php if ($site_logo_light) : ?>
             <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/' : '/'; ?>" class="header__logo header__logo--light">
                <?php echo App\Base\SvgSupport::get_inline_svg_by_id($site_logo_light); ?>
             </a>
          <?php endif; ?>

          <div class="header__nav" data-menu>
             <nav class="nav" title="nav-menu">
                <ul class="nav__list list-reset">
                   <?php
                     foreach ($nav_items as $ind => $nav_item) :
                        $page_id = $nav_item->object_id;
                        $first_item = $ind == 0 ? ' first-item' : null;
                     ?>
                      <li class="nav__item<?php echo $page_id == get_the_id() ? ' active' : null; ?><?php echo $first_item; ?>">
                         <a href="<?php echo $nav_item->url; ?>" class="nav__link"><?php echo $nav_item->title; ?></a>
                      </li>
                   <?php endforeach; ?>
                </ul>

                <div class="header__nav-mobile">
                   <div class="header__auth">
                      <?php
                        foreach ($auth as $auth_item) : ?>
                         <a href="<?php echo $auth_item->url; ?>" class="header__auth-btn btn btn-reset"><?php echo $auth_item->title; ?></a>
                      <?php endforeach; ?>
                   </div>
                </div>
             </nav>
          </div>

          <div class="header__switcher" data-da=".header__nav-mobile,1024,first">
             <?php get_template_part('templates/elements/switcher', null, array('switcher' => $switcher)); ?>
          </div>

          <div class="header__auth">
             <?php
               foreach ($auth as $auth_item) : ?>
                <a href="<?php echo $auth_item->url; ?>" class="header__auth-btn btn btn-reset"><?php echo $auth_item->title; ?></a>
             <?php endforeach; ?>
          </div>

          <button class="burger" aria-label="Open Menu" aria-expanded="false" data-burger>
             <span class="burger__line"></span>
          </button>
       </div>
    </div>
 </header>