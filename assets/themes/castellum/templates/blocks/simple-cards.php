<?php
$title = get_field('title');
$text = get_field('text');
$cards = get_field('cards');
?>

<?php if (is_page_template('page-affiliates.php')) : ?>
   <section class="simple__cards">
      <div class="container">
         <?php if ($title) : ?>
            <h2 class="simple__cards-title main-title"><?php echo $title; ?></h2>
         <?php endif; ?>

         <?php if ($text) : ?>
            <p class="simple__cards-text"><?php echo $text; ?></p>
         <?php endif; ?>


         <div class="simple__cards-items">
            <?php foreach ($cards as $card) : ?>
               <div class="simple__cards-card">
                  <h3 class="simple__cards-card-text"><?php echo $card['card']; ?></h3>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
<?php endif; ?>