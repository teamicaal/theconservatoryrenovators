<?php $__env->startSection('content'); ?>
<div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
  <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <p class="mb-0 font-medium">The latest news from <?php echo e(get_bloginfo('name')); ?></p>
  <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if (! $query->have_posts()) : ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php wp_reset_postdata(); endif; ?>
</div>
  <div class="container mx-auto">
    <div class="flex flex-wrap md:-mx-4">
      <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
        <article class="w-full lg:w-1/2 p-4">
          <div class="w-full flex flex-col sm:flex-row py-6 relative h-full">
            <div class="w-full sm:w-2/3 pr-4 py-4 h-full items-start flex-col flex">
              <div class="relative">
                <a href="<?= get_permalink(); ?>"><h2 class="text-2xl"><?= get_the_title(); ?></h2></a>
              </div>
              <div class="text-sm"><?php the_excerpt(); ?></div>
              <a href="<?= get_permalink(); ?>" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
            </div>
            <div class="w-full sm:w-1/3 md:mr-4">
              <div class="embed embed-4by3 rounded-sm overflow-hidden">
                <img data-src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'lozad'); ?>" width="100%" height="auto" alt="<?= get_the_title(); ?>" class="lozad object-cover w-full h-full absolute">
              </div>
            </div>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/home.blade.php ENDPATH**/ ?>