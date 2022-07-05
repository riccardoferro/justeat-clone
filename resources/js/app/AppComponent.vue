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
      if (this.cart.length == 0 && plate) {
        plate.quantity = 1;
        this.cart.push(plate);
        this.saveCart(this.cart);
      } else {
        if (plate.user_id == this.cart[0].user_id) {
          if (this.cart.includes(plate)) {
            plate.quantity++;
            this.saveCart(this.cart);
          } else {
            plate.quantity = 1;
            this.cart.push(plate);
            this.saveCart(this.cart);
          }
        }
      }
    },

    saveCart() {
      const parsed = JSON.stringify(this.cart);
      localStorage.setItem("cart", parsed);
    },
  },

  //   watch: {
  //     addNewCart() {
  //       return (this.newCart = localStorage.cart);
  //     },
  //   },

  mounted() {
    if (localStorage.getItem("cart")) {
      try {
        this.cart = JSON.parse(localStorage.getItem("cart"));
      } catch (error) {
        console.log(error);
        localStorage.removeItem("cart");
      }
    }
  },
};
</script>

<style>
</style>
