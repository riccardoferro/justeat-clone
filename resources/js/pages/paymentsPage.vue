<template>
  <div class="container-fluid">
    <h1 class="text-center">PAGAMENTI</h1>
    <!-- Qui andrà inserito il nome del ristorante dove stiamo ordinando -->
    <!-- FORM UTENTE  -->
    <div v-if="!formComplete" class="form">
      <p>Inserisci i dati della consegna</p>

      <div class="action">
        <div>
          <label for="name">Nome *</label>
          <br />
          <input
            type="text"
            name="name"
            placeholder="Nome..."
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
          <label for="surname">Cognome *</label>
          <br />
          <input
            type="text"
            name="surname"
            placeholder="Cognome..."
            v-model="surname"
            value=""
            class="form-control"
            required
          />
          <div v-if="!validation.surname.success" class="alert alert-danger">
            {{ validation.surname.message }}
          </div>
        </div>
        <div>
          <label for="address">Indirizzo di consegna *</label>
          <br />
          <input
            type="text"
            name="address"
            placeholder="Indirizzo..."
            v-model="address"
            value=""
            class="form-control"
            required
          />
          <div v-if="!validation.address.success" class="alert alert-danger">
            {{ validation.address.message }}
          </div>
        </div>

        <div>
          <label for="phone">Numero di telefono *</label>
          <br />
          <input
            type="number"
            name="phone"
            placeholder="+39...."
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
          <label for="email">Email *</label>
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
    <!-- ALTRIMENTI -->
    <div v-else class="payment-part">
      <p>Inserisci i dati del pagamento</p>
      <div>
        <p>{{ formData.surname }} {{ formData.name }}</p>
        <p>{{ formData.address }}</p>
        <p>+39 {{ formData.phone }}</p>
        <p>{{ formData.email }}</p>
      </div>
      <Payment :formData="formData" :cart="cart" />
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
      //   cart: [],
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
        // plates: null,
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
      this.formData.total = this.totaleComplessivo(this.cart);
      // this.formData.plates = this.cart;
      // this.formData.special_request = this.special_request;

      this.formData.restaurant_id = this.restaurantId;
      // this.formData.restaurant_email = this.userEmail;
      this.formComplete = true;
    },
    totaleComplessivo(arr) {
      let total = 0;
      arr.forEach((element) => {
        total += parseFloat(element.total);
        this.restaurantId = element.user_id;
      });
      return total.toFixed(2);
    },
  },
};
</script>

<style>
</style>
