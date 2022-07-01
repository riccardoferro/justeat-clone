<template>
  <div>
    <JumbotronComponent />
    <RestaurantCardsComponent />
    <BannerAppComponent />
    <CategoriesCardsComponent />
    <BannerInfoComponent />
    <FooterComponent />
  </div>
</template>

<script>
import JumbotronComponent from "../components/JumbotronComponent.vue";
import CategoriesCardsComponent from "../components/CategoriesCardsComponent.vue";
import BannerAppComponent from "../components/BannerAppComponent.vue";
import BannerInfoComponent from "../components/BannerInfoComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";
import RestaurantCardsComponent from "../components/RestaurantCardsComponent.vue";
export default {
  name: "HomeComponent",
  components: {
    JumbotronComponent,
    CategoriesCardsComponent,
    BannerAppComponent,
    BannerInfoComponent,
    FooterComponent,
    RestaurantCardsComponent,
  },
};
</script>

<style lang="scss" scoped>
</style>
