@php
$images = get_sub_field('images');
$images_webp = get_sub_field('images_webp');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
@endphp
@if( get_sub_field('title_h1') )
  @php $h = 'h1' @endphp
@else
  @php $h = 'h2' @endphp
@endif

<section class="section_page-banner bg-grey-lightest lg:px-4 lg:flex flex-row justify-end items-center">
  @if( $images )
  <div class="lg:w-3/5 order-1 md:order-2 relative z-0">
    {!! count($images) > 1 ? '<div class="slick-banner relative z-10" style="top: 7px;">' : null; !!}
    @foreach($images as $key=>$image )
      <div>
        <div class="relative banner-height {!! $key != 0 ? 'hidden' : null !!}" style="min-height: 75vh;">
          @php
            $img_webp = get_bloginfo('url') . str_replace(array('jpg', 'jpeg', 'png'), 'webp', $image['url']);
            $img_webp_sm = str_replace('.webp', '-sm.webp', $img_webp);
          @endphp
          <link rel="preload" href="{!! $img_webp_sm !!}" as="image" />
          <picture data-iesrc="{!! $image['url'] !!}">
            @if( $images_webp )
              @php
                $img_webp = get_bloginfo('url') . str_replace(array('jpg', 'jpeg', 'png'), 'webp', $image['url']);
                $img_webp_sm = str_replace('.webp', '-sm.webp', $img_webp);
              @endphp
              <source media="(max-width: 767px)" srcset="{!! $img_webp_sm !!}" type="image/webp" />
              <source media="(min-width: 768px)" srcset="{!! $img_webp !!}" type="image/webp" />
              <source media="(min-width: 768px)" srcset="{!! wp_get_attachment_image_srcset($image['id']) !!}" type="image/jpg" />
            @endif
            <img class="lozad absolute object-cover-absolute w-full h-full inset-0" alt="{!! $image['alt'] !!}" width="100%" height="100%">
          </picture>
        </div>
      </div>
    @endforeach
    @if( count($images) > 1 )
    </div>
    <div class="absolute z-20 bottom-0 right-0">
      <button type="button" class="slick-p w-3 h-3 text-center rounded-l-sm bg-white border-r border-grey-lighter text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-left align-middle"></i></button><button type="button" class="slick-n w-3 h-3 text-center rounded-tr-sm bg-white text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-right align-middle"></i></button>
    </div>
    @endif
  </div>
  @endif
  <div class="content mx-auto px-2 py-3 lg:pl-0 lg:py-0 xl-pr-4 xxl-pr-6 order-2 lg:order-1">
    {!! $subtitle ? '<h4 class="title-display title-display-left text-primary mb-1 lg:mb-2">' . $subtitle . '</h4>' : null !!}
    {!! $title ? '<' . $h . ' class="text-3xl md:text-4xl lg:text-5xl mb-1 lg:mb-2">' . $title . '</' . $h . '>' : null !!}
    {!! $paragraph ? '<p class="mb-1">' . $paragraph . '</p>' : null !!}
    @if( have_rows('buttons') )
      <div class="block">
        @php $i = 0; @endphp
        @while( have_rows('buttons') )
          @php
          the_row();
          $i++;
          $link = get_sub_field('link');
          $label = get_sub_field('label');
          $anchor = get_sub_field('anchor');
          @endphp
          <a href="{{ $link }}" class="btn {{ $i == 1 ? 'bg-white text-black hover:bg-grey-light text-center block md:inline-block mb-1 md:mr-1 md:mb-0' : 'bg-blue text-white hover:bg-blue-dark text-center block md:inline-block' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
        @endwhile
      </div>
    @endif
  </div>
</section>
