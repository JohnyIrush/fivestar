<template>
  <div class="row">
    <div class="col-12">
     <div 
        :class="columnSize">
        <tab-pane
          :orientation="'vertical'">
           <tab title="Dashboard" 
                component="TabButton"
                icon_classes="fas fa-chess-board fa-2x"
                tab_button_classes="''">
          <div class="row">
            <div class="col-12">
              <statistic-card-data :statistics="statistics" />
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-4">
              <detail-card-data  :datapath="'academic/level/detail'" />
            </div>
          </div>
           </tab>
           <tab title="Days" 
                component="TabButton"
                icon_classes="fas fa-cloud-sun fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Day'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'timetable/day/create'"></modal_button>
             </div>
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Days'" :icon_classes="'far fa-eye'" :title="'Days'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'timetable/day/index'"></modal_button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           </tab>
           <tab title="Sessions" 
                component="TabButton"
                icon_classes="fas fa-user-clock fa-2x"
                tab_button_classes="mt-6"> 
           <div class="row">
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Day Session'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'timetable/day/session/create'"></modal_button>
             </div>
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Day Sessions'" :icon_classes="'far fa-eye'" :title="'Day Sessions'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'timetable/day/session/index'"></modal_button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           </tab>
           <tab title="Terms" 
                component="TabButton"
                icon_classes="fas fa-calendar fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Term'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'timetable/term/create'"></modal_button>
             </div>
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Terms'" :icon_classes="'far fa-eye'" :title="'Terms'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'timetable/term/index'"></modal_button>
             </div>
             <div class="col-xl-4"></div>
           </div> 
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           </tab>
           <tab title="Venues" 
                component="TabButton"
                icon_classes="fas fa-school fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Venue'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'timetable/venue/create'"></modal_button>
             </div>
             <div class="col-xl-4">
               <modal_button @showmodal="launchModal('main-modal')" :name="'Venues'" :icon_classes="'far fa-eye'" :title="'Venues'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'timetable/venue/index'"></modal_button>
             </div>
             <div class="col-xl-4"></div>
           </div> 
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           </tab>
           <tab title="Settings" 
                component="TabButton"
                icon_classes="fas fa-cogs fa-2x"
                tab_button_classes="mt-6">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Platform Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                       </div>
                     </li>
                   </ul>
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0 pb-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
           </tab>
        </tab-pane>
     </div>
    </div>
  </div>
 <main-modal></main-modal>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../../../inteli/ui/components/cards/StatisticCardData.vue';
import DetailCardData from '../../../inteli/ui/components/cards/DetailCardData.vue';

import BarChart from '../../../inteli/ui/components/charts/BarChart.vue'

import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

import main_menu from '../../../Theme/widgets/menus/main-menu.vue'


import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'
import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

export default defineComponent({
        components: {
            StatisticCardData,
            BarChart,
            DetailCardData,
            ModalButton,
            MainModal,
            main_menu,
            TabPane,
            Tab
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
            this.getStatistics("academic/statistics")
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


.tab-content {
  width: 100% !important; 
}
</style>
