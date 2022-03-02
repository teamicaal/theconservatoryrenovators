{{--
  Template Name: Checkout
--}}

@extends('layouts.app')

@section('content')

  <section id="checkout" class="mt-10 pt-2">
    <div class="container mx-auto items-center ">
     

      <div class="grid  grid-cols-8 ">

        
        <div id="primary" class="flex flex-col col-span-4 mr-2">
          <h2 class="text-5xl mb-2 ">
            Checkout
          </h2>
    
          <h4 class="text-2xl text-bold mb-2">
            Order Summary
          </h4>


          <div class="flex w-full justify-between ">

           <div class="flex">
            <div style="background-color: rgb(234, 234, 234)" class="w-8 h-8 mr-2"></div>

            
            <div class="flex flex-col justify-between">
              <h3 class=" text-base mb-1">Basic T-shirt</h3>
              <div class="flex items-center justify-center">
                <p class="text-xs">Black</p>
                <div class="mx-1 mb-1" style="width:1px; height:100%; background-color:rgb(200, 194, 194);"></div>
                <p class="text-xs">Large</p>
              </div>
              <h3 id="price" class="text-xl mb-0">£24.00</h3>
              
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
              <div style="background-color: rgb(234, 234, 234)" class="w-8 h-8 mr-2"></div>
  
              
              <div class="flex flex-col justify-between">
                <h3 class=" text-base mb-1">Basic T-shirt</h3>
                <div class="flex items-center justify-center">
                  <p class="text-xs">Black</p>
                <div class="mx-1 mb-1" style="width:1px; height:100%; background-color:rgb(200, 194, 194);"></div>
                  <p class="text-xs">Large</p>
                </div>
                <h3 id="price" class="mb-0 text-xl">£24.00</h3>
                
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
              <div style="background-color: rgb(234, 234, 234)" class="w-8 h-8 mr-2"></div>
  
              
              <div class="flex flex-col justify-between">
                <h3 class=" text-base mb-1">Basic T-shirt</h3>
                <div class="flex items-center justify-center">
                  <p class="text-xs">Black</p>
                  <div class="mx-1 mb-1" style="width:1px; height:100%; background-color:rgb(200, 194, 194);"></div>
                  <p class="text-xs">Large</p>
                </div>
                <h3 id="price" class="mb-0 text-xl">£24.00</h3>
                
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
 
           <div class="flex flex-col py-2">

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



          </div>
          
        </div>


        <div id="side-checkout" class="col-span-4 bg-gray-100 px-5 pt-5 h-full">

         <div class="container mx-auto">


          {{-- Contact Information --}}
          <div id="contact-information" class="checkout-step active">
            <div class="contact-title">
              <h2 class="text-2xl mb-0">Contact Information</h2>
              <hr class="w-full text-primary my-1">
            </div>

            <div id="pane" class="flex flex-col pane show ">

              <div>

                <form class="icaal-contact-form" data-form="contact">
    
                  <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 mb-1 md:pr-1">
                      <label for="first_name">First name</label>
                      <input name="first_name" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-1 md:pl-1">
                      <label for="last_name">Last name</label>
                      <input name="last_name" type="text"  >
                    </div>
                    <div class="w-full mb-1">
                      <label for="email">Email address</label>
                      <input name="email" type="email" >
                    </div>
                    <div class="w-full mb-1">
                      <label for="phone">Phone Number</label>
                      <input name="phone" type="tel"  >
                    </div>
                    
                  </div>
                </form>
  
                
                
              </div>
              <button class="mb-1 text-white text-xs  bg-primary text-center p-1 uppercase tracking-widest toggle">next: shipping information <i class="fas fa-arrow-right"></i></button>

            </div>
           

          </div>

          
           
          
          {{-- Shipping -information --}}
          <div id="shipping-information" class="checkout-step">
            <div class="shipping-title">
                <h2 class="text-2xl mb-0">Shipping Inforamtion</h2>
                 <hr class="w-full text-primary my-1">
            </div>
            <div id="pane" class="flex flex-col pane hidden">
              <div class="">

                <form class="icaal-contact-form" data-form="contact">
    
                  <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 mb-1 md:pr-1">
                      <label for="first_name" >First name</label>
                      <input name="first_name"  type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-1 md:pl-1">
                      <label for="last_name">Last name</label>
                      <input name="last_name" type="text"  >
                    </div>
                    <div class="w-full mb-1">
                      <label for="address-1">Email address</label>
                      <input name="address-1" type="text" >
                    </div>
                    <div class="w-full md:w-1/2 mb-1 md:pr-1">
                      <label for="address-2">Address Line 2 <span class="text-grey-darker text-xs">(optional)</span></label>
                      <input name="address-2" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-1 md:pl-1">
                      <label for="city">Town/City</label>
                      <input name="city" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-1 md:pr-1">
                      <label for="county">County</label>
                      <input name="county" type="text"  >
                    </div>
                    <div class="w-full md:w-1/2 mb-1 md:pl-1">
                      <label for="post-code">Post Code</label>
                      <input name="post-code" type="text"  >
                    </div>
                   <h3>Shipping Method</h3>
    
                   <div id="shipping-method" class="grid grid-cols-2 w-full gap-x-1 mb-2 justify-center items-center ">
    
                     <div class=" flex flex-col box justify-between items-start h-5/6">
                       <h6 class="text-base mb-1">Standard</h6>
                       <p class="text-xs mb-0" >3 - 5 business days</p>
                      <p class="text-lg font-bold">£4.00</p>
                      <i class="fa fa-check text-primary blue-check "></i>
                     </div>
    
                     <div class=" flex flex-col box justify-between items-start border-none h-5/6 ">
                       <h6 class="text-base mb-1">Standard</h6>
                       <p class="text-xs mb-0" >3 - 5 business days</p>
                      <p class="text-lg font-bold ">£4.00</p>
                     </div>
    
                   </div>
                    
                  </div>
                </form>
  
  
             
                
              </div>
              <button class="mb-1 text-white text-xs  bg-primary text-center p-1 uppercase tracking-widest toggle ">next: billing information <i class="fas fa-arrow-right"></i></button>
            </div>

           

          </div>


          

          {{-- Billing Section --}}
          <div id="billing-information" class="checkout-step">
            <div class="billing-title">
              <h2 class="text-2xl mb-0">Billing Inforamtion</h2>
              <hr class="w-full text-primary my-1">
            </div>
            <div id="pane" class="flex flex-col pane hidden">

           
              <div id="shipping-method" class="grid grid-cols-2 w-full gap-x-1 mb-2 justify-center items-center ">
  
                <div class=" flex flex-col box justify-between items-start text-center p-1 ">
                  <h6 class="text-sm mb-0">Use shipping address</h6>
                 <i class="fa fa-check text-primary blue-check"></i>
                </div>
  
                <div class=" flex flex-col box justify-between items-start text-center p-1 border-none">
                  <h6 class="text-sm mb-0">Enter address manually</h6>
  
                </div>
  
  
              </div>
  
              <button class="mb-1 text-white text-xs  bg-primary text-center p-1 uppercase tracking-widest toggle">next: payment <i class="fas fa-arrow-right"></i></button>
              
            </div>


          </div>
           

          {{-- Payment Section --}}
          <div id="paymant" class="checkout-step">

            <div id="payment-title">
              <h2 class="text-2xl mb-0">Payment</h2>
              <hr class="w-full text-primary my-1">
            </div>

            <div id="pane" class="flex flex-col pane hidden">

           
              <div id="shipping-method" class="grid grid-cols-2 w-full gap-x-1 mb-2 justify-center items-center ">
  
                <div class=" flex flex-col box  justify-between items-start text-center p-1 ">
                  <h6 class="text-sm mb-0">Credit / Debit card</h6>
  
                </div>
  
                <div class=" flex flex-col box border-none justify-between items-start text-center p-1 ">
                  <h6 class="text-sm mb-0">PayPal</h6>
                </div>
              </div>
  
              <form class="icaal-contact-form " data-form="contact">
  
                <div class="flex flex-wrap">
                 
                  <div class="w-full mb-1">
                    <label for="cardholder">Cardholder name</label>
                    <input name="cardholder" type="text" >
                  </div>
                  <div class="w-full mb-1">
                    <label for="phone">Card number</label>
                    <input name="phone" type="tel" placeholder="xxxx xxxx xxxx xxxx"  >
                  </div>
                  <div class="w-full md:w-1/2 mb-1 md:pr-1">
                    <label for="expiry-date">Expiry date/ label </label>
                    <input type="month" id="start" name="expiry-date"
                    min="2018-03" value="2018-05">
                  </div>
                  <div class="w-full md:w-1/2 mb-1 md:pl-1">
                    <label for="cvc">Security <span class="text-grey-darker text-xs">(CVC)</span> </label>
                    <input name="cvc" type="tel"  >
                  </div>
                  
                </div>
              </form>
  
              <button class="text-white text-xs mb-1  bg-primary text-center p-1 uppercase tracking-widest ">next: payment <i class="fas fa-arrow-right"></i></button>
              <p class="text-center mt-1">Payments secured By <span  style="color:#635BFF; ">Stripe</span></p>
            </div>

         
         
          </div>

         </div>
            
        </div>

      </div>

    </div>

  </section>


@endsection