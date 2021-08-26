@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-3 lg:mt-5">
  <h1 class="py-3">Downloads</h1>
</div>
<div class="bg-grey-lightest pt-3 pb-2 md:pb-1">
  <div class="container mx-auto">
    @php
    $args = array(
    'post_type'      => 'download',
    'posts_per_page' => -1
    );

    $query = new WP_Query($args);
    @endphp
    @if( $query->have_posts() )
      @php
      $categories = get_terms('download_category');
      @endphp
      <div class="flex lg:flex-wrap scroll-x-proximity overflow-x-scroll lg:overflow-hidden -mx-1 md:mx-0 pl-1 md:pl-0 mb-1">
        <button type="button" data-filter="all" class="mixitup-control mixitup-control-active scroll-align-start mb-1 title-display px-1 py-0-5 focus:outline-none">All</button>
        @foreach( $categories as $category )
          <button type="button" data-filter=".{{ $category->slug }}" class="mixitup-control scroll-align-start mb-1 title-display px-1 py-0-5 focus:outline-none">{{ $category->name }}</button>
        @endforeach
      </div>
      <div class="flex flex-wrap md:-mx-1 mix-container">
        @while( $query->have_posts() )
        @php
        $query->the_post();
        $thumbnail = get_field('thumbnail');
        $file = get_field('file');
        $file_id = $file['ID'];
        $file_size = filesize( get_attached_file( $file_id ) );
        $file_size = size_format($file_size, 2);
        $file_type = pathinfo( get_attached_file( $file_id ) );
        $file_type = $file_type['extension'];
        $categories = wp_get_object_terms( get_the_ID(), 'download_category' );
        @endphp
          @if( $file )
            <div class="w-full md:w-1/2 lg:w-1/3 md:px-1 mb-1 md:mb-2 mix @foreach( $categories as $category ) {{ $category->slug }} @endforeach">
              <div class="bg-white rounded">
                <div class="flex items-center">
                  <div style="width: 66px;">
                    <div class="embed embed-7by10 bg-grey-dark">
                      <img data-src="@if( $thumbnail ) {{ $thumbnail['url'] }} @else @asset('images/document-placeholder.jpg') @endif" class="lozad object-cover" width="66" height="auto" />
                    </div>
                  </div>
                  <div class="p-1">
                    <p class="mb-0-5 text-grey text-sm">
                      {{ $file_size }}
                    </p>
                    <h4 class="text-black mb-0">{{ get_the_title() }} <span class="text-xs text-grey uppercase">{{ $file_type }}</span></h4>
                  </div>
                </div>
                <div class="flex justify-between border-t border-grey-light">
                  <a href="{{ $file['url'] }}" target="_blank" class="inline-block px-1 py-0-75 text-sm text-grey-darker hover:text-grey-darkest">
                    Preview
                  </a>
                  <a href="{{ $file['url'] }}" download class="inline-block px-1 py-0-75 text-sm text-primary hover:text-primary-dark">
                    Download
                  </a>
                </div>
              </div>
            </div>
          @endif
        @endwhile
      </div>
    @else
      <p>
        Sorry, there are currently no download items available.
      </p>
    @endif
    @php wp_reset_query() @endphp
  </div>
</div>

@endsection
