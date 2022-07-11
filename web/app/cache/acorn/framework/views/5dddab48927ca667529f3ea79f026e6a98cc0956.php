<?php
$content = get_sub_field('content');
$custom_class = get_sub_field('custom_class');
$container_sm = get_sub_field('container_sm');
?>
<div class="container mx-auto<?php echo $custom_class ? ' ' . $custom_class : null; ?>">
  <div class="w-full<?php echo e($container_sm ? ' md:w-5/6 lg:w-3/4 mx-auto' : null); ?>">
    <?php echo $content; ?>

  </div>
</div>
<?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/text-block.blade.php ENDPATH**/ ?>