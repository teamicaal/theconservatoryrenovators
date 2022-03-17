<?php
  $images = get_sub_field('gallery_items');
  $size = 'full';
?>

<section id="slider-gallery" class="my-4">
  <div class="container mx-auto">
    <?php if($images): ?>
      <div class="slick-gallery-landing overflow-hidden">
        <?php
            $i = 0;
            foreach( $images as $image ):
            $attachment_id = $image['ID'];
            $alt = $image['alt'];
        ?>
        <div>
          <div class="embed embed-4by3 m-1">
            <img class="lozad absolute object-cover w-full h-full inset-0" src="<?php echo e($image['sizes']['lozad']); ?>" data-src="<?php echo e($image['sizes']['medium']); ?>" alt="<?php echo e($alt); ?>" itemprop="thumbnail">
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content-landing/gallery-carousel.blade.php ENDPATH**/ ?>