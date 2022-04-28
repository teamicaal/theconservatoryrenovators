@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$count_features = count( get_sub_field('features') );

$i=0;
@endphp

<section class="section_key-features bg-gray-100{!! $custom_class ? ' ' . $custom_class : ' md:py-24 py-20' !!}">
  <div class="container mx-auto">
    <h2 class="text-center text-4xl mb-10">{!! $title !!}</h2>
    @if (have_rows('features'))
      <div class="flex flex-wrap -mx-4">
        @while (have_rows('features'))
        @php
          the_row();
          $i++;
          $title = get_sub_field('title');
          $content = get_sub_field('content');
        @endphp
          <div class="lg:w-1/3 w-full lg:mb-0 {!! $i == $count_features ? null : 'mb-4' !!} px-4 text-center relative">
            <div class="py-20 px-8 {!! $i % 2 == 0 ? 'bg-gray-600' : 'bg-white' !!}" style="box-shadow: 0px 0px 45px rgba(0,0,0,0.05);">
              <div class="relative mb-10">
                <span class="absolute transform -translate-x-1/2 left-1/2 text-8xl font-serif -top-[2.5rem] text-shadow-xl z-0 opacity-10 {!! $i % 2 == 0 ? 'text-white' : 'text-primary' !!}">{{ '0' . $i }}</span>
                <h4 class="text-2xl uppercase font-serif relative z-10 my-2 tracking-wider {!! $i % 2 == 0 ? 'text-white' : 'text-gray-500' !!}">{!! $title !!}</h4>
              </div>
              <div class="{!! $i % 2 == 0 ? 'child-p:text-gray-200' : 'child-p:text-gray-500' !!}">
                {!! $content !!}
              </div>
            </div>
          </div>
        @endwhile
      </div>
    @endif
  </div>
</section>
