<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body <?php body_class() ?>>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main id="primary" class="main content-area main-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
    do_action('get_footer');
    wp_footer();
    $script_footer = get_field('script_footer', 'option');
    ?>
    <?php echo $script_footer ? $script_footer : null; ?>

  </body>
</html><?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/layouts/app.blade.php ENDPATH**/ ?>