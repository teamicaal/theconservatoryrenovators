@php
$banner_type = get_sub_field('banner_type');
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

<section class="section_page-banner">
  @if ($banner_type == 'full-width')
    <div class="full-width sm:flex sm:items-center relative lg:!min-h-[80vh] sm:!min-h-[60vh] !min-h-[40vh]">
      @if( $images )
        <div class="sm:absolute relative sm:top-0 sm:left-0 w-full h-full z-10">
          {!! count($images) > 1 ? '<div class="slick-banner">' : null; !!}
          @foreach($images as $key=>$image )
            <div class="relative {!! $key != 0 ? 'hidden' : null !!} lg:!min-h-[80vh] sm:!min-h-[60vh] !min-h-[40vh]">
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
                <img src="{{ $image['sizes']['lozad'] }}" data-src="{{ $image['sizes']['4by3-xl'] }}" class="lozad absolute object-cover-absolute w-full h-full inset-0" alt="{!! $image['alt'] !!}" width="100%" height="100%">
              </picture>
            </div>
          @endforeach
          {!! count($images) > 1 ? '</div>' : null; !!}
        </div>
      @endif
      <div class="container mx-auto border-b sm:border-none border-primary">
        <div class="sm:w-[650px] w-full bg-white p-8 sm:p-12 relative z-20 mx-auto lg:ml-0 lg:mr-auto">
          {!! $subtitle ? '<h4 class="title-display title-display-left text-primary mb-4 ">' . $subtitle . '</h4>' : null !!}
          {!! $title ? '<' . $h . ' class="text-3xl md:text-4xl mb-4">' . $title . '</' . $h . '>' : null !!}
          {!! $paragraph ? '<p class="mb-1 text-sm sm:block hidden">' . $paragraph . '</p>' : null !!}
          @if( have_rows('buttons') )
            <div class="block mt-8">
              @php $i = 0; @endphp
              @while( have_rows('buttons') )
                @php
                the_row();
                $i++;
                $link = get_sub_field('link');
                $label = get_sub_field('label');
                $anchor = get_sub_field('anchor');
                @endphp
                <a href="{{ $link }}" class="btn {{ $i == 1 ? 'border-primary border bg-transparent text-primary hover:bg-primary-dark hover:border-primary-dark hover:text-white text-center block md:inline-block mb-1 md:mr-1 md:mb-0' : 'bg-primary border-primary border text-white hover:bg-primary-dark text-center block md:inline-block' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
              @endwhile
            </div>
          @endif
        </div>
      </div>
      @if( count($images) > 1 )
      <div class="absolute z-20 bottom-0 right-0 flex">
        <button type="button" class="slick-p block w-3 h-3 text-center rounded-l-sm bg-white border-r border-grey-lighter text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-left align-middle"></i></button>
        <button type="button" class="slick-n block w-3 h-3 text-center rounded-tr-sm bg-white text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-right align-middle"></i></button>
      </div>
      @endif
    </div>
  @else
    <div class="bg-gray-100 default lg:px-4 lg:flex flex-row justify-end items-center">
      @if( $images )
      <div class="lg:w-3/5 order-1 md:order-2 relative z-0">
        {!! count($images) > 1 ? '<div class="slick-banner relative z-10" style="top: 7px;">' : null; !!}
        @foreach($images as $key=>$image )
          <div>
            <div class="relative banner-height {!! $key != 0 ? 'hidden' : null !!}" style="min-height: 75vh;">
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
                <img src="{{ $image['sizes']['lozad'] }}" class="lozad absolute object-cover-absolute w-full h-full inset-0" alt="{!! $image['alt'] !!}" width="100%" height="100%">
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
      <div class="bg-grey-100 w-2/5 order-2 lg:order-1">
        <div class="w-3/5 mx-auto">
          {!! $subtitle ? '<h4 class="title-display title-display-left text-primary mb-4 ">' . $subtitle . '</h4>' : null !!}
          {!! $title ? '<' . $h . ' class="text-3xl md:text-4xl lg:text-5xl mb-4 ">' . $title . '</' . $h . '>' : null !!}
          {!! $paragraph ? '<p>' . $paragraph . '</p>' : null !!}
          @if( have_rows('buttons') )
            <div class="block mt-8">
              @php $i = 0; @endphp
              @while( have_rows('buttons') )
                @php
                the_row();
                $i++;
                $link = get_sub_field('link');
                $label = get_sub_field('label');
                $anchor = get_sub_field('anchor');
                @endphp
                <a href="{{ $link }}" class="btn {{ $i == 1 ? 'border-primary border bg-transparent text-primary hover:bg-primary-dark hover:border-primary-dark hover:text-white text-center block md:inline-block mb-1 md:mr-1 md:mb-0' : 'bg-primary border-primary border text-white hover:bg-primary-dark text-center block md:inline-block' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
              @endwhile
            </div>
          @endif
        </div>
      </div>
    </div>
  @endif
</section>
