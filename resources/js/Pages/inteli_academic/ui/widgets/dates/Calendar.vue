<template>
  
</template>

<script>

import { defineComponent, ref, reactive } from 'vue'


export default defineComponent({
        name: "Calendar",
        components: {

        },
        setup()
        {
          const year  = ref(0)
          const month  = ref(0)
          const day  = ref(0)

          const date = new Date()
          year.value = date.getFullYear()
          month.value = Number(date.getMonth())


        },
        data() {
          return {

            }
        },
        methods: {

        },
        mounted()
        {
        },
    })
</script>


<style scoped>

</style>
