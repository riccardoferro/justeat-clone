<template>
  <div>
    <div class="bubblingG">
      <span id="bubblingG_1"> </span>
      <span id="bubblingG_2"> </span>
      <span id="bubblingG_3"> </span>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
@import "../../sass/variables";
.bubblingG {
  text-align: center;
  width: 78px;
  height: 49px;
  margin: auto;
}

.bubblingG span {
  display: inline-block;
  vertical-align: middle;
  width: 10px;
  height: 10px;
  margin: 24px auto;
  background: $t4_orange_text;
  border-radius: 49px;
  -o-border-radius: 49px;
  -ms-border-radius: 49px;
  -webkit-border-radius: 49px;
  -moz-border-radius: 49px;
  animation: bubblingG 1.5s infinite alternate;
  -o-animation: bubblingG 1.5s infinite alternate;
  -ms-animation: bubblingG 1.5s infinite alternate;
  -webkit-animation: bubblingG 1.5s infinite alternate;
  -moz-animation: bubblingG 1.5s infinite alternate;
}

#bubblingG_1 {
  animation-delay: 0s;
  -o-animation-delay: 0s;
  -ms-animation-delay: 0s;
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
}

#bubblingG_2 {
  animation-delay: 0.45s;
  -o-animation-delay: 0.45s;
  -ms-animation-delay: 0.45s;
  -webkit-animation-delay: 0.45s;
  -moz-animation-delay: 0.45s;
}

#bubblingG_3 {
  animation-delay: 0.9s;
  -o-animation-delay: 0.9s;
  -ms-animation-delay: 0.9s;
  -webkit-animation-delay: 0.9s;
  -moz-animation-delay: 0.9s;
}

@keyframes bubblingG {
  0% {
    width: 10px;
    height: 10px;
    background-color: rgb(0, 0, 0);
    transform: translateY(0);
  }

  100% {
    width: 23px;
    height: 23px;
    background-color: rgb(255, 255, 255);
    transform: translateY(-20px);
  }
}

@-o-keyframes bubblingG {
  0% {
    width: 10px;
    height: 10px;
    background-color: rgb(0, 0, 0);
    -o-transform: translateY(0);
  }

  100% {
    width: 23px;
    height: 23px;
    background-color: rgb(255, 255, 255);
    -o-transform: translateY(-20px);
  }
}

@-ms-keyframes bubblingG {
  0% {
    width: 10px;
    height: 10px;
    background-color: rgb(0, 0, 0);
    -ms-transform: translateY(0);
  }

  100% {
    width: 23px;
    height: 23px;
    background-color: rgb(255, 255, 255);
    -ms-transform: translateY(-20px);
  }
}

@-webkit-keyframes bubblingG {
  0% {
    width: 10px;
    height: 10px;
    background-color: rgb(0, 0, 0);
    -webkit-transform: translateY(0);
  }

  100% {
    width: 23px;
    height: 23px;
    background-color: rgb(255, 255, 255);
    -webkit-transform: translateY(-20px);
  }
}

@-moz-keyframes bubblingG {
  0% {
    width: 10px;
    height: 10px;
    background-color: rgb(0, 0, 0);
    -moz-transform: translateY(0);
  }

  100% {
    width: 23px;
    height: 23px;
    background-color: rgb(255, 255, 255);
    -moz-transform: translateY(-20px);
  }
}
</style>
