@php
    $images = get_sub_field('images');
    

@endphp

<section class="py-4">
    <div class="container mx-auto items-center">
        <h2 class="text-center text-2xl md:text-4xl">Media</h2>

        <div id="categories" class=" md:flex items-center w-1/5 md:w-auto mx-auto justify-center mb-1 ">
               <a href="categories" class="title-display title-display-left  text-primary uppercase mb-1 mr-1 md:mr-3 text-xs md:text-base" >Gallery</a>
               <a href="categories" class="title-display text-primary mb-1 mr-1 md:mr-3 text-cente text-xs md:text-base" style="color :rgba(102, 112, 124, 1)" >videos</a>
               <a href="categories" class="title-display text-primary mb-1 mr-1 md:mr-3 text-xs md:text-base" style="color :rgba(102, 112, 124, 1)">brochures</a>
               <a href="categories" class="title-display text-primary mb-1 mr-1 md:mr-3 text-xs md:text-base" style="color :rgba(102, 112, 124, 1)">downloads</a>
           </div>

        {{-- <div id="gallery" class="flex items-center w-full mx-auto justify-center no-wrap "> --}}
        <div id="gallery" class="flex flex-wrap justify-center items-start">
           
            
          {{-- @php
              $i = 0;
          @endphp
            @while (have_rows("images"))
            @php
            the_row();
            $i++;
            $image = get_sub_field("image")    
            @endphp
            @if($i % 2 == 0)
            <div class="w-full md:w-1/3 px-1 mb-2">
                <div class="embed embed-1by1">
                    <img class="object-cover absolute w-full h-full inset-0" src="{{ $image['url']  }}">
                </div>
            </div>
            @else
            <div class="w-full md:w-1/3 px-1 mb-2">
                <div class="embed embed-4by3">
                    <img class="object-cover absolute w-full h-full inset-0" src="{{ $image['url']  }}">
                </div>
            </div>
            @endif
            
                
            @endwhile --}}



            @php
            $i = 0;
        @endphp
          @while (have_rows("images"))
          @php
          the_row();
          $i++;
          $image = get_sub_field("image")    
          @endphp
          @if($i % 2 == 0)
          
            <div class="w-1/2 md:w-1/3 px-1 mb-2">
                <div class="embed embed-4by3 md-embed-1by1">
                    <img class="object-cover absolute w-full h-full inset-0" src="{{ $image['url']  }}">
                </div>
            </div>
            @else

            @if($i == 4 || $i == 6)
            <div class="w-1/2 md:w-1/3 px-1 ">
                <div class="embed embed-4by3">
                    <img class="object-cover absolute w-full h-full inset-0" src="{{ $image['url']  }}">
                </div>
            </div>
            @else
            <div class="w-1/2 md:w-1/3 px-1 -mb-5 ">
                <div class="embed embed-4by3">
                    <img class="object-cover absolute w-full h-full inset-0" src="{{ $image['url']  }}">
                </div>
            </div>
            @endif
           
          @endif
          

          @endwhile


       
                
                

            


        </div>
    </div>


</section>





