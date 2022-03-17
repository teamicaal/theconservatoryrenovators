<?php
$background_style = get_sub_field('background_style');
$background_image = get_sub_field('background_image');
$background_colour = get_sub_field('background_colour');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image = get_sub_field('image');
$paragraph = get_sub_field('paragraph');
$title_cta = get_sub_field('title_cta');
$subtitle_cta = get_sub_field('subtitle_cta');
$paragraph_cta = get_sub_field('paragraph_cta');
$button_label = get_sub_field('button_label');
$button_link = get_sub_field('button_link');
?>
<section class="py-4">
    <?php if( $background_style == 'colour' && $background_colour ): ?>
    <div class="mx-auto bg-<?php echo e($background_colour); ?>">
    <?php elseif( $background_style == 'image' && $background_image ): ?>
    
    <div class="py-12 w-full mx-auto relative">
        <div class="w-full h-full absolute top-0 left-0 mb-2">
            <div class="embed h-full mb-2 w-full -z-1">
                <img data-src="<?php echo e($background_image['sizes']['4by3-md']); ?>" alt="<?php echo e($background_image['alt']); ?>" src="<?php echo e($background_image['sizes']['lozad']); ?>" class="lozad object-cover-absolute -z-1"/>
            </div>
        </div>
    <?php endif; ?>
        <div class="grid grid-cols-2 place-items-center gap-4 z-10 w-2/3 mx-auto">
            <div>
                <h3 class="uppercase text-custom-lighter-blue"><?php echo e($title); ?></h3>
                <h4 class="text-white text-5xl"><?php echo e($subtitle); ?></h4>
                <div class="flex flex-row items-start justify-evenly gap-2">
                    <img data-src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>" class="lozad object-cover w-1/4 text-white">
                    <?php echo $paragraph; ?>

                </div>
            </div>
            <div class="p-5 bg-white flex flex-col items-center">
                <h3 class="uppercase text-custom-blue"><?php echo e($title_cta); ?></h3>
                <h4 class="text-5xl"><?php echo e($subtitle_cta); ?></h4>
                <?php echo $paragraph_cta; ?>

                <a href="<?php echo e($button_link); ?>" class="btn bg-primary text-white"><?php echo e($button_label); ?> ➔</a>
            </div>
        </div>
    
    </div>
</section><?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/text-cta.blade.php ENDPATH**/ ?>