<template>
  <div class="container-fluid">
    <!-- Intro Ristorante -->
    <div class="row pt-5 justify-content-center pb-5">
      <div class="col-4 t4-img-restaurant">
        <img :src="imagePut(restaurant.image)" alt="" />
      </div>
      <div class="col-5">
        <h2>Benvenuto da {{ restaurant.company }}!</h2>
        <h4 class="mt-3 mb-3">{{ restaurant.address }}</h4>
        <span class="t4-orange-text">Categorie:</span>
        <span
          v-for="category in categories"
          :key="category.slug"
          class="t4-badge-category"
        >
          {{ category.name }}
        </span>
        <p class="mt-3">
          Chiude alle ore 23:00 - Consegna gratuita - Minimo d'ordine: 10&euro;
        </p>
        <p>Ordina i tuoi piatti oppure prenota subito un ritiro</p>
      </div>
    </div>
    <!-- Menu Piatti -->
    <div class="row flex-column justify-content-center mt-5">
      <h2 class="text-center">
        Menù
        <span class="t4-menu-food">
          <img src="/images/menu-food.png" alt="" />
        </span>
      </h2>
      <div
        class="
          row
          d-flex
          col-xxl-10 col-xl-10 col-md-11 col-sm-12
          m-auto
          mt-3
          justify-content-center
        "
      >
        <div
          v-for="plate in plates"
          :key="plate.name + plate.id"
          class="row col-sm-10 col-md-5 col-xl-3 d-flex flex-column t4-card"
        >
          <div class="t4-card-img">
            <img :src="'storage/' + plate.image" alt="" />
          </div>
          <div class="t4-card-title">
            <span class="t4-card-label">Nome Piatto</span>
            <p>{{ plate.name }}</p>
          </div>
          <div class="t4-card-description">
            <span class="t4-card-label">Descrizione </span>
            <p>{{ plate.description }}</p>
          </div>

          <div class="t4-card-info d-flex justify-content-between">
            <p><span>Prezzo: </span>{{ plate.price }} &euro;</p>
            <div v-if="plate.visible == 1">
              <p style="color: rgb(4, 165, 4)">Disponibile</p>
            </div>
            <div v-else>
              <p style="color: rgb(165, 4, 4)">Non disponibile</p>
            </div>
          </div>

          <div
            v-if="plate.visible == 1"
            class="t4-card-buttons d-flex justify-content-center"
          >
            <button
              @click="
                () => {
                  currentPlate = plate;
                }
              "
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#staticBackdrop"
            >
              Launch static backdrop modal
            </button>

            <div
              class="modal fade"
              id="staticBackdrop"
              data-bs-backdrop="static"
              data-bs-keyboard="false"
              tabindex="-1"
              aria-labelledby="staticBackdropLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                      Modal title
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body d-flex justify-content-center">
                    <div @click="decr" class="t4-w10">
                      <img class="t4-w80" src="/images/minus1.png" alt="" />
                    </div>
                    <div class="t4-w40 text-center">
                      <p style="color: black">{{ orederQuantity }}</p>
                    </div>
                    <div @click="incr" class="t4-w10">
                      <img class="t4-w80" src="/images/plus1.png" alt="" />
                    </div>
                  </div>
                  <div
                    class="modal-footer d-flex justify-content-center"
                    data-bs-dismiss="modal"
                  >
                    <button
                      @click="pushToCart(orederQuantity, currentPlate)"
                      type="button"
                      class="btn btn-primary"
                    >
                      Understood
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div @click="decr" class="t4-w10">
              <img class="t4-w80" src="/images/minus1.png" alt="" />
            </div>
            <div class="t4-w40 text-center">
              <p>{{ orederQuantity }}</p>
            </div>
            <div @click="incr" class="t4-w10">
              <img class="t4-w80" src="/images/plus1.png" alt="" />
            </div> -->
            <!-- PULSANTE CARRELLO -->
            <!-- <a
              v-if="cart.length == 0 || cart[0].user_id == plate.user_id"
              @click.prevent="addItem(plate)"
              href="#"
              class="btn t4-add-btn d-flex align-items-center"
            >
              <span class="me-2">Aggiungi al carrello</span>
              <img src="/images/shopping-bag.png" alt="shopping-bag" />
            </a>

            <p v-else>
              Non puoi ordinare da più ristoranti, effettua il pagamento
            </p> -->
          </div>
          <!-- v-else -->
          <div
            v-if="plate.visible == 0"
            class="t4-card-buttons d-flex justify-content-center"
          >
            <!-- PULSANTE CARRELLO -->
            <div class="btn t4-add-btn d-flex align-items-center">
              <span class="me-2">Piatto non disponibile</span>
              <img src="/images/shopping-bag.png" alt="shopping-bag" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="t4-card-buttons d-flex justify-content-end mt-5 mb-2">
      <a
        href="http://127.0.0.1:8000/"
        class="btn t4-add-btn d-flex align-items-center"
      >
        <span class="me-2">Torna alla Home</span>
        <img src="/images/home.png" alt="home" />
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "SingleRestaurant",
  data() {
    return {
      restaurant: [],
      plates: [],
      categories: [],
      orederQuantity: 0,
      currentPlate: {},
    };
  },

  props: {
    cart: Array,
  },

  mounted() {
    const slug = this.$route.params.slug;
    // console.log(slug);

    window.axios
      .get("http://127.0.0.1:8000/api/users/" + slug)
      .then((results) => {
        // console.log("results Single Restaurant->", results);
        if (results.status === 200 && results.data.success) {
          this.restaurant = results.data.results;
          this.plates = this.restaurant.plates;
          this.categories = this.restaurant.categories; //   console.log('category'.)
        }
        // console.log(this.restaurant);
      })
      .catch((e) => {
        console.log(e);
      });
  },

  methods: {
    addItem(plate) {
      this.$emit("takeItem", plate);
      //   console.log("carrello", this.cart);
    },
    removeItem(plate) {
      this.$emit("removeItem", plate);
    },
    imagePut(string) {
      let newString;
      if (string.includes("uploads")) {
        newString = `/storage/${string}`;
      } else {
        newString = `/images/default-restaurant.jpeg`;
      }
      return newString;
    },
    incr() {
      this.orederQuantity++;
    },
    decr() {
      this.orederQuantity--;
    },

    pushToCart(number, elem) {
      for (let index = 0; index < number; index++) {
        this.addItem(elem);
        console.log(elem);
      }
      this.orederQuantity = 0;
    },
  },
};
</script>

<style lang="scss" scoped>
.t4-img-restaurant {
  img {
    width: 100%;
    border-radius: 20px;
  }
}

.t4-menu-food {
  img {
    width: 50px;
  }
}
</style>
