<template>
  <div>
    <div class="row text-center mt-5">
      <h2>Benvenuto da {{ restaurant.company }}!</h2>
      <h4>
        Ordina i tuoi piatti oppure prenota un ritiro in
        {{ restaurant.address }}
      </h4>
    </div>

    <div class="row text-center mt-3">
      <div class="col-12">
        <span class="t4-orange-text">Categorie:</span>
        <span
          v-for="category in categories"
          :key="category.slug"
          class="t4-badge-category"
        >
          {{ category.name }}
        </span>
      </div>
    </div>

    <div class="row flex-column justify-content-center">
      <div
        class="
          row
          col-xxl-10 col-xl-10 col-md-11 col-sm-12
          m-auto
          mt-3
          justify-content-center
        "
      >
        <div
          v-for="plate in plates"
          :key="plate.name + plate.id"
          class="col-sm-10 col-md-5 col-xl-3 d-flex flex-column t4-card"
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
        </div>
      </div>
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
    };
  },
  mounted() {
    const slug = this.$route.params.slug;
    console.log(slug);

    window.axios
      .get("http://127.0.0.1:8000/api/users/" + slug)
      .then((results) => {
        if (results.status === 200 && results.data.success) {
          this.restaurant = results.data.results;
          this.plates = this.restaurant.plates;
          this.categories = this.restaurant.categories; //   console.log('category'.)
        }
        console.log(this.restaurant);
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style lang="scss" scoped>
</style>>
