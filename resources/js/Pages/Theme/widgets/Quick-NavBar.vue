<template>
    <div :class="'container position-sticky top-0 ' + Theme.key + '-section '">
    <div class="row">
      <div class="col-12 ">
        <!-- Navbar -->
        <nav :class="'navbar navbar-expand-lg top-0 shadow position-absolute my-3 py-2 start-0 end-0 mx-4 ' + Theme.key + '-card'">
          <div class="container-fluid">
            <Link :class="'navbar-brand font-weight-bolder ms-lg-0 ms-3 ' + Theme.key + '-text-color'" :href="route('dashboard')">
              Inteli System 
            </Link>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <Link :class="'nav-link d-flex align-items-center me-2 active ' + Theme.key + '-text-color'" aria-current="page" :href="route('dashboard')">
                    <i class="fa fa-chart-pie opacity-6  me-1"></i>
                    Dashboard
                  </Link>
                </li>
                <li class="nav-item">
                  <Link :class="'nav-link me-2 ' + Theme.key + '-text-color'" :href="route('user-profile')">
                    <i class="fa fa-user opacity-6  me-1"></i>
                    Profile
                  </Link>
                </li>
                <li class="nav-item">
                  <Link :class="'nav-link me-2 ' + Theme.key + '-text-color'" :href="route('register')">
                    <i class="fas fa-user-circle opacity-6  me-1 "></i>
                    Sign Up
                  </Link>
                </li>
                <li :class="'nav-item '">
                  <Link :class="'nav-link me-2 ' + Theme.key + '-text-color'" :href="route('login')">
                    <i class="fas fa-key opacity-6  me-1 "></i>
                    Sign In
                  </Link>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item text-white">
                  <a href="https://softwarescares.co.ke" :class="'btn btn-sm btn-round mb-0 me-1 text-white '+ Theme.key + '-gradient'">SoftwaresCares</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
</template>

<script>
    import { defineComponent, ref, reactive, inject } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
          Link
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
    })
</script>

<style scoped>

</style>