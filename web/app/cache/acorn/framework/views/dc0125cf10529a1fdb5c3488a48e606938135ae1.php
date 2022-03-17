<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $background = get_field('background_login', 'option') ?>
  <?php echo $background ? '<link rel="preload" src="' . $background['sizes']['lozad'] . '" type="image/jpg" />' : null; ?>

  <body <?php body_class('bg-gray-100 relative') ?>>
    <?php do_action('get_header') ?>
    <?php if( $background ): ?>
      <img src="<?php echo e($background['sizes']['lozad']); ?>" data-src="<?php echo e($background['url']); ?>" alt="Login" class="lozad absolute w-full h-full inset-0 object-cover duration-1000" />
    <?php endif; ?>
    <main id="primary" class="main content-area main-wrappe overflow-y-scroll">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php
    do_action('get_footer');
    wp_footer();
    ?>
  </body>
</html><?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/layouts/login.blade.php ENDPATH**/ ?>