@php
  $title = get_sub_field('title');
  $content = get_sub_field('content')
@endphp


<section id="ctas-card" class="bg-grey-lightest pb-8">
  <div class="container mx-auto">
    <div class="bg-white shadow-card rounded-lg text-center px-2 lg:px-3 py-3 w-full lg:w-5/6 mx-auto">
      <h2 class="mb-1 font-bold text-3xl">{{ $title }}</h2>
      <p class="text-grey-darker">{{ $content }}</p>
      @php $i = 0; @endphp
      <div class="mt-2">
        @if (have_rows('buttons'))
          @while (have_rows('buttons'))
          @php
            the_row();
            $i++;
            $label = get_sub_field('button_label');
            $link = get_sub_field('button_link');
          @endphp

            @if ($i == 2)
              <a href="{{ $link }}" class="btn inline-block bg-grey-darkest border-none p-1">{{ $label }}</a>
            @else
              <a href="{{ $link }}" class="btn inline-block bg-primary border-none p-1">{{ $label }}</a>
            @endif

          @endwhile
        @endif
      </div>
    </div>
  </div>
</section>
