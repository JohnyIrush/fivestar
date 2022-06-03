<template>
<div class="modal fade" id="locations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
          <input v-model="fileId" type="hidden" id="file-id">
        <div class="form-check" v-for="directory in directories" :key="directory.id" :@click="select(directory)" :id="directory.name">
          <input class="form-check-input" type="radio" name="directoryRadio" id="directoryRadio" @change="select(directory)">
          <label class="form-check-label" for="directoryRadio">
            {{directory.name}}
          </label>
        </div>
      </div>
      <div class="modal-footer">
          <button id="action-button" @click="fireAction()" type="button" class="btn btn-danger"></button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        props: ["id"],
        components: {

        },
        data() {
            return {
                location: '',
                directories: {},
                fileId: ''
            }
        },
        methods: {
            select(directory)
            {
                //alert(event.target.location)
                this.location = directory;
            },
            getDirectories()
            {
                axios.get('api/folder/directories')
                .then((response)=>{
                    this.directories = response.data
                    console.log(response.data);
                })
            },
            fireAction()
            {
                var locations = new bootstrap.Modal(document.getElementById('locations'))
                var actionButton = document.getElementById('action-button');
                var action = actionButton.textContent;
                if (action == "move")
                {
                    //this.$emit('move', this.location)
                    this.move();
                }
                else if(action == "copy")
                {
                  //this.$emit('copy', this.location)
                  this.copy()
                }
                locations.hide();
            },
            move()
            {
                var fileId = document.getElementById('file-id');
                alert(fileId.value);
                const details = {
                    'id': fileId.value,
                    'location': this.location
                    }
              axios.post('/api/file/move', details)
              .then((response)=>{

              })
              .catch((error)=>{

              })
            },
            copy()
            {
                var fileId = document.getElementById('file-id');

                alert(fileId.value);
              const details = {
                  'id': fileId.value,
                  'location': this.location
                  }

              axios.post('/api/file/copy', details)
              .then((response)=>{

              })
              .catch((error)=>{

              })
            },
        },
        mounted() {
            this.getDirectories();
        },
    })
</script>

<style scoped>

</style>
