<template>
      <!-- partial:partials/_sidebar.html -->
      <nav :class="'sidebar sidebar-offcanvas ml-2 mr-2 '  + Theme.key + '-section'" id="sidebar">
        <school_modules_menu></school_modules_menu>
      </nav>
      <!-- partial -->
</template>

<script>
    import { defineComponent, ref, inject } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import school_modules_menu from './menus/school-modules-menu.vue'

    export default defineComponent({
        components: {
          Link,
          school_modules_menu
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
        mounted()
        {

        },
    })
</script>

<style scoped>

</style>
