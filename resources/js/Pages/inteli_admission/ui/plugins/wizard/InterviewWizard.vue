<template>
    <div class="mw-100 glass-content ">
       <div class="tab-content" id="pills-interview">
        <!--START START-->
        <div class="tab-pane fade show active" id="pills-interview-start" role="tabpanel" aria-labelledby="pills-interview-start-tab">
           <div class="row">
               <div class="col-12">
                 <div class="card glass-content">
                   <div class="card-header">
                     Featured
                   </div>
                   <div class="card-body">
                     <h5 class="card-title">Special title treatment</h5>
                     <p class="card-text font-weight-bold display-4">With supporting text below as a natural lead-in to additional content.</p>
                     <button  class="btn  mt-3 btn-styles btn-primary" @click="startStepNext()">Start Interview</button>
                   </div>
                 </div>
                 <spinner :color="'text-primary'" :message="'Loading...'" :size="'spinner-border-lg'"></spinner>
               </div>
           </div>
        </div>
        <!--START END-->

        <!--FORM WIZARD START-->
        <div class="tab-pane fade" id="pills-interview-form" role="tabpanel" aria-labelledby="pills-interview-form-tab">
           <div class="row">
               <div class="col-12 glass-content">
                 <form>
                   <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Email address</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                   </div>
                   <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword1">
                   </div>
                   <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label" for="exampleCheck1">Check me out</label>
                   </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col d-grid  mx-auto">
                 <button  @click="formStepPrev()" class="btn  mt-3 btn-styles btn-primary" >Previous</button>
               </div>
               <div class="col">
               </div>
               <div class="col d-grid  mx-auto">
                 <button  @click="formStepNext()" class="btn  mt-3 btn-styles btn-primary" >Next</button>
               </div>
           </div>
        </div>
        <!--FORM WIZARD END-->

        <!-- PROGRESS WIZARD START-->
        <div class="tab-pane fade" id="pills-interview-progress" role="tabpanel" aria-labelledby="pills-interview-progress-tab">
           <div class="row justify-content-center">
               <div class="col-2"></div>
               <div class="col-10 glass-content">
                <div class="card">
                  <div class="card-body">
                    <p class="card-text font-weight-bold display-4">Your Interview is awaiting processing, you will receive an email and sms with feedback all the best</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn btn-danger me-md-2" type="button">Cancel<i class="fas fa-window-close mr-2"></i></button>
                      <button class="btn btn-info" type="button">Enquiry <i class="fas fa-edit ml-2"></i></button>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col-2"></div>
           </div>
           <div class="row justify-content-center">
               <div class="col-2"></div>
               <div class="col-10">
                 <spinner :color="'text-success'" :message="'Loading...'" :size="'spinner-border-lg'"></spinner>
               </div>
               <div class="col-2"></div>
           </div>
           <div class="row justify-content-center">
             <div class="col-2"></div>
               <div class="col-10 d-grid  mx-auto">
                 <button  @click="progressStepPrev()" class="btn mt-3 btn-styles btn-primary" >Previous</button>
               </div>
                <div class="col-2"></div>
           </div>
        </div>
        <!-- PROGRESS WIZARD END-->
       </div>
        <!--WIZARD END-->
    </div>
</template>


<script>

/*Vuex Store*/
import { store } from '../../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

import { defineComponent } from 'vue'

import spinner from "../../components/spinners/spinner.vue"

import SelectInput from "../../../../inteli_academic/ui/components/inputs/SelectInput.vue"

export default defineComponent({
  name: "InterviewWizard",
    components:
        {
            spinner,
            SelectInput
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
            startStepNext()
            {
              const currentTab = document.querySelector("#pills-interview-start")
              const nextTab = document.querySelector("#pills-interview-form")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            formStepNext()
            {
              const currentTab = document.querySelector("#pills-interview-form")
              currentTab.classList.remove("show", "active");

              const nextTab = document.querySelector("#pills-interview-progress")
              nextTab.classList.add("show", "active")
            }
            ,
            /**
             * previous Actions
            */

            formStepPrev()
            {
              const currentTab = document.querySelector("#pills-interview-form")
              const nextTab = document.querySelector("#pills-interview-start")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            progressStepPrev()
            {
              const currentTab = document.querySelector("#pills-interview-progress")
              const nextTab = document.querySelector("#pills-interview-form")
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
.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}
</style>

