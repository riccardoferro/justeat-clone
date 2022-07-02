<template>
  <div class="row">
    <div
      class="
        row
        t4-bg-banner-top
        py-5
        justify-content-evenly
        align-items-center
      "
    >
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-7 col-12 mb-5">
        <div class="d-flex flex-column t4-card-download">
          <h2>Ordina comodamente da casa</h2>
          <h4>I nostri Rider arriveranno subito da te</h4>
          <p class="t4-orange-text t4-fw-6">
            Scarica l'app e otterai il 25% sul tuo primo ordine!
          </p>
          <div class="row t4-download">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
              <a href="https://www.apple.com/it/app-store/">
                <img src="/images/appstore.svg.png" alt="logo-appstore" />
              </a>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
              <a href="https://play.google.com/store/games?hl=it&gl=US">
                <img src="/images/googleplay.png" alt="logo-googleplay" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="
          col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-7
          t4-banner-app
        "
      >
        <img src="/images/Booleat-Tel.png" alt="" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BannerAppComponent",
};
</script>

<style lang="scss" scoped>
</style>
