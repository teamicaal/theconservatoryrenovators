@if( function_exists('get_field') )
  @php
  $logo = get_field('logo', 'option');
  $logo_retina = get_field('logo_retina', 'option');
  $icon = get_field('icon', 'option');
  $icon_retina = get_field('icon_retina', 'option');
  $brand_phone = get_field('brand_phone', 'option');
  $brand_phone_alt = get_field('brand_phone_alt', 'option');
  $brand_fax = get_field('brand_fax', 'option');
  $brand_email = get_field('brand_email', 'option');
  $social_facebook = get_field('social_facebook', 'option');
  $social_twitter = get_field('social_twitter', 'option');
  $social_instagram = get_field('social_instagram', 'option');
  $social_youtube = get_field('social_youtube', 'option');
  $social_linkedin = get_field('social_linkedin', 'option');
  $social_pinterest = get_field('social_pinterest', 'option');
  @endphp
@endif
<header class="banner fixed z-20 top-0 left-0 right-0 w-full">
  <div id="toolbar" class="bg-grey-lightest hidden lg:block">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <ul class="list-reset">
          @if( $brand_phone )
          <li class="inline-block text-sm mr-2">
            <a href="tel:{{ $brand_phone }}">
              <i class="text-primary fa fa-phone inline-block float-left mr-1"></i>
              <span class="table-cell text-grey-darker font-body">{{ $brand_phone }}</span>
            </a>
          </li>
          @endif
          @if( $brand_email )
          <li class="inline-block text-sm mr-2">
            <a href="mailto:{{ $brand_email }}">
              <i class="text-primary fa fa-envelope-open inline-block float-left mr-1"></i>
              <span class="table-cell text-grey-darker font-body">{{ $brand_email }}</span>
            </a>
          </li>
          @endif
          @if( $social_facebook && get_field('social_facebook_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_facebook }}" class="text-primary inline-block px-1 py-0-75">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          @endif
          @if( $social_twitter && get_field('social_twitter_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_twitter }}" class="text-primary inline-block px-1 py-0-75">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          @endif
          @if( $social_instagram && get_field('social_instagram_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_instagram }}" class="text-primary inline-block px-1 py-0-75">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          @endif
          @if( $social_youtube && get_field('social_youtube_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_youtube }}" class="text-primary inline-block px-1 py-0-75">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          @endif
          @if( $social_pinterest && get_field('social_pinterest_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_pinterest }}" class="text-primary inline-block px-1 py-0-75">
              <i class="fab fa-pinterest"></i>
            </a>
          </li>
          @endif
          @if( $social_linkedin && get_field('social_linkedin_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_linkedin }}" class="text-primary inline-block px-1 py-0-75">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          @endif
        </ul>
        <div class="nav-toolbar nav-has-dropdowns">
          @if (has_nav_menu('toolbar'))
            {!! wp_nav_menu(['theme_location' => 'toolbar', 'menu_class' => 'nav nav-has-dropdowns list-reset']) !!}
          @endif
        </div>
      </div>
    </div>
  </div>
  <div id="header">
    <div class="bg-white">
      <div class="container mx-auto flex items-center justify-between py-0-5 lg:py-0">
        {!! $brand_phone ? '<a href="tel:' . $brand_phone . '" class="lg:hidden p-0-5 -ml-0-5"><i class="fa fa-phone"></i></a>' : null; !!}
        <a class="brand border-0" href="{{ home_url('/') }}">
          @if( $logo )
          <img data-src="{!! $logo['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $logo_retina ? ' data-srcset="' . $logo['url'] . ' 1x, ' . $logo_retina['url'] . ' 2x"' : null !!} width="auto" height="50" class="lozad hidden lg:inline-block">
          @else
          {{ get_bloginfo('name', 'display') }}
          @endif
          @if( $icon )
          <img data-src="{!! $icon['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $icon_retina ? ' data-srcset="' . $icon['url'] . ' 1x, ' . $icon_retina['url'] . ' 2x"' : null !!} width="32" height="32" class="lozad lg:hidden">
          @else
          {{ get_bloginfo('name', 'display') }}
          @endif
        </a>
        <button id="nav-primary-toggle" type="button" class="lg:hidden outline-none p-0-5 -mr-0-5"><i class="fa fa-bars"></i></button>
        <div class="nav-backdrop lg:hidden fixed w-full right-0 z-10 transition invisible opacity-0"></div>
        <nav class="nav-primary nav-has-dropdowns">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav relative overflow-y-scroll lg:overflow-visible z-20']) !!}
          @endif
        </nav>
      </div>
    </div>
    <div id="cookie-notice" style="visibility: hidden; opacity: 0; pointer-events: none; height: 0;" class="md:fixed md:left-2 md:bottom-2 w-full transition">
      <div class="p-1 md:p-2 relative bg-white rounded-sm shadow-lg text-center md:text-left">
        <button class="cookie-notice-dismiss hidden md:inline-block text-grey-darkest hover:text-green transition focus:outline-none px-0-5 py-0-25 absolute top-1 right-1"><i class="fa fa-times fa-sm"></i></button>
        <p class="text-sm text-grey-dark mb-0 md:pr-1">
          We use cookies to improve your experience. By using our site you are agreeing to our <a href="/cookie-policy" class="text-grey-darker border-none">Cookie Policy</a>.
        </p>
        <button class="cookie-notice-dismiss md:absolute md:right-1 bottom-0 px-2 md:px-0-25 md:py-0-75 inline-block text-primary hover:text-green transition text-sm focus:outline-none mt-0-25"><span class="md:hidden">Tap to accept & close</span><span class="hidden md:inline">Accept & Close</span></button>
      </div>
    </div>
  </div>
</header>
