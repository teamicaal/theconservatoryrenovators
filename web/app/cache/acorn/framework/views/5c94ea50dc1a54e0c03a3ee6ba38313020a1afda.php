<?php if(function_exists('get_field') && have_rows('blocks')): ?>
    <?php while(have_rows('blocks')): ?>
        <?php the_row(); ?>

        <?php if(get_row_layout() == 'accreditations_row'): ?>
            <?php echo $__env->make('partials.flexible-content.accreditations-row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'alternating_content'): ?>
            <?php echo $__env->make('partials.flexible-content.alternating-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'anchor'): ?>
            <?php echo $__env->make('partials.flexible-content.anchor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'banner'): ?>
            <?php echo $__env->make('partials.flexible-content.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'cta'): ?>
            <?php echo $__env->make('partials.flexible-content.cta-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'form_contact'): ?>
            <?php echo $__env->make('partials.flexible-content.form-contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'form_conversion'): ?>
            <?php echo $__env->make('partials.flexible-content.form-conversion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'key_features'): ?>
            <?php echo $__env->make('partials.flexible-content.key-features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'gallery'): ?>
            <?php echo $__env->make('partials.flexible-content.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'gallery_page'): ?>
            <?php echo $__env->make('partials.flexible-content.gallery-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'gallery_slider'): ?>
            <?php echo $__env->make('partials.flexible-content.gallery-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'gallery_text'): ?>
            <?php echo $__env->make('partials.flexible-content.gallery-text', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'html'): ?>
            <?php echo get_sub_field('html_content'); ?>

        <?php endif; ?>
        <?php if(get_row_layout() == 'latest_news'): ?>
            <?php echo $__env->make('partials.flexible-content.latest-news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'latest_products'): ?>
            <?php echo $__env->make('partials.flexible-content.latest-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'map'): ?>
            <?php echo $__env->make('partials.flexible-content.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'page_links_simple'): ?>
            <?php echo $__env->make('partials.flexible-content.page-links-simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'products'): ?>
            <?php echo $__env->make('partials.flexible-content.products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'product_filter'): ?>
            <?php echo $__env->make('partials.flexible-content.product-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'testimonials'): ?>
            <?php echo $__env->make('partials.flexible-content.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'text_block'): ?>
            <?php echo $__env->make('partials.flexible-content.text-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'text_cta'): ?>
            <?php echo $__env->make('partials.flexible-content.text-cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(get_row_layout() == 'quoting_engine'): ?>
            <?php echo $__env->make('partials.flexible-content.quoting-engine', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/content-loop.blade.php ENDPATH**/ ?>