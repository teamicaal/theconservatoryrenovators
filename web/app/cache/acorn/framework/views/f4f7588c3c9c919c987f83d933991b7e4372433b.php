<?php
    $image = get_sub_field('image');
?>

<section class="md:px-2 overflow-hidden">
<div class="bg-gray-100 pt-16 pb-8">
    <div class="container mx-auto px-0 lg:px-1 text-center">



        <div class="flex no-wrap">
            <?php if( $image ): ?>
                <div class="flex-initial w-full md:w-1/3">
                    <img src="<?php echo e($image['url']); ?>">
                </div>
            <?php endif; ?>
            <div id="products" class="flex w-full flex-1 flex-col max-w-3xl ml-12 mt-20">
               <div id="categories" class="w-full flex flex-col md:flex-row text-left md:w-2/5 pl-8">

                   <a href="categories" class="flex-1 title-display title-display-left text-primary mb-4">cat1</a>
                   <a href="categories" class="flex-1 title-display text-primary mb-4" >cat2</a>
                   <a href="categories" class="flex-1 title-display text-primary mb-4">cat3</a>
               </div>
               <h2 class="text-2xl md:text-4xl mb-8 text-left w-2/3 pl-8">Explore Our Premium Products</h2>
                <?php if( have_rows('pages') ): ?>
                <div class="flex md:flex-wrap lg:justify-center scroll-x-proximity overflow-x-scroll lg:overflow-hidden lg:-mx-4">
                    <?php while( have_rows('pages') ): ?>
                    <?php
                    the_row();
                    $page = get_sub_field('page');
                    $custom_title = get_sub_field('custom_title');
                    ?>
                    <?php if( $page ): ?>
                        <div class="w-16 md:w-1/3 mb-4 px-4 scroll-align-start mb-8" style="flex: 0 0 auto;">
                        <a href="<?php echo e(get_the_permalink($page->ID)); ?>" class="embed embed-4by3 rounded-sm mb-4">
                            <img data-src="<?php echo e(get_the_post_thumbnail_url($page->ID)); ?>" src="<?php echo e(get_the_post_thumbnail_url($page->ID, 'lozad')); ?>" alt="<?php echo $custom_title ? $custom_title : $page->title; ?>" class="lozad object-cover-absolute" />
                        </a>
                        <div class="bg-white p-4 sx:p-0.5 p-md-12">
                            <h4 class="text-lg mb-0"><?php echo $custom_title ? $custom_title : get_the_title(); ?></h4>
                            <a href="<?php echo e(get_the_permalink($page->ID)); ?>" class="uppercase font-display text-xs hover:text-black mb-1">Learn More</a>
                        </div>
                        </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
</div>

</section>

<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/product-filter.blade.php ENDPATH**/ ?>