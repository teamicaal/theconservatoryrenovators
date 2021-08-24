@php
$image_1 = get_sub_field('image_1');
$image_2 = get_sub_field('image_2');
$image_3 = get_sub_field('image_3');
$image_4 = get_sub_field('image_4');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
@endphp

<section class="py-4">
  <div class="container mx-auto">
    <div class="flex flex-wrap items-center">
      @if( $image_1 )
      <div class="w-full px-2 md:w-1/2 md:pl-0 md:pr-1 lg:pr-2 xl:pr-4 mb-2 md:mb-0">
        <div class="flex flex-wrap -mx-1">
          <div class="w-1/2 px-1">
            <div class="embed embed-3by4 mb-2">
              <img data-src="{{ $image_1['sizes']['4by3-md'] }}" alt="{{ $image_1['alt'] }}" class="lozad object-cover-absolute" />
            </div>
            @if( $image_2 )
              <div class="embed embed-4by3">
                <img data-src="{{ $image_2['sizes']['4by3-md'] }}" alt="{{ $image_2['alt'] }}" class="lozad object-cover-absolute" />
              </div>
            @endif
          </div>
          @if( $image_3 )
            <div class="w-1/2 px-1 mt-4">
              <div class="embed embed-4by3 mb-2">
                <img data-src="{{ $image_3['sizes']['4by3-md'] }}" alt="{{ $image_3['alt'] }}" class="lozad object-cover-absolute" />
              </div>
              @if( $image_4 )
                <div class="embed embed-3by4">
                  <img data-src="{{ $image_4['sizes']['4by3-md'] }}" alt="{{ $image_4['alt'] }}" class="lozad object-cover-absolute" />
                </div>
              @endif
            </div>
          @endif
        </div>
      </div>
      @endif
      <div class="w-full md:w-1/2 md-px-1 lg:px-2 xl:px-4 lg:w-1/2">
        {!! $subtitle ? '<h4 class="title-display title-display-left text-primary mb-1">' . $subtitle . '</h4>' : null; !!}
        {!! $title ? '<h2 class="text-4xl mb-2">' . $title . '</h2>' : null; !!}
        {!! $paragraph ? $paragraph : null; !!}
        @if( have_rows('buttons') )
          <div class="block">
            @php $i = 0; @endphp
            @while( have_rows('buttons') )
              @php
              the_row();
              $i++;
              $link = get_sub_field('link');
              $label = get_sub_field('label');
              $anchor = get_sub_field('anchor');
              @endphp
              <a href="{{ $link }}" class="btn {{ $i == 1 ? 'bg-blue text-white hover:bg-blue-dark text-center block md:inline-block' : 'bg-white text-black hover:bg-grey-light text-center block md:inline-block mb-1 md:mr-1 md:mb-0' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
            @endwhile
          </div>
        @endif
      </div>
    </div>
  </div>
</section>
