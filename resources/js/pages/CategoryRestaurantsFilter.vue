<template>
  <div>
      <h3> Seleziona una categoria e vedi i ristoranti a disposizione</h3>



      <div class="row">
          <BoxCategoriesFilter :categoriesArr="categoriesArr" :category="category"/>
      </div>




      <div class="row pt-5">
          <!-- inizio card -->
          <div
              class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-5 d-flex flex-column align-items-center t4-resturant-label"
              v-for="user in users"
              :key="user.id"
          >
              <!-- Attraverso il router link verremo riportati in un'altra pagine dove vedremo i dettagli del ristorante -->
              <router-link :to="{ name: 'single-restaurant', params: { slug: user.slug } }">

                  <div>
                      <h6 class="t4-orange-text t4-fw-6 d-flex align-items-center">
                          {{ user.company }}
                          <span class="t4-icon-company ms-2">
                              <img src="/images/posate.png" alt="" />
                          </span>
                      </h6>

                      <h6 class="mb-3 t4-fw-6">

                          <span class="t4-orange-text">Categorie:</span>
                          <span v-for="category in user.categories" :key="category.slug">
                            {{ category.name }}
                          </span>

                      </h6>
                  </div>

                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 t4-img-company">
                      <img :src="imagePut(user.image)" alt="" class="img-fluid"/>
                  </div>

              </router-link>
          </div>
          <!-- fine card -->
      </div>
  

    </div>
</template>

<script>

// import box category filter
import BoxCategoriesFilter from "../components/BoxCategoriesFIlter.vue";


export default {
  name: "CategoryRestaurantsFilter",
  components: {
      BoxCategoriesFilter,
  },
 
  data() {
        return {
            users: [],
            category: undefined,
            categoriesArr: [],
        };
    },
  mounted() {
        const slug = this.$route.params.slug;
        console.log(slug);

        window.axios
            .get("http://127.0.0.1:8000/api/category/" + slug)
            .then((results) => {
              console.log(results);
              if (results.status === 200 && results.data.success) {
                  this.category = results.data.results;
                  this.users = this.category.users;
                  this.categoriesArr = results.data.categories;
                  console.log(this.users);
              }
            })
            .catch((e) => {
              console.log(e);
            });
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

    // 


  },
}
</script>

<style>

</style>