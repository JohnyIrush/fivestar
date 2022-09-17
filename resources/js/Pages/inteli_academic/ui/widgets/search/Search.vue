<template>
 <div class="d-flex flex-row">
   <div class="input-group flex-nowrap search">
     <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search" @click="activate"></i></span>
     <input type="text" class="form-control" placeholder="search..." aria-label="search" aria-describedby="addon-wrapping" v-show="active" id="search-input" v-model="search">
     <span class="input-group-text" id="addon-wrapping" @click="clear" v-if="active">
        <i class="fas fa-times"></i>
     </span>
   </div>
 </div>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        name: "search",
        components: {

        },
        data()
        {
            return{
                active: false,
                search: ''
            }
        },
        watch:{
            search(newValue, oldValue)
            {
                this.$emit("searchFilter", newValue)
            }
        },
        methods:{
            clear()
            {
              const input = document.querySelector('#search-input');
              input.value = ''
            },
            activate()
            {
                this.active = !this.active;
            }
        },
        mounted() {
        },
    })
</script>

<style scoped>

</style>