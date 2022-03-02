@php
    $image = get_sub_field('image');
@endphp
{{-- @asset('images/document-placeholder') --}}
<section class="md:px-2 overflow-hidden">
<div class="bg-grey-lightest pt-4 pb-2">
    <div class="container mx-auto px-0 lg:px-1 text-center">
        {{-- <img src="{{ @asset ('images/document-placeholder') }}" alt="" id="featured-img"> --}}

        
        <div class="flex no-wrap">
            @if( $image )
                <div class="flex-initial w-full md:w-1/3">
                    <img src="{{ $image['url'] }}">
                </div>
            @endif
            <div id="products" class="flex w-full flex-1 flex-col max-w-3xl ml-3 mt-5 ">
               <div id="categories" class="w-full flex flex-col md:flex-row text-left md:w-2/5 pl-2 ">

                   <a href="categories" class="flex-1 title-display title-display-left text-primary mb-1">cat1</a>
                   <a href="categories" class="flex-1 title-display text-primary mb-1" >cat2</a>
                   <a href="categories" class="flex-1 title-display text-primary mb-1">cat3</a>
               </div>
               <h2 class="text-2xl md:text-4xl mb-2 text-left w-2/3 pl-2">Explore Our Premium Products</h2>
                @if( have_rows('pages') )
                <div class="flex md:flex-wrap lg:justify-center scroll-x-proximity overflow-x-scroll lg:overflow-hidden lg:-mx-1">
                    @while( have_rows('pages') )
                    @php
                    the_row();
                    $page = get_sub_field('page');
                    $custom_title = get_sub_field('custom_title');
                    @endphp
                    @if( $page )
                        <div class="w-16 md:w-1/3 mb-1 px-1 scroll-align-start mb-2 " style="flex: 0 0 auto;">
                        <a href="{{ get_the_permalink($page->ID) }}" class="embed embed-4by3 rounded-sm mb-1">
                            <img data-src="{{ get_the_post_thumbnail_url($page->ID) }}" src="{{ get_the_post_thumbnail_url($page->ID, 'lozad') }}" alt="{!! $custom_title ? $custom_title : $page->title; !!}" class="lozad object-cover-absolute" />
                        </a>
                        <div class="bg-white p-1 sx:p-0.5 p-md-3">
                            <h4 class="text-lg mb-0">{!! $custom_title ? $custom_title : get_the_title(); !!}</h4>
                            <a href="{{ get_the_permalink($page->ID) }}" class="uppercase font-display text-xs   hover:text-black mb-1">Learn More</a>
                        </div>
                        </div>
                    @endif
                    @endwhile
                </div>
                @endif

            </div>
        </div>

    </div>
</div>

</section>

