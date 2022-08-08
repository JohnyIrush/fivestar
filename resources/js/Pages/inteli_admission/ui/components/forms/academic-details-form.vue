<template>
     <div class="container glass-content">
         <h2 class="text-white">Academic Details</h2>
         <div class="row mt-2">
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Level</label>
              <select class="form-select" v-model="details.level_id" @change="updateStudentStore()">
                <option v-for="level in levels" :key="level.id" :value="level.id">{{level.level}}</option>
              </select>
            </div>
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Stream</label>
              <select class="form-select" v-model="details.stream_id" @change="updateStudentStore()">
                <option v-for="stream in streams" :key="stream.id" :value="stream.id">{{stream.stream}}</option>
              </select>
            </div>
         </div>
         <div class="row mt-3">
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Leadership Role</label>
              <select class="form-select" v-model="details.leadership_id" @change="updateStudentStore()">
                <option v-for="leader in leaders" :key="leader.id" :value="leader.id">{{leader.leadership}}</option>
              </select>
            </div>
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
     </div>
</template>

<script>
import { defineComponent } from 'vue';

import {store} from "../../../../../store/store.js";

export default defineComponent({
    data() {
        return {
            details:
            {
              level_id: '',
              stream_id: '',
              subjects: [],
              leadership_id: ''
            },
            levels: [],
            streams: [],
            subjects: [],
            leaders: []
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
        getLeaders()
        {
            axios.get("/leadership")
            .then((response)=>{
                this.leaders = response.data
            })
            .catch(()=>{
            })
        },
        getLevels()
        {
            axios.get("/levels")
            .then((response)=>{
                this.levels = response.data
            })
            .catch(()=>{
            })
        },
        getStreams()
        {
            axios.get("/streams")
            .then((response)=>{
                this.streams = response.data
            })
            .catch(()=>{
            })
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
        updateStudentStore()
        {
          store.state.student.level_id = this.details.level_id
          store.state.student.stream_id = this.details.stream_id
          store.state.student.subjects = this.details.subjects
          store.state.student.leadership_id = this.details.leadership_id

          console.log(store.state.student)
        },
    },
    mounted() {
        this.getLevels()
        this.getStreams()
        this.getSubjects()
        this.getLeaders()
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
