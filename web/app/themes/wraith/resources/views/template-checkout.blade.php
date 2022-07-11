{{--
  Template Name: Checkout
--}}

@extends('layouts.app')

@section('content')

  <section id="checkout" class="py-12">
    <div class="container mx-auto items-center ">


      <div class="flex">


        <div id="primary" class="w-full lg:w-3/5 xl:w-3/4 lg:pr-8">

          <hr class="w-full text-primary my-4">

          {{-- --}}
          <div class="flex w-full justify-between">
           <div class="flex flex-wrap">
            <div class="w-24 lg:w-48 mr-4 lg:mr-8">
              <div class="mb-1 embed-1by1 bg-gray-100 rounded-sm overflow-hidden"></div>
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
          {{-- --}}

          <div class="flex flex-col">
           <div class="flex flex-row w-full justify-between text-center ">
             <p class="text-gray-800 mb-0">Subtotal</p>
             <p class="text-gray-800 mb-0">£104.00</p>
           </div>
           <hr class="w-full text-primary my-2">
           <div class="flex flex-row w-full justify-between ">
             <p class="text-gray-800 mb-0">Shipping estimate</p>
             <p class="text-gray-800 mb-0">£4.00</p>
           </div>
           <hr class="w-full text-primary my-2">
           <div class="flex flex-row w-full justify-between ">
             <p class=" text-gray-800 mb-0">VAT</p>
             <p class="text-gray-800 mb-0">£25.60</p>
           </div>
           <hr class="w-full text-primary my-2">
           <div class="flex flex-row w-full justify-between">
             <p class="font-bold text-xl text-gray-900">Total</p>
             <p class="font-bold text-xl text-gray-900">£129.60</p>
           </div>
         </div>

        </div>


        <div id="side-checkout" class="w-full lg:w-1/2 bg-gray-100 p-4 lg:p-8 rounded-sm">

          {{-- Contact Information --}}
          <div id="contact-information" class="checkout-step active">
            <div class="contact-title">
              <h2 class="text-2xl mb-0">Contact Information</h2>
              <hr class="w-full text-primary my-4">
            </div>

            <div id="pane" class="flex flex-col pane show ">

              <div>

                <form class="icaal-contact-form" data-form="contact">

                  <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 mb-4 md:pr-4">
                      <label for="first_name">First name</label>
                      <input name="first_name" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-4 md:pl-4">
                      <label for="last_name">Last name</label>
                      <input name="last_name" type="text"  >
                    </div>
                    <div class="w-full mb-4">
                      <label for="email">Email address</label>
                      <input name="email" type="email" >
                    </div>
                    <div class="w-full mb-4">
                      <label for="phone">Phone Number</label>
                      <input name="phone" type="tel"  >
                    </div>

                  </div>
                </form>



              </div>
              <button class="mb-4 btn text-white bg-primary hover:bg-primary-dark w-full inline-block text-center toggle">next: shipping information <i class="fas fa-arrow-right"></i></button>

            </div>


          </div>




          {{-- Shipping -information --}}
          <div id="shipping-information" class="checkout-step">
            <div class="shipping-title">
                <h2 class="text-2xl mb-0">Shipping Inforamtion</h2>
                 <hr class="w-full text-primary my-4">
            </div>
            <div id="pane" class="flex flex-col pane hidden">
              <div class="">

                <form class="icaal-contact-form" data-form="contact">

                  <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 mb-4 md:pr-4">
                      <label for="first_name" >First name</label>
                      <input name="first_name"  type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-4 md:pl-4">
                      <label for="last_name">Last name</label>
                      <input name="last_name" type="text"  >
                    </div>
                    <div class="w-full mb-4">
                      <label for="address-1">Email address</label>
                      <input name="address-4" type="text" >
                    </div>
                    <div class="w-full md:w-1/2 mb-4 md:pr-4">
                      <label for="address-2">Address Line 2 <span class="text-gray-800 text-xs">(optional)</span></label>
                      <input name="address-2" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-4 md:pl-4">
                      <label for="city">Town/City</label>
                      <input name="city" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-4 md:pr-4">
                      <label for="county">County</label>
                      <input name="county" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-4 md:pl-4">
                      <label for="post-code">Post Code</label>
                      <input name="post-code" type="text"  >
                    </div>

                   <h3>Shipping Method</h3>

                   <div id="shipping-method" class="flex w-full mb-8">

                    <div class="w-1/2 flex justify-between items-center bg-white rounded-sm border border-primary p-2 lg:px-4 lg:py-3 mr-2">
                      <div>
                        <h6 class="text-base mb-1">Standard</h6>
                        <p class="text-xs mb-0" >3 - 5 business days</p>
                        <p class="text-lg font-bold mb-0">£4.00</p>
                      </div>
                      <i class="fa fa-check text-primary ml-2"></i>
                    </div>

                    <div class="w-1/2 flex justify-between items-center bg-white rounded-sm border border-grey-300 p-2 lg:px-4 lg:py-3 ml-2">
                      <div>
                        <h6 class="text-base mb-1">Express</h6>
                        <p class="text-xs mb-0" >1-2 business days</p>
                        <p class="text-lg font-bold mb-0">£6.50</p>
                      </div>
                      <i class="fa fa-check text-primary ml-2 hidden"></i>
                    </div>

                   </div>

                  </div>
                </form>




              </div>
              <button class="mb-4 btn text-white bg-primary hover:bg-primary-dark w-full inline-block text-center toggle">next: billing information <i class="fas fa-arrow-right"></i></button>
            </div>



          </div>




          {{-- Billing Section --}}
          <div id="billing-information" class="checkout-step">
            <div class="billing-title">
              <h2 class="text-2xl mb-0">Billing Inforamtion</h2>
              <hr class="w-full text-primary my-4">
            </div>
            <div id="pane" class="flex flex-col pane hidden">


              <div id="shipping-method" class="flex mb-8">

                <div class="w-1/2 flex justify-between items-center bg-white rounded-sm border border-primary p-2 lg:px-4 lg:py-3 mr-2">
                  <div>
                    <h6 class="text-sm mb-0">Use shipping address</h6>
                  </div>
                  <i class="fa fa-check text-primary ml-2"></i>
                </div>

                <div class="w-1/2 flex justify-between items-center bg-white rounded-sm border border-gray-300 p-2 lg:px-4 lg:py-3 mr-2">
                  <div>
                    <h6 class="text-sm mb-0">Enter address manually</h6>
                  </div>
                  <i class="fa fa-check text-primary ml-2 hidden"></i>
                </div>



              </div>

              <button class="mb-4 btn text-white bg-primary hover:bg-primary-dark w-full inline-block text-center toggle">next: payment <i class="fas fa-arrow-right"></i></button>

            </div>


          </div>


          {{-- Payment Section --}}
          <div id="paymant" class="checkout-step">

            <div id="payment-title">
              <h2 class="text-2xl mb-0">Payment</h2>
              <hr class="w-full text-primary my-4">
            </div>

            <div id="pane" class="flex flex-col pane hidden">


              <div id="payment-method" class="flex mb-8">
                <div class="w-1/2 flex justify-between items-center bg-white rounded-sm border border-primary p-2 lg:px-4 lg:py-3 mr-2">
                  <div>
                    <h6 class="text-sm mb-0">Credit / debit card</h6>
                  </div>
                  <i class="fa fa-check text-primary ml-2"></i>
                </div>

                <div class="w-1/2 flex justify-between items-center bg-white rounded-sm border border-gray-300 p-2 lg:px-4 lg:py-3 mr-2">
                  <div>
                    <h6 class="text-sm mb-0">PayPal</h6>
                  </div>
                  <i class="fa fa-check text-primary ml-2 hidden"></i>
                </div>
              </div>

              <form>

                <div class="flex flex-wrap">

                  <div class="w-full mb-4">
                    <label for="cardholder">Cardholder name</label>
                    <input name="cardholder_name" type="number" class="input-text">
                  </div>
                  <div class="w-full mb-4">
                    <label for="phone">Card number</label>
                    <input name="card_number" type="number" maxlength="16" placeholder="xxxx xxxx xxxx xxxx" class="input-text">
                  </div>
                  <div class="w-full md:w-1/2 mb-4 md:pr-4">
                    <label for="expiry-date">Expiry date</label>
                    <input name="expiry_date" type="number" maxlength="4" placeholder="xxxx" class="input-text">
                  </div>
                  <div class="w-full md:w-1/2 mb-4 md:pl-4">
                    <label for="cvc">Security <span class="text-gray-500 text-xs">(CVC)</span> </label>
                    <input name="cvc" type="number" maxLength="3" class="input-text">
                  </div>

                </div>
              </form>

              <button class="mb-4 btn text-white bg-primary hover:bg-primary-dark w-full inline-block text-center">Complete Order</button>
              <p class="text-center mt-1">Payments secured By <span  style="color:#635BFF; ">Stripe</span></p>
            </div>



          </div>

        </div>

      </div>

    </div>

  </section>


@endsection