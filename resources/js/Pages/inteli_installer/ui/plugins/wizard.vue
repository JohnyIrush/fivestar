<template>
  <main class="main-content  mt-0">
   <div class="glass-container">
             <div class="container glass-content screen-height">
                 <!--PROGRESS BAR START-->
                 <progress_bar></progress_bar>
                 <!--PROGRESS BAR END-->

                 <!--WIZARD START-->
                         <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                             <button class="nav-link active" id="pills-welcome-tab" data-bs-toggle="pill" data-bs-target="#pills-welcome" type="button" role="tab" aria-controls="pills-home" aria-selected="true">welcome</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-name-tab" data-bs-toggle="pill" data-bs-target="#pills-name" type="button" role="tab" aria-controls="pills-name" aria-selected="false">Name</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="false">Details</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-admin-tab" data-bs-toggle="pill" data-bs-target="#pills-admin" type="button" role="tab" aria-controls="pills-admin" aria-selected="false">Admin</button>
                           </li>

                           <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false">Payment</button>
                           </li>

                           <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-installation-tab" data-bs-toggle="pill" data-bs-target="#pills-installation" type="button" role="tab" aria-controls="pills-installation" aria-selected="false">Installation</button>
                           </li>
                         </ul>-->

                        <div class="tab-content" id="pills-tabContent">
                         <!--WELCOME START-->
                         <div class="tab-pane fade show active" id="pills-welcome" role="tabpanel" aria-labelledby="pills-welcome-tab">
                             <div class="row justify-content-center">
                                 <div class="col-1"></div>
                                 <div class="col-10 glass-content">
                                  <welcome_slider></welcome_slider>
                                 </div>
                                 <div class="col-1"></div>
                             </div>

                             <div class="row justify-content-center">
                                 <div class="col-3"></div>
                                 <div class="col-6 d-grid gap-2 mx-auto">
                                       <button @click="getStartedNext()" class="btn  mt-3 btn-styles" >Get Started</button>
                                 </div>
                                 <div class="col-3"></div>
                             </div>
                         </div>
                         <!--WELCOME END-->
                         <!--Product START-->
                         <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab">
                            <div class="row justify-content-center">
                                <div class="col-1">

                                </div>
                                <div class="col-10 glass-content">
                                    <div class="mb-3 mt-3">
                                        <products></products>
                                    </div>
                                </div>
                                <div class="col-1">

                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col d-grid  mx-auto">
                                  <button  @click="productStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col d-grid  mx-auto">
                                  <button  @click="productStepNext()" class="btn  mt-3 btn-styles" >Next</button>
                                </div>
                            </div>
                         </div>
                         <!--Product END-->
                         <!--NAME START-->
                         <div class="tab-pane fade" id="pills-name" role="tabpanel" aria-labelledby="pills-name-tab">
                            <div class="row justify-content-center">
                                <div class="col-3">

                                </div>
                                <div class="col-6 glass-content">
                                    <div class="mb-3 mt-3">
                                        <label for="school_name" class="form-label ">School Name</label>
                                        <input  type="text" class="form-control" id="school_name" v-model="school.sch_name" placeholder="Enter School">
                                    </div>
                                </div>
                                <div class="col-3">

                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col d-grid  mx-auto">
                                  <button  @click="nameStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col d-grid  mx-auto">
                                  <button  @click="nameStepNext()" class="btn  mt-3 btn-styles" >Next</button>
                                </div>
                            </div>
                         </div>
                         <!--NAME END-->

                         <!--DETAILS START-->
                         <div class="tab-pane fade" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">
                                <div class="row justify-content-center ">

                                    <div class="col-5 glass-content">
                                        <div class="mt-4">
                                            <label for="sch_name"  >School Name</label>
                                            <input type="text" class="mt-1 block w-full sch_name" v-model="school.sch_name" autofocus autocomplete="name" >
                                        </div>

                                        <div class="mt-4">
                                            <label for="sch_email" >School Email</label>
                                            <input id="sch_email" type="email" class="mt-1 block w-full" v-model="school.sch_email" >
                                        </div>

                                        <div class="mt-4">
                                            <label for="sch_address" >School Address</label>
                                            <input id="sch_address" type="text" class="mt-1 block w-full" v-model="school.sch_address" >
                                        </div>
                                        <div class="mt-4">
                                            <label for="sch_address" >School Website</label>
                                            <input id="sch_address" type="text" class="mt-1 block w-full" v-model="school.sch_web" >
                                        </div>
                                        <div class="mt-4">
                                            <label for="sch_location" >School Level</label>
                                            <select class="form-select" aria-label="" v-model="school.sch_level_id">
                                              <option selected>Select School Level</option>
                                              <option v-for="schoolLevel in sch.levels" :key="schoolLevel.id" :value="schoolLevel.id">{{schoolLevel.level}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5 glass-content">
                                        <div class="mt-4">
                                            <label for="sch_phone" >School Phone</label>
                                            <input id="sch_phone" type="tel" class="mt-1 block w-full" v-model="school.sch_phone" >
                                        </div>

                                        <div class="mt-4">
                                            <label for="sch_location" >School Location</label>
                                            <input id="sch_location" type="text" class="mt-1 block w-full" v-model="school.sch_location" >
                                        </div>
                                        <div class="mt-4">
                                            <label for="sch_location" >School Gender</label>
                                            <select class="form-select" aria-label="" v-model="school.sch_gender_id">
                                              <option selected>Select School Gender</option>
                                              <option v-for="schoolGender in sch.genders" :key="schoolGender.id" :value="schoolGender.id">{{schoolGender.gender}}</option>
                                            </select>
                                        </div>
                                        <div class="mt-4">
                                            <label for="sch_location" >School Type</label>
                                            <select class="form-select" aria-label="" v-model="school.sch_type_id">
                                              <option selected>Select School Type</option>
                                              <option v-for="schoolType in sch.types" :key="schoolType.id" :value="schoolType.id">{{schoolType.type}}</option>
                                            </select>
                                        </div>
                                        <div class="mt-4">
                                            <label for="sch_location" >School Education System</label>
                                            <select class="form-select" aria-label="" v-model="school.sch_system_id">
                                              <option selected>Select School System</option>
                                              <option v-for="schoolSystem in sch.systems" :key="schoolSystem.id" :value="schoolSystem.id">{{schoolSystem.system}}</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                            <div class="row justify-content-center">
                                <div class="col d-grid  mx-auto">
                                  <button  @click="detailsStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col d-grid  mx-auto">
                                  <button  @click="detailsStepNext()" class="btn  mt-3 btn-styles" >Next</button>
                                </div>
                            </div>
                         </div>
                         <!--DETAILS END-->

                         <!--ADMIN START-->
                         <!--<div class="tab-pane fade" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
                            <div class="row justify-content-center ">
                                <div class="col-2">

                                </div>
                                <div class="col-8 glass-content">
                                    <div>
                                        <label for="name"  >Name</label>
                                        <input id="name" type="text" class="mt-1 block w-full" v-model="admin.name"  autofocus autocomplete="name" >
                                    </div>

                                    <div class="mt-4">
                                        <label for="email" >Email</label>
                                        <input id="email" type="email" class="mt-1 block w-full" v-model="admin.email"  >
                                    </div>

                                    <div class="mt-4">
                                        <label for="phone" >Phone</label>
                                        <input id="phone" type="tel" class="mt-1 block w-full" v-model="admin.phone"  >
                                    </div>
                                </div>
                                <div class="col-2">

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col d-grid  mx-auto">
                                  <button  @click="adminStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col d-grid  mx-auto">
                                  <button  @click="adminStepNext()" class="btn  mt-3 btn-styles" > Register <i class="fa fa-account"></i></button>
                                </div>
                            </div>
                         </div>-->
                         <!--ADMIN END-->

                         <!-- Account START-->
                         <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                            <div class="row justify-content-center ">
                                <!--<div class="col-2">

                                </div>-->
                                <div class="col glass-content">
                                  <register :registration_type="1"></register>
                                </div>
                                <!--<div class="col-2">

                                </div>-->
                            </div>
                            <div class="row justify-content-center">
                                <div class="col d-grid  mx-auto">
                                  <button  @click="registerStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col d-grid  mx-auto">
                                  <button  @click="registerStepNext()" class="btn  mt-3 btn-styles" > Payment <i class="fa fa-money"></i></button>
                                </div>
                            </div>
                         </div>
                         <!-- Account END-->

                         <!-- PAYMENT START-->
                         <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                            <div class="row justify-content-center">
                                <div class="col-1">

                                </div>
                                <div class="col-10 glass-content">
                                  <payment_methods></payment_methods>
                                </div>
                                <div class="col-1">

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col d-grid  mx-auto">
                                  <button  @click="paymentStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col d-grid  mx-auto">
                                  <button  @click="paymentStepNext()" class="btn  mt-3 btn-styles" >Install <i class="fa fa-rocket"></i></button>

                                  <!-- <button type="button" class="btn btn-primary mt-3 btn-styles" data-bs-toggle="modal" data-bs-target="#inteli-code-verify">
                                    Install <i class="fa fa-rocket"></i>
                                  </button>
                                  <inteli_code_verify></inteli_code_verify>-->
                                </div>
                            </div>
                         </div>
                         <!-- PAYMENT END-->

                         <!-- INSTALLATION START-->
                         <div class="tab-pane fade" id="pills-installation" role="tabpanel" aria-labelledby="pills-installation-tab">
                            <div class="row justify-content-center">
                                <div class="col-1">

                                </div>
                                <div class="col-10 glass-content">
                                  <installation></installation>
                                </div>
                                <div class="col-1">

                                </div>
                            </div>
                            <!--<div class="row justify-content-around">
                                <div class="col-4 d-grid  mx-auto">
                                  <button  @click="installationStepPrev()" class="btn  mt-3 btn-styles" >Previous</button>
                                </div>
                                <div class="col-4">

                                </div>
                                <div class="col-4 d-grid  mx-auto">
                                  <button   class="btn  mt-3 btn-styles" >Next</button>
                                </div>
                            </div>-->

                         </div>
                         <!-- INSTALLATION END-->
                        </div>
                 <!--WIZARD END-->
             </div>
   </div>
   <!--<school_details_confirmation></school_details_confirmation>-->
  </main>
</template>


<script>

import installation from './Installation.vue'
import progress_bar from "../components/progress/progress-bar.vue";
import get_started from "../components/buttons/get-started.vue"
import welcome_slider from "../components/Sliders/Welcome-Slider.vue"
import payment_methods from "../components/cards/payment-methods"
import school_details_confirmation from '../components/modals/school_details_confirmation.vue'
import inteli_code_verify from '../components/modals/inteli-code-verify.vue'
import register from '../components/forms/register/Register.vue'
import products from "../components/cards/products.vue";

/*Vuex Store*/
import { store } from '../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

export default {
    components:
        {
            installation,
            progress_bar,
            get_started,
            welcome_slider,
            payment_methods,
            school_details_confirmation,
            inteli_code_verify,
            register,
            products
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
            /**
             * Next Actions
            */
            getStartedNext()
            {
              const currentTab = document.querySelector("#pills-welcome")
              const nextTab = document.querySelector("#pills-product")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            productStepNext()
            {
              const currentTab = document.querySelector("#pills-product")
              const nextTab = document.querySelector("#pills-name")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }
            ,
            nameStepNext()
            {
              const currentTab = document.querySelector("#pills-name")
              const nextTab = document.querySelector("#pills-details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            }
            ,
            detailsStepNext()
            {

              this.updateSchStore()
              const currentTab = document.querySelector("#pills-details")
              const nextTab = document.querySelector("#pills-register")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            },
            /*
            adminStepNext()
            {
              const currentTab = document.querySelector("#pills-admin")
              const nextTab = document.querySelector("#pills-register")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            },
            */
            registerStepNext()
            {
              const currentTab = document.querySelector("#pills-register")
              const nextTab = document.querySelector("#pills-payment")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

            },
            paymentStepNext()
            {
              const currentTab = document.querySelector("#pills-payment")
              const nextTab = document.querySelector("#pills-installation")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")

                axios.get("")
                .then((response)=>{

                })
                .catch(()=>{

                })
            },

            /**
             * previous Actions
            */

            productStepPrev()
            {
              const currentTab = document.querySelector("#pills-product")
              const nextTab = document.querySelector("#pills-welcome")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            nameStepPrev()
            {
              const currentTab = document.querySelector("#pills-name")
              const nextTab = document.querySelector("#pills-product")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            detailsStepPrev()
            {

              const currentTab = document.querySelector("#pills-details")
              const nextTab = document.querySelector("#pills-name")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            /*
            adminStepPrev()
            {
              const currentTab = document.querySelector("#pills-admin")
              const nextTab = document.querySelector("#pills-details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            */
            registerStepPrev()
            {
              const currentTab = document.querySelector("#pills-register")
              const nextTab = document.querySelector("#pills-details")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },

            paymentStepPrev()
            {
              const currentTab = document.querySelector("#pills-payment")
              const nextTab = document.querySelector("#pills-register")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            installationStepPrev()
            {
              const currentTab = document.querySelector("#pills-installation")
              const nextTab = document.querySelector("#pills-payment")
              currentTab.classList.remove("show", "active");
              nextTab.classList.add("show", "active")
            },
            getSchoolGender()
            {

                axios.get("/school-gender")
                .then((response)=>{
                    this.sch.genders = response.data
                })
                .catch(()=>{

                })
            },
            getSchoolTypes()
            {

                axios.get("/school-types")
                .then((response)=>{
                    this.sch.types = response.data
                })
                .catch(()=>{

                })

            },
            getSchoolLevels()
            {

                axios.get("/school-levels")
                .then((response)=>{
                    this.sch.levels = response.data
                })
                .catch(()=>{

                })

            },

            getSchoolEducationSystems()
            {

                axios.get("/school-education-systems")
                .then((response)=>{
                    this.sch.systems = response.data
                })
                .catch(()=>{

                })

            },
            createSchoolAccount()
            {
                axios.post('create-sch-account', store.state.school)
                .then(()=>{

                })
            },
            updateSchStore()
            {
              store.state.school.sch_name = this.school.sch_name
              store.state.school.sch_email = this.school.sch_email
              store.state.school.sch_address = this.school.sch_address
              store.state.school.sch_web = this.school.sch_web
              store.state.school.sch_level_id = this.school.sch_level_id
              store.state.school.sch_phone = this.school.sch_phone
              store.state.school.sch_location = this.school.sch_location
              store.state.school.sch_gender_id = this.school.sch_gender_id
              store.state.school.sch_type_id = this.school.sch_type_id
              store.state.school.sch_system_id = this.school.sch_system_id
            },
            createSystemDatabase()
            {
                axios.post('create-database', store.state.school)
                .then(()=>{

                })
            },
        },
    mounted()
    {
        this.getSchoolTypes()
        this.getSchoolLevels()
        this.getSchoolEducationSystems()
        this.getSchoolGender()


        var toastMsg = new Toaster();

        Echo.channel('registration')
        .listen('.SchoolAdminRegisteredEvent', (e)=>{

            toastMsg.create("Registration", "Successful School Admin Registration", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.SUCCESS,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 5000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              position: ToasterPosition.TOP
            })
        });

        Echo.channel('mpesa-express-transaction-start')
        .listen('.MPesaExpressTransactionEvent', (e)=>{

            if(e.ResponseCode && e.ResponseCode == 0)
            {
            toastMsg.create("Mpesa Transaction", "Mpesa Transaction " + e.CustomerMessage + " Please Check Your Phone To Complete Transaction", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.SUCCESS,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 5000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              //position: ToasterPosition.TOP
            })
            }
            else if(e.errorCode)
            {
            toastMsg.create("Mpesa Transaction", "Mpesa Transaction " + e.errorMessage + " Please Try Again", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.DANGER,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 5000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              //defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              //position: ToasterPosition.TOP
            })
            }
        })

        Echo.channel('mpesa-express-transaction-result')
        .listen('.MPesaExpressTransactionResultEvent', (e)=>{
            if(e.ResultCode == 0)
            {
            toastMsg.create("Mpesa Payment", "Mpesa Payment Successful" + e.ResultDesc + " Thank You!", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.SUCCESS,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 5000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              //defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              //position: ToasterPosition.TOP
            })
            }
            else if (e.ResultDesc)
            {
            toastMsg.create("Mpesa Payment", "Mpesa Payment Not Successful. " + e.ResultDesc + " Please Try Again", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.DANGER,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 5000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              //defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              //position: ToasterPosition.TOP
            })
            }
        });

        Echo.channel('inteli-payment-success')
        .listen('.InteliPaymentSuccessEvent', (e)=>{

            toastMsg.create("Iteli System Payment", "Inteli payment pocessed Successfully. Welcome, You are just some few seconds to setting up everything.", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.INFO,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 6000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              //defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              //position: ToasterPosition.TOP
            })

            store.state.school.sch_inteli_code = 1 //e.inteli_code
            this.createSchoolAccount();
        });

        Echo.channel('school-account-created')
        .listen('.SchoolAcountCreatedEvent', (e)=>{

            toastMsg.create("School Account", "School Account Successfully. Time To Setup The System!", {
              // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
              type: ToasterType.SUCCESS,
              // ELAPSED, COUNTDOWN
              timer: ToasterTimer.COUNTDOWN,
              // Delay hiding the toast (ms)
              delay: 6000,
              // Enable/disable animation
              animation: true,
              // Custom toast icon
              //defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
              //position: ToasterPosition.TOP
            })

         //var mpesaModal = new bootstrap.Modal(document.getElementById('inteli-mpesa-pay'))
         var mpesaCloseButton = document.getElementById("inteli-mpesa-pay-close");

         mpesaCloseButton.click();
         // mpesaModal.hide();

         //var payPalModal = new bootstrap.Modal(document.getElementById('inteli-paypal-pay'))
         var payPalCloseButton = document.getElementById("inteli-paypal-pay-close");

         payPalCloseButton.click();
         // payPalModal.hide();

         this.paymentStepNext();
         this.createSystemDatabase()

        });

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

