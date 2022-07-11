<template>
  <div class="container-fluid pb-5">
    <h2 class="text-center mt-5">Inserisci i dati della consegna</h2>
    <h6 class="text-center">Compila correttamente tutti i campi</h6>

    <!-- //////////////////// -->
    <div class="row mt-5 flex wrap justify-content-center align-items-center">
      <div
        class="
          col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12
          order-md-2 order-sm-2 order-2
          mt-sm-5 mt-md-5
        "
      >
        <div v-if="!formComplete" class="form">
          <div class="action">
            <div>
              <label for="name" class="t4-orange-text ms-2">Nome *</label>
              <br />
              <input
                type="text"
                name="name"
                placeholder="Nome"
                v-model="name"
                value=""
                class="form-control"
                required
              />
              <div v-if="!validation.name.success" class="alert alert-danger">
                {{ validation.name.message }}
              </div>
            </div>
            <div>
              <label for="surname" class="t4-orange-text ms-2">Cognome *</label>
              <br />
              <input
                type="text"
                name="surname"
                placeholder="Cognome"
                v-model="surname"
                value=""
                class="form-control"
                required
              />
              <div
                v-if="!validation.surname.success"
                class="alert alert-danger"
              >
                {{ validation.surname.message }}
              </div>
            </div>
            <div>
              <label for="address" class="t4-orange-text ms-2"
                >Indirizzo di consegna *</label
              >
              <br />
              <input
                type="text"
                name="address"
                placeholder="Indirizzo"
                v-model="address"
                value=""
                class="form-control"
                required
              />
              <div
                v-if="!validation.address.success"
                class="alert alert-danger"
              >
                {{ validation.address.message }}
              </div>
            </div>

            <div>
              <label for="phone" class="t4-orange-text ms-2"
                >Numero di telefono *</label
              >
              <br />
              <input
                type="number"
                name="phone"
                placeholder="+39"
                v-model="phone"
                value=""
                class="form-control"
                required
              />
              <div v-if="!validation.phone.success" class="alert alert-danger">
                {{ validation.phone.message }}
              </div>
            </div>

            <div>
              <label for="email" class="t4-orange-text ms-2">Email *</label>
              <br />
              <input
                type="email"
                name="email"
                placeholder="user@gmail.com"
                v-model="email"
                value=""
                class="form-control"
                required
              />
              <div v-if="!validation.email.success" class="alert alert-danger">
                {{ validation.email.message }}
              </div>
            </div>

            <div class="d-flex justify-content-center">
              <button @click="validateForm()" class="form-btn btn t4-add-btn">
                Conferma i Dati
              </button>
            </div>
          </div>
        </div>
        <div v-else class="payment-part">
          <div class="">
            <div class="d-flex flex-column align-items-sm-center t4-dataUser">
              <label for="cognome_nome">Nome e Cognome</label>
              <p name="cognome_nome">
                {{ formData.name }} {{ formData.surname }}
              </p>
              <label for="indirizzo">Indirizzo</label>
              <p for="indirizzo">{{ formData.address }}</p>
              <label for="tel">Numero di telefono</label>
              <p name="tel">+39 {{ formData.phone }}</p>
              <label for="nome_azienda">E-mail</label>
              <p name="nome_azienda">{{ formData.email }}</p>
            </div>
          </div>

          <Payment :formData="formData" :cartData="cartData" />
        </div>
      </div>
      <div class="col-xxl-5 col-md-8 col-sm-10 order-sm-1 order-md-1 order-1">
        <div class="t4-summary" d-flex t4-w100>
          <h6 class="text-center mb-3 t4-w100">Riepilogo Ordine</h6>
          <div
            v-for="(plate, index) in cart"
            :key="plate.id + `${index}`"
            class="d-flex align-items-center justify-content-between mb-3"
          >
            <div class="t4-w10">
              <img class="t4-w100" :src="/storage/ + `${plate.image}`" alt="" />
            </div>
            <div class="t4-w30">{{ plate.name }}</div>
            <div class="t4-w15">
              Qnt: {{ plate.quantity }}
              <span class="t4-orange-text"> x </span>
            </div>
            <div class="t4-w15">{{ plate.price }} &euro;</div>
          </div>
          <p class="text-center mt-5">
            <span class="t4-orange-text">Totale:</span>
            {{ prezzoTotale() }} &euro;
          </p>
        </div>
      </div>
    </div>
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
  data() {
    return {
      cartData: [],
      restaurantSelected: "",
      restaurantId: "",
      //   userEmail: "",
      formComplete: false,
      name: null,
      surname: null,
      email: null,
      phone: null,
      address: null,

      formData: {
        name: null,
        surname: null,
        email: null,
        phone: null,
        address: null,
        status: null,
        total: null,
        // special_request: null,
        plates: null,
        restaurant_id: null,
        // restaurant_email: null,
      },
      validation: {
        name: {
          success: true,
          message: "",
        },
        surname: {
          success: true,
          message: "",
        },
        email: {
          success: true,
          message: "",
        },
        address: {
          success: true,
          message: "",
        },
        phone: {
          success: true,
          message: "",
        },
      },
    };
  },
  methods: {
    validateForm() {
      console.log("validation...");
      if (!this.name) {
        this.validation.name.success = false;
        this.validation.name.message = "Il nome non può essere vuoto";
      } else if (this.name.length > 30) {
        this.validation.name.success = false;
        this.validation.name.message =
          "Il nome non può superare i 30 caratteri";
      } else {
        this.validation.name.success = true;
        this.validation.name.message = "";
      }
      // validazione cognome
      if (!this.surname) {
        this.validation.surname.success = false;
        this.validation.surname.message = "Il cognome non può essere vuoto";
      } else if (this.surname.length > 30) {
        this.validation.surname.success = false;
        this.validation.surname.message =
          "Il cognome non può superare i 30 caratteri";
      } else {
        this.validation.surname.success = true;
        this.validation.surname.message = "";
      }
      // validazione email
      if (!this.email) {
        this.validation.email.success = false;
        this.validation.email.message = "La mail non può essere vuota";
      } else if (this.email.length > 255) {
        this.validation.email.success = false;
        this.validation.email.message =
          "La mail non può superare i 255 caratteri";
      } else if (
        !this.email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)
      ) {
        this.validation.email.success = false;
        this.validation.email.message = "Formato della mail non valido";
      } else {
        this.validation.email.success = true;
        this.validation.email.message = "";
      }
      //validazione indirizzo
      if (!this.address) {
        this.validation.address.success = false;
        this.validation.address.message = "L'indirizzo non può essere vuoto";
      } else if (this.address.length > 255) {
        this.validation.address.success = false;
        this.validation.address.message =
          "L'indirizzo non può superare i 255 caratteri";
      } else {
        this.validation.address.success = true;
        this.validation.address.message = "";
      }
      // validazione telefono
      if (!this.phone) {
        this.validation.phone.success = false;
        this.validation.phone.message = "Inserire il numero di telefono";
      } else if (isNaN(this.phone)) {
        this.validation.phone.success = false;
        this.validation.phone.message =
          "Il telefono deve essere composto da numeri";
      } else if (this.phone.length < 8 || this.phone.length > 11) {
        this.validation.phone.success = false;
        this.validation.phone.message =
          "Il telefono deve essere compreso tra gli 8 e gli 11 caratteri";
      } else {
        this.validation.phone.success = true;
        this.validation.phone.message = "";
      }

      this.isValidate();
    },
    isValidate() {
      let control = true;
      for (let i in this.validation)
        if (!this.validation[i].success) control = false;

      if (!control) return;
      this.formData.name = this.name;
      this.formData.surname = this.surname;
      this.formData.email = this.email;
      this.formData.phone = this.phone;
      this.formData.address = this.address;
      this.formData.status = 0;
      this.formData.total = this.prezzoTotale();
      this.formData.plates = this.cart;
      // this.formData.special_request = this.special_request;

      this.formData.restaurant_id = this.restaurantId;
      // this.formData.restaurant_email = this.userEmail;
      this.cartData = this.cart;
      console.log(this.cartData);
      this.formComplete = true;
    },
    prezzoTotale() {
      let total = 0;
      this.cart.forEach((dish) => {
        total += dish.price * dish.quantity;
        this.restaurantId = dish.user_id;
      });
      return total.toFixed(2);
    },
  },
};
</script>

<style lang="scss" scoped>
.t4-img-pay {
  img {
    width: 100%;
  }
}
// label {
//   width: 100%;
// }

.t4-img-sum {
  img {
    width: 50px;
  }
}

.t4-summary {
  border: 2px solid #fd7d2b;
  border-radius: 20px;
  padding: 20px;
}
</style>
