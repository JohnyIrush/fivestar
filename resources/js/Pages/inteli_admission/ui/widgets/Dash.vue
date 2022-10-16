<template>
 <!--<div class="container">-->
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
               },
               {
                name: 'Interview Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
               },
               {
                name: 'Admission Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
               },
               {
                name: 'Leave Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
               },
               {
                name: 'Expell Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
               },
               {
                name: 'Ban Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
               }
            ]"

          >
          </menu-window>
    </div>
  </div>
  <div class="row" >
   <div class="col-12">
    <div class="d-flex align-items-start ">
      <div class="nav glass-content  flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
          <i class="fas fa-chess-board" data-bs-toggle="tooltip" data-bs-placement="top" title="dash"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="dash">dash</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-application-tab" data-bs-toggle="pill" data-bs-target="#v-pills-application" type="button" role="tab" aria-controls="v-pills-application" aria-selected="true">
          <i class="fas fa-mail-bulk" data-bs-toggle="tooltip" data-bs-placement="top" title="application"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="application">application</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-interview-tab" data-bs-toggle="pill" data-bs-target="#v-pills-interview" type="button" role="tab" aria-controls="v-pills-interview" aria-selected="false">
          <i class="fas fa-sitemap" data-bs-toggle="tooltip" data-bs-placement="top" title="interview"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="interview">interview</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-admission-tab" data-bs-toggle="pill" data-bs-target="#v-pills-admission" type="button" role="tab" aria-controls="v-pills-admission" aria-selected="false">
          <i class="fas fa-sticky-note" data-bs-toggle="tooltip" data-bs-placement="top" title="admision"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="admision">admission</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-leave-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave" type="button" role="tab" aria-controls="v-pills-leave" aria-selected="false">
          <i class="fas fa-house-leave" data-bs-toggle="tooltip" data-bs-placement="top" title="leave"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="leave">leave</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-ban-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ban" type="button" role="tab" aria-controls="v-pills-ban" aria-selected="false">
          <i class="fas fa-user-slash" data-bs-toggle="tooltip" data-bs-placement="top" title="expell"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="expell">expell</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-ban-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ban" type="button" role="tab" aria-controls="v-pills-ban" aria-selected="false">
          <i class="fas fa-ban" data-bs-toggle="tooltip" data-bs-placement="top" title="ban"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="ban">ban</span>
        </button>

        <button class="nav-link mt-6 icon text-white bg-gradient-info shadow border-radius-md" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
          <i class="fas fa-cogs" data-bs-toggle="tooltip" data-bs-placement="top" title="settings"></i>
          <span class="fs-8" data-bs-toggle="tooltip" data-bs-placement="top" title="settings">settings</span>
        </button>
      </div>
      <div class="tab-content glass-content" id="v-pills-tabContent">
        <!--START Dashboard PANE-->
        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
          <div class="row">
            <div class="col-12">
              <statistic-card-data :dataPath="'admission/statistics'" />
            </div>
          </div>
        </div>
        <!--END Dashboard PANE-->

        <!--START APPLICATION  PANE-->
        <div class="tab-pane fade " id="v-pills-application" role="tabpanel" aria-labelledby="v-pills-application-tab">
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
              <tabular-card :dataPath="'admission/applicant/index'">
              </tabular-card>
            </div>
          </div>
        </div>
        <!--END APPLICATION  PANE-->

        <!--START INTERVIEW PANES-->
        <div class="tab-pane fade" id="v-pills-interview" role="tabpanel" aria-labelledby="v-pills-interview-tab">
           <div class="row justify-content-center">
            <div class="col-2"></div>
            <div class="col-8">
              <interview />
            </div>
            <div class="col-2"></div>
           </div>
          <div class="row justify-content-center">
             <div class="col-12">
               <statistic-card-data :dataPath="'admission/interview/statistics'" />
             </div>
            <div class="col-12">
              <tabular-card :dataPath="'admission/interview/index'">
              </tabular-card>
            </div>
           </div>
        </div>
        <!--END INTERVIEW TAB PANES-->

        <!--START ADMISSION PANE-->
        <div class="tab-pane fade" id="v-pills-planner" role="tabpanel" aria-labelledby="v-pills-planner-tab">
         <!---<admission_wizard></admission_wizard>-->
        </div>
        <!--END ADMISSION  PANE-->

        <!--START LEAVE  PANE-->
        <div class="tab-pane fade" id="v-pills-leave" role="tabpanel" aria-labelledby="v-pills-leave-tab">
           <div class="row justify-content-center">
            <div class="col-2"></div>
            <div class="col-8">
              <leave />
            </div>
            <div class="col-2"></div>
           </div>
          <div class="row justify-content-center">
             <div class="col-12">
               <statistic-card-data :dataPath="'admission/leave/statistics'" />
             </div>
            <div class="col-12">
              <tabular-card :dataPath="'admission/leave/index'">
              </tabular-card>
            </div>
           </div>
        </div>
        <!--END  LEAVE PANE-->

        <!--START EXPELL  PANE-->
        <div class="tab-pane fade" id="v-pills-club" role="tabpanel" aria-labelledby="v-pills-club-tab">
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END EXPELL  PANE-->

        <!--START SPORT  PANE-->
        <div class="tab-pane fade" id="v-pills-sport" role="tabpanel" aria-labelledby="v-pills-sport-tab">
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END SPORT  PANE-->

        <!--START LEVEL PANE-->
        <div class="tab-pane fade" id="v-pills-level" role="tabpanel" aria-labelledby="v-pills-level-tab">
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
          </div>
        </div>
        <!--END LEVEL PANE-->

        <!--START STREAM PANE-->
        <div class="tab-pane fade" id="v-pills-stream" role="tabpanel" aria-labelledby="v-pills-stream-tab">
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
          </div>
        </div>
        <!--END STREAM PANE-->

        <!--START SECTION PANE-->
        <div class="tab-pane fade" id="v-pills-section" role="tabpanel" aria-labelledby="v-pills-section-tab">
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
          </div>
        </div>
        <!--END SECTION PANE-->

        <!--START SETTINGS TAB-->
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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
        </div>
        <!--END SETTINGS TAB-->
      </div>
    </div>
   </div>
  </div>
 <!--</div>-->
 <Footer></Footer>
 <main_modal></main_modal>
</template>

<script>

import { defineComponent } from 'vue'

import Footer from '../../../Theme/widgets/Footer.vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../../../inteli_academic/ui/components/cards/StatisticCardData.vue';
import DetailCardData from '../../../inteli_academic/ui/components/cards/DetailCardData.vue';

import BarChart from '../../../inteli_academic/ui/components/charts/BarChart.vue'

import ModalButton from '../../../inteli_library/ui/components/buttons/ModalButton.vue'
import main_modal from '../../../inteli_library/ui/components/modals/modal.vue'

import main_menu from '../../../Theme/widgets/menus/main-menu.vue'

import MenuWindow from '../../../Theme/widgets/menus/MenuWindow.vue'

import admission_wizard from "../plugins/wizard/admission-wizard.vue";
import application_wizard from "../plugins/wizard/application-wizard.vue";

import TabularCard from "../../../inteli_academic/ui/components/cards/TabularCard.vue"
import MainForm from '../../../inteli_library/ui/components/forms/MainForm.vue'

import Interview from './Interview.vue'

import Leave from './Leave.vue'

export default defineComponent({
        components: {
            Footer,
            StatisticCardData,
            BarChart,
            DetailCardData,
            ModalButton,
            main_modal,
            MenuWindow,
            admission_wizard,
            application_wizard,
            TabularCard,
            MainForm,
            Interview,
            Leave,
        },
        data() {
            return {
                statistics: [],
                datapaths: ['admission/applicant/response/create','communication/create'],
                formFields: []
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
            getFields()
            {
              for (var i = 0; i < this.datapaths.length; i++)
              {
               if (this.datapaths[0] != '')
               {
                 axios.get(this.datapaths[0])
                 .then((response)=>{
                    this.formFields.push(response.data)
                    console.log("Form Data", response.data)
                    console.log()
                 })
                 }
               }
            }
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

.fs-8
{
  font-size: 10px !important;
}


.tab-content {
  width: 100% !important; 
}
</style>
