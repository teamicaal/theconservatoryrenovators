<?php
  $images = get_sub_field('gallery_items');
?>

<section class="py-12 overflow-hidden">
  <div class="container mx-auto">
    <?php if($images): ?>
      <div class="slick-gallery-slider slick-overflow-visible">
        <?php
            $i = 0;
            foreach( $images as $image ):
        ?>
        <div>
          <div class="embed embed-4by3 m-4">
            <img class="lozad absolute object-cover w-full h-full inset-0" src="<?php echo e($image['sizes']['lozad']); ?>" data-src="<?php echo e($image['sizes']['medium']); ?>" alt="<?php echo e($image['alt']); ?>" itemprop="thumbnail">
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/gallery-slider.blade.php ENDPATH**/ ?>