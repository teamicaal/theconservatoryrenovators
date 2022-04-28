@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
@endphp

<section class="md:px-8">
  <div class="bg-gray-100 pt-16 pb-8 md:pt-24 md:pb-8 lg:pt-32 lg:pb-24">
    <div class="container mx-auto !px-0 text-center">
      {!! $subtitle ? '<h4 class="title-display title-display-center text-primary mb-4">' . $subtitle . '</h4>' : null; !!}
      {!! $title ? '<h2 class="text-4xl mb-8">' . $title . '</h2>' : null; !!}
      @if( have_rows('pages') )
      <div class="flex lg:flex-wrap lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-4">
        @while( have_rows('pages') )
          @php
          the_row();
          $page = get_sub_field('page');
          $custom_title = get_sub_field('custom_title');
          @endphp
          @if( $page )
            <div class="w-64 lg:w-1/3 mb-4 px-4 snap-center mb-8" style="flex: 0 0 auto;">
              <a href="{{ get_the_permalink($page->ID) }}" class="embed embed-4by3 rounded-sm overflow-hidden mb-4">
                <img data-src="{{ get_the_post_thumbnail_url($page->ID) }}" src="{{ get_the_post_thumbnail_url($page->ID, 'lozad') }}" alt="{!! $custom_title ? $custom_title : $page->title; !!}" class="lozad object-cover-absolute" />
              </a>
              <div class="bg-white rounded-sm p-4 sm:p-8 p-md-12">
                <h4 class="text-2xl mb-4">{!! $custom_title ? $custom_title : get_the_title(); !!}</h4>
                <a href="{{ get_the_permalink($page->ID) }}" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">Learn More</a>
              </div>
            </div>
          @endif
        @endwhile
      </div>
      @endif
    </div>
  </div>
</section>
