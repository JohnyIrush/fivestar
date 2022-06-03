
<template>
<div class="container">
  <!-- Modal data-bs-backdrop="static"-->
  <div class="modal fade" id="permission-role-Modal"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="permission-role-Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">{{form.type}}</h3>
            </div>
        </div>
        <div class="modal-body">
         <div class="mb-3">
           <label for="inteli-code" class="form-label text-font-size">Name</label>
           <input type="text" class="form-control" v-model="form.name" id="inteli-code" placeholder="permission name">
           <label for="inteli-code" class="form-label text-font-size">Guard Name</label>
           <input type="text" class="form-control" v-model="form.guard_name" id="inteli-code" placeholder="guard name">
         </div>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button class="btn btn-primary btn-styles" type="button" @click="performAction">{{form.action}}</button>
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
                formData: {
                    name: '',
                    guard_name: ''
                }
            }
        },
        methods: {
            performAction()
            {
                axios.post(this.form.url, this.form)
                .then((response)=>{

                })
            }
        },
        mounted()
        {

        },
        updated() {

        },
    })
</script>

<style scoped>
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
}

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;*/
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

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


.modal-content
{
    background: transparent !important;
}


input
{
    width: 100%;
    background: white;
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #000;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.text-c-center
{
    text-align: center !important;
}

.text-font-size
{
    font-size: 18px !important;
}
</style>
