<?php $__env->startSection('content'); ?>
  <?php if( function_exists('get_field') && have_rows('blocks_landing') ): ?>
    <?php while( have_rows('blocks_landing') ): ?>
      <?php the_row(); ?>

      <?php if( get_row_layout() == 'landing_form' ): ?>
        <?php echo $__env->make('partials.flexible-content-landing.form-landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      <?php if( get_row_layout() == 'key_features' ): ?>
        <?php echo $__env->make('partials.flexible-content-landing.key-features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      <?php if( get_row_layout() == 'alternating_content' ): ?>
        <?php echo $__env->make('partials.flexible-content-landing.alternating-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      <?php if( get_row_layout() == 'cta_block' ): ?>
        <?php echo $__env->make('partials.flexible-content-landing.cta-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if( get_row_layout() == 'gallery_carousel' ): ?>
        <?php echo $__env->make('partials.flexible-content-landing.gallery-carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

    <?php endwhile; ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/template-landing.blade.php ENDPATH**/ ?>