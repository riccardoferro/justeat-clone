<template>
  <div class="row t4-bg-orange">
    <h2 class="text-center pt-5 pb-5 mt-5 mb-5">Cerchi qualcos'altro?</h2>
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
