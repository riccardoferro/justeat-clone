<template>
  <div class="container-fluid">
    <div
      class="
        row
        mt-5
        justify-content-md-evenly justify-content-start
        t4-border-bottom t4-border-top
        pt-3
      "
    >
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
        <h4>Segui BoolEat</h4>
        <ul>
          <li v-for="(link, index) in seguiBooleat" :key="index">
            <a href="#">{{ link }}</a>
          </li>
        </ul>
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
        <h4>Note legali</h4>
        <ul>
          <li v-for="(link, index) in noteLegali" :key="index">
            <a href="#">{{ link }}</a>
          </li>
        </ul>
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
        <h4>Aiuto</h4>
        <ul>
          <li v-for="(link, index) in aiuto" :key="index">
            <a href="#">{{ link }}</a>
          </li>
        </ul>
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
        <h4>Profili Social</h4>
        <ul>
          <li v-for="(link, index) in linkGithub" :key="index">
            <a class="d-flex align-items-center" :href="link.urlGithub"
              ><i class="fa-brands fa-github fa-xl t4-orange-text me-2"></i>
              <div class="name t4-orange-text">{{ link.name }}</div>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="row mt-3 justify-content-center align-items-center pb-3">
      <!--d-flex-->
      <div class="col-12 text-center t4-orange-text">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <span class="white-text ms-4"
          >&#169; Team4 2022, all rights reserved
          <a href="#" class="t4-circle-btn ms-4"
            ><img src="/images/up-arrow.png" alt="arrow-up" />
          </a>
        </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "FooterComponent",
  data() {
    return {
      linkGithub: [
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
      seguiBooleat: [
        "Chi siamo",
        "Ristoranti",
        "Il nostro Blog",
        "Lavora con noi",
        "Diventa nostro partner",
      ],
      noteLegali: [
        "Termini e condizioni",
        "Informativa sulla privacy",
        "Cookies",
      ],
      aiuto: ["Contatti", "FAQ"],
    };
  },
};
</script>

<style lang="scss" scoped>
.t4-border-top {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
ul {
  list-style-type: none;
  padding-left: 0px;
  li {
    line-height: 28px;
    a {
      color: #fff;
      &:hover {
        color: #fd7d2b;
      }
    }
    .name {
      font-size: 0.9rem;
      &:hover {
        color: #b54702;
      }
    }
  }
}

img {
  width: 70px;
}

.t4-circle-btn {
  img {
    width: 30px;
    transition: all 0.2s ease-in-out;
    &:hover {
      transform: scale(1.1);
    }
  }
}

i {
  margin-right: 5px;
}
span {
  font-size: 0.8rem;
}
.t4-border-bottom {
  border-bottom: 1px solid #fd7d2b;
}
</style>
