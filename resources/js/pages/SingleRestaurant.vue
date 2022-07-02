<template>
  <div>
    <div>Benvenuto nel ristorante X</div>
  </div>
</template>

<script>
export default {
  name: "SingleRestaurant",
  data() {
    return {
      restaurant: undefined,
    };
  },
  mounted() {
    const slug = this.$route.params.slug;
    console.log(slug);

    window.axios
      .get("http://127.0.0.1:8000/api/users/" + slug)
      .then((results) => {
        console.log(results);
        if (results.status === 200 && results.data.success) {
          this.restaurant = results.data.results;
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
