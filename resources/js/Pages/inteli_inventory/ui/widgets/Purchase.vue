<template>
    
</template>
<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        name: "Purchase",
        components: {

        },
        data() {
            return {
                purchases: [],
            }
        },

        methods: {
            getPurchases()
            {
                axios.get("purchases")
                .then((response)=>{
                    this.purchases = response.data
                    console.log(this.purchases)
                })
            },
        },
        mounted(){
            this.getPurchases()
        },
    })
</script>