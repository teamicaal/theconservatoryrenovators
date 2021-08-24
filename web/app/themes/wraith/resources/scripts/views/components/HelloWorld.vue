<template>
  <div>
    <vue-stripe-checkout
      ref="checkoutRef"
      :image="image"
      :name="name"
      :description="description"
      :currency="currency"
      :amount="amount"
      :allow-remember-me="false"
      @done="done"
      @opened="opened"
      @closed="closed"
    ></vue-stripe-checkout>
    <button @click="checkout">Checkout</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      image: "https://i.imgur.com/HhqxVCW.jpg",
      name: "Shut up and take my money!",
      description: "Cats are the best dog!",
      currency: "PHP",
      amount: 99999
    };
  },
  methods: {
    async checkout() {
      const token = await this.$refs.checkoutRef.open();
    },
    done(token) {
      // do stuff
    },
    opened() {
      // do stuff
    },
    closed() {
      // do stuff
    }
  }
};
</script>
