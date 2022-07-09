<template>
  <div>
    <div
      class="
        container
        t4-h80vh
        d-flex
        align-items-center
        justify-content-center
      "
    >
      <div class="row justify-content-center text-center">
        <h1 class="t4-orange-text m-auto">Pagamento avvenuto con successo!</h1>
        <div
          class="
            col-4 col-xl-3 col-xxl-3 col-md-4
            m-auto
            d-flex
            justify-content-center
          "
        >
          <img class="t4-w100 pt-5 pb-5" src="/images/success.png" alt="" />
        </div>
        <div class="row justify-content-center">
          <div class="col-3 d-flex justify-content-center">
            <a href="/" class="btn t4-add-btn d-flex align-items-center">
              <span class="me-2">Home</span>
              <img src="/images/replay.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SuccessPages",
};
</script>

<style>
</style>
