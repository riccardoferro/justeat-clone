<template>
  <div>
    <div>
      <HeaderComponent />
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent.vue";

export default {
  name: "AppComponent",
  components: {
    HeaderComponent,
  },
};
</script>

<style>
</style>
