 <template>
 <div class="col-lg-5 col-xl-4">
  <div class="collapse multi-collapse" id="file-manager-menu">
        <ul class="text-end navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#"> <span class="mr-2"><i class="fa fa-picture-o" aria-hidden="true"></i></span> Images</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link" href="#"> <span class="mr-2"><i class="fa fa-file-video-o" aria-hidden="true"></i></span> Videos</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link" href="#"> <span class="mr-2"><i class="fa fa-file" aria-hidden="true"></i></span> Docs</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link disabled"> <span class="mr-2"><i class="fa fa-file-audio-o" aria-hidden="true"></i></span> Audio</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link disabled"> <span class="mr-2"><i class="fa fa-cloud-download" aria-hidden="true"></i></span> Downloads</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link disabled"> <span class="mr-2"><i class="fa fa-cog" aria-hidden="true"></i></span> Settings</a>
          </li>
        </ul>
  </div>
 </div>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        components: {


        },

        mounted() {

        },
    })
</script>

<style scoped>

</style>
