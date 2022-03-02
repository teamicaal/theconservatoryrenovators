{{--
  Template Name: Basket
--}}

@extends('layouts.app')

@section('content')

  <section id="basket" class="py-2">
    <div class="container mx-auto items-center ">
      <h2 class="text-4xl mb-2">
        Basket
      </h2>

      <div class="grid  grid-cols-8 ">
        <div id="primary" class="flex flex-col col-span-6 mr-2">

          <hr class="w-full text-primary mb-1">

          <div class="flex w-full justify-between ">

           <div class="flex">
            <div style="background-color: rgb(234, 234, 234)" class="w-10 h-12 mr-2"></div>

            
            <div class="flex flex-col">
              <h2 class="text-black-800 font-bold mb-1">Basic T-shirt</h2>
              <div class="flex items-center justify-center">
                <p>Black</p>
                <div class="mx-1 mb-1" style="width:2px; height:100%; background-color:rgb(200, 194, 194);"></div>
                <p>Large</p>
              </div>
              <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
              <div class="flex mt-1 ">
                <i class="fa fa-check text-primary"></i>
                <p class="px-1 m-0 p-0">In Stock<p>
              </div>
            </div>
           </div>

            <div class="flex justify-start">
              <div class="select-wrapper self-start mr-3" > 
                <select  id="items">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
             
              <i class="fa fa-times text-gray-500 text-base"></i>
            </div>

          </div>

          <hr class="w-full text-primary my-1">

          <div class="flex w-full justify-between ">

            <div class="flex">
             <div style="background-color: rgb(234, 234, 234)" class="w-10 h-12 mr-2"></div>
 
             
             <div class="flex flex-col">
               <h2 class="text-black-800 font-bold mb-1">Basic T-shirt</h2>
               <div class="flex items-center justify-center">
                 <p>Black</p>
                 <div class="mx-1 mb-1" style="width:2px; height:100%; background-color:rgb(200, 194, 194);"></div>
                 <p>Large</p>
               </div>
               <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
               <div class="flex mt-1 ">
                 <i class="fa fa-check text-primary"></i>
                 <p class="px-1 m-0 p-0">In Stock<p>
               </div>
             </div>
            </div>
 
            <div class="flex justify-start">
              <div class="select-wrapper self-start mr-3" > 
                <select  id="items">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
             
              <i class="fa fa-times text-gray-500 text-base"></i>
            </div>
 
           </div>
 
           <hr class="w-full text-primary my-1">

           
           <div class="flex w-full justify-between ">

            <div class="flex">
             <div style="background-color: rgb(234, 234, 234)" class="w-10 h-12 mr-2"></div>
 
             
             <div class="flex flex-col">
               <h2 class="text-black-800 font-bold mb-1">Basic T-shirt</h2>
               <div class="flex items-center justify-center">
                 <p>Black</p>
                 <div class="mx-1 mb-1" style="width:2px; height:100%; background-color:rgb(200, 194, 194);"></div>
                 <p>Large</p>
               </div>
               <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
               <div class="flex mt-1 ">
                 <i class="fa fa-check text-primary"></i>
                 <p class="px-1 m-0 p-0">In Stock<p>
               </div>
             </div>
            </div>
 
            <div class="flex justify-start">
              <div class="select-wrapper self-start mr-3" > 
                <select  id="items">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
             
              <i class="fa fa-times text-gray-500 text-base"></i>
            </div>
 
           </div>
 
           <hr class="w-full text-primary my-1">
 

          
        </div>
        <div id="side-checkout" class="col-span-2 bg-gray-100 h-3/5">
          <div class="container mx-auto">

            <div class="flex flex-col py-2">
              <h3 class="text-xl text-bold">Order Summary</h3>
              <div class="flex flex-row w-full justify-between text-center ">
                <h6  class="text-grey-darker">Subtotal</h6>
                <p class="text-grey-darker">£104.00</p>
              </div>
              <hr class="w-full text-primary mb-1 ">
              <div class="flex flex-row w-full justify-between ">
                <h6 class="text-grey-darker">Shipping estimate</h6>
                <p class="text-grey-darker">£4.00</p>
              </div>
              <hr class="w-full text-primary mb-1">
              <div class="flex flex-row w-full justify-between ">
                <h6 class=" text-grey-darker">VAT</h6>
                <p class="text-grey-darker">£25.60</p>
              </div>
              <hr class="w-full text-primary mb-1">
              <div class="flex flex-row w-full justify-between ">
                <h6 class="font-bold text-xl">Total</h6>
              <p class="font-bold text-xl">£129.60</p>
              </div>

              <a href="#" class="text-white text-sm  bg-primary text-center p-1 ">Checkout</a>

            </div>
          </div>
        </div>

      </div>

      <h2 class="text-4xl my-2 text-black font-light ">
        You May Also Like...
      </h2>

      <div class="flex">
        <div class="flex flex-col">
          <div style="background-color: rgb(234, 234, 234)" class="w-20 h-20 h-12 mr-2 mb-1"></div>

          
          <div class="flex flex-col">
            <h2 class="text-grey-darker tracking-wide font-light text-2xl mb-1">Wool Scarf</h2>
            
            <h3 id="price" class="text-black-800 font-bold text-2xl">£24.00</h3>
           
          </div>
         </div>
        <div class="flex flex-col">
          <div style="background-color: rgb(234, 234, 234)" class="w-20 h-20 h-12 mr-2 mb-1"></div>

          
          <div class="flex flex-col">
            <h2 class="text-grey-darker tracking-wide font-light text-2xl mb-1">Wool Scarf</h2>
            
            <h3 id="price" class="text-black-800 font-bold text-2xl">£24.00</h3>
           
          </div>
         </div>
        <div class="flex flex-col">
          <div style="background-color: rgb(234, 234, 234)" class="w-20 h-20 h-12 mr-2 mb-1"></div>

          
          <div class="flex flex-col">
            <h2 class="text-grey-darker tracking-wide font-light text-2xl mb-1">Wool Scarf</h2>
            
            <h3 id="price" class="text-black-800 font-bold text-2xl">£24.00</h3>
           
          </div>
         </div>
        <div class="flex flex-col">
          <div style="background-color: rgb(234, 234, 234)" class="w-20 h-20 h-12 mr-2 mb-1"></div>

          
          <div class="flex flex-col">
            <h2 class="text-grey-darker tracking-wide font-light text-2xl mb-1">Wool Scarf</h2>
            
            <h3 id="price" class="text-black-800 font-bold text-2xl">£24.00</h3>
           
          </div>
         </div>

      </div>

    </div>

  </section>


@endsection