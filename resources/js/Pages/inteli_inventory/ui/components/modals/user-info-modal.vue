<template>
  <div class="modal fade" id="user-info-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="user-info-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">Profile Info</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        <div class="modal-body">
             <div class="col-12 col-xl-12 glass-content">
              <div class="row  justify-content-center">
                <div class="col"></div>
                <div class="col">
                  <img :src="manager.avatar">
                </div>
                <div class="col"></div>
              </div>
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <tbody>
                        <tr >
                          <td class="align-middle">
                              <span class="text-xs font-weight-bold"> Name </span>
                          </td>
                          <td class="align-middle">
                              <span class="text-xs font-weight-bold"> {{manager.firstname }}{{manager.lastname }} </span>
                          </td>
                        </tr>
                        <tr >
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Email </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{manager.email }} </span>
                           </div>
                          </td>
                        </tr>
                        <tr >
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Phone </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{manager.phone }}</span>
                           </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
             </div>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button class="btn btn-primary btn-styles" type="button" data-dismiss="modal">Close</button>
         </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        components: {

        },
        data() {
            return {
                managers: [],
            }
        },
        computed: {
          manager ()
          {
            return store.state.manager
          }
        },
        methods: {

        },
        mounted() {

        },
    })
</script>

<style scoped>
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
}

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
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;*/
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


.modal-content
{
    background: transparent !important;
}


input
{
    width: 100%;
    background: white;
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #000;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.text-c-center
{
    text-align: center !important;
}

.text-font-size
{
    font-size: 18px !important;
}
</style>
