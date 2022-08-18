<template>
    <div class="card glass-header">
        <div class="row justify-content-center">
            <div class="col">
                <img :src="supplier.avatar">
            </div>
            <div class="col"></div>
            <div class="col"><i class="fas fa-ellipsis-v fa-3x"></i></div>
        </div>
        <div class="row">
         <div class="col-6">
            <strong class="text-dark">Name:</strong> &nbsp;
        </div>
         <div class="col-6">
            {{supplier.supplier}}
        </div>
         <div class="d-grid gap-2 col mx-auto">
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#supplier-info-modal" data-bs-whatever="@mdo" @click="passSupplier()">View More</button>
         </div>
    </div>
</div>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        props: ["supplier"],
        components: {

        },
        data() {
            return {

            }
        },
        methods: {
            passSupplier()
            {
                store.commit('getSupplier', this.supplier)
            }
        },
        mounted() {

        },
    })
</script>

<style scoped>

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}
</style>
