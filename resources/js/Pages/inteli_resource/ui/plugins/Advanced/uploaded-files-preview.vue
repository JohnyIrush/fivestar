<template>
<div class="modal fade " data-bs-backdrop="static" id="uploaded-files-preview" tabindex="-1" aria-labelledby="uploaded-files-previewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
    <div class="modal-content light-sec-bg-color">
      <div class="modal-header">
        <h3 class="modal-title" id="uploaded-files-previewLabel">Uploaded Files Preview</h3>
      </div>
      <div class="modal-body">
        <ul class="list">
          <li  v-for="file in files" :key="file" class="card top:card small:left:card bottom:margin-2 m-3">
            <div class="card sec-bg-color">
              <figure v-if="getFileType(file.type) == 'image'" class="card-figure">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button @click="uploadFiles" type="button" class="btn btn-primary" >Upload</button>
      </div>
    </div>
  </div>
</div>
</template>

<script>

import {
    getFileSize,
    getFileName,
    getFileType,
    getFileDate,
    getFileImage,
    loadFileImage
} from "./utill.js";

export default {
    props: ['files'],
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
    computed:
    {
        files()
        {
            return this.files.reverse();
        }
    },
    data()
    {
        return
        {

        }
    },
    methods: {
        uploadFiles()
        {
            console.log("Upload Clicked");
          this.$emit("upload");
        }
    },
    mounted() {
        console.log(this.files)
    },
}
</script>

<style scoped>

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

</style>
