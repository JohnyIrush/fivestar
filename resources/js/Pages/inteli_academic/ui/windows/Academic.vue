<template>
  <div class="row">
    <div class="col-12">
     <div 
        :class="columnSize">
        <tab-pane
          :orientation="'vertical'"
        >
           <tab title="Dash" 
                component="TabButton"
                icon_classes="fas fa-chess-board fa-2x"
                tab_button_classes="''">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Attendance'" :modalSize="'modal-lg'" :componentType="'form'"  :componentName="'MainForm'" :dataPath="'academic/attendance/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Student Attendance'" :icon_classes="'far fa-eye'" :title="'Attendance'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/attendance/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
           </tab>
           <tab title="tables" 
                component="TabButton"
                icon_classes="''"
                tab_button_classes="'mt-6'">
                Tables
           </tab>
           <tab title="forms" 
                component="TabButton"
                icon_classes="''"
                tab_button_classes="'mt-6'">
                Forms
           </tab>
           <tab title="navs" 
                component="TabButton"
                icon_classes="''"
                tab_button_classes="'mt-6'">
                Navs
           </tab>
           <tab title="modals" 
                component="TabButton"
                icon_classes="''"
                tab_button_classes="'mt-6'">
                Modals
           </tab>
        </tab-pane>
     </div>
    </div>
  </div>
  <div class="row" >
   <div class="col-12 col-lg-9">
    <div class="d-flex align-items-start">
      <div class="nav glass-content  flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="fas fa-chess-board fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-attendance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-attendance" type="button" role="tab" aria-controls="v-pills-attendance" aria-selected="true"><i class="far fa-list-alt fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-planner-tab" data-bs-toggle="pill" data-bs-target="#v-pills-planner" type="button" role="tab" aria-controls="v-pills-planner" aria-selected="false"><i class="fas fa-sitemap fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-assignment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-assignment" type="button" role="tab" aria-controls="v-pills-assignment" aria-selected="false"><i class="fas fa-sticky-note fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-subjects-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subjects" type="button" role="tab" aria-controls="v-pills-subjects" aria-selected="false"><i class="far fa-bookmark fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-club-tab" data-bs-toggle="pill" data-bs-target="#v-pills-club" type="button" role="tab" aria-controls="v-pills-club" aria-selected="false"><i class="fas fa-user-friends fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-sport-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sport" type="button" role="tab" aria-controls="v-pills-sport" aria-selected="false"><i class="fas fa-baseball-ball fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-level-tab" data-bs-toggle="pill" data-bs-target="#v-pills-level" type="button" role="tab" aria-controls="v-pills-level" aria-selected="false"><i class="fas fa-level-up-alt fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-stream-tab" data-bs-toggle="pill" data-bs-target="#v-pills-stream" type="button" role="tab" aria-controls="v-pills-stream" aria-selected="false"><i class="fas fa-stream fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-section" type="button" role="tab" aria-controls="v-pills-section" aria-selected="false"><i class="fas fa-chalkboard-teacher fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cogs fa-2x"></i></button>
      </div>
      <div class="tab-content glass-content" id="v-pills-tabContent">
        <!--START Dashboard PANE-->
        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
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
        </div>
        <!--END Dashboard PANE-->

        <!--START ATTENDANCE  PANE-->
        <div class="tab-pane fade" id="v-pills-attendance" role="tabpanel" aria-labelledby="v-pills-attendance-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Attendance'" :modalSize="'modal-lg'" :componentType="'form'"  :componentName="'MainForm'" :dataPath="'academic/attendance/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Student Attendance'" :icon_classes="'far fa-eye'" :title="'Attendance'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/attendance/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END ATTENDANCE  PANE-->

        <!--START PLANNER PANE-->
        <div class="tab-pane fade" id="v-pills-planner" role="tabpanel" aria-labelledby="v-pills-planner-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Losson Plan'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="''"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Lesson Plans'" :icon_classes="'far fa-eye'" :title="'Lesson Plans'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="''"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END PLANNER  PANE-->

        <!--START ASSIGNMENT PANES-->
        <div class="tab-pane fade" id="v-pills-assignment" role="tabpanel" aria-labelledby="v-pills-assignment-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Assignment'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/assignment/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Assignments'" :icon_classes="'far fa-eye'" :title="'Assignments'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/assignment/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END ASSIGNMENT TAB PANES-->

        <!--START SUBJECTS  PANE-->
        <div class="tab-pane fade" id="v-pills-subjects" role="tabpanel" aria-labelledby="v-pills-subjects-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Subject'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/subject/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Subjects'" :icon_classes="'far fa-eye'" :title="'Subjects'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/subject/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END  SUBJECTS PANE-->

        <!--START CLUBS  PANE-->
        <div class="tab-pane fade" id="v-pills-club" role="tabpanel" aria-labelledby="v-pills-club-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Club'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/club/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Clubs'" :icon_classes="'far fa-eye'" :title="'Clubs'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/club/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           <div class="row">
            <div class="col">
              <main_menu></main_menu>
            </div>
           </div>
        </div>
        <!--END CLUBS  PANE-->

        <!--START SPORT  PANE-->
        <div class="tab-pane fade" id="v-pills-sport" role="tabpanel" aria-labelledby="v-pills-sport-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Sport'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/sport/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Sports'" :icon_classes="'far fa-eye'" :title="'Sports'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/sport/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
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
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Level'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/level/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Levels'" :icon_classes="'far fa-eye'" :title="'Levels'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/level/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
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
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Stream'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/stream/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Streams'" :icon_classes="'far fa-eye'" :title="'Streams'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/stream/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
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
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Section'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'academic/section/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Section'" :icon_classes="'far fa-eye'" :title="'Sections'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'academic/section/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
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
 <main_modal></main_modal>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../components/cards/StatisticCardData.vue';
import DetailCardData from '../components/cards/DetailCardData.vue';

import BarChart from '../components/charts/BarChart.vue'

import ModalButton from '../../../inteli_library/ui/components/buttons/ModalButton.vue'
import main_modal from '../../../inteli_library/ui/components/modals/modal.vue'

import main_menu from '../../../Theme/widgets/menus/main-menu.vue'

import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

export default defineComponent({
        components: {
            StatisticCardData,
            BarChart,
            DetailCardData,
            ModalButton,
            main_modal,
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
