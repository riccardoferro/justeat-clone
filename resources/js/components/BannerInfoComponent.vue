<template>
  <div
    class="
      row
      t4-bg-banner-info
      justify-content-xxl-end
      justify-content-xl-end
      justify-content-lg-end
      justify-content-md-end
      justify-content-sm-center
      justify-content-center
    "
    id="lavoraconnoi"
  >
    <div
      class="col-xxl-5 col-xl-4 col-lg-6 col-md-7 col-sm-12 col-12 t4-card-Info"
    >
      <h2>Lavora con noi</h2>
      <p class="t4-orange-text t4-fw-6">
        Per i nostri Rider Booleat rappresenta una sfida e uno stimolo, entra
        anche tu a far parte del nostro Team!
      </p>
      <button class="t4-add-btn btn t4-bg-black">
        <a class="t4-orange-text" href="/register">
          Diventa Partner
          <span>
            <img src="/images/headset.png" alt="" />
          </span>
        </a>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "BannerInfoComponent",
};
</script>

<style lang="scss" scoped>
.t4-bg-banner-info {
  background-image: url("/images/rider.png");
  background-size: cover;
  background-position-y: center;
  //   padding-top: 50px;
  //   padding-bottom: 200px;
  padding: 100px;
}
.t4-card-Info {
  background: rgba(0, 0, 0, 0.5);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  backdrop-filter: blur(18.5px);
  -webkit-backdrop-filter: blur(18.5px);
  border-radius: 25px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  padding: 25px;
  margin: 20px;
}

a:hover {
  color: #fd7d2b;
}
</style>
