<?php
$title = get_field('title');
$steps_items = get_field('steps_items');
$subblock_title = get_field('subblock_title');
$subblock_items = get_field('subblock_items');
$bg_image = get_field('bg_image');
$button_text = get_field('button_text');
?>

<?php if (is_page_template('page-advertisers.php')) : ?>
  <section class="steps count-block">
    <div class="container">
      <div class="steps__inner" style="background-image: url('<?php echo wp_get_attachment_url($bg_image); ?>');">
        <?php if ($title) : ?>
          <h2 class="steps__title main-title"><?php echo $title; ?></h2>
        <?php endif; ?>

        <div class="steps__items">
          <?php foreach ($steps_items as $key => $step_item) : ?>
            <div class="steps__item">
              <span class="steps__item-num"><?php echo $key + 1; ?></span>
              <p class="steps__item-text"><?php echo $step_item['text']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="steps__subblock">
          <div class="steps__subblock-inner">
            <?php if ($subblock_title) : ?>
              <h3 class="steps__subblock-title"><?php echo $subblock_title; ?></h3>
            <?php endif; ?>

            <div class="steps__subitems">
              <?php foreach ($subblock_items as $key => $sub_item) :
                $numCount = preg_replace('/[^0-9]/', '', $sub_item['count']);
                $numOther = preg_replace("/[^A-Za-z+?]/", '', $sub_item['count']);
              ?>
                <div class="steps__subitem <?php echo $numCount < 5 ? 'count--small' : 'count--big'; ?>">
                  <div class="steps__subitem-count count" data-target="<?php echo $numCount; ?>"><span>0</span><?php echo $numOther; ?></div>
                  <p class="steps__subitem-text"><?php echo $sub_item['text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <a href="#contacts" class="steps__btn btn btn--green btn-reset navigation__card"><?php echo $button_text; ?></a>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>