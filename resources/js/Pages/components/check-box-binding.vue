<template>
 <div class="card text-center">
     <h1 >Check Box Binding</h1>
     <label for="">Author</label>
     <select v-model="blog.author">
         <option v-for="author in authors" :key="author">{{author}}</option>
     </select>

     <p>Author: {{blog.author}}</p>
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
                blog:
                {
                    author: ""
                },
                authors: ['The Net Ninja', 'The Angular Avenger', 'The Vue Vindicator']
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