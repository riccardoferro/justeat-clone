<template>
  <div>
    <h2 class="text-center pt-5">In evidenza</h2>
    <div class="row pt-5 justify-content-center">
      <div
        class="col-4 mb-5 d-flex flex-column align-items-center"
        style="color: white"
        v-for="user in users"
        :key="user.id"
      >
        <div class="text-center">
          <h6 class="t4-orange-text">
            {{ user.company }}
            <span class="t4-icon-company">
              <img src="/images/posate.png" alt="" />
            </span>
          </h6>
          <h6 class="mb-3">
            <span class="t4-orange-text">Categorie:</span>
            <span v-for="category in user.categories" :key="category.slug">
              {{ category.name }}
            </span>
          </h6>
        </div>
        <div class="col-8 t4-img-company">
          <img :src="'/storage/' + user.image" alt="" />
        </div>
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
};
</script>

<style>
</style>
