<?php
$image_1 = get_sub_field('image_1');
$alt_1 = get_sub_field('alt_1');
$image_2 = get_sub_field('image_2');
$alt_2 = get_sub_field('alt_2');
$image_3 = get_sub_field('image_3');
$alt_3 = get_sub_field('alt_3');
$image_4 = get_sub_field('image_4');
$alt_4 = get_sub_field('alt_4');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
?>

<section class="py-16">
  <div class="container mx-auto">
    <div class="flex flex-wrap items-center">
      <?php if( $image_1 ): ?>
      <div class="w-full px-8 md:w-1/2 md:pl-0 md:pr-4 lg:pr-8 xl:pr-16 mb-8 md:mb-0">
        <div class="flex flex-wrap -mx-4">
          <div class="w-1/2 px-2 lg:px-4">
            <div class="embed embed-3by4 mb-4 lg:mb-8 rounded-sm overflow-hidden">
              <img data-src="<?php echo e($image_1['sizes']['4by3-md']); ?>" alt="<?php echo e($alt_1 ? $alt_1 : $image_1['alt']); ?>" src="<?php echo e($image_1['sizes']['lozad']); ?>" class="lozad object-cover-absolute" />
            </div>
            <?php if( $image_2 ): ?>
              <div class="embed embed-4by3 rounded-sm overflow-hidden">
                <img data-src="<?php echo e($image_2['sizes']['4by3-md']); ?>" alt="<?php echo e($alt_2 ? $alt_2 : $image_2['alt']); ?>" src="<?php echo e($image_2['sizes']['lozad']); ?>" class="lozad object-cover-absolute" />
              </div>
            <?php endif; ?>
          </div>
          <?php if( $image_3 ): ?>
            <div class="w-1/2 px-2 lg:px-4 mt-4 lg:mt-8">
              <div class="embed embed-4by3 mb-4 lg:mb-8 rounded-sm overflow-hidden">
                <img data-src="<?php echo e($image_3['sizes']['4by3-md']); ?>" alt="<?php echo e($alt_3 ? $alt_3 : $image_3['alt']); ?>" src="<?php echo e($image_3['sizes']['lozad']); ?>" class="lozad object-cover-absolute" />
              </div>
              <?php if( $image_4 ): ?>
                <div class="embed embed-3by4 rounded-sm overflow-hidden">
                  <img data-src="<?php echo e($image_4['sizes']['4by3-md']); ?>" alt="<?php echo e($alt_4 ? $alt_4 : $image_4['alt']); ?>" src="<?php echo e($image_4['sizes']['lozad']); ?>" class="lozad object-cover-absolute" />
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="w-full md:w-1/2 pl-4 md-px-4 lg:px-8 xl:px-16 lg:w-1/2">
        <?php echo $subtitle ? '<h4 class="title-display title-display-left text-primary mb-4">' . $subtitle . '</h4>' : null; ?>

        <?php echo $title ? '<h2 class="text-4xl mb-8">' . $title . '</h2>' : null; ?>

        <?php echo $paragraph ? $paragraph : null; ?>

        <?php if( have_rows('buttons') ): ?>
          <div class="block mt-4 lg:mt-8">
            <?php $i = 0; ?>
            <?php while( have_rows('buttons') ): ?>
              <?php
              the_row();
              $i++;
              $link = get_sub_field('link');
              $label = get_sub_field('label');
              $anchor = get_sub_field('anchor');
              ?>
              <a href="<?php echo e($link); ?>" class="btn <?php echo e($i == 1 ? 'bg-primary text-white hover:bg-primary-dark text-center block md:inline-block' : 'bg-white text-black hover:bg-gray-200 text-center block md:inline-block mb-4 md:mr-4 md:mb-0'); ?><?php echo e($anchor ? ' btn-scroll' : null); ?>"><?php echo $label; ?></a>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/gallery-text.blade.php ENDPATH**/ ?>