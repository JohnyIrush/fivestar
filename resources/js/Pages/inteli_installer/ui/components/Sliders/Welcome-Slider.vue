<template>
  <div id="welcome-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active btn-danger
btn-danger" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="btn-danger" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="btn-danger" aria-label="Slide 3"></button>
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
        <img class="img-fluid d-block w-100 welcome-image-size" src="/images/Products/Ultimate.png" alt="" srcset="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#welcome-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon btn-danger" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#welcome-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon btn-danger" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
