@if ( !is_page( array(13, 825) ) )
@if(have_rows('ctas', 'option'))
<div class="fixed-side  text-white">
  @while (have_rows('ctas' ,'option'))
  @php
  the_row();
    $icon = get_sub_field('icon');
    $label = get_sub_field('label');
    $link = get_sub_field('link');
  @endphp
  <a class="one-cta" href="{!! $link !!}">
    <div class="one-side bg-cta">
      <div class="side-content">
        <div class="icon-box">
          <i class="fas fa-{!! $icon !!}"></i>
        </div>
        <p>{!! $label !!}</p>
      </div>
    </div>
  </a>
  @endwhile
</div>
@endif
@endif