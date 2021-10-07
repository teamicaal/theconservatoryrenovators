@php
  $images = get_sub_field('gallery_items');
  $size = 'full';
@endphp

<section id="slider-gallery" class="my-4">
  <div class="container mx-auto">
    @if ($images)
      <div class="slick-gallery-landing overflow-hidden">
        @php
            $i = 0;
            foreach( $images as $image ):
            $attachment_id = $image['ID'];
            $alt = $image['alt'];
        @endphp
        <div>
          <div class="embed embed-4by3 m-1">
            <img class="lozad absolute object-cover w-full h-full inset-0" src="{{ $image['sizes']['lozad'] }}" data-src="{{ $image['sizes']['medium'] }}" alt="{{ $alt }}" itemprop="thumbnail">
          </div>
        </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
