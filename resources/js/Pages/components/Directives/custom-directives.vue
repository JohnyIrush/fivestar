<template>
 <div class="card text-center">
     <h1 v-rainbow>Custom Directives</h1>

 </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link, 
        },
        props: [''],
        data() {
            return {

            }
        }, 
        computed:
        {

        },
        methods:
        {

        }
    })
</script>

<style scoped>

</style>