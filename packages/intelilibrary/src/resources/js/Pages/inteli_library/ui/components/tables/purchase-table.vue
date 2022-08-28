<template>
  <div class="row">
      <div class="col-11 col-xl-11 glass-content">
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Purchase Number</th>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Supplier Name</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Warehouse</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Date</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Total</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Total Product</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Received</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Missing Item</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="purchase in purchases" :key="purchase.id">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{purchase.id}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                     <div class="d-flex flex-column justify-content-center">
                       <span class="text-xs font-weight-bold"> {{purchase.purchase_number}} </span>
                     </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> {{purchase.supplier.supplier}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.warehouse.name}}</span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.price}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.date}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.status}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.quantity}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.total}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.received}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{purchase.missing}} </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
       </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue'


    export default defineComponent({
        props: ["purchases"],
        components: {

        },
        data() {
            return {
            }
        },
        methods: {


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

.card, .card-header, .card-body
{
  background: transparent !important;
}

</style>
