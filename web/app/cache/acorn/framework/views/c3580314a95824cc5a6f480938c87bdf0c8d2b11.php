<?php
  $title = get_sub_field('title');
  $content = get_sub_field('content')
?>


<section id="ctas-card" class="bg-gray-100 pb-8">
  <div class="container mx-auto">
    <div class="bg-white shadow-card rounded-lg text-center px-2 lg:px-3 py-3 w-full lg:w-5/6 mx-auto">
      <h2 class="mb-1 font-bold text-3xl"><?php echo e($title); ?></h2>
      <p class="text-gray-800"><?php echo e($content); ?></p>
      <?php $i = 0; ?>
      <div class="mt-2">
        <?php if(have_rows('buttons')): ?>
          <?php while(have_rows('buttons')): ?>
          <?php
            the_row();
            $i++;
            $label = get_sub_field('button_label');
            $link = get_sub_field('button_link');
          ?>

            <?php if($i == 2): ?>
              <a href="<?php echo e($link); ?>" class="btn inline-block bg-gray-900 border-none p-1"><?php echo e($label); ?></a>
            <?php else: ?>
              <a href="<?php echo e($link); ?>" class="btn inline-block bg-primary border-none p-1"><?php echo e($label); ?></a>
            <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content-landing/cta-block.blade.php ENDPATH**/ ?>