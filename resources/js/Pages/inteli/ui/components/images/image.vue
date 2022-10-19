<template>
  <div class="" v-if="info.profile_photo_path">
     <img :src="info.profile_photo_path" alt="">
  </div>
  <div class="" v-else-if="info.avatar">
     <img :src="info.avatar" alt="">
  </div>
  <div class="" v-else-if="info.image">
     <img :src="info.image" alt="">
  </div>
  <div class="" v-else-if="info.logo">
     <img :src="info.logo" alt="">
  </div>
  <div class="" v-else-if="info.thumbnail">
     <img :src="info.thumbnail" alt="">
  </div>
  <div class="" v-else-if="info.photo">
     <img :src="info.photo" alt="">
  </div>
  <div class="" v-else-if="info.profile_image">
     <img :src="info.profile_image" alt="">
  </div>
  <div class="" v-else-if="info.cover">
     <img :src="info.cover" alt="">
  </div>
</template>


<script>
import { defineComponent } from 'vue'


export default defineComponent({
  props: ["info"],
  components:
  {

  },
  watch: {
  },
  data() {
    return {

    }
  },
  methods: {

  },
  mounted()
  {

  }

});
</script>


<style scoped>

</style>
