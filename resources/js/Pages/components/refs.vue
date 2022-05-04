<template>
 <div class="card text-center">
     <h1>Refs</h1>
     <input type="text" ref="input">
     <button v-on:click="readRefs">Submit</button>
     <p>Your fev food: {{output}}</p>
 </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link, 
        },
        data() {
            return {
                output: 'Your fev food'
            }
        }, 
        computed:
        {

        },
        methods: 
        {
            readRefs()
            {
                console.log(this.$refs.input.value);
                this.output = this.$refs.input.value
            }
        }
    })
</script>

<style scoped>

</style>