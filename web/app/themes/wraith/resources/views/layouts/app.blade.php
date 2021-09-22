<!doctype html>
<html {!! get_language_attributes() !!}>
  <body @php body_class() @endphp>
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @hasSection('sidebar')
          <aside class="sidebar">
            @yield('sidebar')
          </aside>
        @endif
      </div>
    </div>
    @include('partials.footer')
    @php
    $script_footer = get_field('script_footer', 'option');
    @endphp
    {!! $script_footer ? $script_footer : null !!}
  </body>
</html>
