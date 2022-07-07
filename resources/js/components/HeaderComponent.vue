<template>
  <!-- DANI qui andrà il nostro Header con login e register -->
  <div class="sticky-top t4-bg-black">
    <nav class="navbar navbar-expand-lg">
      <div class="container-md">
        <!-- Logo -->
        <a class="navbar-brand t4-logo-nav" href="/">
          <img src="/images/logo.png" alt="logo-booleat" />
        </a>

        <div class="d-flex justify-content-end align-items-center">
          <!-- Carrello -->
          <button
            class="btn"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
          >
            <div class="t4-nav-item position-relative t4-cart">
              <span
                v-if="cart.length > 0"
                class="
                  position-absolute
                  top-0
                  start-100
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                "
              >
                {{ cart.length }}
              </span>
              <img src="/images/shopping.png" alt="shorp-cart" />
            </div>
          </button>

          <!-- Drop inf -->
          <div
            class="offcanvas offcanvas-end t4-sidecart"
            tabindex="-1"
            id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel"
          >
            <!-- Header carrello -->
            <div class="offcanvas-header">
              <h3 class="t4-orange-text" id="offcanvasRightLabel">
                Il Tuo Carrello
                <span class="t4-cart-side">
                  <img src="/images/shopping.png" alt="" />
                </span>
              </h3>

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
            <div v-if="cart.length > 0" class="offcanvas-body">
              <div v-for="(plate, index) in cart" :key="plate.id + `${index}`">
                <!-- <div class="col-3">
                  <span> {{ plate.name }} </span>
                </div>
                <div class="col-2">
                  <img :src="'storage/' + plate.image" :alt="plate.name" />
                </div>

                <div class="col-3">{{ plate.price }} &euro;</div> -->

                <div
                  class="
                    row
                    t4-cart-item
                    mt-3
                    mb-3
                    align-items-center
                    justify-content-between
                  "
                >
                  <div class="col-3">
                    <img :src="'storage/' + plate.image" :alt="plate.name" />
                  </div>
                  <div class="col-3">
                    <h6>{{ plate.name }}</h6>
                    <h6 class="t4-orange-text t4-fw-6">
                      {{ plate.price }} &euro;
                    </h6>
                    <div class="t4-w100 d-flex justify-content-between">
                      <div @click="removeItem(plate)" class="t4-w30">
                        <img class="t4-w80" src="/images/minus1.png" alt="" />
                      </div>
                      <div class="t4-w30 text-center">
                        <p>{{ plate.quantity }}</p>
                      </div>
                      <div @click="addItem(plate)" class="t4-w30">
                        <img class="t4-w80" src="/images/plus1.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-3 d-flex flex-column">
                    <p class="t4-w100">Parziale:</p>
                    <p class="t4-w100 t4-orange-text">
                      {{ plate.total }} &euro;
                    </p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-6">
                  <h6 class="t4-orange-text t4-fw-6 text-end me-3">
                    Totale:{{ totaleComplessivo(cart) }} &euro;
                  </h6>
                </div>
              </div>
              <div class="row t4-w100 justify-content-around mt-3">
                <div class="col-4">
                  <router-link
                    :to="{ name: 'payments-page' }"
                    class="btn t4-add-btn d-flex align-items-center"
                  >
                    Paga
                    <div class="t4-btn-pay ms-2 t4-w30">
                      <img src="/images/pay-per-click.png" alt="" />
                    </div>
                  </router-link>
                </div>
                <div class="col-4">
                  <button
                    @click.prevent="clearCart(cart)"
                    class="btn t4-add-btn d-flex align-items-center"
                  >
                    Svuota
                    <div class="t4-btn-pay ms-2 t4-w30">
                      <img src="/images/delete.png" alt="" />
                    </div>
                  </button>
                </div>
              </div>
            </div>

            <p v-else>Il tuo carrello è vuoto!</p>
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
  methods: {
    addItem(plate) {
      this.$emit("takeItem", plate);
    },
    removeItem(plate) {
      this.$emit("removeItem", plate);
    },
    totaleComplessivo(arr) {
      let total = 0;
      arr.forEach((element) => {
        total += parseFloat(element.total);
      });
      return total.toFixed(2);
    },
    totalPlatesBadge(arr) {
      let total = 0;
      arr.forEach((element) => {
        total += element.quantity;
      });
      return total;
    },
    clearCart(arr) {
      this.$emit("clearCart", arr);
    },
  },
};
</script>

<style lang="scss" scoped>
.t4-cart-item {
  border-bottom: 1px solid #fd7d2b;
  img {
    width: 100%;
  }
}
.t4-cart-side {
  img {
    width: 50px;
  }
}

.t4-btn-pay,
.t4-logo-pay {
  img {
    width: 100%;
  }
}

.t4-delete-item {
  img {
    width: 20px;
  }
}

.t4-sidecart {
  -webkit-box-shadow: -15px 0px 12px -5px #000000;
  box-shadow: -15px 0px 12px -5px #000000;
}

.t4-nav-toggle,
.t4-cart,
.t4-close {
  transition: all 0.2s ease-in-out;
  &:hover {
    transform: scale(1.1);
  }
}
</style>
