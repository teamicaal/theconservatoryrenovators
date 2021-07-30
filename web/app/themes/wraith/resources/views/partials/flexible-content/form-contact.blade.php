@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$details = get_sub_field('details');
@endphp
<section class="md:px-2 md:my-2">
  <div class="bg-grey-lightest pt-4 pb-2 md:pt-6 md:pb-4 lg:pt-8 lg:pb-6">
    <div class="container mx-auto">
      <div class="lg:w-3/4 xl:w-2/3 mx-auto">
        @if( $subtitle )
        <h4 class="title-display{{ $details ? null : ' text-center title-display-center' }} text-primary mb-1">{{ $subtitle }}</h4>
        @endif @if( $title )
        <h2 class="text-4xl mb-2{{ $details ? null : ' text-center' }}">{{ $title }}</h2>
        @endif
        <div class="flex flex-wrap">
          <div class="w-full{!! $details ? ' md:w-2/3 md:pr-2 mb-2 md:mb-0' : null !!}">
            <form class="icaal-contact-form" data-form="contact">
              <div class="response"></div>
              <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 mb-1 md:pr-1">
                  <input name="first_name" type="text" placeholder="First Name*" >
                </div>
                <div class="w-full md:w-1/2 mb-1 md:pl-1">
                  <input name="last_name" type="text" placeholder="Last Name*" >
                </div>
                <div class="w-full mb-1">
                  <input name="email" type="email" placeholder="Email Address*">
                </div>
                <div class="w-full md:w-1/2 mb-1 md:pr-1">
                  <input name="phone" type="tel" placeholder="Phone Number*">
                </div>
                <div class="w-full md:w-1/2 mb-1 md:pl-1">
                  <input name="postcode" type="text" placeholder="Postcode*">
                </div>
                <div class="w-full mb-1">
                  <textarea name="message" placeholder="Message" rows="4"></textarea>
                </div>
                <div class="w-full text-center">
                  <p class="mb-1">
                    * indicates required fields
                  </p>
                  <input class="submit is-valid btn cursor-pointer bg-primary hover:bg-primary-dark text-white hover:bg-primary-dark text-center block lg:inline-block w-full lg:w-auto mb-1" type="submit" value="Send Message"><br />
                  <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
                </div>
              </div>
            </form>
          </div>
          @if( $details )
            <div class="w-full md:w-1/3 lg:w-1/4">
              @include('partials.contact-details', ['colour'=>'dark'])
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
