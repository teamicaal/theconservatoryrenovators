<?php
  $title = get_sub_field('title');
  $content = get_sub_field('content')
?>


<section class="bg-gray-100 py-12">
  <div class="container mx-auto">
    <div class="bg-white shadow-card rounded-sm text-center px-8 lg:px-12 py-12 w-full lg:w-5/6 mx-auto">
      <?php echo $title ? '<h2 class="mb-4 font-bold text-3xl">' . $title . '</h2>' : null; ?>

      <?php echo $content ? $content : null; ?>

      <?php
        $i = 0;
        $count = count(get_sub_field('buttons'));
      ?>
      <div class="mt-8">
        <?php if(have_rows('buttons')): ?>
          <?php while(have_rows('buttons')): ?>
          <?php
            the_row();
            $i++;
            $label = get_sub_field('label');
            $link = get_sub_field('link');
          ?>
            <?php if( $link ): ?>
              <a href="<?php echo e($link); ?>" class="btn inline-block w-full md:w-auto <?php echo e($count > 1 && $i == 1 ? 'bg-gray-100 hover:bg-gray-300 text-gray-900 mb-4 md:mb-0' : 'bg-primary hover:bg-primary-dark text-white md:mx-4'); ?>"><?php echo e($label); ?></a>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/cta-block.blade.php ENDPATH**/ ?>