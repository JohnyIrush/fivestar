<template>
  <main class="main-content  mt-0">
   <div class="glass-container">
    <div class="container glass-content screen-height">
        <!--PROGRESS BAR START-->
         <guardian_admission_wizard_progress_bar></guardian_admission_wizard_progress_bar>
        <!--PROGRESS BAR END-->
       <div class="tab-content" id="pills-guardian">
        <!-- PERSONAL DETAILS START-->
        <div class="tab-pane fade show active" id="pills-guardian_personal_details" role="tabpanel" aria-labelledby="pills-guardian_personal_details-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                   <div class="mb-3 mt-3">
                    <avatar_capture_upload></avatar_capture_upload>
                    <guardian_personal_details_form></guardian_personal_details_form>
                   </div>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col-4">
               </div>
               <div class="col d-grid  ">
                 <button  @click="personalDetailsStepNext()" class="btn  mt-3 btn-styles" >Next</button>
               </div>
               <div class="col-4">
               </div>
           </div>
        </div>
        <!-- PERSONAL DETAILS END-->
        <!-- PORTAL START-->
        <div class="tab-pane fade" id="pills-guardian_portal" role="tabpanel" aria-labelledby="pills-guardian_portal-tab">
           <div class="row justify-content-center">
               <div class="col glass-content">
                <register :registration_type="4"></register>
               </div>
           </div>
            <div class="row justify-content-around">
               <div class="col-4">
               </div>
               <div class="col-4 d-grid  mx-auto">
                 <button  @click="portalStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col-4">
               </div>
           </div>
        </div>
        <!-- PORTAL END-->
       </div>
        <!--WIZARD END-->
    </div>
   </div>
  </main>
</template>


<script>


import guardian_admission_wizard_progress_bar from "../../components/progress/guardian-admission-wizard-progress-bar.vue";
import guardian_personal_details_form from "../../components/forms/guardian-personal-details-form.vue";

import register from "../../../../inteli_installer/ui/components/forms/register/Register.vue";

import avatar_capture_upload from "../../../../inteli_resource/ui/plugins/file/uploader/avatar-capture-upload.vue";


/*Vuex Store*/
import { store } from '../../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

export default {
    components:
        {
            guardian_admission_wizard_progress_bar,
            guardian_personal_details_form,
            avatar_capture_upload,
            register
        },
    data() {
        return {

        }
    },
    watch:
        {

        },
    computed: {
    },
    methods:
        {
            personalDetailsStepNext()
            {
              const currentTab = document.querySelector("#pills-guardian_personal_details")
              const nextTab = document.querySelector("#pills-guardian_portal")

              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            }
            ,
            portalStepNext()
            {
              const currentTab = document.querySelector("#pills-guardian_portal")
              //const nextTab = document.querySelector("#pills-guardian")
              currentTab.classList.remove("show", "active");
              //nextTab.classList.add("show", "active")
            },
            /**
             * previous Actions
            */

            personalDetailsStepPrev()
            {
              var currentTab = document.querySelector("#pills-guardian_personal_details")
              const nextTab = document.querySelector("#pills-start")
              currentTab.classList.remove("show", "active");
              currentTab = document.querySelector("#pills-staff")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            portalStepPrev()
            {
              const currentTab = document.querySelector("#pills-guardian_portal")
              const nextTab = document.querySelector("#pills-guardian_personal_details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            updateStore()
            {
              store.state.registration_type = this.registration_type
            },
        },
    mounted()
    {

    }
}
</script>


<style scoped>


main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
}


.btn-styles
{
    background: #d43f8d;
    color: white;
}

.screen-height
{
    min-height: 100vh !important;

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

@media (max-width: 902px)
{
.screen-height
{
    min-height: 100vh !important;

}
}
</style>

