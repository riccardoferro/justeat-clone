<template>
  <div>
    <h2 class="text-center pt-5">In evidenza</h2>
    <div class="row pt-5 justify-content-center">
      <div
        class="
          col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-8 col-10
          mb-5
          d-flex
          flex-column
          align-items-center
        "
        style="color: white"
        v-for="user in users"
        :key="user.id"
      >
        <!-- SEZIONE CHE TI PORTA AL SINGOLO RISTORANTE  -->
        <router-link
          :to="{ name: 'single-restaurant', params: { slug: user.slug } }"
        >
          <!-- FINE SEZIONE SINGOLO RISTORANTE  -->
          <div class="">
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
          <div
            class="
              col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12
              t4-img-company
            "
          >
            <img :src="imagePut(user.image)" alt="" />
          </div>
        </router-link>
      </div>
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
  },
};
</script>

<style>
</style>
