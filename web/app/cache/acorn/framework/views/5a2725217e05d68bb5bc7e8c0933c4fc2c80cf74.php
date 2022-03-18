<?php
$images = get_sub_field('images');

$captions = array();

foreach( $images as $image ) {
  $caption = strtolower($image['caption']);
  foreach (explode(', ',$caption) as $caption){
    if( !in_array($caption, $captions) && $caption != '' ) {
      array_push($captions, $caption);
    }
  }
}
?>

<section class="pt-4 pb-8">
  <div class="container mx-auto">
    <div class="flex lg:flex-wrap scroll-x-proximity overflow-x-scroll lg:overflow-hidden -mx-4 md:mx-0 pl-4 md:pl-0 mb-4">
      <button type="button" data-filter="all" class="mixitup-control mixitup-control-active scroll-align-start mb-4 title-display px-4 py-8 focus:outline-none">All</button>
      <?php $__currentLoopData = $captions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button type="button" data-filter=".<?php echo e(str_replace(',-', ' ', str_replace(' ', '-', $caption))); ?>" class="mixitup-control scroll-align-start mb-4 title-display px-4 py-8 focus:outline-none"><?php echo e($caption); ?></button>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="flex flex-wrap mix-container">
      <?php $i = 0; ?>
      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $i++; ?>
        <div class="w-1/2 lg:w-1/3 mb-1 px-8 gallery-image item fb-gallery mix <?php echo e(str_replace(' ', '-', strtolower($image['caption']))); ?>">
          <a href="<?php echo e($image['url']); ?>" title="<?php echo e($image['title']); ?> ?>" rel="gallery-page" class="embed embed-4by3" data-fancybox="gallery" data-fancybox-group itemprop="contentUrl" data-size="<?php echo e($image['width']); ?>x<?php echo e($image['height']); ?>" data-index="<?php echo e($i); ?>">
            <img data-src="<?php echo e($image['sizes']['4by3-md']); ?>" alt="<?php echo e($image['alt']); ?>" class="lozad object-cover-absolute" />
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/gallery-page.blade.php ENDPATH**/ ?>