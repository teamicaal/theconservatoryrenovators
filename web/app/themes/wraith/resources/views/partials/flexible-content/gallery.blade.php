@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$image_1 = get_sub_field('image_1');
$image_2 = get_sub_field('image_2');
$image_3 = get_sub_field('image_3');
$image_4 = get_sub_field('image_4');
$image_5 = get_sub_field('image_5');
$image_6 = get_sub_field('image_6');
@endphp

<section id="gallery" class="section_gallery{!! $custom_class ? ' ' . $custom_class : ' bg-gray-100 md:py-24 py-20' !!}">
  <div class="container mx-auto">
    {!! $title ? '<h2 class="text-4xl text-center mb-8">' . $title . '</h2>' : null !!}
    <div class="flex flex-wrap gap-2 md:gap-4">
      @if ($image_1 || $image_2)
        <div class="lg:w-1/4 w-2/5 flex-auto md:px-1 px-0-5">
          @if ($image_1)
            <div class="embed-3by2 mb-2 md:mb-4 group">
              <a href="{{ $image_1['url'] }}" data-fancybox="gallery">
                <img data-src="{{ $image_1['sizes']['4by3-md'] }}" alt="{{ $image_1['alt'] }}" src="{{ $image_1['sizes']['lozad'] }}" class="lozad object-fit-cover" />
                <div class="object-fit-cover flex items-center justify-center bg-primary/60 transition opacity-0 group-hover:opacity-100"><i class="fa fa-expand text-4xl text-white"></i> </div>
              </a>
            </div>
          @endif
          @if ($image_2)
            <div class="embed-1by1 group">
              <a href="{{ $image_2['url'] }}" data-fancybox="gallery">
                <img data-src="{{ $image_2['sizes']['4by3-md'] }}" alt="{{ $image_2['alt'] }}" src="{{ $image_2['sizes']['lozad'] }}" class="lozad object-fit-cover" />
                <div class="object-fit-cover flex items-center justify-center bg-primary/60 transition opacity-0 group-hover:opacity-100"><i class="fa fa-expand text-4xl text-white"></i> </div>
              </a>
            </div>
          @endif
        </div>
      @endif
      @if ($image_3 || $image_4)
        <div class="lg:w-1/4 w-2/5 flex-auto md:px-1 px-0-5">
          @if ($image_3)
            <div class="embed-1by1 mb-2 md:mb-4 group">
              <a href="{{ $image_3['url'] }}" data-fancybox="gallery">
                <img data-src="{{ $image_3['sizes']['4by3-md'] }}" alt="{{ $image_3['alt'] }}" src="{{ $image_3['sizes']['lozad'] }}" class="lozad object-fit-cover" />
                <div class="object-fit-cover flex items-center justify-center bg-primary/60 transition opacity-0 group-hover:opacity-100"><i class="fa fa-expand text-4xl text-white"></i> </div>
              </a>
            </div>
          @endif
          @if ($image_4)
            <div class="embed-3by2 group">
              <a href="{{ $image_4['url'] }}" data-fancybox="gallery">
                <img data-src="{{ $image_4['sizes']['4by3-md'] }}" alt="{{ $image_4['alt'] }}" src="{{ $image_4['sizes']['lozad'] }}" class="lozad object-fit-cover" />
                <div class="object-fit-cover flex items-center justify-center bg-primary/60 transition opacity-0 group-hover:opacity-100"><i class="fa fa-expand text-4xl text-white"></i> </div>
              </a>
            </div>
          @endif
        </div>
      @endif
      @if ($image_5 || $image_6)
        <div class="lg:w-1/4 lg:block hidden md:px-1 px-0-5">
          @if ($image_5)
            <div class="">
              <div class="embed-3by2 mb-2 md:mb-4 group">
                <a href="{{ $image_5['url'] }}" data-fancybox="gallery">
                  <img data-src="{{ $image_5['sizes']['4by3-md'] }}" alt="{{ $image_5['alt'] }}" src="{{ $image_5['sizes']['lozad'] }}" class="lozad object-fit-cover" />
                  <div class="object-fit-cover flex items-center justify-center bg-primary/60 transition opacity-0 group-hover:opacity-100"><i class="fa fa-expand text-4xl text-white"></i> </div>
                </a>
              </div>
            </div>
          @endif
          @if ($image_6)
            <div class="embed-1by1 group">
              <a href="{{ $image_6['url'] }}" data-fancybox="gallery">
                <img data-src="{{ $image_6['sizes']['4by3-md'] }}" alt="{{ $image_6['alt'] }}" src="{{ $image_6['sizes']['lozad'] }}" class="lozad object-fit-cover" />
                <div class="object-fit-cover flex items-center justify-center bg-primary/60 transition opacity-0 group-hover:opacity-100"><i class="fa fa-expand text-4xl text-white"></i> </div>
              </a>
            </div>
          @endif
        </div>
      @endif
    </div>
  </div>
</section>
