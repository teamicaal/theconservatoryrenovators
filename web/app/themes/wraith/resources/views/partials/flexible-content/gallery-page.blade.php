@php
$images = get_sub_field('images');

$captions = array();

foreach( $images as $image ) {
  $caption = strtolower($image['caption']);
  foreach (explode(', ',$caption) as $caption){
    if( !in_array($caption, $captions) && $caption != '' ) {
      array_push($captions, $caption);
    }
  }
}
@endphp

<section class="pt-3 pb-2">
  <div class="container mx-auto">
    <div class="flex lg:flex-wrap scroll-x-proximity overflow-x-scroll lg:overflow-hidden -mx-1 md:mx-0 pl-1 md:pl-0 mb-1">
      <button type="button" data-filter="all" class="mixitup-control mixitup-control-active scroll-align-start mb-1 title-display px-1 py-0-5 focus:outline-none">All</button>
      @foreach($captions as $caption)
        <button type="button" data-filter=".{{ str_replace(',-', ' ', str_replace(' ', '-', $caption)) }}" class="mixitup-control scroll-align-start mb-1 title-display px-1 py-0-5 focus:outline-none">{{ $caption }}</button>
      @endforeach
    </div>
    <div class="flex flex-wrap mix-container">
      @php $i = 0; @endphp
      @foreach( $images as $image )
      @php $i++; @endphp
        <div class="w-1/2 lg:w-1/3 mb-1 px-0-5 gallery-image item fb-gallery mix {{ strtolower($image['caption']) }}">
          <a href="{{ $image['url'] }}" title="{{ $image['title'] }} ?>" rel="gallery-page" class="embed embed-4by3" data-fancybox="gallery" data-fancybox-group itemprop="contentUrl" data-size="{{ $image['width'] }}x{{ $image['height'] }}" data-index="{{ $i }}">
            <img data-src="{{ $image['sizes']['4by3-md'] }}" alt="{{ $image['alt'] }}" class="lozad object-cover" />
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>
