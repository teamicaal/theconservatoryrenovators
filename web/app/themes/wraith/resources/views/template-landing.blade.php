{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')
  @if( function_exists('get_field') && have_rows('blocks_landing') )
    @while( have_rows('blocks_landing') )
      @php the_row(); @endphp

      @if( get_row_layout() == 'landing_form' )
        @include('partials.flexible-content-landing.form-landing')
      @endif
      @if( get_row_layout() == 'key_features' )
        @include('partials.flexible-content-landing.key-features')
      @endif
      @if( get_row_layout() == 'alternating_content' )
        @include('partials.flexible-content-landing.alternating-content')
      @endif
      @if( get_row_layout() == 'cta_block' )
        @include('partials.flexible-content-landing.cta-block')
      @endif

      @if( get_row_layout() == 'gallery_carousel' )
        @include('partials.flexible-content-landing.gallery-carousel')
      @endif

    @endwhile
  @endif
@endsection
