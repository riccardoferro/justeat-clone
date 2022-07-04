<template>
  <div class="t4-footer">
    <ul class="row align-items-center pt-5">
      <li
        v-for="(item, index) in menu"
        :key="index"
        class="col-sm-12 col-md-6 col-xl-1"
      >
        <a class="d-flex align-items-center" :href="item.urlGithub"
          ><i class="fa-brands fa-github fa-xl t4-orange-text"></i>
          <div class="name t4-orange-text">{{ item.name }}</div></a
        >
      </li>
    </ul>
    <div class="row">
      <p class="white-text">&#169; Team4 2022, all rights reserved</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "FooterComponent",
  data() {
    return {
      menu: [
        //menu is an array of objects
        {
          urlGithub: "https://github.com/DanieleGelsomino",
          urlImage: "/images/github.png",
          name: "Daniele Gelsomino",
        },
        {
          urlGithub: "https://github.com/riccardoferro",
          urlImage: "/images/github.png",
          name: "Riccardo Ferro",
        },
        {
          urlGithub: "https://github.com/LucioMelis",
          urlImage: "/images/github.png",
          name: "Lucio Melis",
        },
        {
          urlGithub: "https://github.com/Cristian6918",
          urlImage: "/images/github.png",
          name: "Cristian Tulbu",
        },
        {
          urlGithub: "https://github.com/Santoni92",
          urlImage: "/images/github.png",
          name: "Silvio Antonioli",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
ul {
  list-style-type: none;
  li {
    padding: 5px;
    &:hover {
      transform: scale(1.2);
    }

    i {
      margin: 10px;
    }
    .name {
      font-size: 8px;
    }
  }
}

p {
  font-size: 10px;
}
</style>
