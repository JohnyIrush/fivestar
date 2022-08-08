<template>
  <main class="main-content  mt-0">
   <div class="glass-container">
    <div class="container glass-content screen-height">
        <!--PROGRESS BAR START-->
        <student_admission_wizard_progress_bar></student_admission_wizard_progress_bar>
        <!--PROGRESS BAR END-->
       <div class="tab-content" id="pills-student">
        <!-- PERSONAL DETAILS START-->
        <div class="tab-pane fade show active" id="pills-personal_details" role="tabpanel" aria-labelledby="pills-personal_details-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                   <div class="mb-3 mt-3">
                    <avatar_capture_upload></avatar_capture_upload>
                    <personal_details_form></personal_details_form>
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
        <!--QUALIFICATIONS START-->
        <div class="tab-pane fade" id="pills-qualifications" role="tabpanel" aria-labelledby="pills-qualifications-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                   <div class="mb-3 mt-3">
                    <qualification_details_form></qualification_details_form>
                   </div>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="qualificationsStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="qualificationsStepNext()" class="btn  mt-3 btn-styles" >Next</button>
               </div>
           </div>
        </div>
        <!--QUALIFICATIONS END-->
        <!--ACADEMIC DETAILS START-->
        <div class="tab-pane fade" id="pills-academic_details" role="tabpanel" aria-labelledby="pills-academic_details-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                   <div class="mb-3 mt-3">
                    <academic_details_form></academic_details_form>
                   </div>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="academicDetailsStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="academicDetailsStepNext()" class="btn  mt-3 btn-styles" >Next</button>
               </div>
           </div>
        </div>
        <!--ACADEMIC DETAILS END-->
        <!-- CARRUCULAR ACTIVITIES START-->
        <div class="tab-pane fade" id="pills-carricular_activities" role="tabpanel" aria-labelledby="pills-carricular_activities-tab">
           <div class="row justify-content-center ">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                <carricular_activities_details_form></carricular_activities_details_form>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="carricularActivitiesStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="carricularActivitiesStepNext()" class="btn  mt-3 btn-styles" > Payment <i class="fa fa-money"></i></button>
               </div>
           </div>
        </div>
        <!-- CARRUCULAR ACTIVITIES END-->
        <!-- BOARDING START-->
        <div class="tab-pane fade" id="pills-boarding" role="tabpanel" aria-labelledby="pills-boarding-tab">
           <div class="row justify-content-center">
               <div class="col-1">
               </div>
               <div class="col-10 glass-content">
                <boarding_details_form></boarding_details_form>
               </div>
               <div class="col-1">
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="boardingStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="boardingStepNext()" class="btn  mt-3 btn-styles" >Next </button>
               </div>
           </div>
        </div>
        <!-- BOARDING END-->
        <!-- FINANCIAL ACCOUNT START-->
        <div class="tab-pane fade" id="pills-financial_account" role="tabpanel" aria-labelledby="pills-financial_account-tab">
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
        <div class="tab-pane fade" id="pills-portal" role="tabpanel" aria-labelledby="pills-portal-tab">
           <div class="row justify-content-center">
               <div class="col glass-content">
                <register :registration_type="3"></register>
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
        <!-- GUARDIAN START-->
        <div class="tab-pane fade" id="pills-guardian" role="tabpanel" aria-labelledby="pills-guardian-tab">
           <div class="row justify-content-center">
               <div class="col glass-content">
                 <guardian_admission_wizard></guardian_admission_wizard>
                <!--
               <ul class="nav nav-tabs" id="guardian-Tab" role="tablist">
                 <li class="nav-item" role="presentation">
                   <button class="nav-link active" id="guardian_personal_details-tab" data-bs-toggle="tab" data-bs-target="#guardian_personal_details" type="button" role="tab" aria-controls="guardian_personal_details" aria-selected="true">Home</button>
                 </li>
                 <li class="nav-item" role="presentation">
                   <button class="nav-link" id="guardian_portal-tab" data-bs-toggle="tab" data-bs-target="#guardian_portal" type="button" role="tab" aria-controls="guardian_portal" aria-selected="false">Profile</button>
                 </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="guardian_personal_details" role="tabpanel" aria-labelledby="guardian_personal_details-tab">
                  <avatar_capture_upload></avatar_capture_upload>
                  <guardian_personal_details_form></guardian_personal_details_form>
                 </div>
                 <div class="tab-pane fade" id="guardian_portal-tab" role="tabpanel" aria-labelledby="guardian_portal-tab-tab">
                  <register></register>
                 </div>
               </div>
               -->
               </div>
           </div>
            <div class="row justify-content-around">
               <div class="col-4 d-grid  mx-auto">
                 <button  @click="guardianStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
               </div>
               <div class="col-4">
               </div>
               <div class="col-4 d-grid  mx-auto">
                 <button   class="btn  mt-3 btn-styles" @click="guardianStepNext()">Next</button>
               </div>
           </div>
        </div>
        <!-- GUARDIAN END-->
        <!-- FINISH START-->
        <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
           <div class="row justify-content-center glass-content">
               <div class="col-3"></div>
               <div class="col mt-5 mb-5 d-grid  mx-auto">
                <button type="button" class="btn btn-primary btn-lg btn-block" @click="enrollStudent()">Enroll Student</button>
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


import student_admission_wizard_progress_bar from "../../components/progress/student-admission-wizard-progress-bar.vue";
import admission_start_carousel from "../../components/carousel/admission-start-carousel.vue";
import personal_details_form from "../../components/forms/personal-details-form.vue";
import qualification_details_form from "../../components/forms/qualification-details-form.vue";
import academic_details_form from "../../components/forms/academic-details-form.vue";
import carricular_activities_details_form from "../../components/forms/carricular-activities-details-form.vue";
import boarding_details_form from "../../components/forms/boarding-details-form.vue";
import guardian_personal_details_form from "../../components/forms/guardian-personal-details-form.vue";

import register from "../../../../inteli_installer/ui/components/forms/register/Register.vue";

import avatar_capture_upload from "../../../../inteli_resource/ui/plugins/file/uploader/avatar-capture-upload.vue";

import guardian_admission_wizard from './guardian-admission-wizard.vue'



/*Vuex Store*/
import { store } from '../../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

import { defineComponent } from 'vue';

export default defineComponent({
    components:
        {
            student_admission_wizard_progress_bar,
            admission_start_carousel,
            personal_details_form,
            avatar_capture_upload,
            qualification_details_form,
            academic_details_form,
            carricular_activities_details_form,
            boarding_details_form,
            register,
            guardian_admission_wizard
        },
    data() {
        return {
            details:
            {
                registration_type: 3
            }
        }
    },
    watch:
        {

        },
        computed: {

        },
    methods:
        {
            /**Enroll Student*/
            enrollStudent()
            {
                axios.post('register-student', store.state.student)
                .then((response)=>{
                    //store.state.student.guardian_id = response.data.id
                    console.log(response.data)
                })
            },
            /**
             * Start Wizard plugin Navigation functions
             */
            /**
             * Next Actions
            */
            getStartedNext()
            {
              const currentTab = document.querySelector("#pills-start")
              const nextTab = document.querySelector("#pills-personal_details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            personalDetailsStepNext()
            {
              const currentTab = document.querySelector("#pills-personal_details")
              const nextTab = document.querySelector("#pills-qualifications")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }

            ,
            qualificationsStepNext()
            {
              const currentTab = document.querySelector("#pills-qualifications")
              const nextTab = document.querySelector("#pills-academic_details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }
            ,
            academicDetailsStepNext()
            {
              const currentTab = document.querySelector("#pills-academic_details")
              const nextTab = document.querySelector("#pills-carricular_activities")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            },
            carricularActivitiesStepNext()
            {
              const currentTab = document.querySelector("#pills-carricular_activities")
              const nextTab = document.querySelector("#pills-boarding")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            },
            boardingStepNext()
            {
              const currentTab = document.querySelector("#pills-boarding")
              const nextTab = document.querySelector("#pills-financial_account")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            },
            financialAccountStepNext()
            {
              const currentTab = document.querySelector("#pills-financial_account")
              const nextTab = document.querySelector("#pills-portal")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            portalStepNext()
            {
              const currentTab = document.querySelector("#pills-portal")
              const nextTab = document.querySelector("#pills-guardian")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
              this.updateStore(4)
            },
            guardianStepNext()
            {
              const currentTab = document.querySelector("#pills-guardian")
              const nextTab = document.querySelector("#pills-finish")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            /**
             * previous Actions
            */

            personalDetailsStepPrev()
            {
              var currentTab = document.querySelector("#pills-personal_details")
              const nextTab = document.querySelector("#pills-start")
              currentTab.classList.remove("show", "active");
              currentTab = document.querySelector("#pills-student")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            qualificationsStepPrev()
            {
              const currentTab = document.querySelector("#pills-qualifications")
              const nextTab = document.querySelector("#pills-personal_details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            academicDetailsStepPrev()
            {

              const currentTab = document.querySelector("#pills-academic_details")
              const nextTab = document.querySelector("#pills-qualifications")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            carricularActivitiesStepPrev()
            {
              const currentTab = document.querySelector("#pills-carricular_activities")
              const nextTab = document.querySelector("#pills-academic_details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            boardingStepPrev()
            {
              const currentTab = document.querySelector("#pills-boarding")
              const nextTab = document.querySelector("#pills-carricular_activities")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            financialAccountStepPrev()
            {
              const currentTab = document.querySelector("#pills-financial_account")
              const nextTab = document.querySelector("#pills-boarding")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            portalStepPrev()
            {
              const currentTab = document.querySelector("#pills-portal")
              const nextTab = document.querySelector("#pills-financial_account")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            guardianStepPrev()
            {
              const currentTab = document.querySelector("#pills-guardian")
              const nextTab = document.querySelector("#pills-portal")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
              this.updateStore(3)
            },
            finishStepPrev()
            {
              const currentTab = document.querySelector("#pills-finish")
              const nextTab = document.querySelector("#pills-guardian")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            /**
             * End Wizard plugin Navigation functions
             */
            getSchoolLevels()
            {

                axios.get("/school-levels")
                .then((response)=>{
                    this.sch.levels = response.data
                })
                .catch(()=>{

                })

            },
            updateStore(registration_type)
            {
              store.state.registration_type = registration_type
            },
        },
    mounted()
    {

    }
})
</script>


<style scoped>

main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
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

