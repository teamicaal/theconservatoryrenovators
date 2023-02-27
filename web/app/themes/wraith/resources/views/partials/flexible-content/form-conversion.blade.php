@php
  $coloured_bg = get_sub_field('coloured_bg');
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
@endphp

<section id="form-landing" class="py-16  {{ $coloured_bg ? 'bg-primary' : 'bg-white' }}">
  <div class="container mx-auto">
    <div class="flex flex-col lg:flex-row lg:flex-row-reverse lg:items-start gap-6">
      <div class="w-full lg:w-2/3 lg:pl-4 xl:pl-0 right">
      
        <div class="bg-gray-100 rounded-sm  w-full xl:w-3/4 ml-auto h-full py-4 pl-4 lg:py-8 lg:pl-8 lg:pr-4">
          <form class="conversion-form h-full" method="post">
            <div class="mr-4">
              <div class="bg-gray-200 mb-8 w-full h-[6px] relative">
                <div class="progress-bar rounded-full bg-green-500 absolute top-0 left-0 h-[6px] max-w-full transition" style="width: 20%;"></div>
              </div>
            </div>
            <div class="w-full">
              <h1 class="font-bold mb-4 text-3xl lg:text-5xl">{{ $title }}</h1>
              <h3 class="text-xl mb-0 text-gray-800">{{ $subtitle }}</h3>
              @if( have_rows('usp_list') )
              <ul class="list-none py-0 px-0 mt-8">
                @while( have_rows('usp_list') )
                @php
                the_row();
                $usp = get_sub_field('usp');
                @endphp
                <li class="mb-4 text-lg flex items-center text-gray-900">
                  <span class="mr-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="25px" height="25px" viewBox="0 -21 512.016 512" width="512pt">
                      <path
                        d="m234.667969 469.339844c-129.386719 0-234.667969-105.277344-234.667969-234.664063s105.28125-234.6679685 234.667969-234.6679685c44.992187 0 88.765625 12.8203125 126.589843 37.0976565 7.425782 4.78125 9.601563 14.679687 4.820313 22.125-4.796875 7.445312-14.675781 9.597656-22.121094 4.820312-32.640625-20.972656-70.441406-32.042969-109.289062-32.042969-111.746094 0-202.667969 90.921876-202.667969 202.667969 0 111.742188 90.921875 202.664063 202.667969 202.664063 111.742187 0 202.664062-90.921875 202.664062-202.664063 0-6.679687-.320312-13.292969-.9375-19.796875-.851562-8.8125 5.589844-16.621094 14.378907-17.472656 8.832031-.8125 16.617187 5.589844 17.472656 14.378906.722656 7.53125 1.085937 15.167969 1.085937 22.890625 0 129.386719-105.277343 234.664063-234.664062 234.664063zm0 0" />
                      <path
                        d="m261.332031 288.007812c-4.09375 0-8.191406-1.558593-11.304687-4.691406l-96-96c-6.25-6.253906-6.25-16.386718 0-22.636718s16.382812-6.25 22.632812 0l84.695313 84.695312 223.335937-223.339844c6.253906-6.25 16.386719-6.25 22.636719 0s6.25 16.382813 0 22.632813l-234.667969 234.667969c-3.136718 3.113281-7.230468 4.671874-11.328125 4.671874zm0 0" />
                      </svg></span>
                  {{ $usp }}
                </li>
                @endwhile
              </ul>
              @endif
            </div>
            @php
              $custom_step = false;
              $i=0;
            @endphp
            @if (have_rows('form_steps'))
              @php
                $custom_step = true;
              @endphp
              @while (have_rows('form_steps'))
                @php
                  the_row();
                  $i++;
                  $step_title = get_sub_field('step_title');
                @endphp
                <div class="form-pane{{ $i == 1 ? ' active' : null }}">
                  <div class="flex flex-wrap mb-8 pr-4 border-t border-gray-300 pt-4">
                    <div class="w-3/5">
                      <h2 class="text-xl font-medium md:text-xl mb-0">{{ $step_title }}</h2>
                    </div>
                    <div class="w-2/5 flex items-center justify-end">
                      <div class="bg-white rounded-sm">
                        <span class="py-4 px-4 md:px-8 text-md block font-bold text-gray-800 text-sm md:text-base">STEP {{$i}}</span>
                      </div>
                    </div>
                  </div>
                  @php
                    $count_step_options = count( get_sub_field('step_options') );
                    $ii = 0;
                  @endphp
                  @if( have_rows('step_options') )
                    <div class="flex flex-wrap">
                      @while (have_rows('step_options'))
                        @php
                          the_row();
                          $ii++;
                          $label = get_sub_field('label');
                        @endphp
                        <div class="w-full sm:w-1/2">
                          <div class="form-pane-option{{ $ii == $count_step_options ? null : ' mb-4' }} px-8 py-4 md:py-6 text-left bg-white mr-4 border-2 border-gray-200 rounded-sm hover:border-gray-500 transition cursor-pointer" data-name="step_{{ $i }}" data-value="{{ $label }}" data-pane="{{ $i }}">
                            <h5 class="mb-0 lg:text-xl text-lg">{{ $label }}</h5>
                            <span class="text-gray-600 text-sm">Select this option</span>
                          </div>
                        </div>
                      @endwhile
                    </div>
                  @endif
                  <h6 class="pane-option-response mb-0 text-red-500 text-sm"></h6>
                  <div class="pr-4 mt-4 hidden sm:block">
                    <button type="button" class="w-full rounded btn !bg-green-500 !text-white form-pane-submit">CONTINUE</button>
                  </div>
                </div>
              @endwhile
            @endif
            {{-- Postcode --}}
            <div class="form-pane h-full{{ $custom_step ? null : ' active' }}">
              <div class="flex flex-wrap items-center mb-8 pr-4">
                <div class="w-3/5">
                  <h2 class="text-xl font-medium md:text-xl mb-0">Where are you located?</h2>
                </div>
                <div class="w-2/5 flex items-center justify-end">
                  <div class="bg-white rounded-sm">
                    <span class="py-4 px-4 md:px-8 text-md block font-bold text-gray-800 text-sm md:text-base">STEP {{$i + 1}}</span>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="mb-8 py-4 px-8 sm:px-8 mr-4">
                  <div class="w-full lg:w-5/6 mx-auto">
                    <h4 class="text-center text-gray-600 text-md">Please enter your postcode below, so we can check that we cover your area.</h4>
                  </div>
                  <div class="w-full lg:w-2/3 mx-auto">
                    <input class="postcode-input w-full rounded border border-gray-dark p-4 rounded-md" type="text" name="postcode" placeholder="Postcode">
                    <h6 class="postcode-response text-red-500 text-sm mb-0 mt-4"></h6>
                  </div>
                </div>
                <div class="pr-4">
                  <button type="button" class="validate-postcode w-full rounded p-4 bg-green-500 text-white">CONTINUE</button>
                </div>
              </div>
            </div>

            {{-- Details --}}
            <div class="form-pane h-full">
              <div class="flex flex-wrap items-center mb-8 pr-4">
                <div class="w-3/5">
                  <h2 class="text-xl font-medium md:text-xl mb-0">Submit your quote request</h2>
                </div>
                <div class="w-2/5 flex items-center justify-end">
                  <div class="bg-white rounded-sm">
                    <span class="py-4 px-4 md:px-8 text-md block font-bold text-gray-800 text-sm md:text-base">FINAL STEP</span>
                  </div>
                </div>
              </div>
              <div class="mb-4 pr-4">
                <input class="w-full border border-gray-dark p-4 rounded-md mb-4 details-input" type="text" name="first_name" placeholder="First Name">
                <input class="w-full border border-gray-dark p-4 rounded-md mb-4 details-input" type="text" name="last_name" placeholder="Last Name">
                <input class="w-full border border-gray-dark p-4 rounded-md mb-4 details-input" type="email" name="email" placeholder="Email">
                <input class="w-full border border-gray-dark p-4 rounded-md details-input" type="tel" name="phone" placeholder="Phone Number">
                <h6 class="details-response mb-0 text-red-500 text-sm"></h6>
              </div>
              <div class="pr-4">
                <div class="flex justify-between items-center mb-4">
                  <h6 class="text-gray-600 mb-0 text-sm"><svg class="fill-current inline-block" enable-background="new 0 0 24 24" height="16px" width="16px" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z" />
                      </svg> Your information is data protected.</h6>
                  <a class="text-sm text-right" href="/privacy-policy/" target="_blank">Privacy Policy</a>
                </div>
                <button type="submit" class="submit-conversion-form w-full rounded p-4 bg-green-500 text-white">GET MY QUOTE</button>
              </div>
            </div>

            {{-- Thank You --}}
            <div class="form-pane h-full">
              <div class="flex flex-wrap items-center mb-8 pr-4">
                <div class="w-3/5">
                  <h2 class="text-xl font-medium md:text-3xl mb-0">We've recieved your quote application</h2>
                </div>
                <div class="w-2/5 flex items-center justify-end">
                  <div class="bg-white rounded-sm">
                    <span class="py-4 px-4 md:px-8 text-md block font-bold text-gray-800 text-sm md:text-base">THANK YOU</span>
                  </div>
                </div>
              </div>
              <div class="pr-4">
                <p>The team at {!! get_bloginfo('name') !!} appreciate you taking the time to contact us. One of our friendly and knowledgeable advisors will be in touch with you as soon as possible to provide our very best quote.</p>
                <p>We look forward to speaking to you soon,</p>
                <p>The {!! get_bloginfo('name') !!} team.</p>
              </div>
            </div>

          </form>
        </div>

      </div>
      {{-- left --}}

      <div class="w-full lg:w-1/3">
           <div class="slick-offer w-full">
            @if (have_rows('primary_offer'))
              @while (have_rows('primary_offer')) @php the_row(); @endphp
                <div class="flex items-start flex-col">
                  <div class="relative w-[90%] mx-auto h-fit z-10 ">
                    @include('partials.components.ribbon')
                    <p class="text-white absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-100%] max-w-[20rem] font-bold m-0 p-0 whitespace-nowrap "> Window & Door Offer</p>
                  </div>
                    <div class="bg-[#E30617] w-[70%] translate-y-[-12%] shadow-md mx-auto">
                      <div class="child-p:text-white child-p:text-center child-p:text-3xl child-p:leading-relaxed child-p:font-semibold pt-20 pb-8 child-p:m-0 ">@sub('offer')</div>
                      <div class="h-4 w-full bg-white mt-10"></div>
                      <div class="h-1 w-full bg-white mt-1"></div>
                      <div class="h-full w-full flex items-center justify-center py-8 px-4 xs:px-0">
                        <p class=" text-white font-bold text-lg uppercase text-center">@sub('subtitle')</p>
                      </div>
                    </div>

                </div>
              @endwhile
            @endif
           </div>

       </div>

    </div>
  </div>
</section>
<div class="horizontal bg-[#E30617]">
  <div class="flex flex-col lg:flex-row w-full child-div:flex-1 child-div:flex child-div:items-center child-div:justify-center child-div:p-8 child-div:flex-col">
    <div class="bg-[#E30617] child-h4:text-white child-h4:font-bold child-h4:text-xl child-h4:text-center relative z-10">
      @sub('horizontal_offer_right')
    </div>
    <div class="bg-[#548235] child-h4:text-white child-h4:font-bold child-h4:text-xl child-h4:text-center trapezoid">
      @sub('horizontal_offer_left')
    </div>
  </div>
</div>


<script type="text/javascript">
  var icaalLeadGenerationFormValues = {};

  jQuery(function($) {

    var $formPaneCount = $('.form-pane').length - 1;
    var $progressBarInterval = 100 / $formPaneCount;
    var $progressBar = $('.progress-bar');
    $progressBar.css('width', $progressBarInterval + '%');


    $('.conversion-form .form-pane-option').click(function() {
      $('.conversion-form .form-pane-option').removeClass('active');
      $(this).addClass('active');
      $('.pane-option-response').text('');
    });

    // Remove the need for continue button on mobile
    if ($(window).width() < 576) {

      $('.conversion-form .form-pane-option').click(function() {

        var name = $(this).data('name');
        var value = $(this).data('value');
        var pane = null;
        if ($(this).data('pane')) {
          pane = $(this).data('pane');
        }

        icaalLeadGenerationFormValues[name] = value;
        nextPane(pane);
        $('.conversion-form .form-pane-option').removeClass('active');
        $('.pane-option-response').text('');

      });

    } else {

      $('.conversion-form .form-pane-submit').click(function() {

        var name = $('.conversion-form .form-pane-option.active').data('name');
        var value = $('.conversion-form .form-pane-option.active').data('value');
        var pane = null;
        if ($('.conversion-form .form-pane-option.active').data('pane')) {
          pane = $('.conversion-form .form-pane-option.active').data('pane');
        }

        if ($('.conversion-form .form-pane-option.active').length == 1) {
          icaalLeadGenerationFormValues[name] = value;
          nextPane(pane);
          $('.conversion-form .form-pane-option').removeClass('active');
          $('.pane-option-response').text('');
        } else {
          $('.pane-option-response').text('Please select an option from the choices above.');
        }

      });

    }

    function nextPane(pane) {

      var $form = $('.conversion-form');
      var $active = $form.find('.form-pane.active');
      var $next = $active.next();
      var $increment = 1;

      if (pane != null) {
        $next = $form.find('.form-pane').eq(pane);
        $increment = pane - $active.index();
      }

      var $activeIndex = $active.index() + 1;

      $progressBar.css('width', $progressBarInterval * $activeIndex + '%')
      $active.removeClass('active');
      $next.addClass('active');

    }

    $('.validate-postcode').click(function() {

      var $this = $(this);
      var $response = $('.postcode-response');
      var $postcode = $('.postcode-input').val();

      $this.prop('disabled', true);
      $response.empty();
      $('.postcode-input').removeClass('border-red');

      $.ajax({
        url: '//api.postcodes.io/postcodes/' + $postcode,
        method: 'get'
      }).done(function(response) {
        postcode = response.result.postcode;
        icaalLeadGenerationFormValues['postcode'] = postcode;
        nextPane();
      }).fail(function(response) {
        $('.postcode-input').addClass('border-red');
        $response.text('Please enter a valid UK postcode.');
        $this.prop('disabled', false);
      });

    });

    $('.conversion-form .details-input').on('change keyup', function() {
      var name = $(this).attr('name');
      var value = $(this).val();
      icaalLeadGenerationFormValues[name] = value;
    });

    $('.conversion-form').submit(function() {

      var $form = $(this);
      var $submit = $form.find('.submit-conversion-form');
      var $response = $form.find('.details-response');

      icaalLeadGenerationFormValues['screen_width'] = screen.width;
      icaalLeadGenerationFormValues['screen_height'] = screen.height;
      icaalLeadGenerationFormValues['action'] = 'lead_generation_form';

      $submit.prop('disabled', true);
      $response.empty();

      $.ajax({
        url: '//api.clients.icaal.co.uk/forms/API_KEY',
        method: 'post',
        data: icaalLeadGenerationFormValues
      }).done(function(response) {
        nextPane();

        gtag('event', 'Click', {
          'event_category': 'PPC Form Complete',
          'event_label': 'Finished Quote'
        });

      }).fail(function(response) {
        $response.addAlert('danger', '', response.responseJSON.errors);
        $submit.prop('disabled', false);
      });

      return false;
    });


  });
</script>