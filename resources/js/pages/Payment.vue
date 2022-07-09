<template>
  <div class="container-fluid t4-payment-card" v-if="tokenGenerate">
    <h2 mt-3>Inserisci i dati della carta</h2>
    <v-braintree
      class="brain"
      :authorization="Token"
      @success="onSuccess"
      @error="onError"
    >
      <!-- da rivedere -->
      <template #button="slotProps">
        <button
          ref="paymentBtnRef"
          @click="slotProps.submit"
          style="display: none"
        ></button>
        <button class="btn t4-add-btn mt-2 mb-3" @click="continueToPayment()">
          Acquista
        </button>
      </template>
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
          address: this.formData.address,
          name: this.formData.name,
          surname: this.formData.surname,
          phone: this.formData.phone,
          status: this.formData.status,
          user_id: this.formData.restaurant_id,
          email: this.formData.email,
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
            location.reload();
          }
        })
        .catch((e) => console.log("error payment", e));
    },

    continueToPayment() {
      this.$refs.paymentBtnRef.click();
    },
  },
};
</script>

<style lang="scss" scoped>
.t4-payment-card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>
