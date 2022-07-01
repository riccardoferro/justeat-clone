<template>
  <div>
    <div class="container-fluid">
      <HeaderComponent />
      <JumbotronComponent />
      <CategoriesCardComponent />
      <BannerComponent />
      <CategoriesCardComponent />
      <FooterComponent />
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent.vue";
import JumbotronComponent from "../components/JumbotronComponent.vue";
import CategoriesCardComponent from "../components/CategoriesCardComponent.vue";
import BannerComponent from "../components/BannerComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";
export default {
  name: "AppComponent",
  components: {
    HeaderComponent,
    JumbotronComponent,
    CategoriesCardComponent,
    BannerComponent,
    FooterComponent,
  },
};
</script>

<style>
</style>
