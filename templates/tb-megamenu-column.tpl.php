<div <?php print backdrop_attributes($attributes);?> class="<?php print implode(' ', $classes);?>">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
    <?php if($close_button): ?>
      <?php print $close_button;?>
    <?php endif;?>
    <?php print $tb_items;?>
  </div>
</div>
