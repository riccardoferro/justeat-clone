<template>
  <!-- DANI qui andrà il nostro Header con login e register -->
  <div class="sticky-top t4-bg-black">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand t4-logo-nav" href="/">
          <img src="/images/logo.png" alt="logo-booleat" />
        </a>

        <div class="d-flex justify-content-end align-items-center">

          <!-- Carrello -->
          <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <div class="t4-nav-item">
              <img src="/images/shopping.png" alt="shorp-cart" />
            </div>
          </button>
          
          <!-- Drop inf -->
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel"
          >
            <!-- Header carrello -->
            <div class="offcanvas-header">
              
              <h3 class="t4-orange-text" id="offcanvasRightLabel">Carrello</h3>

              <!-- Bottone chiusura drop  -->
              <button
                type="button"
                class="t4-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              >
                <img src="/images/cross.png" alt="" />
              </button>

            </div>

            <!-- body della drop del carrello -->
            <div class="offcanvas-body">


              <div v-for="(plate,index) in cart" :key="plate.id + index">
                
                <span> {{plate.name}} </span>

              </div>


                Il tuo carrello è vuoto!






            </div>

          </div>

          <!-- fine carrello -->


          <!-- Hamburger menu -->
          <button
            class="navbar-toggler t4-toggle-btn"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="t4-nav-toggle">
              <img src="/images/menu.png" alt="" />
            </span>
          </button>
        </div>

        <!-- Login e Register -->
        <div
          class="
            collapse
            navbar-collapse
            ms-0 ms-md-0 ms-lg-0
            justify-content-end
          "
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="t4-nav-item t4-orange-text me-3" href="/login"
              ><img src="/images/user.png" alt="Login Booleat" />
              Login
            </a>
            <a
              class="t4-nav-item t4-orange-text mt-lg-0 mt-md-2 mt-sm-2 mt-2"
              href="/register"
              ><img src="/images/register.png" alt="Register Booleat" />
              Registrati
            </a>
          </div>
        </div>

      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "HeaderComponent",
  props: {
    cart: Array,
  },



};
</script>

<style lang="scss" scoped>
</style>
