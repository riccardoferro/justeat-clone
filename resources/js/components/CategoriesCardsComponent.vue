<template>
  <div class="row t4-bg-orange">
    <div class="text-center py-5">
      <h2>Cerchi qualcos'altro?</h2>
      <h4>Scegli tra tutte le categorie disponibili</h4>
    </div>

    <div
      class="
        col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12
        t4-category-label
      "
      v-for="category in categories"
      :key="category.id"
    >
      <h2>{{ category.name }}</h2>
      <img :src="'/images/category_img/' + category.image" alt="" />
    </div>
  </div>
</template>

<script>
export default {
  name: "CategoriesCardComponent",
  props: {
    categories: Array,
  },
};
</script>

<style>
</style>
