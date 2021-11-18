<section class="relative lg:py-3 py-2">
	<div class="container mx-auto">
		@php $i = 0; @endphp
		@while(have_rows('rows'))
		@php
			the_row();		
			$i++;
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$copy = get_sub_field('copy');
		@endphp
			<div class="relative w-full flex lg:py-2 py-1 {{ $i % 2 == 0 ? 'lg:flex-row-reverse flex-col' : 'lg:flex-row flex-col' }} flex-col">
				<div class="lg:w-1/2 w-full relative">
					<div class="w-full relative" style="min-height: 50vh;box-shadow: 0 3px 6px rgba(0,0,0,0.16);">
						<img data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="lozad absolute object-cover w-full h-full">
					</div>
				</div>
				<div class="lg:w-1/2 w-full relative lg:px-4 px-1">
					<div class="relative flex flex-col items-start justify-center h-full">
						<h2 class="mb-1 text-primary title-display text-3xl">{{ $title }}</h2>
						<p class="mb-0">{{ $copy }}</p>
					</div>
				</div>
			</div>
		@endwhile
	</div>
</section>