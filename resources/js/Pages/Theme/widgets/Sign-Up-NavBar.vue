<template>
  <nav :class="'navbar navbar-expand-lg top-0 w-100 shadow-none my-3  mt-4 '  + Theme.key + '-section'">
    <div class="container">
      <a :class="'navbar-brand font-weight-bolder ms-lg-0 ms-3 '  + Theme.key + '-text-color'" :href="route('dashboard')">
        Inteli System
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" :class="'btn btn-sm  btn-round mb-0 me-1 '  + Theme.key + '-gradient '" onclick="smoothToPricing('pricing-soft-ui')"><span>Buy Now</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
    import { defineComponent, inject, ref } from 'vue'

    export default defineComponent({
        components: {

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