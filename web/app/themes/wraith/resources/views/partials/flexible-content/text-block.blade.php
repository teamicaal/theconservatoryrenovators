@php
$content = get_sub_field('content');
$custom_class = get_sub_field('custom_class');
@endphp
<div class="container mx-auto{!! $custom_class ? ' ' . $custom_class : null; !!}">
  <div class="w-full md:w-5/6 lg:w-3/4 mx-auto">
    {!! $content !!}
  </div>
</div>
