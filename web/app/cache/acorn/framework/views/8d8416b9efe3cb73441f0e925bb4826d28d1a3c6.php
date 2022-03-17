<?php
  $title = get_sub_field('title');
?>

<section class="py-12 bg-gray-100">
  <div class="container mx-auto">
      <?php echo $title ? '<h2 class="text-center font-bold text-3xl lg:text-4xl mb-8">' . $title . '</h2>' : null; ?>

      <div class="flex flex-wrap justify-center">
        <?php
          $count = count(get_sub_field('features'))
        ?>
        <?php if(have_rows('features')): ?>
          <?php while(have_rows('features')): ?>
          <?php
            the_row();
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $subtitle= get_sub_field('subtitle');
          ?>

            <div class="w-1/2 md:w-1/3<?php echo e($count > 3 ? ' lg:w-1/4' : null); ?>">
              <div class="bg-white rounded-sm shadow-card p-4 lg:p-8 mx-4 mb-8 lg:mb-4 text-center">
                <?php if( $icon ): ?>
                  <span class="block mx-auto bg-primary rounded-full w-12 h-12 flex justify-center items-center">
                    <i class="fa fa-<?php echo e($icon); ?> text-white text-xl"></i>
                  </span>
                <?php endif; ?>
                <?php echo $title ? '<h3 class="font-bold mt-4 mb-4">' . $title . '</h3>' : null; ?>

                <?php echo $subtitle ? '<p class="text-gray-800 mb-0">' . $subtitle . '</p>' : null; ?>

              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/key-features.blade.php ENDPATH**/ ?>