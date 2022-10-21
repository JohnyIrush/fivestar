<template>
    
</template>
<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        name: "Warehouse",
        components: {

        },
        data() {
            return {
                warehouse: [],
            }
        },

        methods: {
            getWarehouse()
            {

                axios.get("warehouse")
                .then((response)=>{
                    this.warehouse = response.data
                    console.log(this.warehouse)
                })
            }
        },
        mounted(){
            this.getWarehouse()
        },
    })
</script>
