<template>
  <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
   <li class="nav-item" role="presentation">
     <button class="nav-link active" id="pills-preparing-tab" data-bs-toggle="pill" data-bs-target="#pills-preparing" type="button" role="tab" aria-controls="pills-preparing" aria-selected="true">Preparing</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-app-tab" data-bs-toggle="pill" data-bs-target="#pills-app" type="button" role="tab" aria-controls="pills-app" aria-selected="false">App</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-packages-tab" data-bs-toggle="pill" data-bs-target="#pills-packages" type="button" role="tab" aria-controls="pills-packages" aria-selected="false">Packages</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-config-tab" data-bs-toggle="pill" data-bs-target="#pills-storage" type="button" role="tab" aria-controls="pills-storage" aria-selected="false">Storage</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-config-tab" data-bs-toggle="pill" data-bs-target="#pills-config" type="button" role="tab" aria-controls="pills-config" aria-selected="false">Config</button>
   </li>
   <li class="nav-item" role="presentation">
     <button class="nav-link" id="pills-launch-tab" data-bs-toggle="pill" data-bs-target="#pills-launch" type="button" role="tab" aria-controls="pills-launch" aria-selected="false">Launch</button>
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
        <div class="glass-content install-progress-height tab-pane fade show active" id="pills-preparing" role="tabpanel" aria-labelledby="pills-preparing-tab">
          <div class="row justify-content-center">
            <div class="col-1">

            </div>
            <div class="col-10 text-center">
              <loading_text_animation></loading_text_animation>
            </div>
            <div class="col-1">

            </div>
          </div>
        </div>
        <div class="glass-content install-progress-height tab-pane fade" id="pills-app" role="tabpanel" aria-labelledby="pills-app-tab">
           <div class="row justify-content-center">
             <div class="col-1"></div>
             <div class="col-10">
                 <loading_dots_animation></loading_dots_animation>
             </div>
             <div class="col-1"></div>
           </div>
        </div>
        <div class="glass-content install-progress-height tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
         <div class="row justify-content-center">
           <div class="col-1"></div>
           <div class="col-10">
              <packages_install></packages_install>
           </div>
           <div class="col-1"></div>
         </div>
        </div>
        <div class="glass-content install-progress-height tab-pane fade" id="pills-storage" role="tabpanel" aria-labelledby="pills-storage-tab">
         <div class="row justify-content-center">
           <div class="col-1"></div>
           <div class="col-10">
              <loading_dotted_colors></loading_dotted_colors>
           </div>
           <div class="col-1"></div>
         </div>
        </div>
        <div class="glass-content install-progress-height tab-pane fade" id="pills-config" role="tabpanel" aria-labelledby="pills-config-tab">
          <div class="row justify-content-center">
            <div class="col-1">

            </div>
            <div class="col-10 text-center">
               <cog_settings></cog_settings>
            </div>
            <div class="col-1">

            </div>
          </div>
        </div>
        <div class="glass-content install-progress-height tab-pane fade" id="pills-launch" role="tabpanel" aria-labelledby="pills-launch-tab">
          <div class="row justify-content-center">
            <div class="col-1">

            </div>
            <div class="col-10 text-center">
             <glowing_loader_ring_animation></glowing_loader_ring_animation>
            </div>
            <div class="col-1">

            </div>
          </div>
        </div>
      </div>
     </div>
 </div>
</template>

<script>
import installation_progress_bar from "../components/progress/installation-progress-bar";
import loading_text_animation from "../components/animation/loading-text-animation.vue";
import glowing_loader_ring_animation from "../components/animation/Glowing-Loader-Ring-animation.vue";
import cog_settings from "../components/animation/cog-settings.vue";
import files_install from "../components/animation/files-install-progress.vue";
import packages_install from "../components/animation/new/packages-install-progress.vue";
import loading_dots_animation from "../components/animation/loading-dots-animation.vue";
import loading_dotted_colors from '../components/animation/loading-dotted-colors-animation.vue'
export default
{
    props: {
    },
    watch: {
    },
    components:
    {
        installation_progress_bar,
        loading_text_animation,
        glowing_loader_ring_animation,
        cog_settings,
        files_install,
        packages_install,
        loading_dots_animation,
        loading_dotted_colors
    },
    data () {
      return {
      }
    },
    methods: {



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

.install-progress-height
{
  height: 40vh !important;
}

@media (max-width: 902px)
{
.install-progress-height
{
    height: 50vh !important;

}
}


</style>
