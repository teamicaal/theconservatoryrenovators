<template>
  <div>
    <basket-list></basket-list>
    <product-row></product-row>
  </div>
</template>

<script>
import BasketList from './components/BasketList';
import ProductRow from './components/ProductRow';

export default {
  components: {
    BasketList,
    ProductRow
  },
}
</script>
