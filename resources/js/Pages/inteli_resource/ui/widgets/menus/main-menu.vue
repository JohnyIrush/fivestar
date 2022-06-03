<template>
    <div class="collapse glass-content navbar-collapse m-2  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
<!--<nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled">Disabled</a>
</nav>-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <Link class="nav-link " :href="route('dashboard')">
            <div class="icon icon-shape bg-gradient-info shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link  " :href="route('file-manager')">
            <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
             <i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">File Manager</span>
          </Link>
          <!--<div class="ml-5">
            <file_manager_menu></file_manager_menu>
          </div>-->
        </li>
        <li class="nav-item">
          <Link class="nav-link  " :href="route('user-manager')">
            <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
              <i class="fas fa-users fa-2x"></i>
            </div>
            <span class="nav-link-text ms-1">User Manager</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link  "  :href="route('gallery')">
            <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
              <i class="fa fa-picture-o fa-2x" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Gallery</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link " :href="route('settings')">
            <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
              <i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </Link>
        </li>
        <hr class="horizontal dark mt-0">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Auth</h6>
        </li>
        <li class="nav-item">
          <Link class="nav-link  " :href="route('login')">
            <div class="icon icon-shape  shadow border-radius-md bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link  " :href="route('register')">
            <div class="icon icon-shape  shadow border-radius-md bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </Link>
        </li>
      </ul>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import file_manager_menu from "./file-manager-menu.vue"

    export default defineComponent({
        components: {
            Link,
            file_manager_menu
        },
    })
</script>

<style scoped>
hr {
    border: none !important;
    height: 3px !important;
    color: black !important; /* old IE */
    background-color: black !important; /* Modern Browsers */
}


</style>
