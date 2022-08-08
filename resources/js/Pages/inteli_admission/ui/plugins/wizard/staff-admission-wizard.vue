<template>
  <main class="main-content  mt-0">
   <div class="glass-container">
    <div class="container glass-content screen-height">
        <!--PROGRESS BAR START-->
         <staff_admission_wizard_progress></staff_admission_wizard_progress>
        <!--PROGRESS BAR END-->
       <div class="tab-content" id="pills-staff">
        <!-- PERSONAL DETAILS START-->
        <div class="tab-pane fade show active" id="pills-staff_personal_details" role="tabpanel" aria-labelledby="pills-staff_personal_details-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                   <div class="mb-3 mt-3">
                    <avatar_capture_upload></avatar_capture_upload>
                    <staff_personal_details_form></staff_personal_details_form>
                   </div>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="personalDetailsStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="personalDetailsStepNext()" class="btn  mt-3 btn-styles" >Next</button>
               </div>
           </div>
        </div>
        <!-- PERSONAL DETAILS END-->
        <!--Occupation START-->
        <div class="tab-pane fade" id="pills-occupation" role="tabpanel" aria-labelledby="pills-occupation-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                   <div class="mb-3 mt-3">
                    <occupation_details_form></occupation_details_form>
                   </div>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="occupationStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="occupationStepNext()" class="btn  mt-3 btn-styles" >Next</button>
               </div>
           </div>
        </div>
        <!--Occupation END-->
        <!-- FINANCIAL ACCOUNT START-->
        <div class="tab-pane fade" id="pills-staff_financial_account" role="tabpanel" aria-labelledby="pills-staff_financial_account-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                FINANCIAL ACCOUNT
               </div>
               <div class="col-1">
               </div>
           </div>
            <div class="row justify-content-around">
               <div class="col-4 d-grid  mx-auto">
                 <button  @click="financialAccountStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col-4">
               </div>
               <div class="col-4 d-grid  mx-auto">
                 <button  @click="financialAccountStepNext()"  class="btn  mt-3 btn-styles" >Next</button>
               </div>
           </div>
        </div>
        <!-- FINANCIAL ACCOUNT END-->
        <!-- PORTAL START-->
        <div class="tab-pane fade" id="pills-staff_portal" role="tabpanel" aria-labelledby="pills-staff_portal-tab">
           <div class="row justify-content-center">
               <div class="col glass-content">
                <register :registration_type="2"></register>
               </div>
           </div>
            <div class="row justify-content-around">
               <div class="col-4 d-grid  mx-auto">
                 <button  @click="portalStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col-4">
               </div>
               <div class="col-4 d-grid  mx-auto">
                 <button @click="portalStepNext()" class="btn  mt-3 btn-styles" >Next</button>
               </div>
           </div>
        </div>
        <!-- PORTAL END-->
        <!-- FINISH START-->
        <div class="tab-pane fade" id="pills-staff_finish" role="tabpanel" aria-labelledby="pills-staff_finish-tab">
           <div class="row justify-content-center glass-content">
               <div class="col-3"></div>
               <div class="col mt-5 mb-5 d-grid  mx-auto">
                <button type="button" class="btn btn-primary btn-lg btn-block" @click="enrollStaff()">Enroll Staff</button>
               </div>
               <div class="col-3"></div>
           </div>
            <div class="row justify-content-around">
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="finishStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
           </div>
        </div>
        <!-- FINISH END-->
       </div>
        <!--WIZARD END-->
    </div>
   </div>
  </main>
</template>


<script>


import staff_admission_wizard_progress from "../../components/progress/staff-admission-wizard-progress-bar.vue";
import staff_personal_details_form from "../../components/forms/staff-personal-details-form.vue";
import occupation_details_form from "../../components/forms/occupation-details-form.vue";

import register from "../../../../inteli_installer/ui/components/forms/register/Register.vue";

import avatar_capture_upload from "../../../../inteli_resource/ui/plugins/file/uploader/avatar-capture-upload.vue";


/*Vuex Store*/
import { store } from '../../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

export default {
    components:
        {
            staff_admission_wizard_progress,
            occupation_details_form,
            staff_personal_details_form,
            avatar_capture_upload,
            register
        },
    data() {
        return {
            school: this.$inertia.form({
                sch_name: '',
                sch_email: '',
                sch_address: '',
                sch_web: '',
                sch_level_id: '',
                sch_phone: '',
                sch_location: '',
                sch_gender_id: '',
                sch_type_id: '',
                sch_system_id: '',
                sch_logo: '',
                sch_inteli_code: '',
            }),
            admin: this.$inertia.form({
                name: '',
                email: '',
                phone: '',
            }),
            sch:
            {
              types: [],
              levels: [],
              systems: [],
              genders: []
            },
            schoolname: ''
        }
    },
    watch:
        {

        },
        computed: {
          schoolTypes()
          {
            //return store.getters.types;
          },
        },
    methods:
        {
            /**Enroll Student*/
            enrollStaff()
            {
                axios.post('register-staff', store.state.staff)
                .then((response)=>{
                    //store.state.student.guardian_id = response.data.id
                    console.log(response.data)
                })
            },
            personalDetailsStepNext()
            {
              const currentTab = document.querySelector("#pills-staff_personal_details")
              const nextTab = document.querySelector("#pills-occupation")

              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            }
            ,
            occupationStepNext()
            {
              const currentTab = document.querySelector("#pills-occupation")
              const nextTab = document.querySelector("#pills-staff_financial_account")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }
            ,
            financialAccountStepNext()
            {
              const currentTab = document.querySelector("#pills-staff_financial_account")
              const nextTab = document.querySelector("#pills-staff_portal")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            portalStepNext()
            {
              const currentTab = document.querySelector("#pills-staff_portal")
              const nextTab = document.querySelector("#pills-staff_finish")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            /**
             * previous Actions
            */

            personalDetailsStepPrev()
            {
              var currentTab = document.querySelector("#pills-staff_personal_details")
              const nextTab = document.querySelector("#pills-start")
              currentTab.classList.remove("show", "active");
              currentTab = document.querySelector("#pills-staff")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            occupationStepPrev()
            {
              const currentTab = document.querySelector("#pills-occupation")
              const nextTab = document.querySelector("#pills-staff_personal_details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            financialAccountStepPrev()
            {
              const currentTab = document.querySelector("#pills-staff_financial_account")
              const nextTab = document.querySelector("#pills-occupation")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            portalStepPrev()
            {
              const currentTab = document.querySelector("#pills-staff_portal")
              const nextTab = document.querySelector("#pills-staff_financial_account")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            finishStepPrev()
            {
              const currentTab = document.querySelector("#pills-staff_finish")
              const nextTab = document.querySelector("#pills-staff_portal")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
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

