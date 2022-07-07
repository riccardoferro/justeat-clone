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
    cart: Array,
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
    totaleComplessivo(arr) {
      let total = 0;
      arr.forEach((element) => {
        total += parseFloat(element.total);
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
              amount: this.totaleComplessivo(this.cart),
            },
          }
        )
        .then((response) => {
          // console.log('nonce', nonce)
          console.log(response, "response dopo pagamento");
          if (response.data.success) {
            console.log(response, "Pagamento ok");
            console.log(
              "Totale complessivo",
              this.totaleComplessivo(this.cart)
            );
            // Qui faccio partire una funzione che popolerà la tabella ordini
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
      this.$router.push({
        name: "success",
      });
    },
  },
};
</script>

<style>
</style>
