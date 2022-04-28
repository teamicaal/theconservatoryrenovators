@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$image = get_sub_field('image');
$i=0;
@endphp

<section class="section_testimonials{!! $custom_class ? ' ' . $custom_class : ' mb-0 lg:pb-20' !!}">
  <div class="flex flex-wrap bg-gray-700 lg:py-0 md:py-24 py-20">
    <div class="lg:w-1/2 w-full flex items-center">
      <div class="w-3/4 mx-auto py-0 lg:py-16">
        <h6 class="title-display text-gray-200 mb-4">Testimonials</h6>
        <h2 class="text-4xl text-white mb-14">{!! $title ? $title : 'What Our Customers Say' !!}</h2>
        @if (have_rows('testimonials', 'option'))
          <div class="relative">
            <i class="fa fa-quote-right text-white/[0.1] absolute top-0 right-0 text-8xl"></i>
            <div class="testimonials-carousel">
              @while (have_rows('testimonials', 'option'))
                @php
                  the_row();
                  $name = get_sub_field('name');
                  $location = get_sub_field('location');
                  $review = get_sub_field('review');
                @endphp
                <div class="text-white">
                  <h4 class="mb-0 2xl:text-2xl text-xl mb-2 tracking-wider font-semibold text-white">{!! $name !!}</h4>
                  <h5 class="mb-0 text-gray-200 font-bold mb-0">{!! $location !!}</h5>
                  <p class="text-gray-100 mt-4 sm:leading-loose">{!! $review !!}</p>
                  <div class="flex flex-wrap mt-8">
                    @for ($i=0; $i < 5; $i++)
                      <i class="fa fa-star text-2xl text-yellow-500 mr-1"></i>
                    @endfor
                  </div>
                </div>
              @endwhile
            </div>
          </div>
        @endif
      </div>
    </div>
    <div class="lg:w-1/2 w-full">
      <div class="relative h-full top-20 lg:!min-h-[70vh] lg:block hidden">
        <img class="object-cover-absolute" src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
      </div>
    </div>
  </div>
</section>
