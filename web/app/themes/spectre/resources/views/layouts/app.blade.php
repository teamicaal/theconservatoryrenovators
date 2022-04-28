<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <main id="primary" class="main content-area main-wrapper">
      @yield('content')
    </main>
    @include('partials.footer')
    @php
    do_action('get_footer');
    wp_footer();
    $script_footer = get_field('script_footer', 'option');
    @endphp
    {!! $script_footer ? $script_footer : null !!}
  </body>
</html>