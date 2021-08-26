@php
$script_header = get_field('script_header', 'option');
$script_schema_global = get_field('script_schema_global', 'option');
@endphp
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preload" src="@asset('fonts/roboto/Roboto-Regular.woff2')" />
  <link rel="preload" src="@asset('fonts/oswald/Oswald-Regular.woff2')" />
  @php wp_head() @endphp
  {!! $script_header ? $script_header : null !!}
  {!! $script_schema_global ? $script_schema_global : null !!}
  @if( is_user_logged_in() )
  <style>
    #wpadminbar {
      opacity: 0;
      transition: all .2s ease;
    }
    #wpadminbar:hover {
      opacity: 1;
    }
  </style>
  @endif
</head>
