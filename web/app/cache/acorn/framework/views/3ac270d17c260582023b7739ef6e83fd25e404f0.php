<?php $__env->startSection('content'); ?>

<?php
    $title = get_field('downloads_title', 'option');
    $body = get_field('downloads_body', 'option');
?>
<div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
  <h1 class="py-3">
    <?php echo e($title ? $title : 'Downloads'); ?>

  </h1>
  <div class=""><?php echo $body ? $body : null; ?></div>

</div>
<div class="bg-gray-100 pt-12 pb-8 md:pb-4">
  <div class="container mx-auto">
    <?php
    $args = array(
    'post_type'      => 'download',
    'posts_per_page' => -1
    );

    $query = new WP_Query($args);
    ?>
    <?php if( $query->have_posts() ): ?>
      <?php
      $categories = get_terms('download_category');
      ?>
      <div class="flex lg:flex-wrap scroll-x-proximity overflow-x-scroll lg:overflow-hidden -mx-4 md:mx-0 pl-4 md:pl-0 mb-4">
        <button type="button" data-filter="all" class="mixitup-control mixitup-control-active scroll-align-start mb-1 title-display px-4 py-8 focus:outline-none">All</button>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <button type="button" data-filter=".<?php echo e($category->slug); ?>" class="mixitup-control scroll-align-start mb-1 title-display px-4 py-8 focus:outline-none"><?php echo e($category->name); ?></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="flex flex-wrap md:-mx-4 mix-container">
        <?php while( $query->have_posts() ): ?>
        <?php
        $query->the_post();
        $thumbnail = get_field('thumbnail');
        $file = get_field('file');
        $file_id = $file['ID'];
        $file_size = filesize( get_attached_file( $file_id ) );
        $file_size = size_format($file_size, 2);
        $file_type = pathinfo( get_attached_file( $file_id ) );
        $file_type = $file_type['extension'];
        $categories = wp_get_object_terms( get_the_ID(), 'download_category' );
        ?>
          <?php if( $file ): ?>
            <div class="w-full md:w-1/2 lg:w-1/3 md:px-4 mb-4 md:mb-8 mix <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
              <div class="bg-white rounded">
                <div class="flex items-center">
                  <div style="width: 66px;">
                    <div class="embed-7by10 bg-gray-dark">
                      <img data-src="<?php if( $thumbnail ): ?> <?php echo e($thumbnail['url']); ?> <?php else: ?> <?= \Roots\asset('images/document-placeholder.jpg'); ?> <?php endif; ?>" class="lozad object-fit-cover" width="66" height="auto" />
                    </div>
                  </div>
                  <div class="p-4">
                    <p class="mb-2 text-gray-600 text-sm">
                      <?php echo e($file_size); ?>

                    </p>
                    <h4 class="text-black mb-0"><?php echo e(get_the_title()); ?> <span class="text-xs text-gray-600 uppercase"><?php echo e($file_type); ?></span></h4>
                  </div>
                </div>
                <div class="flex justify-between border-t border-gray-200">
                  <a href="<?php echo e($file['url']); ?>" target="_blank" class="inline-block px-4 py-3 text-sm text-gray-800 hover:text-gray-900">
                    Preview
                  </a>
                  <a href="<?php echo e($file['url']); ?>" download class="inline-block px-4 py-3 text-sm text-primary hover:text-primary-dark">
                    Download
                  </a>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p>
        Sorry, there are currently no download items available.
      </p>
    <?php endif; ?>
    <?php wp_reset_query() ?>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/archive-download.blade.php ENDPATH**/ ?>