<section class="py-8 lg:py-12">
	<div class="container mx-auto">
		@php $i = 0; @endphp
		@while(have_rows('rows'))
		@php
			the_row();
			$i++;
			$title = get_sub_field('title');
			$image = get_sub_field('image');
			$image_alt = get_sub_field('image_alt');
			$paragraph = get_sub_field('paragraph');
		@endphp
			<div class="flex py-4 lg:py-8 flex-col {{ $i % 2 == 0 ? 'lg:flex-row-reverse flex-col' : 'lg:flex-row flex-col' }}">
				@if( $image )
					<div class="w-full lg:w-1/2">
						<div class="embed-4by3 rounded-sm overflow-hidden">
							<img data-src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class="lozad object-fit-cover w-full h-full inset-0">
						</div>
					</div>
				@endif
				<div class="w-full lg:w-1/2 px-4 lg:px-16">
					<div class="flex flex-col items-start justify-center h-full">
						{!! $title ? '<h2 class="mb-4 lg:mb-8 text-gray-900 text-3xl">' . $title . '</h2>' : null !!}
						{!! $paragraph ? '<p class="mb-0">' . $paragraph . '</p>' : null !!}
					</div>
				</div>
			</div>
		@endwhile
	</div>
</section>