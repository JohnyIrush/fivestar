<template>
 <!--<div class="container">-->
  <div class="row" >
   <div class="col-12 col-lg-9">
    <ul class="nav nav-tabs justify-content-center glass-content" id="formBuilderTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="true"><i class="fas fa-question-circle"></i>Questions</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="response-tab" data-bs-toggle="tab" data-bs-target="#response" type="button" role="tab" aria-controls="response" aria-selected="false"><i class="fas fa-reply"></i>Response</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false"><i class="fas fa-cogs"></i>Settings</button>
      </li>
    </ul>
    <div class="tab-content glass-content" id="formBuilderTabContent">
      <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
       <div class="card text-center glass-content mt-2 mb-2">
         <div class="card-body">
           Featured
         </div>
       </div>
       <div class="card text-center glass-content">
         <div class="card-body">
           <h5 class="card-title">Special title treatment</h5>
           <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
           <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
         <div class="card-footer text-muted">
           2 days ago
         </div>
       </div>
      </div>
      <div class="tab-pane fade" id="response" role="tabpanel" aria-labelledby="response-tab">...</div>
      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
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
   <user_info_modal></user_info_modal>
   <main_modal></main_modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../Theme/widgets/Footer.vue'

    import {store} from "../../../../store/store.js"



    export default defineComponent({
        components: {
            Footer,
        },
        data() {
            return {
                analytics: [],
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
            getAnalytics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.analytics= response.data
                })
            },
        },
        mounted()
        {
            this.getAnalytics("analytics")
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
