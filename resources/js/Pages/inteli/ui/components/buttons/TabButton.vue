<template>
 <button 
        class="nav-link" 
        :id="label + '-tab'" 
        data-bs-toggle="tab" 
        :data-bs-target="'#' + label" 
        type="button" 
        role="tab" 
        :aria-controls="label" 
        aria-selected="false">
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
          }
        },
        components: {

        },
        mounted() {

        },
    })
</script>