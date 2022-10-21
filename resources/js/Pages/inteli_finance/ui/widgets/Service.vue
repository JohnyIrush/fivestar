<template>
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Service'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'finance/service/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Services'" :icon_classes="'far fa-eye'" :title="'Services'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'DataTable'" :dataPath="'finance/service/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statisticsData="statistics" />
           </div>

           <main-modal></main-modal>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../../../inteli/ui/components/cards/StatisticCardData.vue';


import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'

import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

export default defineComponent({
        components: {
            StatisticCardData,
            ModalButton,
            MainModal
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

