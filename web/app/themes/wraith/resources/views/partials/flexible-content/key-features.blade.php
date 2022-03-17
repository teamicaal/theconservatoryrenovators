@php
  $title = get_sub_field('title');
@endphp

<section class="py-12 bg-gray-100">
  <div class="container mx-auto">
      {!! $title ? '<h2 class="text-center font-bold text-3xl lg:text-4xl mb-8">' . $title . '</h2>' : null !!}
      <div class="flex flex-wrap justify-center">
        @php
          $count = count(get_sub_field('features'))
        @endphp
        @if (have_rows('features'))
          @while (have_rows('features'))
          @php
            the_row();
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $subtitle= get_sub_field('subtitle');
          @endphp

            <div class="w-1/2 md:w-1/3{{ $count > 3 ? ' lg:w-1/4' : null }}">
              <div class="bg-white rounded-sm shadow-card p-4 lg:p-8 mx-4 mb-8 lg:mb-4 text-center">
                @if( $icon )
                  <span class="block mx-auto bg-primary rounded-full w-12 h-12 flex justify-center items-center">
                    <i class="fa fa-{{ $icon }} text-white text-xl"></i>
                  </span>
                @endif
                {!! $title ? '<h3 class="font-bold mt-4 mb-4">' . $title . '</h3>' : null !!}
                {!! $subtitle ? '<p class="text-gray-800 mb-0">' . $subtitle . '</p>' : null !!}
              </div>
            </div>

          @endwhile
        @endif
      </div>
  </div>
</section>
