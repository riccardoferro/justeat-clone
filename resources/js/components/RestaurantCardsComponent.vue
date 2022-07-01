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
        <img :src="imagePut(user.image)" alt="" />
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
        newString = `/images/${string}`;
      }
      return newString;
    },
  },
};
</script>

<style>
</style>
