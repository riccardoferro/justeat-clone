<template>
  <div>
    <div class="text-center py-5">
      <h2>Cerchi qualcos'altro?</h2>
      <h4>Scegli tra tutte le categorie disponibili</h4>
    </div>

    <div
      class="
        row
        t4-bg-orange
        justify-content-center justify-content-lg-start justify-content-md-start
      "
    >
      <!-- <div
              class="
                col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12
                t4-category-label
              "
              v-for="category in categories"
              :key="category.id"
          >
              <h2>{{ category.name }}</h2>
              <img :src="'/images/category_img/' + category.image" alt="" />
          </div> -->

      <!-- inizio card -->
      <div
        class="
          col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6
          mb-5
          d-flex
          flex-column
          align-items-center
          t4-category-label
        "
        v-for="category in categories"
        :key="category.id"
      >
        <!-- SEZIONE CHE FARA' VEDERE TUTTI I RISTORANTI AVENTI QUELLA CATEGORIA SELEZIONATA  -->
        <router-link
          :to="{
            name: 'category-restaurants-filter',
            params: { slug: category.slug },
          }"
          class="
            d-flex
            flex-column
            align-items-center
            justify-content-center
            t4-card-hover
          "
        >
          <!-- FINE SEZIONE SINGOLO RISTORANTE  -->
          <div>
            <!-- <h6 class="t4-orange-text t4-fw-6 d-flex align-items-center">
                  {{ user.company }}
                  <span class="t4-icon-company ms-2">
                    <img src="/images/posate.png" alt="" />
                  </span>
                </h6> -->
            <!-- <h6 class="mb-3 t4-fw-6">
                  <span class="t4-orange-text">Categorie:</span>
                  <span v-for="category in user.categories" :key="category.slug">
                    {{ category.name }}
                  </span>
                </h6> -->
          </div>
          <div
            class="
              col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12
              t4-img-company t4-img-category
            "
          >
            <h4 class="t4-title-category">
              {{ category.name }}
            </h4>
            <img
              :src="'/images/category_img/' + category.image"
              alt="immagine categoria"
              class=""
            />
          </div>
        </router-link>
      </div>
      <!-- fine card -->
    </div>
  </div>
</template>

<script>
export default {
  name: "CategoriesCardComponent",
  props: {
    categories: Array,
  },
  methods: {
    // Funzione per l'immagine profilo ristoratorante!
    imagePut(string) {
      let newString;
      console.log("stringa presa");
      if (string.includes("uploads")) {
        newString = `/storage/${string}`;
      } else {
        newString = `/images/default-restaurant.jpeg`;
      }
      return newString;
    },

    // Funzione immagine categoria
    categoryIcon(string) {
      switch (string) {
        case "Fast Food":
          return (string = "/images/category_img/burger.png");
        case "Pizza":
          return (string = "/images/category_img/pizza.png");
        case "Cinese":
          return (string = "/images/category_img/noodles.png");
        case "Giapponese":
          return (string = "/images/category_img/sushi.png");
        case "Poke":
          return (string = "/images/category_img/rice.png");
        case "Dessert":
          return (string = "/images/category_img/dessert.png");
        case "Tailandese":
          return (string = "/images/category_img/pad-thai.png");
        case "Italiano":
          return (string = "/images/category_img/pasta.png");
        case "Smoothie":
          return (string = "/images/category_img/boba.png");
        case "Gelato":
          return (string = "/images/category_img/ice-cream.png");
        case "Vegano":
          return (string = "/images/category_img/vegan.png");
        case "Gluten Free":
          return (string = "/images/category_img/wheat.png");
        case "Vegetariano":
          return (string = "/images/category_img/vegetarian-food.png");
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.t4-img-category {
  position: relative;
}
.t4-title-category {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 12px 15px;
  -webkit-backdrop-filter: blur(6px);
  backdrop-filter: blur(6px);
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 20px;
  font-weight: 600;
  color: #fd7d2b;
  text-align: center;
}

.t4-card-hover {
  transition: all 0.2s ease-in-out;
}

.t4-card-hover:hover {
  transform: scale(0.9);
}
</style>
