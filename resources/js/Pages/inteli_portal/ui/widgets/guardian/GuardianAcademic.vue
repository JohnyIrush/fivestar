<template>
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
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        components: {
          
        },
        data() {
            return {
                details: []
            }
        },

        methods: {
            getProfile()
            {

                axios.get("portal/guardian/details")
                .then((response)=>{
                    this.details = response.data
                    console.log(this.details)
                })
            }
        },
        mounted(){
            //this.getProfile()
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
