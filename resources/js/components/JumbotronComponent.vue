<template>
  <div class="row">
    <div class="col-12 t4-carousel">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active t4-carousel-p t4-carousel-img">
            <img
              src="/images/Jumbo.png"
              class="d-block w-100"
              alt="jumbo-home"
            />
            <div class="text-center t4-carousel-text">
              <div
                class="
                  d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none
                  t4-grad-orange
                "
              >
                <div
                  class="
                    d-flex
                    t4-jumbo-logo
                    align-items-end
                    justify-content-center
                  "
                >
                  <h1 class="t4-grad-orange t4-fw">Booleat</h1>
                  <img src="/images/delivery-bike.png" alt="" />
                </div>
                <h1 class="t4-fw">Mangia con un click!</h1>
                <h4 class="mb-5">
                  Ordina online dai tuoi ristoranti preferiti
                </h4>
              </div>
              <div
                class="
                  d-flex
                  justify-content-center
                  align-items-baseline
                  mt-sm-5
                "
              >
                <div
                  class="
                    d-flex
                    flex-column
                    d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block d-block
                    t4-grad-orange
                  "
                >
                  <h3 class="t4-fw">Mangia con un click!</h3>
                  <p>Ordina online dai tuoi ristoranti preferiti</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item t4-carousel-img">
            <img src="/images/team4.jpg" class="d-block w-100" alt="team4" />
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "JumbotronComponent",
};
</script>

<style lang="scss" scoped>
.row {
  div {
    max-height: 90vh;
  }
}
</style>
