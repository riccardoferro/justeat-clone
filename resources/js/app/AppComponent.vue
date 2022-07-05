<template>
  <div>
    <div>
      <HeaderComponent :cart="cart" />

      <router-view @takeItem="addItem" :cart="cart"></router-view>
    </div>
  </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent.vue";

export default {
  name: "AppComponent",
  components: {
    HeaderComponent,
  },
  data() {
    return {
      cart: [],
      //   newCart: null,
    };
  },

  methods: {
    addItem(plate) {
      if (this.cart.length === 0) {
        plate.quantity = 1;
        this.cart.push(plate);
        this.saveCart();
        this.loadPage();
      } else {
        if (plate.user_id == this.cart[0].user_id) {
          const product = this.cart.find((o) => o.id === plate.id);
          if (product) {
            product.quantity += 1;
            plate.quantity = product.quantity;
            this.saveCart();
            this.loadPage();

            console.log(this.cart);
          } else {
            plate.quantity = 1;
            this.cart.push(plate);
            this.saveCart();
            this.loadPage();
          }
        }
      }
    },

    saveCart() {
      const parsed = JSON.stringify(this.cart);
      localStorage.setItem("cart", parsed);
    },
    loadPage() {
      if (localStorage.cart) {
        this.cart = JSON.parse(localStorage.cart);
      } else {
        this.cart = [];
      }
    },
  },

  mounted() {
    this.loadPage();
  },
};
</script>

<style>
</style>
