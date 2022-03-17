<?php $__env->startSection('content'); ?>

  <section id="basket" class="py-8">
    <div class="container mx-auto items-center ">

      <h2 class="text-4xl mb-8">
        Basket
      </h2>

      <div class="flex flex-wrap">

        <div id="primary" class="w-full lg:w-3/5 xl:w-3/4 lg:pr-8">

          <hr class="w-full text-primary my-4">

          
          <div class="flex w-full justify-between">
           <div class="flex flex-wrap">
            <div class="w-24 lg:w-48 mr-4 lg:mr-8">
              <div class="mb-1 embed embed-1by1 bg-gray-100 rounded-sm overflow-hidden"></div>
            </div>
            <div class="flex flex-col pt-2 lg:pt-4">
              <h2 class="text-black-800 text-lg font-bold mb-2 lg:mb-4">Basic T-shirt</h2>
              <div class="flex items-center justify-center text-sm lg:text-base">
                <p>Black</p>
                <p class="border-l border-gray-400 pl-4 ml-4">Large</p>
              </div>
              <h3 id="price" class="text-black-800 font-bold lg:text-xl mb-0">£24.00</h3>
              <div class="flex mt-2 text-sm lg:text-base">
                <i class="fa fa-check text-primary mt-0.5"></i>
                <p class="px-4 m-0 p-0">In Stock<p>
              </div>
            </div>
           </div>
           <div class="flex flex-wrap items-start">
             <select id="items" class="px-4 py-2 rounded-sm mr-6 border border-gray-200 rounded-sm">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
             </select>
             <i class="fa fa-times text-gray-500"></i>
           </div>
          </div>
          <hr class="w-full text-primary my-4">
          

        </div>

        <div id="side-checkout" class="w-full lg:w-2/5 xl:w-1/4 bg-gray-100 rounded-t lg:rounded-sm">
          <div class="p-2 lg:p-8 flex flex-wrap justify-between items-center lg:block">
            <div>
              <h3 class="text-xl text-bold mb-4">Order Summary</h3>
              <div class="flex flex-row w-full justify-between text-center my-2">
                <p class="text-gray-800 mb-0">Subtotal</p>
                <p class="text-gray-800 mb-0">£104.00</p>
              </div>
              <hr class="w-full text-primary mb-1 ">
              <div class="flex flex-row w-full justify-between my-2">
                <p class="text-gray-800 mb-0">Shipping estimate</p>
                <p class="text-gray-800 mb-0">£4.00</p>
              </div>
              <hr class="w-full text-primary mb-1">
              <div class="flex flex-row w-full justify-between my-2">
                <p class="text-gray-800 mb-0">VAT</p>
                <p class="text-gray-800 mb-0">£25.60</p>
              </div>
              <hr class="w-full text-primary mb-1">
              <div class="flex flex-row w-full justify-between my-2">
                <p class="lg:font-bold text-xl mb-0">Total</p>
                <p class="font-bold text-xl text-gray-900 mb-0">£129.60</p>
              </div>
            </div>

            <a href="#" class="px-4 py-2 lg:px-7 lg:py-5 uppercase tracking-widest text-sm rounded lg:w-full inline-block text-center text-white bg-primary hover:bg-primary-dark lg:mt-4">Checkout</a>

          </div>
        </div>

        <div id="checkout-fixed" class="w-full bg-gray-100 rounded-t fixed bottom-0 left-0 z-20">
          <div class="p-2 lg:p-8 flex flex-wrap justify-between items-center lg:block">
            <div>
              <div class="flex flex-row w-full justify-between items-center">
                <button id="checkout-summary-toggle" class="mr-2 lg:hidden px-2 pt-2 pb-1 focus:outline-none">
                  <i class="fa fa-chevron-up"></i>
                </button>
                <p class="lg:font-bold text-md lg:text-xl mr-2 lg:mr-0 mb-0">Total</p>
                <p class="font-bold text-md lg:text-xl text-gray-900 mb-0">£129.60</p>
              </div>
            </div>
            <a href="#" class="px-4 py-2 lg:px-7 lg:py-5 uppercase tracking-widest text-sm rounded lg:w-full inline-block text-center text-white bg-primary hover:bg-primary-dark lg:mt-4">Checkout</a>
          </div>
        </div>

        <div id="checkout-summary-fixed" class="w-full bg-gray-100 rounded-t fixed left-0 p-4 z-10 transition shadow-lg">
          <h3 class="text-xl text-bold mb-4">Order Summary</h3>
          <div class="flex flex-row w-full justify-between text-center my-2">
            <p class="text-gray-800 mb-0">Subtotal</p>
            <p class="text-gray-800 mb-0">£104.00</p>
          </div>
          <hr class="w-full text-primary mb-1 ">
          <div class="flex flex-row w-full justify-between my-2">
            <p class="text-gray-800 mb-0">Shipping estimate</p>
            <p class="text-gray-800 mb-0">£4.00</p>
          </div>
          <hr class="w-full text-primary mb-1">
          <div class="flex flex-row w-full justify-between my-2">
            <p class="text-gray-800 mb-0">VAT</p>
            <p class="text-gray-800 mb-0">£25.60</p>
          </div>
          <hr class="w-full text-primary mb-1">
        </div>

      </div>

    </div>

    <div class="py-12">
      <div class="container !px-0 mx-auto">
        <h2 class="text-3xl my-8 text-black font-light px-4 lg:px-0">
          You May Also Like...
        </h2>
        <div class="flex lg:flex-wrap lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-4">

          <div class="w-64 lg:w-1/4 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <div class="mb-1 embed embed-1by1 bg-gray-100"></div>
            <div class="flex flex-col">
              <h2 class="text-gray-800 tracking-wide font-light text-xl mb-1">Wool Scarf</h2>
              <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
            </div>
           </div>

          <div class="w-64 lg:w-1/4 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <div class="mb-1 embed embed-1by1 bg-gray-100"></div>
            <div class="flex flex-col">
              <h2 class="text-gray-800 tracking-wide font-light text-xl mb-1">Wool Scarf</h2>
              <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
            </div>
           </div>

          <div class="w-64 lg:w-1/4 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <div class="mb-1 embed embed-1by1 bg-gray-100"></div>
            <div class="flex flex-col">
              <h2 class="text-gray-800 tracking-wide font-light text-xl mb-1">Wool Scarf</h2>
              <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
            </div>
           </div>

          <div class="w-64 lg:w-1/4 mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <div class="mb-1 embed embed-1by1 bg-gray-100"></div>
            <div class="flex flex-col">
              <h2 class="text-gray-800 tracking-wide font-light text-xl mb-1">Wool Scarf</h2>
              <h3 id="price" class="text-black-800 font-bold text-xl">£24.00</h3>
            </div>
           </div>

        </div>
      </div>
    </div>
  </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/template-basket.blade.php ENDPATH**/ ?>