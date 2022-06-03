<template>
  <div class="container-fluid py-4">
	<div class="row">
		<div class="col-lg-10 col-xl-11 sec-bg-color">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="pills-folders-tab" data-bs-toggle="pill" data-bs-target="#pills-folders" type="button" role="tab" aria-controls="pills-folders" aria-selected="true"><i class="fa fa-folder-o" aria-hidden="true"></i>Folders</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-images-tab" data-bs-toggle="pill" data-bs-target="#pills-images" type="button" role="tab" aria-controls="pills-images" aria-selected="true"><i class="fa fa-picture-o" aria-hidden="true"></i>Images</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-docs-tab" data-bs-toggle="pill" data-bs-target="#pills-docs" type="button" role="tab" aria-controls="pills-docs" aria-selected="false"><span class="mr-2"></span> Docs</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-audio-tab" data-bs-toggle="pill" data-bs-target="#pills-audio" type="button" role="tab" aria-controls="pills-audio" aria-selected="false"><span class="mr-2"><i class="fa fa-file-audio-o" aria-hidden="true"></i></span> Audios</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false"><span class="mr-2"><i class="fa fa-file-video-o" aria-hidden="true"></i></span> Videos</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-zipped-tab" data-bs-toggle="pill" data-bs-target="#pills-zipped" type="button" role="tab" aria-controls="pills-zipped" aria-selected="false"><i class="fa fa-file-archive-o" aria-hidden="true"></i> Zipped</button>
               </li>
             </ul>
             <files_options></files_options>
             <div class="tab-content sec-bg-color" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-folders" role="tabpanel" aria-labelledby="pills-folders-tab">
                   <folders :folders="folders"></folders>
               </div>
               <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
                   <images :images="images"></images>
               </div>
               <div class="tab-pane fade" id="pills-docs" role="tabpanel" aria-labelledby="pills-docs-tab">
                   <docs :docs="docs"></docs>
               </div>
               <div class="tab-pane fade" id="pills-audio" role="tabpanel" aria-labelledby="pills-audio-tab">
                   <audios :audios="audios"></audios>
               </div>
               <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab">
                   <videos :videos="videos"></videos>
               </div>
               <div class="tab-pane fade" id="pills-zipped" role="tabpanel" aria-labelledby="pills-zipped-tab">
                   <zipped :compressed="compressed"></zipped>
                </div>
             </div>
		</div>
	</div>
    <Footer></Footer>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import files_options from "../menus/files-options.vue";
    import docs from "../views/docs.vue";
    import videos from "../views/videos.vue";
    import images from "../views/images.vue";
    import audios from "../views/audios.vue";
    import zipped from "../views/zipped.vue";
    import folders from "../views/folders.vue";


    export default defineComponent({
        components: {
            files_options,
            docs,
            videos,
            images,
            audios,
            zipped,
            folders
        },
        data() {
            return {
                audios: [],
                docs: [],
                videos: [],
                compressed: [],
                images: [],
                folders: []
            }
        },
        methods:
        {
            getFiles()
            {
                axios.get('api/file/show')
                .then((response)=>{
                    console.log(response);
                   this.audios = response.data.audios
                   this.docs = response.data.documents
                   this.videos = response.data.videos
                   this.compressed = response.data.compressed
                   this.images = response.data.images
                })
            },
            getDirectories()
            {
                axios.get('api/folder/directories')
                .then((response)=>{
                    this.folders = response.data
                    console.log(response.data);
                })
            }
        },
        mounted() {
            this.getFiles();
            this.getDirectories()
        },
    })
</script>

<style scoped>
.sec-bg-color
{
    background-color: rgb(149, 149, 245) !important;
}
</style>
