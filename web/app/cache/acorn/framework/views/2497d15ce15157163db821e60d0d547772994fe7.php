<?php global $query; ?><?php $query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => '2'
]); ?>
<div class="py-12">
  <div class="container mx-auto">
    <h2 class="text-center text-4xl">Latest News</h2>
    <?php $posts = collect(); ?><?php if (is_a($query, 'WP_Post') || is_numeric($query)) : ?><?php $posts->put('p', is_a($query, 'WP_Post') ? ($query)->ID : $query); ?><?php endif; ?><?php if (is_array($query)) : ?><?php $posts
                       ->put('ignore_sticky_posts', true)
                       ->put('posts_per_page', -1)
                       ->put('post__in', collect($query)
                           ->map(function ($post) {
                               return is_a($post, 'WP_Post') ? $post->ID : $post;
                           })->all())
                       ->put('orderby', 'post__in');
                   ?><?php endif; ?><?php $query = $posts->isNotEmpty() ? new WP_Query($posts->all()) : $query; ?><?php if ($query->have_posts()) : ?>
      <div class="flex flex-wrap md:-mx-4 mb-4">
        <?php $posts = collect(); ?><?php if (is_a($query, 'WP_Post') || is_numeric($query)) : ?><?php $posts->put('p', is_a($query, 'WP_Post') ? ($query)->ID : $query); ?><?php endif; ?><?php if (is_array($query)) : ?><?php $posts
                       ->put('ignore_sticky_posts', true)
                       ->put('posts_per_page', -1)
                       ->put('post__in', collect($query)
                           ->map(function ($post) {
                               return is_a($post, 'WP_Post') ? $post->ID : $post;
                           })->all())
                       ->put('orderby', 'post__in');
                   ?><?php endif; ?><?php $query = $posts->isNotEmpty() ? new WP_Query($posts->all()) : $query; ?><?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
          <article class="w-full lg:w-1/2 p-4">
            <div class="w-full flex flex-col sm:flex-row py-6 relative h-full">
              <div class="w-full sm:w-2/3 pr-4 py-4 h-full items-start flex-col flex">
                <div class="relative">
                  <a href="<?= get_permalink(); ?>"><h2 class="entry-title"><?= get_the_title(); ?></h2></a>
                </div>
                <p class="text-sm post-copy"><?php echo the_excerpt(); ?></p>
                <a href="<?= get_permalink(); ?>" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
              </div>
              <div class="w-full sm:w-1/3 md:mr-4 relative rounded-sm overflow-hidden" style="min-height: 200px;">
                <img data-src="<?= get_the_post_thumbnail_url(get_the_ID(), '4by3-md'); ?>" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'lozad'); ?>" width="100%" height="auto" alt="<?= get_the_title(); ?>" class="lozad object-cover-absolute w-full h-full absolute">
              </div>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
      <div class="text-center">
        <a href="<?php echo e(get_permalink( get_option('page_for_posts') )); ?>" class="btn btn-gray-darker">View All Posts</a>
      </div>
    <?php wp_reset_postdata(); endif; ?>
    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if (! $query->have_posts()) : ?>
      <p>
        Sorry, no posts could be found
      </p>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</div>
<?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/latest-news.blade.php ENDPATH**/ ?>