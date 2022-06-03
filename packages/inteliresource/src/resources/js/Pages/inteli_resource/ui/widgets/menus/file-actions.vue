<template>
<div class="btn-group">
    <i class="fa fa-ellipsis-v " aria-hidden="true" data-bs-toggle="dropdown" aria-expanded="false"></i>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" role="button" @click="open()">Open</a></li>
    <li><a class="dropdown-item" role="button" @click="showDirectories('move')">Move</a></li>
    <li><a class="dropdown-item" role="button" @click="showDirectories('copy')">Copy</a></li>
    <li><a class="dropdown-item" role="button" @click="deleteFile()">Delete</a></li>
    <li><a class="dropdown-item" role="button" @click="rename()">Rename</a></li>
    <li><a class="dropdown-item" role="button" @click="share()">Share</a></li>
    <li><a class="dropdown-item" role="button" @click="download()">Download</a></li>
    <li><a class="dropdown-item" role="button" @click="recycle()">Recycle</a></li>
    <li><hr class="dropdown-divider"></li>
    <!--<file_properties></file_properties>-->
  </ul>

  <locations></locations>
</div>
</template>

<script>
    import { defineComponent } from 'vue'

    import file_properties from "../dialogs/file-properties.vue";
    import locations from "../dialogs/locations.vue"

    export default defineComponent({
        props: ["id"],
        components: {
            file_properties,
            locations
        },
        data() {
            return {
                location: '',
                rename: ''
            }
        },
        methods: {
            showDirectories(action)
            {
                const locationsModalElement = document.querySelector("#locations");
                var locations = new bootstrap.Modal(locationsModalElement)
                var actionButton = document.getElementById('action-button');
                 actionButton.textContent = action;
                var fileId = document.getElementById('file-id');
                  alert(this.id);
                 fileId.value = this.id;
                locations.show();
            },

            recycle()
            {
              axios.post('/api/file/recycle/' + this.id)
              .then((response)={

              })
              .catch((error)=>{

              })
            },
            deleteFile()
            {
              axios.post('/api/file/delete/' + this.id)
              .then((response)={

              })
              .catch((error)=>{

              })
            },
            download()
            {
              axios.post('/api/file/download/' + this.id)
              .then((response)={

              })
              .catch((error)=>{

              })
            },
            rename()
            {
              const details = {
                  'id': this.id,
                  'name': rename
                  }

              axios.post('/api/file/rename', details)
              .then((response)={

              })
              .catch((error)=>{

              })
            },
            open()
            {
              axios.post('/api/file/open/' + this.id)
              .then((response)={

              })
              .catch((error)=>{

              })
            },
            share()
            {
              axios.post('/api/file/share/' + this.id)
              .then((response)={

              })
              .catch((error)=>{

              })
            }
        },
        mounted() {

        },
    })
</script>

<style scoped>

</style>
