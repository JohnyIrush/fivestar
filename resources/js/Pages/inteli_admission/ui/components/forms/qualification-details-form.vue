<template>
     <div class="container glass-content">
         <h2 class="text-white">Qualifications Details</h2>
         <div class="row">
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">Title</label>
                     <input class="form-control input" type="text" required="required"  v-model="details.title" @change="updateStudentStore()">
                 </div>
             </div>
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">School Name</label>
                     <input class="form-control input" type="text" required="required"  v-model="details.school_name" @change="updateStudentStore()">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">Mean Grade</label>
                     <input class="form-control input" type="text" required="required"  v-model="details.meangrade" @change="updateStudentStore()">
                 </div>
             </div>
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">Mean Score</label>
                     <input class="form-control input" type="number" required="required"  v-model="details.meanscore" @change="updateStudentStore()">
                 </div>
             </div>
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">Points</label>
                     <input class="form-control input" type="number" required="required"  v-model="details.points" @change="updateStudentStore()">
                 </div>
             </div>
         </div>
         <div class="row mt-2">
             <div class="col">
                <h2 class="text-white">Subjects/Units</h2>
                <div class="row " >
                    <div class="col-4 text-white" v-for="subject in subjects" :key="subject.id">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="" @change="storeArrayInput(this.details.subjects, subject.id)">
                       <label class="form-check-label text-white" for="">
                         {{subject.subject}}
                       </label>
                     </div>
                    </div>
                </div>
             </div>
         </div>
         <div class="row mt-2">
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Level</label>
              <select class="form-select" v-model="details.school_level_id" @change="updateStudentStore()">
                <option v-for="level in levels" :key="level.id" :value="level.id">{{level.level}}</option>
              </select>
            </div>
            <div class="col">
             <label class="text-white" for="birthday">Start Year:</label>
             <div class="form-group inputBox">
               <input type="date" id="birthday" v-model="details.start_year" @change="updateStudentStore()">
               <span class="line"></span>
             </div>
            </div>
            <div class="col">
             <label class="text-white" for="birthday">End Year:</label>
             <div class="form-group inputBox">
               <input type="date" id="birthday" v-model="details.end_year" @change="updateStudentStore()">
               <span class="line"></span>
             </div>
            </div>
         </div>
     </div>
</template>

<script>
import { defineComponent } from 'vue';

import {store} from "../../../../../store/store.js";

//import {Array} from '../../../../../plugins/data/input/Array'

export default defineComponent({
    data() {
        return {
            details:
            {
                student_id: '',
                school_name: '',
                school_level_id: '',
                subjects: [],
                meangrade: '',
                meanscore:'',
                points: '',
                start_year: '',
                end_year: '',
                duration: ''
            },
            levels: [],
            subjects: []
        }
    },
    methods:
    {
        storeArrayInput(array, input)
        {
            var index = array.indexOf(input)

            if(index == -1)
            {
                array.push(input)
            }
            else
            {
               array.splice(index, 1);
            }

            console.log(this.details.subjects);
        },
        getSubjects()
        {
            axios.get("/subjects")
            .then((response)=>{
                this.subjects = response.data
            })
            .catch(()=>{
            })
        },
        getSchoolLevels()
        {
            axios.get("/school-levels")
            .then((response)=>{
                this.levels = response.data
            })
            .catch(()=>{
            })
        },
        updateStudentStore()
        {
          store.state.student.level_id = this.details.level_id
          store.state.student.stream_id = this.details.stream_id
          store.state.student.leadership_id = this.details.leadership_id
          store.state.student.subjects = this.details.subjects
          store.state.student.meangrade = this.details.meangrade
          store.state.student.meanscore = this.details.meanscore
          store.state.student.points = this.details.points
          store.state.student.start_year = this.details.start_year
          store.state.student.end_year = this.details.end_year
          store.state.student.duration = this.details.duration

          console.log(store.state.student)
        },
    },
    mounted() {
        this.getSchoolLevels()
        this.getSubjects()
        //Array.methods.storeArrayInput()
    },
})
</script>

<style scoped>


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

.container
{
    position: relative;
    z-index: 1000;
    width: 100%;
    max-width: 1000px;
    padding: 50px;
    /*background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);*/
    border-radius: 10px;
    overflow: hidden;
    backdrop-filter: blur(25px);
}


.input
{
    width: 100%;
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: purple !important;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    background: transparent !important;
}

</style>
