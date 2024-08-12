<?php
$site_logo_light = get_field('site_logo_light', 'options');
$footer_text = get_field('footer_text', 'options');
$footer_copyright = get_field('footer_copyright', 'options');

$footer_menu_title = get_field('footer_menu_title', 'options');
$locations = get_nav_menu_locations();
$nav_items = wp_get_nav_menu_items($locations['footer-menu']);

$footer_contacts = get_field('footer_contacts', 'options');
?>

<footer class="footer">
   <div class="container">
      <div class="footer__columns">
         <div class="footer__column footer__info">
            <?php if ($site_logo_light) : ?>
               <a href="<?php echo ICL_LANGUAGE_CODE == 'de' ? '/de/' : '/'; ?>" class="header__logo">
                  <?php echo wp_get_attachment_image($site_logo_light, 'full'); ?>
               </a>
            <?php endif; ?>

            <?php if ($footer_text) : ?>
               <p class="footer__text"><?php echo $footer_text; ?></p>
            <?php endif; ?>

            <?php if ($footer_copyright) : ?>
               <p class="footer__copyright"><?php echo $footer_copyright; ?></p>
            <?php endif; ?>
         </div>

         <div class="footer__column footer__menu">
            <?php if ($footer_menu_title) : ?>
               <h4 class="footer__column-title"><?php echo $footer_menu_title; ?></h4>
            <?php endif; ?>
            <nav class="footer__nav nav" title="nav-menu">
               <ul class="nav__list list-reset">
                  <?php
                  foreach ($nav_items as $ind => $nav_item) :
                     $page_id = $nav_item->object_id;
                  ?>
                     <li class="nav__item<?php echo $page_id == get_the_id() ? ' active' : null; ?>">
                        <a href="<?php echo $nav_item->url; ?>" class="nav__link"><?php echo $nav_item->title; ?></a>
                     </li>
                  <?php endforeach; ?>
               </ul>
            </nav>
         </div>

         <div class="footer__column footer__support">
            <?php if ($footer_contacts['title']) : ?>
               <h4 class="footer__column-title"><?php echo $footer_contacts['title']; ?></h4>
            <?php endif; ?>

            <?php if ($footer_contacts['mail']) : ?>
               <a href="mailto:<?php echo $footer_contacts['mail']; ?>" class="footer__support-mail"><?php echo $footer_contacts['mail']; ?></a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</footer>