<template>
 <div>
  CIAO
    <!-- <div>Benvenuto nel ristorante X</div>
    <p>{{ restaurant.company }}</p>
    <p>{{ restaurant.address }}</p>

    <div>
      <p v-for="category in categories" :key="category.slug">
        {{ category.name }}
      </p>
    </div>
    <div>
      <p v-for="plate in plates" :key="plate.name + plate.id">
        {{ plate.name }}
      </p>
    </div> -->
  </div>
</template>

<script>
export default {
  name: "CategoryRestaurantsFilter",
    data() {
        return {
            restaurant: [],
            plates: [],
            categories: [],
        };
    },
    // mounted() {
    //     const slug = this.$route.params.slug;
    //     console.log(slug);

    //     window.axios
    //         .get("http://127.0.0.1:8000/api/users/" + slug)
    //         .then((results) => {
    //           if (results.status === 200 && results.data.success) {
    //             this.restaurant = results.data.results;
    //             this.plates = this.restaurant.plates;
    //             this.categories = this.restaurant.categories; //   console.log('category'.)
    //           }
    //           console.log(this.restaurant);
    //         })
    //         .catch((e) => {
    //           console.log(e);
    //         });
    // },
}
</script>

<style>

</style>