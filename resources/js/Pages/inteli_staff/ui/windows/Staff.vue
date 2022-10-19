<template>
 <!--<div class="container">-->
  <div class="row" >
   <div class="col-12 col-lg-9">
    <div class="d-flex align-items-start">
      <div class="nav glass-content  flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

        <button class="nav-link active " id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="fas fa-chess-board fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-staff-category-tab" data-bs-toggle="pill" data-bs-target="#v-pills-staff-category" type="button" role="tab" aria-controls="v-pills-staff-category" aria-selected="true"><i class="fas fa-code-branch fa-2x"></i></button>


        <button class="nav-link mt-6" id="v-pills-department-tab" data-bs-toggle="pill" data-bs-target="#v-pills-department" type="button" role="tab" aria-controls="v-pills-department" aria-selected="false"><i class="fas fa-house-user fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-occupation-tab" data-bs-toggle="pill" data-bs-target="#v-pills-occupation" type="button" role="tab" aria-controls="v-pills-occupation" aria-selected="true"><i class="fas fa-briefcase fa-2x"></i></button>

        <button class="nav-link mt-6" id="v-pills-staff-tab" data-bs-toggle="pill" data-bs-target="#v-pills-staff" type="button" role="tab" aria-controls="v-pills-staff" aria-selected="false">
          <i class="fas fa-users-cog fa-2x"></i>
        </button>

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

        <!--START STAFF CATEGORY  PANE-->
        <div class="tab-pane fade" id="v-pills-staff-category" role="tabpanel" aria-labelledby="v-pills-staff-category-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Category'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'staff/category/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Staff Category'" :icon_classes="'far fa-eye'" :title="'Category'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'staff/category/index'"></modal-button>
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
        <!--END STAFF CATEGORY  PANE-->

        <!--START DEPARTMENT PANES-->
        <div class="tab-pane fade" id="v-pills-department" role="tabpanel" aria-labelledby="v-pills-department-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Department'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'staff/department/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Departments'" :icon_classes="'far fa-eye'" :title="'Department'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'staff/department/index'"></modal-button>
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
        <!--END DEPARTMENT TAB PANES-->

        <!--START OCCUPATION PANE-->
        <div class="tab-pane fade" id="v-pills-occupation" role="tabpanel" aria-labelledby="v-pills-occupation-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Occupation'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'staff/occupation/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Occupation'" :icon_classes="'far fa-eye'" :title="'Occupation'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'staff/occupation/index'"></modal-button>
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
        <!--END OCCUPATION  PANE-->

        <!--START STAFF  PANE-->
        <div class="tab-pane fade" id="v-pills-staff" role="tabpanel" aria-labelledby="v-pills-staff-tab">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Staff'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'staff/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Staff'" :icon_classes="'far fa-eye'" :title="'Staff'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'staff/index'"></modal-button>
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
        <!--END  STAFF PANE-->

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
   <div class="col-12 col-xl-3">
    <div class="card h-100">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">More</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
            <div class="avatar me-3">
               <i class="fa fa-comments text-secondary" aria-hidden="true"></i>
            </div>
            <div class="d-flex align-items-start flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Notifications</h6>
              <p class="mb-0 text-xs">Important Noifications</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
   </div>
  </div>
 <!--</div>-->
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

export default defineComponent({
        components: {
            Footer,
            StatisticCardData,
            BarChart,
            DetailCardData,
            ModalButton,
            main_modal,
            main_menu
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

</style>
