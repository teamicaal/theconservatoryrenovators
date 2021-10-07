<section id="alternating-content" class="pb-5 lg:pt-2 bg-grey-lightest">
  <div class="container mx-auto">
    @php $i=0; @endphp
    @if (have_rows('alternating_blocks'))
      @while (have_rows('alternating_blocks'))
      @php
        the_row();
        $i++;
        $title = get_sub_field('title');
        $content= get_sub_field('content');
        $image = get_sub_field('image');
      @endphp

        <div class="flex flex-wrap mb-3 {{ $i % 2 == 0 ? 'lg:flex-row-reverse' : '' }} ">
          <div class="w-full lg:w-1/2 flex items-center content-center">
            <div class="lg:p-3">
              <h2 class="mb-1 font-bold text-2xl lg:text-3xl">{{ $title }}</h2>
              {!! $content !!}
            </div>
          </div>
          <div class="w-full lg:w-1/2 relative">
            <div class="embed embed-4by3">
              <img class="lozad absolute object-cover w-full h-full inset-0" src="{{ $image['sizes']['lozad'] }}" data-src="{!! $image['url']; !!}" data-srcset="{!! wp_get_attachment_image_srcset($image['id']) !!}" alt="{!! $image['alt']; !!}">
            </div>
          </div>
        </div>

      @endwhile
    @endif
  </div>
</section>
