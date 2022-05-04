<template>
 <div class="card text-center">
     <h1>Dynamic CSS</h1>
     <!--<div v-bind:class="{available: available}">
         <div v-on:click="available = !available">
             <span>Johnte</span>
         </div>
     </div>-->
     <button v-on:click="nearby = !nearby">Toggle nearby</button>
     <button v-on:click="available = !available">Toggle available</button>
     <div v-bind:class="compClasses">
        <span>Johnte</span>
     </div>
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
                available: false,
                nearby: false
            }
        }, 
        computed:
        {
            compClasses()
            {
                return {
                    available: this.available,
                    nearby: this.nearby
                }    
            }
        },
        methods:
        {
        }
    })
</script>

<style scoped>
span
{
    background: red;
    display: inline-block;
    padding: 10px;
    color: #fff;
    margin: 10px 0;
}

.available span
{
    background: green;
}

.nearby span::after
{
    content: 'nearby';
    margin: 10px;
}
</style>