<template>
  <div>
    <h2 class="text-center pt-5">In evidenza</h2>
    <div class="row pt-5 justify-content-center">
      <!-- inizio card -->
      <div
        class="
          col-4
          mb-5
          d-flex
          flex-column
          align-items-center
          t4-resturant-card
        "
        v-for="user in users"
        :key="user.id"
      >
        <div class="text-center">
          <h4 class="t4-orange-text t4-fw-6 d-flex align-items-center">
            {{ user.company }}
            <span class="t4-icon-company ms-2">
              <img src="/images/posate.png" alt="" />
            </span>
          </h4>
        </div>
        <div class="col-8 t4-img-company">
          <img :src="imagePut(user.image)" alt="" />
        </div>
        <div class="d-flex col-8 justify-content-start flex-wrap">
          <div
            v-for="category in user.categories"
            :key="category.slug"
            class="t4-restaurant-label"
          >
            <img :src="categoryIcon(category.name)" alt="" />
          </div>
        </div>

        <!-- <div
          class="
            mb-3
            t4-fw-6 t4-restaurant-label
            row
            col-8
            justify-content-between
          "
        >
          <div v-for="category in user.categories" :key="category.slug">
            <span>
              {{ category.name }}
            </span>
          </div>
        </div> -->
      </div>
      <!-- fine card -->
    </div>
  </div>
</template>

<script>
export default {
  name: "RestaurantCardsComponent",
  props: {
    users: Array,
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

<style>
</style>
