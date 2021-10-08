@if( function_exists('get_field') && have_rows('blocks') )
  @while( have_rows('blocks') )
    @php the_row(); @endphp

    @if( get_row_layout() == 'banner' )
      @include('partials.flexible-content.banner')
    @endif
    @if( get_row_layout() == 'accreditations_row' )
      @include('partials.flexible-content.accreditations-row')
    @endif
    @if( get_row_layout() == 'alternating_content' )
      @include('partials.flexible-content.alternating-content')
    @endif
    @if( get_row_layout() == 'text_block' )
      @include('partials.flexible-content.text-block')
    @endif
    @if( get_row_layout() == 'gallery_text' )
      @include('partials.flexible-content.gallery-text')
    @endif
    @if( get_row_layout() == 'page_links_simple' )
      @include('partials.flexible-content.page-links-simple')
    @endif
    @if( get_row_layout() == 'anchor' )
      @include('partials.flexible-content.anchor')
    @endif
    @if( get_row_layout() == 'form_contact' )
      @include('partials.flexible-content.form-contact')
    @endif
    @if( get_row_layout() == 'gallery_page' )
      @include('partials.flexible-content.gallery-page')
    @endif
    @if( get_row_layout() == 'latest_news' )
      @include('partials.flexible-content.latest-news')
    @endif
    @if( get_row_layout() == 'text_cta')
      @include('partials.flexible-content.text-cta')
    @endif
    @if( get_row_layout() == 'html' )
      {!! get_sub_field('html_content') !!}
    @endif

  @endwhile
@endif
