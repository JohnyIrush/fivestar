<template>
    <div class="glass-content ">
       <div class="tab-content" id="pills-application">
        <!--START START-->
        <div class="tab-pane fade" id="pills-start" role="tabpanel" aria-labelledby="pills-start-tab">
           <div class="row  ">
               <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Select Application Type</h5>
                  </div>
                  <div class="card-body">
                    <div class="col-12 glass-content">
                       <select-input
                        :inputOptions="''"
                        :nameKey="''"
                        :valueKeyKey="''"
                        :variable="''"
                        :field="''"
                        :size="'form-select-lg'"
                        :datapath="'admission/applicant/types'"
                       ></select-input>
                    </div>
                    <p class="card-text font-weight-bold display-4">Join our School Professionals and Educated intelligent Students in making kenya A Great nation.</p>
                    <button  class="btn  mt-3 btn-styles btn-primary" @click="startStepNext()">Apply</button>
                  </div>
                </div>
               </div>
           </div>
        </div>
        <!--START END-->

        <!--FORM WIZARD START-->
        <div class="tab-pane fade show active" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
           <div class="row">
               <div class="col-12 glass-content"> 
                 <wizard 
                   :orientation="'horizontal'" 
                   :WizardTitle="'Test'"
                   :WizardDetails="
                         {
                           id: '',
                           user_id: '',
                           title: 'Student Application',
                           description: 'Student Application Description',
                           cover: '',
                           image: '',
                           sections:{
                            section1: {
                               id: '',
                               user_id: '',
                               title: 'Personal Details',
                               description: 'Student Personal Details',
                               cover: '',
                               image: '',
                               fields:{
                                field1:{
                                  id: '',
                                  title: 'field title',
                                  image: '',
                                  value: '',
                                  description: 'text field description',
                                  name: '',
                                  settings:{
                                       type: {
                                        id: '',
                                        type: 'text',
                                       },
                                       default: {
                                        id: '',
                                        default: ''
                                       },
                                       placeholder: {
                                        id: '',
                                        placeholder: 'field'
                                       },
                                       autocomplete : {
                                        id: '',
                                        autocomplete : 'off'
                                       },
                                       required : {
                                        id: '',
                                        required : false
                                       }, 
                                       disabled :  {
                                        id: '',
                                        disabled :  false
                                       },
                                       minlength : {
                                        id: '',
                                        minlength :  3
                                       },
                                       maxlength :  {
                                        id: '',
                                        maxlength :  20
                                       },
                                       field: {
                                        id: '',
                                        field: 'Text'
                                      },
                                      icon: {
                                       id: '',
                                       icon: ''
                                      },
                                      component: {
                                       id: '',
                                       component: 'TextInput'
                                      },
                                    },
                                    options: {}
                                }
                               }
                            },
                            section2: {
                               id: '',
                               user_id: '',
                               title: 'Medical Details',
                               description: 'Student Medical Details',
                               cover: '',
                               image: '',
                               fields:{
                                field1:{
                                  id: '',
                                  title: 'field title',
                                  image: '',
                                  value: '',
                                  description: 'text field description',
                                  name: '',
                                  settings:{
                                       type: {
                                        id: '',
                                        type: 'text',
                                       },
                                       default: {
                                        id: '',
                                        default: ''
                                       },
                                       placeholder: {
                                        id: '',
                                        placeholder: 'field'
                                       },
                                       autocomplete : {
                                        id: '',
                                        autocomplete : 'off'
                                       },
                                       required : {
                                        id: '',
                                        required : false
                                       }, 
                                       disabled :  {
                                        id: '',
                                        disabled :  false
                                       },
                                       minlength : {
                                        id: '',
                                        minlength :  3
                                       },
                                       maxlength :  {
                                        id: '',
                                        maxlength :  20
                                       },
                                       field: {
                                        id: '',
                                        field: 'Text'
                                      },
                                      icon: {
                                       id: '',
                                       icon: ''
                                      },
                                      component: {
                                       id: '',
                                       component: 'TextInput'
                                      },
                                    },
                                    options: {}
                                }
                               }
                            },
                            section3: {
                               id: '',
                               user_id: '',
                               title: 'Account Details',
                               description: 'Student Account Details',
                               cover: '',
                               image: '',
                               fields:{
                                field1:{
                                  id: '',
                                  title: 'field title',
                                  image: '',
                                  value: '',
                                  description: 'text field description',
                                  name: '',
                                  settings:{
                                       type: {
                                        id: '',
                                        type: 'text',
                                       },
                                       default: {
                                        id: '',
                                        default: ''
                                       },
                                       placeholder: {
                                        id: '',
                                        placeholder: 'field'
                                       },
                                       autocomplete : {
                                        id: '',
                                        autocomplete : 'off'
                                       },
                                       required : {
                                        id: '',
                                        required : false
                                       }, 
                                       disabled :  {
                                        id: '',
                                        disabled :  false
                                       },
                                       minlength : {
                                        id: '',
                                        minlength :  3
                                       },
                                       maxlength :  {
                                        id: '',
                                        maxlength :  20
                                       },
                                       field: {
                                        id: '',
                                        field: 'Text'
                                      },
                                      icon: {
                                       id: '',
                                       icon: ''
                                      },
                                      component: {
                                       id: '',
                                       component: 'TextInput'
                                      },
                                    },
                                    options: {}
                                }
                               }
                            }
                           },
                         }"
                   :PaneComponentName="'FormBuilder'"
                   :PaneComponentDisplayType="'single'"
                   :paneKeyName="'sections'"
                   :paneTitleName="'title'"
                 >
                 </wizard>
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
        <div class="tab-pane fade" id="pills-progress" role="tabpanel" aria-labelledby="pills-progress-tab">
           <div class="row justify-content-center">
               <div class="col-12 glass-content">
                <div class="card">
                  <div class="card-body">
                    <p class="card-text font-weight-bold display-4">Your Application is awaiting processing, you will receive an email and sms with feedback all the best</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn btn-danger me-md-2" type="button">Cancel<i class="fas fa-window-close mr-2"></i></button>
                      <button class="btn btn-info" type="button">Modify Application <i class="fas fa-edit ml-2"></i></button>
                    </div>
                  </div>
                </div>
               </div>
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

import Wizard from "../../../../inteli_form/ui/widgets/forms/Wizard.vue"

export default defineComponent({
    components:
        {
            spinner,
            SelectInput,
            Wizard
        },
        watch:
        {
          formTemplate:
          {
           handler(newValue, oldValue)
           {
            console.log("watch",newValue)
           }
         }
        },
        computed: {

        },
        data() {
            return {
              formTemplate: {}
            }
        },
        methods:
        {
          getRequest(url, variable = '')
          {
            var self = this
           axios.get(url)
           .then((response)=>{
            if (variable.length !== 0)
            {
              self[variable] = response.data
            }
           })
          },
          postRequest(url, data = {}, variable = '')
          {
           axios.post(url, data)
           .then((response)=>{
            if (variable.length !== 0)
            {
              this[variable] = response.data
            }
            
           })
          },
            /**
             * Next Actions
            */
            startStepNext()
            {
              const currentTab = document.querySelector("#pills-start")
              const nextTab = document.querySelector("#pills-form")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            formStepNext()
            {
              const currentTab = document.querySelector("#pills-form")
              currentTab.classList.remove("show", "active");

              const nextTab = document.querySelector("#pills-progress")
              nextTab.classList.add("show", "active")
            }
            ,
            /**
             * previous Actions
            */

            formStepPrev()
            {
              const currentTab = document.querySelector("#pills-form")
              const nextTab = document.querySelector("#pills-start")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            progressStepPrev()
            {
              const currentTab = document.querySelector("#pills-progress")
              const nextTab = document.querySelector("#pills-form")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }
        },
        mounted()
        {
          this.getRequest('form/template/index', 'formTemplate')
          console.log('form template',this['formTemplate'])
        }
})
</script>


<style scoped>
.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}


.tab-content {
  width: 100% !important; 
}
</style>

