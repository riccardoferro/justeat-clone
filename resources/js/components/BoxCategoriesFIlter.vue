<template>
    <div>
        <h3>Categorie</h3>
        <div class="form-check" v-for="(categori,index) in categoriesArr" :key="index" >
            <input class="form-check-input" type="checkbox" :value="categori.id" :id="'categori'+index">
            
            <label class="form-check-label" :for="'categori' + index ">
                {{categori.name }} 
            </label>
        </div>
    </div>
</template>

<script>
export default {
  name: "BoxCategoriesFilter",
  props: {
      users: Array,
      category : Object,
      categoriesArr: Array,
  },
}
</script>

<style>

</style>