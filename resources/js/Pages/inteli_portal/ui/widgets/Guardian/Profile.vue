<template>
  <div class="main-content position-relative" v-for="detail in details" :key="detail.id">
    <div class="container-fluid">
      <div class="page-header glass-content min-height-300 border-radius-xl mt-4" style="background-image: url('/theme/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body  mx-4 mt-n6 overflow-hidden">
        <!-- START USER NAVBAR -->
        <div class="row gx-4 glass-header">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img :src="detail.user.profile_photo_path" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{detail.firstname }} {{detail.lastname}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{detail.occupation }}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <div class="nav-link mb-0 px-0 py-1 row" >
                     <div class="col">
                        No of Students
                     </div>
                     <div class="col">
                        <span class="ms-1">{{detail.Admno }}</span>
                     </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- END USER NAVBAR -->
      </div>
    </div>
    <div class="d-flex align-items-start">
      <div class="nav glass-content flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-academics-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true"><i class="fa fa-user fa-2x" aria-hidden="true"></i></button>
        <button class="nav-link mt-6" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-academics" type="button" role="tab" aria-controls="v-pills-academics" aria-selected="false"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i></button>
        <button class="nav-link mt-6" id="v-pills-cocarricular-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cocarricular" type="button" role="tab" aria-controls="v-pills-cocarricular" aria-selected="false"><i class="fa fa-suitcase fa-2x" aria-hidden="true"></i></button>
        <button class="nav-link mt-6" id="v-pills-finance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finance" type="button" role="tab" aria-controls="v-pills-finance" aria-selected="false"><i class="fa fa-money fa-2x" aria-hidden="true"></i></button>
        <button class="nav-link mt-6" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cogs fa-2x" aria-hidden="true"></i></button>
      </div>
      <div class="tab-content glass-content" id="v-pills-tabContent">
        <!--START Profile Tab-->
        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <div class="row">
                     <div class="col-md-8 d-flex align-items-center">
                       <h6 class="mb-0">Profile Information</h6>
                     </div>
                     <div class="col-md-4 text-end">
                       <a href="javascript:;">
                         <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                       </a>
                     </div>
                   </div>
                 </div>
                 <div class="card-body p-3">
                   <p class="text-sm">
                    {{detail.bio}}
                   </p>
                   <hr class="horizontal gray-light my-4">
                   <div class="row">
                     <div class="col">
                      <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{detail.firstname }} {{detail.lastname}}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{detail.user.phone }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{detail.user.email }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Gender:</strong> &nbsp; {{detail.user.email }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; {{detail.address }}</li>
                        <li class="list-group-item border-0 ps-0 pb-0">
                          <strong class="text-dark text-sm">Social:</strong> &nbsp;
                          <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                            <i class="fab fa-facebook fa-lg"></i>
                          </a>
                          <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                            <i class="fab fa-twitter fa-lg"></i>
                          </a>
                          <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                            <i class="fab fa-instagram fa-lg"></i>
                          </a>
                        </li>
                      </ul>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-12 col-xl-3 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                          <i class="fa fa-comments text-secondary" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Important Noifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--START ACCADEMIC TAB-->
        <div class="tab-pane fade" id="v-pills-academics" role="tabpanel" aria-labelledby="v-pills-academics-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 glass-content col-xl-9">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <div class="row">
                     <div class="col-md-8 d-flex align-items-center">
                       <h6 class="mb-0">Student Academic Information</h6>
                     </div>
                     <div class="col-md-4 text-end">
                       <a href="javascript:;">
                         <i class="fa fa-graduation-cap text-secondary" aria-hidden="true"></i>
                       </a>
                     </div>
                   </div>
                 </div>
                 <div class="card-body p-3">
                   <p class="text-sm">
                    School Motto.
                   </p>
                   <hr class="horizontal gray-light my-4">
                   <div class="row">
                    <div class="col">
                     <h4>Subjects</h4>
                     <div class="row">
                      <div class="col-6" >

                      </div>
                     </div>
                    </div>
                     <div class="col">
                      <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Level:</strong> &nbsp; {{ }} </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Stream:</strong> &nbsp; {{ }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Class Teacher:</strong> &nbsp; {{}}</li>
                      </ul>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                         <i class="fa fa-table" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Exams</h6>
                         <p class="mb-0 text-xs">past results</p>
                       </div>
                     </li>
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                         <i class="fa fa-line-chart" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Transcripts</h6>
                         <p class="mb-0 text-xs">performance analysis</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END ACCADEMIC TAB-->
        <!--START CO-CARRICULAR TAB-->
        <div class="tab-pane fade" id="v-pills-cocarricular" role="tabpanel" aria-labelledby="v-pills-cocarricular-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">

             </div>
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Events</h6>
                         <p class="mb-0 text-xs">Upcoming events</p>
                       </div>
                     </li>
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                         <i class="fa fa-trophy" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Awards</h6>
                         <p class="mb-0 text-xs">Achievements</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END CO-CARRICULAR TAB-->
        <!--START FINANCE TAB-->
        <div class="tab-pane fade" id="v-pills-finance" role="tabpanel" aria-labelledby="v-pills-finance-tab">
         <div class="container-fluid py-4" >
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card mb-4">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-1">Student Financial Account Information</h6>
                 </div>
                <!--START FINANCE-->
                <div class="row mt-4">
                  <div class="col-xl-6 col-sm-6 col-6 mb-xl-0 mb-4">
                    <div class="card glass-content">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Account Balance</p>
                              <h5 class="font-weight-bolder mb-0">
                                KSHS {{}}
                              </h5>
                            </div>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-sm-6 col-6 mb-xl-0 mb-4">
                    <div class="card glass-content">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">FEE BALANCE</p>
                              <h5 class="font-weight-bolder mb-0">
                                2,300

                              </h5>
                            </div>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-11 col-md-6 mb-md-0 mb-4 mt-4 glass-content">
                    <div class="card">
                      <div class="card-header pb-0">
                        <div class="row">
                          <div class="col-lg-6 col-7">
                            <h6>Services</h6>
                            <p class="text-sm mb-0">
                              <i class="fa fa-check text-info" aria-hidden="true"></i>
                              <span class="font-weight-bold ms-1"> done</span> this month
                            </p>
                          </div>
                          <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                              <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v text-secondary"></i>
                              </a>
                              <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                          <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Service</th>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Amount</th>
                                <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-sm">Soft UI XD Version</h6>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                 <div class="d-flex flex-column justify-content-center">
                                   <span class="text-xs font-weight-bold"> $14,000 </span>
                                 </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                  <span class="text-xs font-weight-bold"> $14,000 </span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold"> $14,000 </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--END FINANCE-->
               </div>
             </div>
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">finance notifications</p>
                       </div>
                     </li>
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Withdrawals</h6>
                         <p class="mb-0 text-xs">withdrawals transactions</p>
                       </div>
                     </li>
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                         <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Deposits</h6>
                         <p class="mb-0 text-xs">deposit transactions</p>
                       </div>
                     </li>
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                         <i class="fa fa-money" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Payment</h6>
                         <p class="mb-0 text-xs">payment transactions</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END FINANCE TAB-->
        <!--START SETTINGS TAB-->
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Platform Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                       </div>
                     </li>
                   </ul>
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0 pb-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END SETTINGS TAB-->
      </div>
    </div>
     <Footer></Footer>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../../Theme/widgets/Footer.vue'
    import credentials from "../../../../Profile/Show.vue";
    export default defineComponent({
        components: {
            Footer,
            credentials
        },
        data() {
            return {
                details: []
            }
        },

        methods: {
            getProfile()
            {

                axios.get("/portal/guardian/details")
                .then((response)=>{
                    this.details = response.data
                    console.log(this.details)
                })
            }
        },
        mounted(){
            this.getProfile()
        },
    })
</script>


<style scoped>


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

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
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
