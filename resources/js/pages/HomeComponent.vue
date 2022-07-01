<template>
  <div>
    <JumbotronComponent />

    <RestaurantCardsComponent :users="users" />

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
  data() {
    return {
      users: [],
      // currentPage:1,
      // previusPageLink:"",
      // nextPageLink:"",
    };
  },
  mounted() {
    this.loadPage("http://127.0.0.1:8000/api/users");
  },

  methods: {
    loadPage(url) {
      window.axios
        .get(url)
        .then((results) => {
          console.log(results);
          if (results.status === 200 && results.data.success) {
            this.users = results.data.results;
            // this.currentPage = results.data.results.current_page;
            // this.previousPageLink = results.data.results.prev_page_url;
            // this.nextPageLink = results.data.results.next_page_url;
          }
          console.log(this.users);
        })
        .catch((e) => {
          console.log(e);
        });
    },

    // Funzioni Cambio Pagina
    // goPreviousPage() {
    //   this.loadPage(this.previousPageLink);
    // },
    // goNextPage() {
    //   this.loadPage(this.nextPageLink);
    // },
  },
};
</script>

<style lang="scss" scoped>
</style>
