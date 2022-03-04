<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  @php $background = get_field('background_login', 'option') @endphp
  {!! $background ? '<link rel="preload" src="' . $background['sizes']['lozad'] . '" type="image/jpg" />' : null !!}
  <body @php body_class('bg-grey-lightest') @endphp>
    @php do_action('get_header') @endphp
    @if( $background )
      <img src="{{ $background['sizes']['lozad'] }}" data-src="{{ $background['url'] }}" alt="Login" class="lozad absolute w-full h-full inset-0 object-cover duration-1000" />
    @endif
    <main id="primary" class="main content-area main-wrappe overflow-y-scroll">
      @yield('content')
    </main>
    @php
    do_action('get_footer');
    wp_footer();
    @endphp
  </body>
</html>