<template>
  <div class="container-fluid" v-if="tokenGenerate">
    <v-braintree
      class="brain"
      :authorization="Token"
      @success="onSuccess"
      @error="onError"
    >
    </v-braintree>
  </div>
</template>

<script>
export default {
  name: "Payment",
  data() {
    return {
      Token: null,
      tokenGenerate: false,
    };
  },
  props: {
    cartData: Array,
    formData: Object,
  },
  created() {
    axios
      .get("http://127.0.0.1:8000/api/orders/generate")
      .then((response) => {
        this.Token = response.data.token;
        console.log(response.data, "genera token");
        this.tokenGenerate = true;
      })
      .catch((e) => console.log(e));
  },
  methods: {
    // Metodo per il totale
    prezzoTotale() {
      let total = 0;
      this.cartData.forEach((dish) => {
        total += dish.price * dish.quantity;
      });
      return total.toFixed(2);
    },
    onSuccess(payload) {
      let nonce = payload.nonce;
      window.axios
        .post(
          "http://127.0.0.1:8000/api/orders/make/payment",
          {},
          {
            params: {
              token: nonce,
              amount: this.prezzoTotale(),
            },
          }
        )
        .then((response) => {
          // console.log('nonce', nonce)
          console.log(response, "response dopo pagamento");
          if (response.data.success) {
            console.log(response, "Pagamento ok");
            console.log("Totale complessivo", this.prezzoTotale());
            this.sendOrder();
          }
        })
        .catch((e) => console.log(e));
    },
    onError(error) {
      let message = error.message;
      console.log(message);
    },
    sendOrder() {
      // Qui ci sarà la chiamata axios post per popolare il database
      window.axios
        .post("http://127.0.0.1:8000/api/payment", {
          total: this.formData.total,
          customer_address: this.formData.address,
          customer_name: this.formData.name,
          customer_surname: this.formData.surname,
          customer_phone: this.formData.phone,
          payment_approval: this.formData.status,
          restaurant_id: this.formData.restaurant_id,
          customer_email: this.formData.email,
          plates: this.formData.plates,
        })
        .then((response) => {
          // handle success
          console.log("chiamata axios post per payment");
          console.log(response, "response axios");
          // alert(response)
          if (response.status === 200) {
            localStorage.clear();
            this.$router.push({
              name: "success",
            });
          }
        })
        .catch((e) => console.log("error payment", e));
    },
  },
};
</script>

<style>
</style>
