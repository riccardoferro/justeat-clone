<template>
  <div class="container-fluid">
    <h1 class="text-center">PAGAMENTI</h1>
    <Payment :cart="cart" />
  </div>
</template>

<script>
import Payment from "./Payment.vue";

export default {
  name: "PaymentsPage",
  components: {
    Payment,
  },
  props: {
    cart: Array,
  },
};
</script>

<style>
</style>
