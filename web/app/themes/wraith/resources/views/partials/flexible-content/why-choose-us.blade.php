
@php
  $title = get_sub_field('title');
  $count = 0 ;
@endphp

<section id="why-choose-us" class="py-12 mix-blend-mode">
  <div class="container mx-auto">
      {!! $title ? '<h2 class="text-center font-bold text-secondary text-2xl lg:text-3xl mb-12">' . $title . '</h2>' : null !!}
      <div class="flex flex-wrap justify-evenly">
        @if( get_sub_field('features') )
          @php $count = count(get_sub_field('features')); @endphp
        @endif
        @if (have_rows('features'))
          @while (have_rows('features'))
          @php
            the_row();
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $paragraph= get_sub_field('paragraph');
          @endphp

            <div class="w-full md:w-1/3{{ $count > 3 ? ' lg:w-1/4' : null }}">
              <div class="bg-white rounded-lg why-choose-us-drop-shadow shadow-card p-4 lg:p-8 mx-4 mb-8 lg:mb-0 text-center">
                @if( $icon )
                <i class="fa fa-{{ $icon }} text-color text-3xl lg:text-4xl"></i>
                @endif
                {!! $title ? '<h3 class="font-bold text-secondary text-lg uppercase mt-4 mb-4">' . $title . '</h3>' : null !!}
                {!! $paragraph ? '<p class="text-sm text-secondary font-normal leading-7 mb-0">' . $paragraph . '</p>' : null !!}
              </div>
            </div>

          @endwhile
        @endif
      </div>
  </div>
</section>
