<template>
 <div class="card text-center">
     <h1 @click="changeTitle()">{{title}}</h1>


 </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link, 
        },
        props: ['title'],
        data() {
            return {
                title: 'Inteli System'
            }
        }, 
        computed:
        {

        },
        methods:
        {
            changeTitle()
            {
                this.title = "Inteli App";
                this.$emit('changeTitle', 'Inteli App');
            }
        }
    })
</script>

<style scoped>

</style>