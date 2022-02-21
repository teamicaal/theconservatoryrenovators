@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
@endphp

<section class="md:px-2">
  <div class="bg-grey-lightest pt-4 pb-2 md:pt-6 md:pb-4 lg:pt-8 lg:pb-6">
    <div class="container mx-auto px-0 lg:px-1 text-center">
      {!! $subtitle ? '<h4 class="title-display title-display-center text-primary mb-1">' . $subtitle . '</h4>' : null; !!}
      {!! $title ? '<h2 class="text-4xl mb-2">' . $title . '</h2>' : null; !!}
      @if( have_rows('pages') )
      <div class="flex lg:flex-wrap lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-1">
        @while( have_rows('pages') )
          @php
          the_row();
          $page = get_sub_field('page');
          $custom_title = get_sub_field('custom_title');
          @endphp
          @if( $page )
            <div class="w-16 lg:w-1/3 mb-1 px-1 snap-center mb-2" style="flex: 0 0 auto;">
              <a href="{{ get_the_permalink($page->ID) }}" class="embed embed-4by3 rounded-sm mb-1">
                <img data-src="{{ get_the_post_thumbnail_url($page->ID) }}" src="{{ get_the_post_thumbnail_url($page->ID, 'lozad') }}" alt="{!! $custom_title ? $custom_title : $page->title; !!}" class="lozad object-cover-absolute" />
              </a>
              <div class="bg-white p-1 sm:p-2 p-md-3">
                <h4 class="text-2xl mb-1">{!! $custom_title ? $custom_title : get_the_title(); !!}</h4>
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
