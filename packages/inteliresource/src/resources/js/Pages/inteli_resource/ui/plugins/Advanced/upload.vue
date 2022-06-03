<template>
    <div class="row">
        <div class="col">
          <div class="dropZone ">
              <input type="file" id="dropZoneFile" class="dropZoneFile" ref="dropZoneFile" @change="selectFile"  multiple accept="">
              <div class="dropZoneWrap" @dragenter.prevent @dropover.prevent @drop.prevent="upload">
                <label for="dropZoneFile" class="dropZoneLabel">
                  <svg width="10em" height="10em" viewBox="0 0 16 12" class="dropZoneImage" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      d="m 8.0274054,0.49415269 a 5.53,5.53 0 0 0 -3.594,1.34200001 c -0.766,0.66 -1.321,1.52 -1.464,2.383 -1.676,0.37 -2.94199993,1.83 -2.94199993,3.593 0,2.048 1.70799993,3.6820003 3.78099993,3.6820003 h 8.9059996 c 1.815,0 3.313,-1.43 3.313,-3.2270003 0,-1.636 -1.242,-2.969 -2.834,-3.194 -0.243,-2.58 -2.476,-4.57900001 -5.1659996,-4.57900001 z m 2.3539996,5.14600001 -1.9999996,-2 a 0.5,0.5 0 0 0 -0.708,0 l -2,2 a 0.5006316,0.5006316 0 1 0 0.708,0.708 l 1.146,-1.147 v 3.793 a 0.5,0.5 0 0 0 1,0 v -3.793 l 1.146,1.147 a 0.5006316,0.5006316 0 0 0 0.7079996,-0.708 z"
                      />
                  </svg>
                  <div class="dropZoneBody">
                    <p>
                      <strong class="dropZoneTitle">Drag and drop files to upload</strong>
                    </p>
                    <p>
                      <small class="dropZoneText">Your files will be added automatically</small>
                    </p>
                    <button type="button" class="button">or select files</button>
                  </div>
                </label>
              </div>
          </div>
        </div>
    </div>
    <!--<uploaded_files_preview :files="files" @upload="submit"></uploaded_files_preview>-->
    <div class="modal fade " data-bs-backdrop="static" id="uploaded-files-preview" tabindex="-1" aria-labelledby="uploaded-files-previewLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
        <div class="modal-content light-sec-bg-color">
          <div class="modal-header row  align-items-center">
              <div class="col-1"></div>
              <ul class="col nav nav-pills mb-3 justify-content-center sec-bg-color" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link btn btn-info m-2 text-white active" id="pills-images-tab" data-bs-toggle="pill" data-bs-target="#pills-images" type="button" role="tab" aria-controls="pills-images" aria-selected="true"> <i class="fa fa-picture-o icon-size m-1" aria-hidden="true"></i>Images</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link btn btn-info m-2 text-white" id="pills-docs-tab" data-bs-toggle="pill" data-bs-target="#pills-docs" type="button" role="tab" aria-controls="pills-docs" aria-selected="false"> <i class="fa fa-file icon-size m-1" aria-hidden="true"></i> Documents</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link btn btn-info m-2 text-white" id="pills-audio-tab" data-bs-toggle="pill" data-bs-target="#pills-audio" type="button" role="tab" aria-controls="pills-audio" aria-selected="false"> <i class="fa fa-file-audio-o icon-size m-1" aria-hidden="true"></i> Audios</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link btn btn-info m-2 text-white" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false"> <i class="fa fa-file-video-o icon-size m-1" aria-hidden="true"></i> Videos</button>
                </li>
              </ul>
              <div class="col-1"></div>
          </div>
          <div class="modal-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
                 <div class="row">
                     <div class="col-8">
                      <ul class="list">
                        <li  v-for="file in files" :key="file" class="card top:card small:left:card  mt-2">
                          <div class="card sec-bg-color" v-if="getFileType(file.type) == 'image'">
                            <figure  class="card-figure">
                              <img :src="getFileImage(file)" @load="loadFileImage(file)" :alt="file.name" srcset="" class="card-image image-file-preview-size">
                              <figcaption class="card-caption">
                                 {{getFileSize(file.size)}}
                              </figcaption>
                            </figure>
                            <div class="card-body">
                              <h4 class="card-title">{{ getFileName(file.name)}}</h4>
                              <div class="flex justify-content-between secondary:text">
                               <div>Last Modified: {{getFileDate(file.lastModified)}}</div>
                               <div>File Type: {{getFileType(file.type, 'format')}}</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                     </div>
                     <div class="col-4 ">
                      <!--Progress Bar Start-->
                       <div v-if="progressInfos" class="">
                         <div class="progress-bar-interval m-2 "
                           v-for="(progressInfo, index) in progressInfos"
                           :key="index"
                         >
                           <div v-if="progressInfo.percentage == 100"  class="text-success">
                               <span>{{progressInfo.fileName}}</span> Uploaded Successfully
                           </div>
                           <div  class="progress">
                             <div class="progress-bar progress-bar-info"
                               role="progressbar"
                               :aria-valuenow="progressInfo.percentage"
                               aria-valuemin="0"
                               aria-valuemax="100"
                               :style="{ width: progressInfo.percentage + '%' }"
                             >
                               {{progressInfo.percentage}}%
                             </div>
                           </div>
                         </div>
                       </div>
                      <!--Progress Bar Start-->
                     </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="pills-docs" role="tabpanel" aria-labelledby="pills-docs-tab">
                 <div class="row">
                     <div class="col-8">
                      <ul class="list">
                        <li  v-for="file in files" :key="file" class="card top:card small:left:card  mt-2">
                          <div class="card sec-bg-color" v-if="getFileType(file.type) == 'plain'">
                            <figure v-if="getFileType(file.type) == 'plain'" class="card-figure">
                              <img :src="getFileImage(file)" @load="loadFileImage(file)" :alt="file.name" srcset="" class="card-image image-file-preview-size">
                              <figcaption class="card-caption">
                                 {{getFileSize(file.size)}}
                              </figcaption>
                            </figure>
                            <div class="card-body">
                              <h4 class="card-title">{{ getFileName(file.name)}}</h4>
                              <div class="flex justify-content-between secondary:text">
                               <div>Last Modified: {{getFileDate(file.lastModified)}}</div>
                               <div>File Type: {{getFileType(file.type, 'format')}}</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                     </div>
                     <div class="col-4 ">
                      <!--Progress Bar Start-->
                       <div v-if="progressInfos" class="">
                         <div class="progress-bar-interval m-2 "
                           v-for="(progressInfo, index) in progressInfos"
                           :key="index"
                         >
                           <div v-if="progressInfo.percentage == 100"  class="text-success">
                               <span>{{progressInfo.fileName}}</span> Uploaded Successfully
                           </div>
                           <div  class="progress">
                             <div class="progress-bar progress-bar-info"
                               role="progressbar"
                               :aria-valuenow="progressInfo.percentage"
                               aria-valuemin="0"
                               aria-valuemax="100"
                               :style="{ width: progressInfo.percentage + '%' }"
                             >
                               {{progressInfo.percentage}}%
                             </div>
                           </div>
                         </div>
                       </div>
                      <!--Progress Bar Start-->
                     </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="pills-audios" role="tabpanel" aria-labelledby="pills-audios-tab">
                 <div class="row">
                     <div class="col-8">
                      <ul class="list">
                        <li  v-for="file in files" :key="file" class="card top:card small:left:card  mt-2">
                          <div class="card sec-bg-color" v-if="getFileType(file.type) == 'mpeg'">
                            <figure v-if="getFileType(file.type) == 'mpeg'" class="card-figure">
                             <audio controls>
                                <source :src="getFileImage(file)" @load="loadFileImage(file)" :alt="file.name" type="audio/mpeg">
                             </audio>
                              <figcaption class="card-caption">
                                 {{getFileSize(file.size)}}
                              </figcaption>
                            </figure>
                            <div class="card-body">
                              <h4 class="card-title">{{ getFileName(file.name)}}</h4>
                              <div class="flex justify-content-between secondary:text">
                               <div>Last Modified: {{getFileDate(file.lastModified)}}</div>
                               <div>File Type: {{getFileType(file.type, 'format')}}</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                     </div>
                     <div class="col-4 ">
                      <!--Progress Bar Start-->
                       <div v-if="progressInfos" class="">
                         <div class="progress-bar-interval m-2 "
                           v-for="(progressInfo, index) in progressInfos"
                           :key="index"
                         >
                           <div v-if="progressInfo.percentage == 100"  class="text-success">
                               <span>{{progressInfo.fileName}}</span> Uploaded Successfully
                           </div>
                           <div  class="progress">
                             <div class="progress-bar progress-bar-info"
                               role="progressbar"
                               :aria-valuenow="progressInfo.percentage"
                               aria-valuemin="0"
                               aria-valuemax="100"
                               :style="{ width: progressInfo.percentage + '%' }"
                             >
                               {{progressInfo.percentage}}%
                             </div>
                           </div>
                         </div>
                       </div>
                      <!--Progress Bar Start-->
                     </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab">
                 <div class="row">
                     <div class="col-8">
                      <ul class="list">
                        <li  v-for="file in files" :key="file" class="card top:card small:left:card  mt-2">
                          <div class="card sec-bg-color" v-if="getFileType(file.type) == 'mp4'">
                            <figure v-if="getFileType(file.type) == 'mp4'" class="card-figure">
                              <!--<img :src="getFileImage(file)" @load="loadFileImage(file)" :alt="file.name" srcset="" class="card-image image-file-preview-size">-->
                               <video width="100" height="100" controls>
                                 <source :src="getFileImage(file)" @load="loadFileImage(file)" :alt="file.name" srcset="" class="card-image image-file-preview-size" type="video/mp4">
                               </video>
                              <figcaption class="card-caption">
                                 {{getFileSize(file.size)}}
                              </figcaption>
                            </figure>
                            <div class="card-body">
                              <h4 class="card-title">{{ getFileName(file.name)}}</h4>
                              <div class="flex justify-content-between secondary:text">
                               <div>Last Modified: {{getFileDate(file.lastModified)}}</div>
                               <div>File Type: {{getFileType(file.type, 'format')}}</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                     </div>
                     <div class="col-4 ">
                      <!--Progress Bar Start-->
                       <div v-if="progressInfos" class="">
                         <div class="progress-bar-interval m-2 "
                           v-for="(progressInfo, index) in progressInfos"
                           :key="index"
                         >
                           <div v-if="progressInfo.percentage == 100"  class="text-success">
                               <span>{{progressInfo.fileName}}</span> Uploaded Successfully
                           </div>
                           <div  class="progress">
                             <div class="progress-bar progress-bar-info"
                               role="progressbar"
                               :aria-valuenow="progressInfo.percentage"
                               aria-valuemin="0"
                               aria-valuemax="100"
                               :style="{ width: progressInfo.percentage + '%' }"
                             >
                               {{progressInfo.percentage}}%
                             </div>
                           </div>
                         </div>
                       </div>
                      <!--Progress Bar Start-->
                     </div>
                 </div>
                </div>
              </div>
          </div>
          <div class="modal-footer row align-items-center">
              <div class="col justify-content-center"><button  :disabled="!selectedFiles" @click="uploadFiles" type="button" class="btn btn-success" > <i class="fas fa-cloud-upload-alt icon-size"></i> Upload</button></div>
              <div class="col justify-content-center"><button  @click="launchSelectFilesDialog" type="button" class="btn btn-primary" > <i class="fa fa-file icon-size"></i> Upload More</button></div>
              <div class="col justify-content-center"><button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fa fa-close icon-size"></i> Close</button></div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>

//import uploaded_files_preview from './uploaded-files-preview.vue'
import MyFormData from "./MyFormData";

import UploadService from "./UploadFilesService";

import {
    getFileSize,
    getFileName,
    getFileType,
    getFileDate,
    getFileImage,
    loadFileImage
} from "./utill.js";



export default {
    setup() {
        return {
    getFileSize,
    getFileName,
    getFileType,
    getFileDate,
    getFileImage,
    loadFileImage
}
    },
name: 'App',
components:{
  // uploaded_files_preview
},
data()
{
    return {
    form: new MyFormData({contract_id: 5, files: []}),
     files: [],
     fileProgress: {},
      selectedFiles: undefined,
      progressInfos: [],
      message: "",
      fileInfos: []
    }
},

 watch: {
     files:
     {
         handler(newVal)
         {
             newVal.forEach((item, index) => {

             });
         }
     }
},
   methods:
   {
     uploado(event) {

         // const inputValue = e.target.files || e.dataTransfer.files || this.$refs.dropZoneFile.files;

         for (let file of event.target.files) {
             try {
                 let reader = new FileReader();
                 reader.readAsDataURL(file); // Not sure if this will work in this context.
                 this.form.files.push(file);
                 this.files.push(file)
             } catch {}
         }

           const uploadedFilesPreviewModal = document.querySelector("#uploaded-files-preview");

           var previewModal = new bootstrap.Modal(uploadedFilesPreviewModal)

           previewModal.show();

     },
     submito(){
         console.log("uploading reached");
         this.form.post('/api/upload')
             .catch(errors => {
                 throw errors;
             })
             .then((response)=>{
                 console.log(response)
             });
     },

    selectFile() {
      this.progressInfos = [];
      this.selectedFiles = event.target.files;

      for (let i = 0; i < this.selectedFiles.length; i++) {
        this.files.push(this.selectedFiles[i])
      }

     // Launch Files Preview
     const uploadedFilesPreviewModal = document.querySelector("#uploaded-files-preview");

     var previewModal = new bootstrap.Modal(uploadedFilesPreviewModal)

     previewModal.show();

    },
    uploadFiles() {
      this.message = "";
      for (let i = 0; i < this.selectedFiles.length; i++) {
        this.upload(i, this.selectedFiles[i]);
      }
    },
    upload(idx, file) {
      this.progressInfos[idx] = { percentage: 0, fileName: file.name };
      UploadService.upload(file, (event) => {
        this.progressInfos[idx].percentage = Math.round(100 * event.loaded / event.total);
      })
        .then((response) => {
          let prevMessage = this.message ? this.message + "\n" : "";
          this.message = prevMessage + response.data.message;
          return UploadService.getFiles();
        })
        .then((files) => {
          this.fileInfos = files.data;
        })
        .catch(() => {
          this.progressInfos[idx].percentage = 0;
          this.message = "Could not upload the file:" + file.name;
        });
    },

    launchSelectFilesDialog()
    {
        const selectFilesDialodWindow = document.getElementById("dropZoneFile");
        selectFilesDialodWindow.click();
    }
    }
}
</script>


<style scoped>


i{
    font-size: 36px !important;
}

.dropZone {
    overflow-wrap: break-word;
    padding: 0.5rem;
    max-width: calc(100vw - 0.5rem);
    max-height: calc(100vh - 0.5rem)
}
.dropZone .dropZoneFile {
    /*position: absolute;*/
    width: 0px;
    height: 0px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px)
}
.dropZone .dropZoneWrap {
    border: 3px dashed currentColor;
    box-shadow: -1px 5px 25px -9px rgba(0, 0, 0, 0.2)
}
.dropZone .dropZoneWrap .dropZoneLabel {
    display: grid;
    place-items: center;
    width: 100%;
    height: 100%;
    padding-top: 1.5rem;
    padding-bottom: 2.5rem;
    cursor: pointer
}
.dropZone .dropZoneWrap .dropZoneImage {
    pointer-events: none;
    color: currentColor
}
.dropZone .dropZoneWrap .dropZoneBody {
    text-align: center
}
.dropZone .dropZoneWrap .dropZoneBody p, .dropZone .dropZoneWrap .dropZoneBody span {
    margin: 0px
}
.dropZone .dropZoneWrap .dropZoneBody .dropZoneTitle {
    color: #333
}
.dropZone .dropZoneWrap .dropZoneBody .dropZoneText {
    color: #737373
}
.dropZone .dropZoneWrap .dropZoneBody .button {
    background-color: transparent;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    pointer-events: none;
    font-size: 1rem;
    line-height: 1.5rem;
    font-weight: 400;
    user-select: none;
    margin-top: 1.25rem;
    border-radius: 0.35rem;
    color: currentColor;
    border: 2px solid currentColor;
    padding: 0.375rem 0.75rem
}

.light-sec-bg-color
{
    background-color: rgb(185, 185, 209) !important;
}

.sec-bg-color
{
    background-color: rgb(149, 149, 245) !important;
}

.image-file-preview-size
{
    height: 100px !important;
    width: 100px !important;
}

/* Works on Firefox */
* {
  scrollbar-width: thin;
  scrollbar-color: rgb(185, 185, 209) !important;
}

/* Works on Chrome, Edge, and Safari */
*::-webkit-scrollbar {
  width: 12px;
}

*::-webkit-scrollbar-track {
  background: rgb(185, 185, 209) !important;
}

*::-webkit-scrollbar-thumb {
  background-color: blue;
  border-radius: 20px;
  border: 3px solid rgb(149, 149, 245) !important;
}


.progress-bar-interval
{
    margin-top: 210px !important;
}


.file-card-details-height
{
    height: 250px !important;
}

.progress-bar-file-position
{
    position: relative;
    left: -300px !important;
}

.progress-bar-info
{
    height: 10px !important;
}


.icon-size
{
    font-size: 15px !important;
}

</style>
