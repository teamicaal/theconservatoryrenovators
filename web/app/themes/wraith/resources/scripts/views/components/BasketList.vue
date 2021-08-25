<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<template>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto pt-3 pb-3 px-1 sm:px-1-5 lg:max-w-7xl lg:px-2">
      <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>
      <form class="mt-3 lg:grid lg:grid-cols-12 lg:gap-x-3 lg:items-start xl:gap-x-4">
        <section aria-labelledby="cart-heading" class="lg:col-span-7">
          <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

          <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
            <li v-for="(product, productIdx) in products" :key="product.id" class="flex py-1-5 sm:py-2">
              <div class="flex-shrink-0">
                <img :src="product.imageSrc" :alt="product.imageAlt" class="w-6 h-6 rounded-md object-center object-cover sm:w-12 sm:h-12" />
              </div>

              <div class="ml-1 flex-1 flex flex-col justify-between sm:ml-1-5">
                <div class="relative pr-2 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                  <div>
                    <div class="flex justify-between">
                      <h3 class="text-sm mb-0">
                        <a :href="product.href" class="font-medium text-gray-700 hover:text-gray-800">
                          {{ product.name }}
                        </a>
                      </h3>
                    </div>
                    <div class="mt-0-25 flex text-sm">
                      <p class="text-gray-500 mb-0">
                        {{ product.color }}
                      </p>
                      <p v-if="product.size" class="mb-0 ml-1 pl-4 border-l border-gray-200 text-gray-500">
                        {{ product.size }}
                      </p>
                    </div>
                    <p class="mt-0-25 mb-0 text-sm font-medium text-gray-900">{{ product.price }}</p>
                  </div>

                  <div class="mt-1 sm:mt-0 sm:pr-2">
                    <label :for="`quantity-${productIdx}`" class="sr-only">Quantity, {{ product.name }}</label>
                    <select :id="`quantity-${productIdx}`" :name="`quantity-${productIdx}`" class="max-w-full rounded-md border border-gray-300 py-0-25 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>

                    <div class="absolute top-0 right-0">
                      <button type="button" class="-m-0-5 p-0-5 inline-flex text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Remove</span>
                        <XIcon class="h-1 w-1" aria-hidden="true" />
                      </button>
                    </div>
                  </div>
                </div>

                <p class="mt-1 flex text-sm text-gray-700 space-x-2">
                  <CheckIcon v-if="product.inStock" class="flex-shrink-0 h-1 w-1 text-green-500" aria-hidden="true" />
                  <ClockIcon v-else class="flex-shrink-0 h-1 w-1 text-gray-300" aria-hidden="true" />
                  <span>{{ product.inStock ? 'In stock' : `Ships in ${product.leadTime}` }}</span>
                </p>
              </div>
            </li>
          </ul>
        </section>

        <!-- Order summary -->
        <section aria-labelledby="summary-heading" class="mt-4 bg-gray-50 rounded-lg px-1 py-1-5 sm:p-1-5 lg:p-2 lg:mt-0 lg:col-span-5">
          <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>

          <dl class="mt-1-5 space-y-1">
            <div class="flex items-center justify-between">
              <dt class="text-sm text-gray-600">
                Subtotal
              </dt>
              <dd class="text-sm font-medium text-gray-900">
                $99.00
              </dd>
            </div>
            <div class="border-t border-gray-200 pt-1 flex items-center justify-between">
              <dt class="flex items-center text-sm text-gray-600">
                <span>Shipping estimate</span>
                <a href="#" class="ml-0-5 flex-shrink-0 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Learn more about how shipping is calculated</span>
                  <QuestionMarkCircleIcon class="h-1-25 w-1-25" aria-hidden="true" />
                </a>
              </dt>
              <dd class="text-sm font-medium text-gray-900">
                $5.00
              </dd>
            </div>
            <div class="border-t border-gray-200 pt-1 flex items-center justify-between">
              <dt class="flex text-sm text-gray-600">
                <span>Tax estimate</span>
                <a href="#" class="ml-0-5 flex-shrink-0 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Learn more about how tax is calculated</span>
                  <QuestionMarkCircleIcon class="h-1-25 w-1-25" aria-hidden="true" />
                </a>
              </dt>
              <dd class="text-sm font-medium text-gray-900">
                $8.32
              </dd>
            </div>
            <div class="border-t border-gray-200 pt-1 flex items-center justify-between">
              <dt class="text-base font-medium text-gray-900">
                Order total
              </dt>
              <dd class="text-base font-medium text-gray-900">
                $112.32
              </dd>
            </div>
          </dl>

          <div class="mt-1-5">
            <button type="submit" class="w-full bg-primary border border-transparent rounded-md shadow-sm py-0-75 px-1 text-base font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 transition">Checkout</button>
          </div>
        </section>
      </form>
    </div>
  </div>
</template>

<script>
import { CheckIcon, ClockIcon, QuestionMarkCircleIcon, XIcon } from '@heroicons/vue/solid'

const products = [
  {
    id: 1,
    name: 'Basic Tee',
    href: '#',
    price: '$32.00',
    color: 'Sienna',
    inStock: true,
    size: 'Large',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-01.jpg',
    imageAlt: "Front of men's Basic Tee in sienna.",
  },
  {
    id: 2,
    name: 'Basic Tee',
    href: '#',
    price: '$32.00',
    color: 'Black',
    inStock: false,
    leadTime: '3–4 weeks',
    size: 'Large',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-02.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
  },
  {
    id: 3,
    name: 'Nomad Tumbler',
    href: '#',
    price: '$35.00',
    color: 'White',
    inStock: true,
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-03.jpg',
    imageAlt: 'Insulated bottle with white base and black snap lid.',
  },
]

export default {
  components: {
    CheckIcon,
    ClockIcon,
    QuestionMarkCircleIcon,
    XIcon,
  },
  setup() {
    return {
      products,
    }
  },
}
</script>
