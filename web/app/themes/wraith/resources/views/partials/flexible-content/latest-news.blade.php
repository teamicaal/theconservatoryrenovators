@php
$args = array(
'post_type'      => 'post',
'posts_per_page' => '2'
);

$query = new WP_Query($args);
@endphp
<div class="py-3">
  <div class="container mx-auto">
    <h2 class="text-center text-4xl">Latest News</h2>
    @if( $query->have_posts() )
      <div class="flex flex-wrap md:-mx-1 mb-1">
        @while( $query->have_posts() ) @php $query->the_post() @endphp
          <article class="w-full lg:w-1/2 p-1">
            <div class="w-full flex flex-col sm:flex-row py-1-5 relative h-full" style="border-top: 1px solid #f7f7f7;">
              <div class="w-full sm:w-2/3 pr-1 py-1 h-full items-start flex-col flex">
                <div class="relative">
                  <a href="{!! the_permalink() !!}"><h2 class="entry-title">{!! get_the_title() !!}</h2></a>
                </div>
                <p class="text-sm post-copy">{!! the_excerpt() !!}</p>
                <a href="{!! the_permalink() !!}" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
              </div>
              <div class="w-full sm:w-1/3 md:mr-1 relative overflow-hidden rounded-sm" style="min-height: 200px;">
                <img data-src="{!! get_the_post_thumbnail_url() !!}" src="{!! get_the_post_thumbnail_url(get_the_id(), 'lozad') !!}" width="100%" height="auto" alt="{!! the_title(); !!}" class="lozad object-cover-absolute w-full h-full absolute">
              </div>
            </div>
          </article>
        @endwhile
      </div>
      <div class="text-center">
        <a href="{{ get_permalink( get_option('page_for_posts') ) }}" class="btn btn-grey-darker">View All Posts</a>
      </div>
    @else
    <p>
      Sorry, no posts could be found
    </p>
    @endif
    @php wp_reset_query() @endphp
  </div>
</div>
