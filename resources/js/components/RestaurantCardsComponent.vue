<template>
  <div>
    <div class="row">
      <div
        class="col-4 mb-5"
        style="color: white"
        v-for="user in users"
        :key="user.id"
      >
        <p>{{ user.name }}</p>
        <p>{{ user.company }}</p>
        <p>
          <span v-for="category in user.categories" :key="category.slug">
            {{ category.name }}</span
          >
        </p>
        <img :src="'/storage/' + user.image" alt="" />
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
