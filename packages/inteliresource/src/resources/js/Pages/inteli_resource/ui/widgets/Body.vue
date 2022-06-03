<template>
  <div class="container-fluid">
        <!--START Uploader & DropeZone-->
      <div class="row mt-4">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
            <div class="card-body p-3">
              <!--<uploader></uploader>-->
               <uploader_advanced></uploader_advanced>
               <!--<fileuploadcomponent></fileuploadcomponent>-->
               <!--<multi_upload></multi_upload>-->
            <!--<upload_progress></upload_progress>-->
            </div>
          </div>
        </div>
      </div>
      <!--END Uploader & DropeZone-->

      <!--Start files Storage Capacity-->
      <div class="row">
        <div class="col-xl-3 col-sm-6  mt-2" v-for="folder in folders" :key="folder">
          <div class="card sec-bg-color storage-height">
              <div class="card-header sec-bg-color">{{folder.name}}</div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                   <storage :mbCapacity="folder.mbCapacity" :name="folder.name"></storage>
                </div>
              </div>
            </div>
            <div class="card-footer">
             <ul class="nav justify-content-center">
               <li class="nav-item">
                 <p class="nav-link" >Total Files: </p>
               </li>
               <li class="nav-item">
                 <p class="nav-link">{{folder.totalFiles}}</p>
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

    import Footer from '../widgets/Footer.vue'
    import uploader from '../plugins/uploader.vue'
    import uploader_advanced from '../plugins/Advanced/upload.vue'
    import storage from "../components/progress/circular/storage.vue";
    import fileuploadcomponent from "../plugins/FileUploadComponent.vue";
    import multi_upload from "../plugins/Advanced/multi-upload.vue";
    import upload_progress from "../plugins/Advanced/UploadFiles.vue";

    export default defineComponent({
        components: {
            Footer,
            uploader,
            uploader_advanced,
            storage,
            fileuploadcomponent,
            multi_upload,
            upload_progress
        },
        data() {
            return {
                folders: {}
            }
        },
        methods: {
          getDirectories()
          {
              axios.get('api/folder/directories')
              .then((response)=>{
                  this.folders = response.data
              })
          },
        },
        mounted()
        {
            this.getDirectories()
        },
    })
</script>

<style scoped>
.sec-bg-color
{
    background-color: rgb(149, 149, 245) !important;
}


.storage-height
{
    height: 350px !important;
}

</style>
