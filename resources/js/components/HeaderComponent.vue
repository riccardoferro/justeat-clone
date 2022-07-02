<template>
  <header>
    <!-- DANI qui andrà il nostro Header con login e register -->
    <nav class="navbar navbar-expand-lg t4-sticky">
      <div class="container-fluid">
        <a class="navbar-brand t4-logo-nav" href="#">
          <img src="/images/logo.png" alt="logo-booleat" />
        </a>
        <div class="d-flex justify-content-end align-items-center">
          <a class="t4-nav-item t4-orange-text" href=""
            ><img src="/images/shopping.png" alt="shorp-cart" />
          </a>
          <button
            class="navbar-toggler"
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
  </header>
</template>

<script>
export default {
  name: "HeaderComponent",
};
</script>

<style lang="scss" scoped>
</style>
