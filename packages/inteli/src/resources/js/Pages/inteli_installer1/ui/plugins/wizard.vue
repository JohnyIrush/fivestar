<template>
  <main class="main-content  mt-0">
   <div class="glass-container">
    <ul class="nav nav-tabs mt-5 glass-header" id="myTab" role="tablist">
      <!--<li class="nav-item" role="presentation">
        <button class="nav-link active" id="welcome-tab" data-bs-toggle="tab" data-bs-target="#welcome" type="button" role="tab" aria-controls="welcome" aria-selected="true">Welcome</button>
      </li> 
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="sch_name-tab" data-bs-toggle="tab" data-bs-target="#sch_name" type="button" role="tab" aria-controls="sch_name" aria-selected="false">School Name</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="admin_details-tab" data-bs-toggle="tab" data-bs-target="#admin_details" type="button" role="tab" aria-controls="admin_details" aria-selected="false">Admin Details</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Payment</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="installation-tab" data-bs-toggle="tab" data-bs-target="#installation" type="button" role="tab" aria-controls="installation" aria-selected="false">Installation</button>
      </li> -->
      <progress_bar></progress_bar>
    </ul>
    <section class="glass-content">
      <div class="page-header min-vh-85">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-1">
                <div class="card-header pb-0 text-left bg-transparent">

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                         <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="welcome" role="tabpanel" aria-labelledby="welcome-tab">

                           </div>
                           <div class="tab-pane fade" id="sch_name" role="tabpanel" aria-labelledby="sch_name-tab">
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label for="school_name" class="form-label">School Name</label>
                                        <input  type="text" class="form-control" id="school_name" v-model="school.sch_name" placeholder="Enter School">
                                    </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="admin_details" role="tabpanel" aria-labelledby="admin_details-tab">
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-3">
                                            <p>School Logo</p>
                                        </div>
                                        <div class="col-6">
                                            <img src="/images/logo.png" class="rounded mx-auto d-block sch-logo-size" alt="Logo">
                                        </div>
                                        <div class="col-3">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-sm btn-outline tertiary-bg-first-color">Upload</button>
                                        </div>
                                        <div class="col-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div>
                                            <label for="sch_name"  >School Name</label>
                                            <input type="text" class="mt-1 block w-full sch_name" v-model="school.sch_name" required autofocus autocomplete="name" >
                                        </div>
            
                                        <div class="mt-4">
                                            <label for="sch_email" >School Email</label>
                                            <input id="sch_email" type="email" class="mt-1 block w-full" v-model="school.sch_email" required >
                                        </div>
            
                                        <div class="mt-4">
                                            <label for="sch_address" >School Address</label>
                                            <input id="sch_address" type="text" class="mt-1 block w-full" v-model="school.sch_address" required >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mt-4">
                                            <label for="sch_phone" >School Phone</label>
                                            <input id="sch_phone" type="tel" class="mt-1 block w-full" v-model="school.sch_phone" required >
                                        </div>
            
                                        <div class="mt-4">
                                            <label for="sch_location" >School Location</label>
                                            <input id="sch_location" type="text" class="mt-1 block w-full" v-model="school.sch_location" required >
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                            <div class="row justify-content-center">
                                <div class="col-3">
        
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="name"  >Name</label>
                                        <input id="name" type="text" class="mt-1 block w-full" v-model="admin.name" required autofocus autocomplete="name" >
                                    </div>
        
                                    <div class="mt-4">
                                        <label for="email" >Email</label>
                                        <input id="email" type="email" class="mt-1 block w-full" v-model="admin.email" required >
                                    </div>
        
                                    <div class="mt-4">
                                        <label for="phone" >Phone</label>
                                        <input id="phone" type="tel" class="mt-1 block w-full" v-model="admin.phone" resquired >
                                    </div>
                                </div>
                                <div class="col-3">
        
                                </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="installation" role="tabpanel" aria-labelledby="installation-tab">

                           </div>
                         </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/theme/assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   </div>
  </main>
</template>

<style>
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 10px;
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
    top: -15px;
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



</style>

<script>

import installation from './Installation.vue'
import progress_bar from "../components/progress/progress-bar.vue";
export default {
    components:
        {
            installation,
            progress_bar
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
            stepsValidation()
            {
                if(this.school.sch_name == '')
                    this.steps.one = false
                else
                    this.steps.one = true

                if(this.school.sch_name == '' || this.school.sch_name == '' || this.school.sch_email == '' || this.school.sch_address == '' || this.school.sch_phone == '' || school.sch_location == '' || sch_logo)
                    this.steps.two = false
                else
                    this.steps.two = true


                if(this.admin.name == '' || this.admin.email == ''  || this.admin.phone == '')
                    this.steps.three = false
                else
                    this.steps.three = true

                if(this.school.inteli_code == '')
                    this.steps.four = false
                else
                    this.steps.four = true

                if(this.installation_status == false)
                    this.steps.five = false
                else
                    this.steps.five = true
            },
            nextSteps()
            {
                var next = document.getElementById(this.navs[this.step]);
                next.classList.remove('show')
                this.step += 1;

                var next = document.getElementById(this.navs[this.step]);

                next.className = 'show';

            },
            backSteps()
            {
                var back = document.getElementById(this.navs[this.step]);
                back.classList.remove('show');
                this.step -= 1;

                var back = document.getElementById(this.navs[this.step]);

                back.className = 'show';

            }
        },
    mounted()
    {
        //this.stepsValidation();
        //this.stepsNavigation();
    }
}
</script>
