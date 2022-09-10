<template>
    <div class="row">
      <!--<div class="col-2"></div>-->
      <div class="col">
        <div class="card glass-content">
         <form :id="'attendance-form' + StudentId">
           <!-- start number input-->
           <div id="number-input" class="mb-3">
            <input id="" type="hidden" class="form-control" v-model="StudentId"  required/>
           </div>
           <!-- end number input-->

           <!-- start radio input-->
           <div  id="radio-input"  class="input-group">
             <div class="form-check form-check-inline" v-for="option in options" :key="option">
             <input class="form-check-input" type="radio"  :name="option" id="" :value="option.id" @change="submit">
             <label class="form-check-label" :for="option">{{option.status}}</label>
             </div>
           </div>
           <!-- end radio input-->
         </form>
        </div>
      </div>
      <!--<div class="col-2"></div>-->
    </div>
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'


export default {
  name:'attendanceform',
  props: {
    storePath: String,
    StudentId: Number
  },
  setup ()
  {
    /*
    const options = reactive([
    {
       id: 1,
       status: "Present"
    },
    {
       id: 0,
       status: "Absent"
    },
    ]);

    return{
      options
    }*/
  },
  data (){
    return {
     form: {
      student_id: 0,
      status: null
     },
     formEditData: [],
     formType: '',
     options:[
      {
         id: 1,
         status: "Present"
      },
      {
         id: 0,
         status: "Absent"
      },
    ]
   }
 },
 computed:{

 },
   methods:{
    submit(e)
    {
      this.form.student_id = this.StudentId
      this.form.status = e.target.value
      console.log(e.target.value)
      axios.post('academic/attendance/store', this.form)
      .then((response)=>{
        alert("success")
      })
      .catch((response)=>{
        alert("error")
      })
    },
   },
   mounted()
   {
    //alert("loaded")
   }
}
</script>

<style scoped>
.main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
}

.glass-container
{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
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

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}
</style>