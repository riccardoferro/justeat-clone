<template>
  <header>
    <!-- DANI qui andrà il nostro Header con login e register -->
    <nav class="navbar navbar-expand-lg t4-navbar sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand t4-logo-nav" href="#">
          <img src="/images/logo.png" alt="logo-booleat" />
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
          <span class="navbar-toggler-icon t4-nav-toggle">
            <img src="/images/menu.png" alt="" />
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
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
            <a
              class="nav-link disabled"
              href="#"
              tabindex="-1"
              aria-disabled="true"
            ></a>
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
