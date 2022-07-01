<template>
  <div>
    <div class="container-fluid">
      <HeaderComponent />
      <JumbotronComponent />
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent.vue";
import JumbotronComponent from "../components/JumbotronComponent.vue";
export default {
  name: "AppComponent",
  components: {
    HeaderComponent,
    JumbotronComponent,
  },
};
</script>

<style>
</style>
