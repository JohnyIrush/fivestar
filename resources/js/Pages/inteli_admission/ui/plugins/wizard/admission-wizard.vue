<template>
  <main class="main-content  mt-0">
   <div class="glass-container">
    <div class="container glass-content">
       <div class="tab-content" id="pills-admission">
        <!--START START-->
        <div class="tab-pane fade show active" id="pills-start" role="tabpanel" aria-labelledby="pills-start-tab">
            <div class="row ">
                <div class="col-12">
                  <div class="row  ">
                      <div class="col-1"></div>
                      <div class="col-10 glass-content">
                        <admission_start_carousel></admission_start_carousel>
                      </div>
                      <div class="col-1"></div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="row">
                      <div class="col-1"></div>
                      <div class="col-5 d-grid gap-2 mx-auto">
                            <button @click="staffWizard()" class="btn  mt-3 btn-styles" >Staff Admission</button>
                      </div>
                      <div class="col-5 d-grid gap-2 mx-auto">
                            <button @click="studentWizard()" class="btn  mt-3 btn-styles" >Student Admission</button>
                      </div>
                      <div class="col-1"></div>
                  </div>
                </div>
            </div>
        </div>
        <!--START END-->

        <!--STAFF WIZARD START-->
        <div class="tab-pane fade" id="pills-staff" role="tabpanel" aria-labelledby="pills-staff-tab">
          <staff_admission_wizard></staff_admission_wizard>
        </div>
        <!--STAFF WIZARD END-->

        <!-- STUDENT WIZARD START-->
        <div class="tab-pane fade" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
            <student_admission_wizard></student_admission_wizard>
        </div>
        <!-- STUDENT WIZARD END-->
       </div>
        <!--WIZARD END-->
    </div>
   </div>
  </main>
</template>


<script>

import admission_start_carousel from "../../components/carousel/admission-start-carousel.vue";

import student_admission_wizard from "./student-admission-wizard.vue";
import staff_admission_wizard from "./staff-admission-wizard.vue";

/*Vuex Store*/
import { store } from '../../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

import { defineComponent } from 'vue'

export default defineComponent({
    components:
        {
            admission_start_carousel,
            student_admission_wizard,
            staff_admission_wizard
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
            /**
             * Next Actions
            */
            staffWizard()
            {
              const currentTab = document.querySelector("#pills-start")
              const nextTab = document.querySelector("#pills-staff")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

              const nextTabTab = document.querySelector("#pills-staff_personal_details")
              nextTabTab.classList.add("show", "active")
            },

            studentWizard()
            {
              const currentTab = document.querySelector("#pills-start")
              currentTab.classList.remove("show", "active");

              const nextTab = document.querySelector("#pills-student")
              nextTab.classList.add("show", "active")

              const nextTabTab = document.querySelector("#pills-personal_details")
              nextTabTab.classList.add("show", "active")
            }
            ,
            /**
             * previous Actions
            */

            staffWizardPrev()
            {
              const currentTab = document.querySelector("#pills-staff")
              const nextTab = document.querySelector("#pills-start")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            studentWizardPrev()
            {
              const currentTab = document.querySelector("#pills-qualifications")
              const nextTab = document.querySelector("#pills-student")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }
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

