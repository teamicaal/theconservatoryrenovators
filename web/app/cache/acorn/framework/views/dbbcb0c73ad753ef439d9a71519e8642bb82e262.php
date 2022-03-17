<section id="alternating-content" class="pb-5 lg:pt-2 bg-gray-100">
  <div class="container mx-auto">
    <?php $i=0; ?>
    <?php if(have_rows('alternating_blocks')): ?>
      <?php while(have_rows('alternating_blocks')): ?>
      <?php
        the_row();
        $i++;
        $title = get_sub_field('title');
        $content= get_sub_field('content');
        $image = get_sub_field('image');
      ?>

        <div class="flex flex-wrap mb-3 <?php echo e($i % 2 == 0 ? 'lg:flex-row-reverse' : ''); ?> ">
          <div class="w-full lg:w-1/2 flex items-center content-center">
            <div class="lg:p-3">
              <h2 class="mb-1 font-bold text-2xl lg:text-3xl"><?php echo e($title); ?></h2>
              <?php echo $content; ?>

            </div>
          </div>
          <div class="w-full lg:w-1/2 relative">
            <div class="embed embed-4by3">
              <img class="lozad absolute object-cover w-full h-full inset-0" src="<?php echo e($image['sizes']['lozad']); ?>" data-src="<?php echo $image['url']; ?>" data-srcset="<?php echo wp_get_attachment_image_srcset($image['id']); ?>" alt="<?php echo $image['alt']; ?>">
            </div>
          </div>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content-landing/alternating-content.blade.php ENDPATH**/ ?>