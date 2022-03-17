@php
  $images = get_sub_field('gallery_items');
@endphp

<section class="py-12 overflow-hidden">
  <div class="container mx-auto">
    @if ($images)
      <div class="slick-gallery-slider slick-overflow-visible">
        @php
            $i = 0;
            foreach( $images as $image ):
        @endphp
        <div>
          <div class="embed embed-4by3 m-4">
            <img class="lozad absolute object-cover w-full h-full inset-0" src="{{ $image['sizes']['lozad'] }}" data-src="{{ $image['sizes']['medium'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
          </div>
        </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
