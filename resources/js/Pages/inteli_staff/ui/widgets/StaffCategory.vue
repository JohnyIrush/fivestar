<template>
    <div class="row">
      <div class="col-xl-4">
        <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Category'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'staff/category/create'"></modal-button>
      </div>
      <div class="col-xl-4">
        <modal-button @showmodal="launchModal('main-modal')" :name="'Staff Category'" :icon_classes="'far fa-eye'" :title="'Category'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'DataTable'" :dataPath="'staff/category/index'"></modal-button>
      </div>
      <div class="col-xl-4"></div>
    </div>
    <div class="col-12">
      <statistic-card-data :dataPath="'staff/category/statistics'" />
    </div>
 <main-modal></main-modal>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"

import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'

import StatisticCardData from '../../../inteli/ui/components/cards/StatisticCardData.vue';
import DetailCardData from '../../../inteli/ui/components/cards/DetailCardData.vue';

import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

export default defineComponent({
        name: "StaffCategory",
        components: {
            StatisticCardData,
            DetailCardData,
            MainModal,
            ModalButton
        },
        data() {
            return {
                statistics: [],
            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getStatistics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.statistics = response.data
                })
            },
        },
        mounted()
        {

        },
    })
</script>


<style scoped>


.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


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

.avatar-size
{
    height: 150px !important;
    width: 150px !important;
}

</style>
