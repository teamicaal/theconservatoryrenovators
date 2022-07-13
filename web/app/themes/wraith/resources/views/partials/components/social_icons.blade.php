@if( $social_facebook && get_field('social_facebook_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_facebook }}" target="_blank" class="text-primary inline-block px-2 py-3">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          @endif
          @if( $social_twitter && get_field('social_twitter_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_twitter }}" target="_blank" class="text-primary inline-block px-2 py-3">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          @endif
          @if( $social_instagram && get_field('social_instagram_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_instagram }}" target="_blank" class="text-primary inline-block px-2 py-3">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          @endif
          @if( $social_youtube && get_field('social_youtube_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_youtube }}" target="_blank" class="text-primary inline-block px-2 py-3">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          @endif
          @if( $social_pinterest && get_field('social_pinterest_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_pinterest }}" target="_blank" class="text-primary inline-block px-2 py-3">
              <i class="fab fa-pinterest"></i>
            </a>
          </li>
          @endif
          @if( $social_linkedin && get_field('social_linkedin_display', 'option') )
          <li class="inline-block text-sm">
            <a href="{{ $social_linkedin }}" target="_blank" class="text-primary inline-block px-2 py-3">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          @endif
        </ul>