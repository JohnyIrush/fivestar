<template>
 <!--<div class="container">-->
  <div class="row" >
   <div class="col-12 col-lg-9">
    <div class="d-flex align-items-start">
      <div class="nav glass-content  flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="fas fa-chess-board fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-librarian-tab" data-bs-toggle="pill" data-bs-target="#v-pills-librarian" type="button" role="tab" aria-controls="v-pills-librarian" aria-selected="true"><i class="far fa-list-alt fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-book-issue-tab" data-bs-toggle="pill" data-bs-target="#v-pills-book-issue" type="button" role="tab" aria-controls="v-pills-book-issue" aria-selected="false"><i class="fas fa-sitemap fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-book-category-tab" data-bs-toggle="pill" data-bs-target="#v-pills-book-category" type="button" role="tab" aria-controls="v-pills-book-category" aria-selected="false"><i class="fas fa-chalkboard-teacher fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-book-tab" data-bs-toggle="pill" data-bs-target="#v-pills-book" type="button" role="tab" aria-controls="v-pills-book" aria-selected="false"><i class="far fa-bookmark fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-publisher-tab" data-bs-toggle="pill" data-bs-target="#v-pills-publisher" type="button" role="tab" aria-controls="v-pills-publisher" aria-selected="false"><i class="fas fa-level-up-alt fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-stream fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cogs fa-2x"></i></button>
      </div>
      <div class="tab-content glass-content" id="v-pills-tabContent">
        <!--START Dashboard PANE-->
        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
          <statistic-card-data :statistics="statistics" />
        </div>
        <!--END Dashboard PANE-->

        <!--START LIBRARIAN  PANE-->
        <div class="tab-pane fade" id="v-pills-librarian" role="tabpanel" aria-labelledby="v-pills-librarian-tab">

        </div>
        <!--END LIBRARIAN  PANE-->

        <!--START LIBRARY  PANE-->
        <div class="tab-pane fade" id="v-pills-library" role="tabpanel" aria-labelledby="v-pills-library-tab">
            
        </div>
        <!--END LIBRARY  PANE-->

        <!--START BOOK ISSUE PANES-->
        <div class="tab-pane fade" id="v-pills-book-issue" role="tabpanel" aria-labelledby="v-pills-book-issue-tab">

        </div>
        <!--END BOOK ISSUE TAB PANES-->

        <!--START BOOK CATEGORIES  PANE-->
        <div class="tab-pane fade" id="v-pills-book-category" role="tabpanel" aria-labelledby="v-pills-book-category-tab">

        </div>
        <!--END BOOK CATEGORIES  PANE-->

        <!--START AUTHOR  PANE-->
        <div class="tab-pane fade" id="v-pills-author" role="tabpanel" aria-labelledby="v-pills-author-tab">

        </div>
        <!--END AUTHOR  PANE-->

        <!--START BOOK PANE-->
        <div class="tab-pane fade" id="v-pills-book" role="tabpanel" aria-labelledby="v-pills-book-tab">

        </div>
        <!--END BOOK PANE-->

        <!--START PUBLISHER PANE-->
        <div class="tab-pane fade" id="v-pills-publisher" role="tabpanel" aria-labelledby="v-pills-publisher-tab">

        </div>
        <!--END PUBLISHER PANE-->

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
 <Footer></Footer>
</template>

<script>

import { defineComponent } from 'vue'

import Footer from '../../../Theme/widgets/Footer.vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../components/cards/StatisticCardData.vue';

export default defineComponent({
        components: {
            Footer,
            StatisticCardData,
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
