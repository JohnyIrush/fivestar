
<template>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="permission-role-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inteli-code-verify" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">{{form.action}}</h3>
            </div>
        </div>
        <div class="modal-body">
         <div class="mb-3">
           <label for="inteli-code" class="form-label text-font-size">Name</label>
           <input type="text" class="form-control" id="inteli-code" placeholder="permission name">
           <label for="inteli-code" class="form-label text-font-size">Guard Name</label>
           <input type="text" class="form-control" id="inteli-code" placeholder="guard name">
         </div>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button class="btn btn-primary btn-styles" type="button">Create</button>
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
        components: {

        },
        props: ["form"],
        data() {
            return {

            }
        },
        methods: {

        },
        mounted()
        {

        },
    })
</script>

<style scoped>

</style>
