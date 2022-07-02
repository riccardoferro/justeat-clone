<template>
  <!-- DANI qui andrà il nostro Header con login e register -->
  <div class="sticky-top t4-bg-black">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand t4-logo-nav" href="#">
          <img src="/images/logo.png" alt="logo-booleat" />
        </a>
        <div class="d-flex justify-content-end align-items-center">
          <div class="btn-group">
            <button
              type="button"
              class="btn"
              data-bs-toggle="dropdown"
              data-bs-display="static"
              aria-expanded="false"
            >
              <a class="t4-nav-item t4-orange-text" href=""
                ><img src="/images/shopping.png" alt="shorp-cart" />
              </a>
            </button>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
              <li>
                <button class="dropdown-item" type="button">
                  Il tuo carrelo è vuoto!
                </button>
              </li>
            </ul>
          </div>

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
};
</script>

<style lang="scss" scoped>
</style>
