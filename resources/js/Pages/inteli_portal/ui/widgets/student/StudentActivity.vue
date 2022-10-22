<template>
  <div class="main-content position-relative" v-for="detail in details.details" :key="detail.id">
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
                {{detail.role }}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <div class="nav-link mb-0 px-0 py-1 row" >
                     <div class="col">
                        AdmNo
                     </div>
                     <div class="col">
                        <span class="ms-1">{{detail.Admno }}</span>
                     </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="nav-link mb-0 px-0 py-1 row" >
                     <div class="col">
                        Level
                     </div>
                     <div class="col">
                        <span class="ms-1">{{detail.level.level }}</span>
                     </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="nav-link mb-0 px-0 py-1 row" >
                     <div class="col">
                        Stream
                     </div>
                     <div class="col">
                        <span class="ms-1">{{detail.stream.stream }}</span>
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
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card mb-4">
                 <div class="card-header pb-0 p-3">
                   <p class="text-sm">Clubs</p>
                 </div>
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-xl-3 col-md-6 mb-xl-0 mb-4" v-for="club in detail.clubs" :key="club.id">
                       <div class="card card-blog card-plain">
                         <div class="position-relative">
                           <a class="d-block shadow-xl border-radius-xl">
                             <img :src="club.icon_path" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                           </a>
                         </div>
                         <div class="card-body px-1 pb-0">
                           <a href="javascript:;">
                             <h5>
                               {{club.club}}
                             </h5>
                           </a>
                         </div>
                       </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                       <div class="card h-100 card-plain border">
                         <div class="card-body d-flex flex-column justify-content-center text-center">
                           <a href="javascript:;">
                             <i class="fa fa-plus text-secondary mb-3"></i>
                             <h5 class=" text-secondary"> New project </h5>
                           </a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="card-header pb-0 p-3">
                   <p class="text-sm">SPORTS</p>
                 </div>
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-xl-3 col-md-6 mb-xl-0 mb-4" v-for="sport in detail.sports" :key="sport.id">
                       <div class="card card-blog card-plain">
                         <div class="position-relative">
                           <a class="d-block shadow-xl border-radius-xl">
                             <img :src="sport.icon_path" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                           </a>
                         </div>
                         <div class="card-body px-1 pb-0">
                           <a href="javascript:;">
                             <h5>
                               {{sport.sport}}
                             </h5>
                           </a>
                         </div>
                       </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                       <div class="card h-100 card-plain border">
                         <div class="card-body d-flex flex-column justify-content-center text-center">
                           <a href="javascript:;">
                             <i class="fa fa-plus text-secondary mb-3"></i>
                             <h5 class=" text-secondary"> New project </h5>
                           </a>
                         </div>
                       </div>
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
</template>

<script>
    import { defineComponent } from 'vue'

    import credentials from "../../../../Profile/Show.vue";

    export default defineComponent({
        components: {
            credentials,
        },
        data() {
            return {
                details: []
            }
        },

        methods: {
            getProfile()
            {

                axios.get("/portal/student/details")
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
