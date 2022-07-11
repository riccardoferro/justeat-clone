<template>
  <div class="container-fluid" id="home">
    <JumbotronComponent />

    <RestaurantCardsComponent v-if="users.length > 0" :users="users" />
    <LoaderComponent v-else />

    <BannerAppComponent />

    <CategoriesCardsComponent
      v-if="categories.length > 0"
      :categories="categories"
    />
    <LoaderComponent v-else />

    <BannerInfoComponent />
    <WhoWeAreComponent />
  </div>
</template>

<script>
import JumbotronComponent from "../components/JumbotronComponent.vue";
import CategoriesCardsComponent from "../components/CategoriesCardsComponent.vue";
import BannerAppComponent from "../components/BannerAppComponent.vue";
import BannerInfoComponent from "../components/BannerInfoComponent.vue";
import RestaurantCardsComponent from "../components/RestaurantCardsComponent.vue";
import LoaderComponent from "../components/LoaderComponent.vue";
import WhoWeAreComponent from "../components/WhoWeAreComponent.vue";
export default {
  name: "HomeComponent",
  components: {
    JumbotronComponent,
    CategoriesCardsComponent,
    BannerAppComponent,
    BannerInfoComponent,
    RestaurantCardsComponent,
    LoaderComponent,
    WhoWeAreComponent,
  },
  data() {
    return {
      users: [],
      categories: [],
      // currentPage:1,
      // previusPageLink:"",
      // nextPageLink:"",
      // currentCategoriesPage:1,
      // previusCategoriesPageLink:"",
      // nextPageCategoriesLink:"",
    };
  },
  mounted() {
    this.getAllUsers("http://127.0.0.1:8000/api/users");
    this.getAllCategories("http://127.0.0.1:8000/api/categories");
  },

  methods: {
    getAllCategories(url) {
      window.axios
        .get(url)
        .then((results2) => {
          //   console.log(results2);
          if (results2.status === 200 && results2.data.success) {
            this.categories = results2.data.results2;
            // this.currentPage = results.data.results.current_page;
            // this.previousPageCategoriesLink = results.data.results.prev_page_url;
            // this.nextPageCategoriesLink = results.data.results.next_page_url;
          }
          //   console.log(this.categories);
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

    // prende tutti gli utenti
    getAllUsers(url) {
      window.axios
        .get(url)
        .then((results) => {
          //   console.log(results);
          if (results.status === 200 && results.data.success) {
            this.users = results.data.results;
            // this.currentPage = results.data.results.current_page;
            // this.previousPageLink = results.data.results.prev_page_url;
            // this.nextPageLink = results.data.results.next_page_url;
          }
          //   console.log(this.users);
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
