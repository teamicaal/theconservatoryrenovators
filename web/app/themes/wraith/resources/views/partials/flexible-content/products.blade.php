@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$i=0;
@endphp

<section class="section_products{!! $custom_class ? ' ' . $custom_class : ' md:pt-24 md:pb-20 pt-20 pb-16' !!}">
  <div class="container mx-auto">
    <h2 class="text-center text-4xl mb-8">{!! $title !!}</h2>
    @if (have_rows('product_types'))
      <div class="text-center flex items-center justify-start md:justify-center w-full overflow-x-auto mb-14">
        @while (have_rows('product_types'))
        @php
          the_row();
          $i++;
          $title = get_sub_field('title');
        @endphp
          <button class="btn bg-gray-100 mixitup-control flex-[0_0_auto] mb-0-75 {!! $i == 1 ? 'mixitup-control-active' : null !!} text-black mx-1" type="button" data-filter=".{{ strtolower(str_replace(',-', ' ', str_replace(' ', '-', $title))) }}">{!! $title !!}</button>
        @endwhile
      </div>
      <div class="mix-container-products">
        @while (have_rows('product_types'))
        @php
          the_row();
          $i++;
          $title = get_sub_field('title');
        @endphp
          <div class="products px-4 sm:px-0">
            <div class="flex flex-wrap -mx-4">
              @if (have_rows('products'))
                @while (have_rows('products'))
                @php
                  the_row();
                  $label = get_sub_field('label');
                  $image = get_sub_field('image');
                @endphp
                  <div class="lg:w-1/3 sm:w-1/2 w-full sm:px-4 mb-8 mix {{ strtolower(str_replace(',-', ' ', str_replace(' ', '-', $title))) }}">
                    <a class="group" href="#contact-us">
                      <div class="relative isolate">
                        <div class="embed-4by3">
                          <img data-src="{{ $image['sizes']['4by3-md'] }}" alt="{{ $image['alt'] }}" class="lozad object-fit-cover" />
                        </div>
                        <div class="w-11/12 mx-auto mt-[-2.5rem] p-5 bg-gray-100 flex justify-between items-center rounded-sm relative z-10 transition group-hover:bg-primary">
                          <p class="text-lg text-black mb-0 transition group-hover:text-white">{!! $label !!}</p>
                          <svg class="text-primary transition group-hover:text-white fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24.86" height="24.86" viewBox="0 0 24.86 24.86">
                            <path d="M16.159,13.019l-5.266,5.266a.648.648,0,0,1-.916-.916l4.809-4.809-5.07-5.07a.648.648,0,0,1,.916-.916L16.159,12.1A.632.632,0,0,1,16.159,13.019Zm8.7-.589A12.43,12.43,0,1,1,12.43,0,12.425,12.425,0,0,1,24.86,12.43Zm-1.308,0A11.122,11.122,0,1,0,12.43,23.552,11.112,11.112,0,0,0,23.552,12.43Z"/>
                          </svg>
                        </div>
                      </div>
                    </a>
                  </div>
                @endwhile
              @endif
            </div>
          </div>
        @endwhile
      </div>
    @endif
  </div>
</section>
