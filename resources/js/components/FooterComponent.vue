<template>
  <div class="t4-footer">
    <div class="row d-none d-md-block pt-5">
        <img src="/images/logo.png" alt="Logo BoolEat" ><!--class="t4-logo-nav"-->
    </div>
    <div class="row pt-5">
        <div class="d-none d-md-block col-md-6 col-xl-3">
            <h2>Segui BoolEat</h2>
            <ul >
                <li v-for="(item,index) in seguiBooleat" :key="index">{{ item }}</li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <h2>Note legali</h2>
            <ul>
                <li v-for="(item,index) in noteLegali" :key="index"> {{ item }}</li>
            </ul>
        </div>
        <div class="col-3 mt-md-3 mt-lg-0">
            <h2>Aiuto</h2>
            <ul>
                <li v-for="(item,index) in aiuto" :key="index">{{ item }}</li>
            </ul>
        </div>
    </div>

            <ul class="row align-items-center pt-5">
                <li  v-for="(item,index) in linkGithub" :key="index" class=" col-sm-12 col-md-6 col-xl-1">
                    <a class="d-flex align-items-center" :href=" item.urlGithub "><i class="fa-brands fa-github fa-xl t4-orange-text"></i><div class="name t4-orange-text">{{ item.name }}</div></a>
                </li>
            </ul>
            <div class="row  mt-5"><!--d-flex-->
                <div class="col-6 ">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
                <div class="col-6 d-flex justify-content-end"><p class="white-text ">All rights reserved &#169; Team4 2022</p></div>
            </div>

            <div class="d-flex justify-content-end pb-5" >
                <div id="cerchio">
                    <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                </div>
            </div>
  </div>
</template>

<script>
export default {
  name: "FooterComponent",
  data(){
    return{
         linkGithub:[ //menu is an array of objects
                {urlGithub:'https://github.com/DanieleGelsomino',urlImage:'/images/github.png',name:'Daniele Gelsomino'},
                {urlGithub:'https://github.com/riccardoferro',urlImage:'/images/github.png',name:'Riccardo Ferro'},
                {urlGithub:'https://github.com/LucioMelis',urlImage:'/images/github.png',name:'Lucio Melis'},
                {urlGithub:'https://github.com/Cristian6918',urlImage:'/images/github.png',name:'Cristian Tulbu'},
                {urlGithub:'https://github.com/Santoni92',urlImage:'/images/github.png',name:'Silvio Antonioli'}
            ],
            seguiBooleat:[
                "Investitori","Chi siamo","Ristoranti","Altro","Il nostro Blog","Programmazione","Design","Lavora con noi","Diventa nostro partner"
            ],
            noteLegali:["Termini e condizioni","Informativa sulla privacy","Cookies"],
            aiuto:["Contatti","FAQ"]
    }
  }
};
</script>

<style lang="scss" scoped>
ul {
  list-style-type: none;
  li {
    padding: 5px;

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

img{
    width:70px;
}


#cerchio {
	width:20px;
	height:20px;
	border-radius:50px;
	background:orange;
    text-align: center;
    &:hover{
        transform:scaleY(1.5);
    }
}
</style>
