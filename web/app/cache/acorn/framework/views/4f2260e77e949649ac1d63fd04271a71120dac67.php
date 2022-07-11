<?php
$banner_type = get_sub_field('banner_type');
$images = get_sub_field('images');
$images_webp = get_sub_field('images_webp');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
?>
<?php if( get_sub_field('title_h1') ): ?>
  <?php $h = 'h1' ?>
<?php else: ?>
  <?php $h = 'h2' ?>
<?php endif; ?>

<section class="section_page-banner">
  <?php if( $banner_type ): ?>
  <div class="full-width sm:flex sm:items-center relative lg:!min-h-[80vh] sm:!min-h-[60vh] !min-h-[40vh]">
    <?php if( $images ): ?>
      <div class="sm:absolute relative sm:top-0 sm:left-0 h-[40vh] w-full sm:h-full z-10">
        <?php if( count($images) > 1 ): ?>
        <div class="slick-banner">
        <?php endif; ?>
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="relative <?php echo $key != 0 ? 'hidden' : null; ?> lg:!min-h-[80vh] sm:!min-h-[60vh] !min-h-[40vh]">
            <picture data-iesrc="<?php echo $image['url']; ?>">
              <?php if( $images_webp ): ?>
                <?php
                  $img_webp = get_bloginfo('url') . str_replace(array('jpg', 'jpeg', 'png'), 'webp', $image['url']);
                  $img_webp_sm = str_replace('.webp', '-sm.webp', $img_webp);
                ?>
                <source media="(max-width: 767px)" srcset="<?php echo $img_webp_sm; ?>" type="image/webp" />
                <source media="(min-width: 768px)" srcset="<?php echo $img_webp; ?>" type="image/webp" />
                <?php endif; ?>
                <source media="(min-width: 768px)" srcset="<?php echo wp_get_attachment_image_srcset($image['id']); ?>" type="image/jpg" />
              <img src="<?php echo e($image['sizes']['lozad']); ?>" data-src="<?php echo e($image['sizes']['4by3-xl']); ?>" class="lozad object-fit-cover w-full h-full inset-0" alt="<?php echo $image['alt']; ?>" width="100%" height="100%">
            </picture>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if( count($images) > 1 ): ?> 
        </div>
        <div class="absolute sm:hidden z-20 bottom-0 right-0 flex">
          <button type="button" class="slick-p block w-12 h-12 text-center rounded-l-sm bg-white border-r border-grey-lighter text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-left align-middle"></i></button>
          <button type="button" class="slick-n block w-12 h-12 text-center rounded-tr-sm bg-white text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-right align-middle"></i></button>
        </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="container mx-auto border-b sm:border-none border-primary">
      <div class="sm:w-[650px] w-full bg-white p-8 sm:p-12 relative z-20 mx-auto lg:ml-0 lg:mr-auto">
        <?php echo $subtitle ? '<h4 class="title-display title-display-left text-primary mb-4 ">' . $subtitle . '</h4>' : null; ?>

        <?php echo $title ? '<' . $h . ' class="text-3xl md:text-4xl mb-4">' . $title . '</' . $h . '>' : null; ?>

        <?php echo $paragraph ? '<p class="mb-1 text-sm sm:block hidden">' . $paragraph . '</p>' : null; ?>

        <?php if( have_rows('buttons') ): ?>
          <div class="flex flex-wrap gap-4">
            <?php $i = 0; ?>
            <?php while( have_rows('buttons') ): ?>
              <?php
              the_row();
              $i++;
              $link = get_sub_field('link');
              $label = get_sub_field('label');
              $anchor = get_sub_field('anchor');
              ?>
              <a href="<?php echo e($link); ?>" class="btn block md:inline-block <?php echo e($i == 1 ? null : 'primary'); ?><?php echo e($anchor ? ' btn-scroll' : null); ?>"><?php echo $label; ?></a>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php if( count($images) > 1 ): ?>
    <div class="hidden sm:flex absolute z-20 bottom-0 right-0">
      <button type="button" class="slick-p block w-12 h-12 text-center rounded-l-sm bg-white border-r border-grey-lighter text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-left align-middle"></i></button>
      <button type="button" class="slick-n block w-12 h-12 text-center rounded-tr-sm bg-white text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-right align-middle"></i></button>
    </div>
    <?php endif; ?>
  </div>
  <?php else: ?>
  <div class="bg-gray-100 lg:px-12 lg:flex flex-row justify-end items-center">
    <?php if( $images ): ?>
    <div class="lg:w-3/5 order-1 md:order-2 relative z-0 banner-height">
      <?php echo count($images) > 1 ? '<div class="slick-banner relative z-10">' : null; ?>

      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
          <div class="relative banner-height <?php echo $key != 0 ? 'hidden' : null; ?>">
            <picture data-iesrc="<?php echo $image['url']; ?>">
              <?php if( $images_webp ): ?>
                <?php
                  $img_webp = get_bloginfo('url') . str_replace(array('jpg', 'jpeg', 'png'), 'webp', $image['url']);
                  $img_webp_sm = str_replace('.webp', '-sm.webp', $img_webp);
                ?>
                <source media="(max-width: 767px)" srcset="<?php echo $img_webp_sm; ?>" type="image/webp" />
                <source media="(min-width: 768px)" srcset="<?php echo $img_webp; ?>" type="image/webp" />
                <?php endif; ?>
                <source media="(min-width: 768px)" srcset="<?php echo wp_get_attachment_image_srcset($image['id']); ?>" type="image/jpg" />
              <img src="<?php echo e($image['sizes']['lozad']); ?>" class="lozad object-fit-cover w-full h-full inset-0" alt="<?php echo $image['alt']; ?>" width="100%" height="100%">
            </picture>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php if( count($images) > 1 ): ?>
      </div>
      <div class="absolute z-20 bottom-0 right-0">
        <button type="button" class="slick-p w-12 h-12 text-center rounded-l-sm bg-white border-r border-gray-200 text-gray-600 hover:bg-gray-100 hover:text-primary focus:bg-gray-200 focus:text-black focus:outline-none transition inline-block">
          <i class="fa fa-caret-left align-middle"></i>
        </button><button type="button" class="slick-n w-12 h-12 text-center rounded-tr-sm bg-white text-gray-600 hover:bg-gray-100 hover:text-primary focus:bg-gray-200 focus:text-black focus:outline-none transition inline-block">
          <i class="fa fa-caret-right align-middle"></i>
        </button>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="content mx-auto px-8 py-12 lg:pl-0 lg:py-0 xl-pr-16 xxl-pr-24 order-2 lg:order-1">
      <?php echo $subtitle ? '<h4 class="title-display title-display-left text-primary mb-4 lg:mb-8">' . $subtitle . '</h4>' : null; ?>

      <?php echo $title ? '<' . $h . ' class="text-3xl md:text-4xl lg:text-5xl mb-1 lg:mb-8">' . $title . '</' . $h . '>' : null; ?>

      <?php echo $paragraph ? '<p class="mb-1">' . $paragraph . '</p>' : null; ?>

      <?php if( have_rows('buttons') ): ?>
        <div class="flex flex-wrap gap-4">
          <?php $i = 0; ?>
          <?php while( have_rows('buttons') ): ?>
            <?php
            the_row();
            $i++;
            $link = get_sub_field('link');
            $label = get_sub_field('label');
            $anchor = get_sub_field('anchor');
            ?>
            <a href="<?php echo e($link); ?>" class="btn block md:inline-block <?php echo e($i == 1 ? null : 'primary'); ?><?php echo e($anchor ? ' btn-scroll' : null); ?>"><?php echo $label; ?></a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</section>
<?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/banner.blade.php ENDPATH**/ ?>