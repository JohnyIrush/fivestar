<template>
  <main class="main-content  mt-0">
   <div class="glass-container min-vh-85">
      <div class="row align-items-center">
        <div class="col">
         <div class="body mt-5">
             <div class="container glass-content">
                 <!--PROGRESS BAR START-->
                 <progress_bar></progress_bar>
                 <!--PROGRESS BAR END-->
         
                 <!--FORM START-->
                 <div class="form-outer">
                     <form action="#">
                         <!--WELCOME START-->
                         <div class="page slidepage">

                             <div class="row justify-content-center height-setter">
                                 <div class="col glass-content">
                                  <welcome_slider></welcome_slider>
                                 </div>
                             </div>
         
                             <div class="row justify-content-center">
                                 <div class="col-3"></div>
                                 <div class="col-6">
                                   <div class="field">
                                       <button @click="getStartedNext()" class="nextBtn" >Next</button>
                                   </div>
                                 </div>
                                 <div class="col-3"></div>
                             </div>
                         </div>
                         <!--WELCOME END-->
         
                         <!--NAME START-->
                         <div class="page">
                            <div class="row justify-content-center mt-5">
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
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                  <div class="field btns">
                                      <button  @click="nameStepPrev()" class="prev-1 prev mr-5" >Previous</button>
                                      <button  @click="nameStepNext()" class="next-1 next ml-5" >Next</button>
                                  </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                         </div>
                         <!--NAME END-->
         
                         <!--DETAILS START-->
                         <div class="page">
                                <div class="row justify-content-center ">
                                    <div class="col-3"></div>
                                    <div class="col-6 glass-content">
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
                                            <label for="sch_phone" >School Phone</label>
                                            <input id="sch_phone" type="tel" class="mt-1 block w-full" v-model="school.sch_phone" >
                                        </div>
            
                                        <div class="mt-4">
                                            <label for="sch_location" >School Location</label>
                                            <input id="sch_location" type="text" class="mt-1 block w-full" v-model="school.sch_location" >
                                        </div>
                                        <div class="mt-4">
                                            <label for="sch_location" >School Gender</label>
                                            <input id="sch_location" type="text" class="mt-1 block w-full" v-model="school.sch_location" >
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                    <!--<div class="col-6 glass-content">
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
                                            <input id="sch_location" type="text" class="mt-1 block w-full" v-model="school.sch_location" >
                                        </div>
                                    </div>-->
                                </div>
        

                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                  <div class="field btns">
                                      <button  @click="detailsStepPrev()" class="prev-1 prev mr-5" >Previous</button>
                                      <button  @click="detailsStepNext()" class="next-1 next ml-5" >Next</button>
                                  </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                         </div>
                         <!--DETAILS END-->
         
                         <!--ADMIN START-->
                         <div class="page">
                            <div class="row justify-content-center ">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6 glass-content">
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
                                <div class="col-3">
        
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6 ">
                                  <div class="field btns">
                                      <button  @click="adminStepPrev()" class="prev-1 prev mr-5" >Previous</button>
                                      <button  @click="adminStepNext()" class="next-1 next ml-5" >Next</button>
                                  </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                         </div>
                         <!--ADMIN END-->
         
                         <!-- PAYMENT START-->
                         <div class="page">
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6 glass-content">
                                  <payment_methods></payment_methods>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                  <div class="field btns">
                                      <button  @click="paymentStepPrev()" class="prev-1 prev mr-5" >Previous</button>
                                      <button  @click="paymentStepNext()" class="next-1 next ml-5" >Next</button>
                                  </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                         </div>
                         <!-- PAYMENT END-->
         
                         <!-- INSTALLATION START-->
                         <div class="page">
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6 glass-content">
                                  <installation></installation>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                  <div class="field btns">
                                      <button  @click="installationStepPrev()" class="prev-1 prev mr-5" >Previous</button>
                                      <button  class="submit"  >Install</button>
                                  </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                             
                         </div>
                         <!-- INSTALLATION END-->
                     </form>
                 </div>
                 <!--FORM END-->
             </div>
         </div>
        </div>
      </div>
   </div>
  </main>
</template>


<script>

import installation from './Installation.vue'
import progress_bar from "../components/progress/progress-bar.vue";
import get_started from "../components/buttons/get-started.vue"
import welcome_slider from "../components/Sliders/Welcome-Slider.vue"
import payment_methods from "../components/cards/payment-methods"
export default {
    components:
        {
            installation,
            progress_bar,
            get_started,
            welcome_slider,
            payment_methods
        },
    data() {
        return {
            school: this.$inertia.form({
                sch_name: '',
                sch_email: '',
                sch_address: '',
                sch_phone: '',
                sch_location: '',
                sch_logo: '',
                inteli_code: ''
            }),
            admin: this.$inertia.form({
                name: '',
                email: '',
                address: '',
                phone: '',
                location: ''
            }),
            steps: {
                one: false,
                two: false,
                three: false,
                four: false,
                five: false
            },
            installation_status: false,
            step: 1,
            navs: ['sch_name', 'sch_details', 'admin_details', 'payment','installation'],
            pane: ['sch_name', 'sch_details', 'admin_details', 'payment','installation'],
            wizard_ui :
            {
                max: 6,
                current: 1
            }
        }
    },
    watch:
        {
          school: function ()
          {
              if(this.school.sch_name == '')
                  this.steps.one = false
              else
                  this.steps.one = true

              if(this.school.sch_name == '' || this.school.sch_name == '' || this.school.sch_email == '' || this.school.sch_address == '' || this.school.sch_phone == '' || school.sch_location == '' || sch_logo)
                  this.steps.two = false
              else
                  this.steps.two = true


              if(this.school.inteli_code == '')
                  this.steps.four = false
              else
                  this.steps.four = true

          },
            admin: function ()
            {

                if(this.admin.name == '' || this.admin.email == ''  || this.admin.phone == '')
                    this.steps.three = false
                else
                    this.steps.three = true
            },
            installation_status: function () {
                if(this.installation_status == false)
                    this.steps.five = false
                else
                    this.steps.five = true
            }
        },
    methods:
        {
            /**
             * Next Actions
            */
            getStartedNext()
            {
   
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-23%";
              bullet[this.current - 1].classList.add("active");
              progressCheck[this.current - 1].classList.add("active");
              progressText[this.current - 1].classList.add("active");
              this.current += 1; 
            },
            nameStepNext()
            {
   
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-54%";
              bullet[this.current - 1].classList.add("active");
              progressCheck[this.current - 1].classList.add("active");
              progressText[this.current - 1].classList.add("active");
              this.current += 1; 
            }
            ,
            detailsStepNext()
            {
   
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-79%";
              bullet[this.current - 1].classList.add("active");
              progressCheck[this.current - 1].classList.add("active");
              progressText[this.current - 1].classList.add("active");
              this.current += 1; 
            },
            adminStepNext()
            {
   
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-104%";
              bullet[this.current - 1].classList.add("active");
              progressCheck[this.current - 1].classList.add("active");
              progressText[this.current - 1].classList.add("active");
              this.current += 1; 
            },

            paymentStepNext()
            {
   
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-129%";
              bullet[this.current - 1].classList.add("active");
              progressCheck[this.current - 1].classList.add("active");
              progressText[this.current - 1].classList.add("active");
              this.current += 1; 
            },

            /**
             * previous Actions
            */
            
            nameStepPrev()
            {

              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "0%";
              bullet[this.current - 2].classList.remove("active");
              progressCheck[this.current - 2].classList.remove("active");
              progressText[this.current - 2].classList.remove("active");
              this.current -= 1;
            },

            detailsStepPrev()
            {
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-23%";
              bullet[this.current - 2].classList.remove("active");
              progressCheck[this.current - 2].classList.remove("active");
              progressText[this.current - 2].classList.remove("active");
              this.current -= 1;
            },

            adminStepPrev()
            {
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-54%";
              bullet[this.current - 2].classList.remove("active");
              progressCheck[this.current - 2].classList.remove("active");
              progressText[this.current - 2].classList.remove("active");
              this.current -= 1;
            },


            paymentStepPrev()
            {
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-79%";
              bullet[this.current - 2].classList.remove("active");
              progressCheck[this.current - 2].classList.remove("active");
              progressText[this.current - 2].classList.remove("active");
              this.current -= 1;
            },
            installationStepPrev()
            {
              const slidePage = document.querySelector(".slidepage");

              const progressText = document.querySelectorAll(".wizard-step p");
              const progressCheck = document.querySelectorAll(".wizard-step .wizard-check");
              const bullet = document.querySelectorAll(".wizard-step .wizard-bullet");

              slidePage.style.marginLeft = "-104%";
              bullet[this.current - 2].classList.remove("active");
              progressCheck[this.current - 2].classList.remove("active");
              progressText[this.current - 2].classList.remove("active");
              this.current -= 1;
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

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    /*display: flex;
    justify-content: space-between;
    align-items: center;*/
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

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


.body{
display: flex !important;
align-items: center !important;
justify-content: center !important;
/*min-height: 100vh;*/
}


.container
{
    width: 900px !important;
    border-radius: 5px !important;
    text-align: center;
    padding: 20px 35px 10px 35px !important;
}

.container header
{
    font-size: 35px !important;
    font-weight: 600 !important;
    margin: 0 0 30px 0 !important;
}


.container .form-outer
{
    width: 100% !important;
    overflow: hidden !important;
}

.form-outer form
{
    display: flex !important;
    width: 600% !important;
}

.form-outer form .page
{
    width: 25% !important;
    transition: margin-left 0.3s ease-in-out !important;
}

.form-outer form .page .title
{
    text-align: left !important;
    font-size: 25px !important;
    font-weight: 500 !important;
}

.form-outer form .page .field
{
    height: 45px !important;
    width: 330px !important;
    margin: 45px 0 !important;
    display: flex !important;
    position: relative !important;
}

.form-outer form .page .field .label
{
    position: absolute !important;
    top: -30px !important;
    font-weight: 500 !important;
}

.form-outer form .page .field input
{
    height: 100% !important;
    width: 100% !important;
    border: 1px solid lightgrey !important;
    border-radius: 5px !important;
    font-size: 18px !important;
    padding-left: 15px !important;
}

form .page .field select
{
    width: 100% !important;
    padding-left: 10px !important;
    font-size: 17px !important;
    font-weight: 500 !important;
}

.form-outer form .page .field button
{
    width: 100% !important;
    height: calc(100% + 5px) !important;
    margin-top: -20px !important;
    border: none;
    background: #d43f8d !important;
    border-radius: 5px !important;
    color: #fff !important;
    font-size: 18px !important;
    font-weight: 500 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
    cursor: pointer !important;
}

.form-outer form .page .field button:hover
{
    background: #000 !important;
}

/*
.form-outer form .page .btns button
{
    margin-top: -20px !important;
}*/

form .page .btns button .prev
{
    /*margin-right: 3px !important;*/
    font-size: 17px !important;
}

form .page .btns button .next
{
    /*margin-right: 3px !important; */
}

.container .progress-bar-2
{
    display: flex !important;
    margin: 20px 0 !important;
}

.container .progress-bar-2 .wizard-step
{
    position: relative !important;
    text-align: center !important;
    width: 100%;
}

.progress-bar-2 .wizard-step p.active
{
    font-size: 10px !important;
    font-weight: 500 !important;
    color: #000 !important;
    margin-bottom: 8px !important;
    transition: 0.2s !important;
}


.progress-bar-2 .wizard-step p
{
    font-size: 10px !important;
    font-weight: 500 !important;
    color: #000 !important;
    margin-bottom: 8px !important;
}

.progress-bar-2 .wizard-step p.active
{
    color: #d43f8d !important;
}

.progress-bar-2 .wizard-step .wizard-bullet.active
{
    border-color: #d43f8d !important;
    background: #d43f8d !important;

}

.progress-bar-2 .wizard-step:last-child .wizard-bullet::before,
.progress-bar-2 .wizard-step:last-child .wizard-bullet::after
{
    display: none !important;
}

.progress-bar-2 .wizard-step .wizard-bullet::before,
.progress-bar-2 .wizard-step .wizard-bullet::after
{
    position: absolute !important;
    content: '' !important;
    bottom: 11px !important;
    right: -51px !important;
    height: 3px !important;
    width: 44px !important;
    background: #262626 !important;
}

.progress-bar-2 .wizard-bullet.active::after
{
    background: #d43f8d !important;
    transform: scaleX(0) !important;
    transform-origin: left !important;
    animation: animate 0.3s linear forwards !important;
}

@keyframes animate {
  100%
  {
    transform: scaleX(1) !important;
  }  
}

.progress-bar-2 .wizard-step .wizard-bullet
{
    position: relative !important; 
    height: 25px !important;
    width: 25px !important;
    border: 2px solid #000 !important;
    display: inline -block !important;
    border-radius: 50% !important;
    font-weight: 500 !important;
    font-size: 17px !important;
    line-height: 25px !important;
}


/*.progress-bar-2 .wizard-step */
.progress-bar-2 .wizard-step .wizard-bullet span
{
    font-weight: 500 !important;
    font-size: 17px !important;
    line-height: 25px !important;
    position: absolute !important;
    left: 30% !important;
    transform: translateX(- 50%) !important;
}

.progress-bar-2 .wizard-step .wizard-bullet.active span{
    display: none !important;
}

.progress-bar-2 .wizard-step .wizard-check
{
    position: absolute !;
    left: 15% !important;
    top: 70% !important;
    font-size: 15px !important;
    transform: translate(-50%, -50%) !important;
    display: none !important;
}

.progress-bar-2 .wizard-step .wizard-check.active
{
    display: block !important;
    color: #fff !important;
}

.height-setter
{
    min-height: 40vh !important;
}

</style>

