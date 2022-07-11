@php
    $map = get_field('global_map', 'option');
@endphp
<div class="sm:p-4 lg:p-8">
    <iframe src="{{ $map }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>