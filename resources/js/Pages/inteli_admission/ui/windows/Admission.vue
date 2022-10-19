<template>
  <div class="row">
    <div class="col-12">
          <menu-window
            :menuTitle="'Admission Menu'"
            :menuDetails="[
                {
                  component: 'ModalButton',
                  icon_classes: 'fas fa-table fas fa-wrench',
                  title: 'Forms',
                  link: '',
                },
            ]"
            :menu_item_size="'col-2'"
            :menu_item_icon_size="''"
            :menu_item_title_classes="'text-white'"
            :menu_window_background_image="'/theme/assets/img/curved-images/curved0.jpg'"
            :settingSelectOptions="[
               {
                name: 'Application Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'application',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Interview Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'interview',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Admission Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'admission',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Leave Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'leave',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Expell Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'expell',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Ban Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'ban',
                 component: 'form',
                 value: 'id'
                }
               }
            ]"

          >
          </menu-window>
    </div>
  </div>
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
           <tab title="Application" 
                component="TabButton"
                icon_classes="fas fa-mail-bulk fa-2x"
                tab_button_classes="mt-6">
          <div class="row" v-if="true">
            <div class="col-12">
              <application_wizard></application_wizard>
            </div>
          </div>
          <div class="row justify-content-center" v-if="false">
            <div class="col-12">
               <statistic-card-data :dataPath="'admission/applicant/statistics'" />
            </div>
            <div class="col-12">
              <!--<tabular-card :dataPath="'admission/applicant/index'">
              </tabular-card>-->
            </div>
          </div>
           </tab>
           <tab title="Interview" 
                component="TabButton"
                icon_classes="fas fa-sitemap fa-2x"
                tab_button_classes="mt-6">
           <div class="row justify-content-center">
            <div class="col-12">
              <interview />
            </div>
           </div>
          <div class="row justify-content-center">
             <div class="col-12">
               <statistic-card-data :dataPath="'admission/interview/statistics'" />
             </div>
            <div class="col-12">
              <!--<tabular-card :dataPath="'admission/interview/index'">
              </tabular-card>-->
            </div>
           </div>
           </tab>
           <tab title="Admission" 
                component="TabButton"
                icon_classes="fas fa-sticky-note fa-2x"
                tab_button_classes="mt-6">
           <div class="row justify-content-center">
            <div class="col-12">
              <leave />
            </div>
           </div>
          <div class="row justify-content-center">
             <div class="col-12">
               <statistic-card-data :dataPath="'admission/leave/statistics'" />
             </div>
            <div class="col-12">
              <!--<tabular-card :dataPath="'admission/leave/index'">
              </tabular-card>-->
            </div>
           </div>
           </tab>
           <tab title="Leave" 
                component="TabButton"
                icon_classes="fas fa-house-leave fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
           </tab>
           <tab title="Expell" 
                component="TabButton"
                icon_classes="fas fa-user-slash fa-2x"
                tab_button_classes="mt-6">

           </tab>
           <tab title="Ban" 
                component="TabButton"
                icon_classes="fas fa-ban fa-2x"
                tab_button_classes="mt-6">

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
 <modal></modal>
</template>

<script>

    import { defineComponent, ref } from 'vue';

    import {store} from "../../../../store/store.js"

    import StatisticCardData from '../../../inteli/ui/components/cards/StatisticCardData.vue';
    import DetailCardData from '../../../inteli/ui/components/cards/DetailCardData.vue';

    import BarChart from '../../../inteli/ui/components/charts/BarChart.vue'

    import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

    import main_menu from '../../../Theme/widgets/menus/main-menu.vue'

    import MenuWindow from '../../../Theme/widgets/menus/MenuWindow.vue'

    import admission_wizard from "../plugins/wizard/admission-wizard.vue";
    import application_wizard from "../plugins/wizard/application-wizard.vue";

    import TabularCard from "../../../inteli/ui/components/cards/TabularCard.vue"
    import MainForm from '../../../inteli/ui/components/forms/MainForm.vue'

    import Interview from '../widgets/Interview.vue'

    import Leave from '../widgets/Leave.vue'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
        components: {
            StatisticCardData,
            BarChart,
            DetailCardData,
            ModalButton,
            MainModal,
            MenuWindow,
            admission_wizard,
            application_wizard,
            TabularCard,
            MainForm,
            Interview,
            Leave,
            TabPane,
            Tab
        },
        setup(props,context)
        { 
            var Module = ref(context.module) 

            return { Module }  
        }
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

.fs-8
{
  font-size: 10px !important;
}


.tab-content {
  width: 100% !important; 
}
</style>
