<template>
  <div 
      v-show="title == selectedTab.title">
   <slot />
  </div>
</template>

<script>
    import { defineComponent, inject } from 'vue'

    export default defineComponent({
        name: "Tab",
        props: {
          title: {
            type: String, // String, Number, Boolean, Function, Object, Array
          }
        },
        setup()
        {
            var selectedTab = inject('selectedTab');

            return {
                selectedTab
            }
        },
        components: {

        },
        mounted() {

        },
    })
</script>