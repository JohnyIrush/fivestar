<template>
<div class="row">
 <div class="col-12 col-xl-4">
  <div class="card">
    <div class="row">
     <div class="col ms-auto">
      <div class="row">
       <div class="col d-flex flex-row">
        <div class="">
         <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="" >
         </div>
        </div>
        <div class="">
         <div class="img-box-size">
          <img src="/images/components/wolves-1400819_640.jpg">
         </div>
        </div>
       </div>
       <div class="col">
        <div class="d-flex align-items-start flex-column">
          <div class="mb-auto p-2 bd-highlight">Flex item</div>
          <div class="p-2 bd-highlight">Flex item</div>
        </div>
       </div>
       <div class="col">
        <div class="d-flex align-items-start flex-column">
          <div class="mb-auto p-2 bd-highlight">Flex item</div>
          <div class="p-2 bd-highlight">Flex item</div>
        </div>
       </div>
      </div>
     </div>
     <div class="col me-auto">
      <div class="row">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col">
           <div class="d-flex flex-row">
               <span class="mr-4"><i class="fas fa-share"></i> Share</span>
               <span class="mr-4"><i class="fas fa-folder"></i></span>
               <span class="mr-4"><i class="fas fa-trash-alt "></i></span>
               <button class="mr-4"><i class="fas fa-caret-down" data-bs-toggle="collapse" data-bs-target="#card-more" aria-expanded="false" aria-controls="card-more"></i></button>
           </div>
          </div>
      </div>
     </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="card-more">
        <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
      </div>
    </div>
  </div>
 </div>
</div>   
</template>

<script>

import { defineComponent } from 'vue'

export default defineComponent({
  name: "MiniTabularCard",
    components:{

    },
   data (){
    return {

   }
 },
 computed:{

 },
 methods:{
    dropdown()
    {
      var dropdown = new bootstrap.Dropdown(document.getElementById('dropdown'))
      dropdown.toggle()
    }
 }
});
</script>

<style scoped>
    .img-box-size
    {
        height: 100% !important;
        /*width: 100px !important;*/
    }

.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
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
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

</style>
