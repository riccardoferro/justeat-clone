<template>
  <div class="container-lg pt-5 pb-5" id="chisiamo">
    <div class="row justify-content-center align-items-center t4-p">
      <div class="col-xxl-7 col-xl-7 col-lg-10 col-md-10 col-sm-12 col-12">
        <img src="/images/team4.jpg" alt="" />
      </div>
      <div
        class="
          col-xxl-4 col-xl-4 col-lg-6 col-md-7 col-sm-10 col-11
          t4-card-whoweare
        "
      >
        <h4 class="text-center">Chi Siamo?</h4>
        <p class="t4-orange-text">
          Booleat nasce da un progetto sviluppato da cinque ragazzi: Daniele,
          Lucio, Cristian, Riccardo e Silvio. Booleat rappresenta appieno lo
          stile e la logica che questo team ha accuratamente cercato e voluto,
          invitando cosi l'utente ad avera un esperienza migliore nell'acquisto.
          Ad oggi è il sito di Food Delivery più amato dagli utenti.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "WhoWeAreComponent",
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
}

.t4-card-whoweare {
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px 0 rgba(255, 255, 255, 0.37);
  backdrop-filter: blur(18.5px);
  -webkit-backdrop-filter: blur(18.5px);
  border-radius: 25px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  padding: 25px;
  margin: 20px;
}

.t4-p {
  padding-top: 50px;
}
</style>
