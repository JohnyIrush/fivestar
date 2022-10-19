<template>
 <button 
        :class="'nav-link ' + tab_button_classes" 
        :id="label + '-tab'" 
        data-bs-toggle="tab" 
        :data-bs-target="'#' + label" 
        type="button" 
        role="tab" 
        :aria-controls="label" 
        aria-selected="false">
        <i :class="icon_classes"></i>
        {{label}}
 </button>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        name: "TabButton",
        props: {
          label: {
            type: String, // String, Number, Boolean, Function, Object, Array
          },
          icon_classes: {
            type: String, // String, Number, Boolean, Function, Object, Array
          },
          tab_button_classes: {
            type: String
          }
        },
        components: {

        },
        mounted() {

        },
    })
</script>