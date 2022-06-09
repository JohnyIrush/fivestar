<template>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active p-4">
        <welcome></welcome>
        <img class="img-fluid d-block w-100 welcome-image-size" src="/Illustrations/Welcome.gif" alt="" srcset="">
        <div class="row justify-content-center">
          <div class="col text-center">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <setup_guide></setup_guide>
      </div>
      <div class="carousel-item">
        <img class="img-fluid d-block w-100 welcome-image-size" src="/images/Products/Inteli System.png" alt="" srcset="">
      </div>
    </div>
  </div>
</template>


<script>

import welcome from '../cards/welcome.vue'
import setup_guide from '../cards/setup-guide.vue'

export default {
  props: {
  },
  watch: {
  },
  components:
  {
    welcome,
    setup_guide
  }
  ,
  methods: {
  },

}
</script>


<style scoped>
.welcome-image-size
{
  height: 50vh;
}
</style>
