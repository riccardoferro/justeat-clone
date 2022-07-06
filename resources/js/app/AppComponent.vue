<template>
  <div>
    <div>
      <HeaderComponent
        @clearCart="clearCart"
        @removeItem="removeItem"
        @takeItem="addItem"
        :cart="cart"
      />

      <router-view
        @removeItem="removeItem"
        @takeItem="addItem"
        :cart="cart"
      ></router-view>
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
        let total = plate.quantity * plate.price;
        total = parseFloat(total);
        plate.total = total.toFixed(2);
        this.cart.push(plate);
        this.saveCart();
        this.loadPage();
      } else {
        if (plate.user_id == this.cart[0].user_id) {
          const product = this.cart.find((o) => o.id === plate.id);
          if (product) {
            console.log("piatto in arrivo", plate);
            console.log("piatto modificato", product);
            product.quantity += 1;
            let total = product.quantity * product.price;
            total = parseFloat(total);
            product.total = total.toFixed(2);
            this.saveCart();
            this.loadPage();
          } else {
            plate.quantity = 1;
            let total = plate.quantity * plate.price;
            total = parseFloat(total);
            plate.total = total.toFixed(2);
            this.cart.push(plate);
            this.saveCart();
            this.loadPage();
          }
        }
      }
    },
    removeItem(plate) {
      const product = this.cart.find((o) => o.id === plate.id);
      const index = this.cart.indexOf(product);
      console.log("index", index);
      if (product.quantity > 1) {
        product.quantity -= 1;
        let total = plate.quantity * plate.price;
        total = parseFloat(total);
        product.total = total.toFixed(2);
        this.saveCart();
        this.loadPage();
      } else {
        this.cart.splice(index, 1);
        this.saveCart();
        this.loadPage();
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
    clearCart(cart) {
      cart.length = 0;
      this.saveCart();
      this.loadPage();
    },
  },

  mounted() {
    this.loadPage();
  },
};
</script>

<style>
</style>
