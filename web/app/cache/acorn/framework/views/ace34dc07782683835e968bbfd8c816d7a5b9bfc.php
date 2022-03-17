<?php
$title = get_sub_field('title');
$custom_class = get_sub_field('custom_class');
?>

<section class="pt-12 pb-8 overflow-hidden<?php echo $custom_class ? ' ' . $custom_class : null; ?>">
  <div class="container mx-auto">
    <?php echo $title ? '<h3 class="title-display text-gray-800 uppercase tracking-widest text-center mb-8">' . $title . '</h3>' : null; ?>

  </div>
  <div class="container mx-auto relative px-0 lg:px-4">
    <?php if( have_rows('accreditations') ): ?>
      <?php while( have_rows('accreditations') ): ?>
        <?php
        the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        $alt = get_sub_field('image_alt');
        ?>
        <div class="w-40 lg:w-1/6 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
          <<?php echo $link ? 'a href="' . $link . '" target="_blank"' : 'div'; ?> class="block bg-white rounded-sm border border-gray-200 p-4 lg:p-6 text-center">
            <img data-src="<?php echo e($image['url']); ?>" src="<?php echo e($image['sizes']['thumbnail']); ?>" width="96" height="96" alt="<?php echo e($alt ? $alt : $image['alt']); ?>" class="lozad noblur w-full h-auto mx-auto" style="max-width: 6rem;" />
          </<?php echo $link ? 'a' : 'div'; ?>>
        </div>
      <?php endwhile; ?>
    <?php elseif( have_rows('accreditations', 'option') ): ?>
      <div class="flex lg:flex-wrap lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-1">
        <?php while( have_rows('accreditations', 'option') ): ?>
          <?php
          the_row();
          $logo = get_sub_field('logo');
          $link = get_sub_field('link');
          ?>
          <div class="w-40 lg:w-1/6 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <<?php echo $link ? 'a href="' . $link . '" target="_blank"' : 'div'; ?> class="block bg-white rounded-sm border border-gray-200 p-4 lg:p-6 text-center">
              <img data-src="<?php echo e($logo['url']); ?>" src="<?php echo e($logo['sizes']['thumbnail']); ?>" width="96" height="96" alt="<?php echo e($logo['alt'] ? $logo['alt'] : null); ?>" class="lozad noblur w-full h-auto mx-auto" style="max-width: 6rem;" />
            </<?php echo $link ? 'a' : 'div'; ?>>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/accreditations-row.blade.php ENDPATH**/ ?>