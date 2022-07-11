<?php if( !is_page( array(13, 825) ) ): ?>
<?php if(have_rows('ctas', 'option')): ?>
<div class="fixed-side  text-white">
  <?php while(have_rows('ctas' ,'option')): ?>
  <?php
  the_row();
    $icon = get_sub_field('icon');
    $label = get_sub_field('label');
    $link = get_sub_field('link');
  ?>
  <a class="one-cta" href="<?php echo $link; ?>">
    <div class="one-side bg-cta">
      <div class="side-content">
        <div class="icon-box">
          <i class="fas fa-<?php echo $icon; ?>"></i>
        </div>
        <p><?php echo $label; ?></p>
      </div>
    </div>
  </a>
  <?php endwhile; ?>
</div>
<?php endif; ?>
<?php endif; ?><?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/components/sticky_cta.blade.php ENDPATH**/ ?>