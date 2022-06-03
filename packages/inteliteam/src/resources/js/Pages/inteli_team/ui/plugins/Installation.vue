<template>
 <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
   <li class="nav-item" role="presentation">
     <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
   </li>
 </ul>-->
 <div class="row justify-content-center">
     <div class="col">
         <installation_progress_bar></installation_progress_bar>
     </div>
 </div>
 <div class="row justify-content-center">
     <div class="col">
      <div class="tab-content" id="pills-tabContent">
        <div class="glass-content tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vitae praesentium aut nulla, eaque qui dolorem unde asperiores tempore quibusdam nostrum, illum quos inventore cupiditate? Repudiandae molestiae maxime et inventore?</div>
        <div class="glass-content tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vitae praesentium aut nulla, eaque qui dolorem unde asperiores tempore quibusdam nostrum, illum quos inventore cupiditate? Repudiandae molestiae maxime et inventore?</div>
        <div class="glass-content tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vitae praesentium aut nulla, eaque qui dolorem unde asperiores tempore quibusdam nostrum, illum quos inventore cupiditate? Repudiandae molestiae maxime et inventore?</div>
        <div class="glass-content tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vitae praesentium aut nulla, eaque qui dolorem unde asperiores tempore quibusdam nostrum, illum quos inventore cupiditate? Repudiandae molestiae maxime et inventore?</div>
        <div class="glass-content tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vitae praesentium aut nulla, eaque qui dolorem unde asperiores tempore quibusdam nostrum, illum quos inventore cupiditate? Repudiandae molestiae maxime et inventore?</div>
        <div class="glass-content tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vitae praesentium aut nulla, eaque qui dolorem unde asperiores tempore quibusdam nostrum, illum quos inventore cupiditate? Repudiandae molestiae maxime et inventore?</div>
      </div>
     </div>
 </div>
</template>

<script>
import installation_progress_bar from "../components/progress/installation-progress-bar";
export default
{
    props: {
    },
    watch: {
    },
    data () {
      return {
      }
    },
    methods: {
    },
    components:
    {
        installation_progress_bar
    },
    mounted()
    {

    },
    created ()
    {

    },
}
</script>


<style scoped>
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

</style>
