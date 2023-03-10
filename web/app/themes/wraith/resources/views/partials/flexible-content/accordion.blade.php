@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
$faq_schema = get_sub_field('faq_schema');
$custom_class = get_sub_field('custom_class');
@endphp

<section id="accordion" class="{!! $custom_class ? $custom_class : ' '; !!} ">
    <div class="relative mx-auto flex lg:py-20 py-12 flex-wrap justify-around {{ $faq_schema ? 'block' : null }}">
        <div class="lg:w-3/4 w-full lg:mx-0 mx-4 flex flex-wrap justify-around items-center relative z-10">
            <div class="w-full relative mb-4 md:mb-0 md:pr-8 pr-0 md:w-2/5 z-20">
                <h3 class="title-display title-display-left text-base text-primary">{!! $subtitle !!}</h3>
                <h2 class="text-3xl lg:text-4xl text-black mt-4">{{ $title ? $title : "FAQ's" }}</h2>
                <div class="child-p:text-black text-sm mt-4">{!! $paragraph ? $paragraph : null !!}</div>
            </div>
            @if ( have_rows( 'accordion_items' ) )
            @php
            $i = 0 ;
            @endphp
            <div class="w-full md:w-3/5 z-20">
                @while ( have_rows( 'accordion_items' ) )
                @php
                the_row();
                $i++;
                $title = get_sub_field('accordion_title');
                $accordion_paragraph = get_sub_field('accordion_paragraph');
                @endphp

                @if($faq_schema)
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion {{ $i == 1 ? 'active' : null }}">
                    <h4 itemprop="name" class="accordionTitle p-4 bg-neutral-200 text-tertiary mb-0 z-10 hover:bg-blue-400 hover:text-white cursor-pointer hover:drop-shadow-lg">{{ $title }}</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordionBody p-4 -mt-2 pt-6 mb-3 z-0 border border-gray-200 rounded text-sm bg-white">
                        <div itemprop="text">{!! $accordion_paragraph !!}</div>
                    </div>
                </div>
                @else
                <div class="accordion {{ $i == 1 ? 'active' : null }}">
                    <h4 class="accordionTitle p-4 bg-neutral-200 text-tertiary mb-0 z-10 hover:bg-blue-400 hover:text-white cursor-pointer hover:drop-shadow-lg">{{ $title }}</h4>
                    <div class="accordionBody p-4 -mt-2 pt-6 mb-3 z-0 border border-gray-200 rounded text-sm bg-white">{!! $accordion_paragraph !!}</div>
                </div>
                @endif
                @endwhile
            </div>
            @endif
        </div>
    </div>

</section>