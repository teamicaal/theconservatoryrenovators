@php
$title = get_sub_field('title');
$custom_class = get_sub_field('custom_class');
@endphp

<section class="pt-12 pb-8 overflow-hidden{!! $custom_class ? ' ' . $custom_class : null; !!}">
  <div class="container mx-auto">
    {!! $title ? '<h3 class="title-display text-gray-800 uppercase tracking-widest text-center mb-8">' . $title . '</h3>' : null; !!}
  </div>
  <div class="container mx-auto relative px-0 lg:px-4">
    @if( have_rows('accreditations') )
      @while( have_rows('accreditations') )
        @php
        the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        $alt = get_sub_field('image_alt');
        @endphp
        <div class="w-40 lg:w-1/6 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
          <{!! $link ? 'a href="' . $link . '" target="_blank"' : 'div'; !!} class="block bg-white rounded-sm border border-gray-200 p-4 lg:p-6 text-center">
            <img data-src="{{ $image['url'] }}" src="{{ $image['sizes']['thumbnail'] }}" width="96" height="96" alt="{{ $alt ? $alt : $image['alt'] }}" class="lozad noblur w-full h-auto mx-auto" style="max-width: 6rem;" />
          </{!! $link ? 'a' : 'div'; !!}>
        </div>
      @endwhile
    @elseif( have_rows('accreditations', 'option') )
      <div class="flex lg:flex-wrap lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-1">
        @while( have_rows('accreditations', 'option') )
          @php
          the_row();
          $logo = get_sub_field('logo');
          $link = get_sub_field('link');
          @endphp
          <div class="w-40 lg:w-1/6 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <{!! $link ? 'a href="' . $link . '" target="_blank"' : 'div'; !!} class="block bg-white rounded-sm border border-gray-200 p-4 lg:p-6 text-center">
              <img data-src="{{ $logo['url'] }}" src="{{ $logo['sizes']['thumbnail'] }}" width="96" height="96" alt="{{ $logo['alt'] ? $logo['alt'] : null }}" class="lozad noblur w-full h-auto mx-auto" style="max-width: 6rem;" />
            </{!! $link ? 'a' : 'div'; !!}>
          </div>
        @endwhile
      </div>
    @endif
  </div>
</section>
