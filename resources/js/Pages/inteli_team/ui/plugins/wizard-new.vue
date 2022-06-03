<template>
<div class="body">
    <div class="container">
        <!--PROGRESS BAR START-->
        <!--
        <div class="progress-bar-2">
            <div class="wizard-step">
                <p>Welcome</p>
                <div class="wizard-bullet">
                    <span>1</span>
                </div>
                <div class="wizard-check"><i class="fa fa-check"></i></div>
            </div>
            <div class="wizard-step">
                <p>Name</p>
                <div class="wizard-bullet">
                    <span>2</span>
                </div>
                <div class="wizard-check"><i class="fa fa-check"></i></div>
            </div>
            <div class="wizard-step">
                <p>Details</p>
                <div class="wizard-bullet">
                    <span>3</span>
                </div>
                <div class="wizard-check"><i class="fa fa-check"></i></div>
            </div>
            <div class="wizard-step">
                <p>Admin</p>
                <div class="wizard-bullet">
                    <span>4</span>
                </div>
                <div class="wizard-check"><i class="fa fa-check"></i></div>
            </div>
            <div class="wizard-step">
                <p>Payment</p>
                <div class="wizard-bullet">
                    <span>5</span>
                </div>
                <div class="wizard-check"><i class="fa fa-check"></i></div>
            </div>
            <div class="wizard-step">
                <p>Installation</p>
                <div class="wizard-bullet">
                    <span>6</span>
                </div>
                <div class="wizard-check"><i class="fa fa-check"></i></div>
            </div>
        </div>
        -->
        <progress_bar></progress_bar>
        <!--PROGRESS BAR END-->

        <!--FORM START-->
        <div class="form-outer">
            <form action="#">
                <!--WELCOME START-->
                <div class="page slidepage">
                    <div class="title">WELCOME:</div>
                    <div class="field">
                        <div class="label">First Name</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Last Name</div>
                        <input type="text">
                    </div>

                    <div class="field">
                        <button @click="getStartedNext()" class="nextBtn" >Next</button>
                    </div>
                </div>
                <!--WELCOME END-->

                <!--NAME START-->
                <div class="page">
                    <div class="title">Name:</div>
                    <div class="field">
                        <div class="label">Email Adress</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Phone Number</div>
                        <input type="number">
                    </div>

                    <div class="field btns">
                        <button @click="nameStepPrev()" class="prev-1 prev" >Previous</button>
                        <button @click="nameStepNext()" class="next-1 next" >Next</button>
                    </div>
                </div>
                <!--NAME END-->

                <!--DETAILS START-->
                <div class="page">
                    <div class="title">Details:</div>
                    <div class="field">
                        <div class="label">Date</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Gender</div>
                        <select name="" id="">
                            <option value="">Male</option>
                            <option value="">Female</option>
                            <option value="">Other</option>
                        </select>
                    </div>

                    <div class="field btns">
                        <button @click="detailsStepPrev()" class="prev-2 prev" >Previous</button>
                        <button @click="detailsStepNext()" class="next-2 next" >Next</button>
                    </div>
                </div>
                <!--DETAILS END-->

                <!--ADMIN START-->
                <div class="page">
                    <div class="title">Admin:</div>
                    <div class="field">
                        <div class="label">Username</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password">
                    </div>

                    <div class="field btns">
                        <button @click="adminStepPrev()" class="prev-3 prev" >Previous</button>
                        <button @click="adminStepNext()" class="next-2 next" >Next</button>
                    </div>
                </div>
                <!--ADMIN END-->

                <!-- PAYMENT START-->
                <div class="page">
                    <div class="title">Payment:</div>
                    <div class="field">
                        <div class="label">Username</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password">
                    </div>

                    <div class="field btns">
                        <button @click="paymentStepPrev()" class="prev-3 prev" >Previous</button>
                        <button @click="paymentStepNext()" class="next-2 next" >Next</button>
                    </div>
                </div>
                <!-- PAYMENT END-->

                <!-- INSTALLATION START-->
                <div class="page">
                    <div class="title">Installation:</div>
                    <div class="field">
                        <div class="label">Username</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password">
                    </div>

                    <div class="field btns">
                        <button @click="installationStepPrev()" class="prev-3 prev" >Previous</button>
                        <button class="submit" >Submit</button>
                    </div>
                </div>
                <!-- INSTALLATION END-->
            </form>
        </div>
        <!--FORM END-->
    </div>
</div>
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

              slidePage.style.marginLeft = "-20%";
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

              slidePage.style.marginLeft = "-50%";
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

              slidePage.style.marginLeft = "-75%";
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

              slidePage.style.marginLeft = "-100%";
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

              slidePage.style.marginLeft = "-125%";
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

              slidePage.style.marginLeft = "-20%";
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

              slidePage.style.marginLeft = "-50%";
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

              slidePage.style.marginLeft = "-75%";
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

              slidePage.style.marginLeft = "-100%";
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


.body{
display: flex !important;
align-items: center !important;
justify-content: center !important;
min-height: 100vh;
background-image: -webkit-linear-gradient(bottom, #0250c5, #d43f8d) !important;
}


.container
{
    width: 600px !important;
    background: #fff !important;
    border-radius: 5px !important;
    text-align: center;
    padding: 50px 35px 10px 35px !important;
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

.form-outer form .page .btns button
{
    margin-top: -20px !important;
}

form .page .btns button .prev
{
    margin-right: 3px !important;
    font-size: 17px !important;
}

form .page .btns button .next
{
    margin-right: 3px !important;
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
</style>

