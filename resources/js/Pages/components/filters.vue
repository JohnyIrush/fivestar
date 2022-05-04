<template>
 <div class="card text-center">
     <h1 >Filters</h1>
     <p>{{ blog.title | to-uppercase}}</p>
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
                blog: {
                    title: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, omnis"
                }
            }
        }, 
        computed:
        {

        },
        methods:
        {

        },
        filters:
        {
            'to-uppercase': function(value) {
                return value.toUpperCase()
            }
        }
    })
</script>

<style scoped>

</style>