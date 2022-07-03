<template>
 <div>
  <h3> I ristoranti appartenenti a questa categoria cliccata</h3>
    

    <div>
      <p v-for="restaurant in restaurants" :key="restaurant.slug">
          {{ restaurant.company }}
        
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "CategoryRestaurantsFilter",
    data() {
        return {
            restaurants: [],
            category: undefined,
        };
    },
    mounted() {
        const slug = this.$route.params.slug;
        console.log(slug);

        window.axios
            .get("http://127.0.0.1:8000/api/categories/" + slug)
            .then((results) => {
              console.log(results);
              if (results.status === 200 && results.data.success) {
                  this.category = results.data.results;
                  this.restaurants = this.category.users;
                  console.log(this.restaurants);
              }
            })
            .catch((e) => {
              console.log(e);
            });
    },
}
</script>

<style>

</style>