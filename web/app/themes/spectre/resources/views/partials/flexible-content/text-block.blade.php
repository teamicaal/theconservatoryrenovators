@php
$custom_class = get_sub_field('custom_class');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$content = get_sub_field('content');
@endphp

<section class="section_text-block{!! $custom_class ? ' ' . $custom_class : ' md:py-24 py-20' !!}">
  <div class="container mx-auto">
    <div class="xl:w-3/5 lg:w-3/4 w-full text-center mx-auto">
      {!! $subtitle ? '<h6 class="title-display text-gray-400 mb-4">' . $subtitle . '</h6>' : null !!}
      {!! $title ? '<h2 class="text-4xl mb-8">' . $title . '</h2>' : null !!}
      {!! $content ? $content : null !!}
    </div>
  </div>
</section>
