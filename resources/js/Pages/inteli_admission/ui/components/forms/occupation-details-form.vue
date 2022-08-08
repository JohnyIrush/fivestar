<template>
     <div class="container glass-content">
         <h2 class="text-white">Occcupation Details</h2>
         <div class="row mt-2">
            <div class="col">
             <div class="form-group inputBox">
              <label class="text-white " for="inlineFormCustomSelect" >Category</label>
              <select class="form-select" v-model="details.category_id" @change="updateStudentStore()" required>
                <option v-for="category in categories" :key="category.id" :value="category.id">{{category.category}}</option>
              </select>
             </div>
            </div>
            <div class="col">
             <div class="form-group inputBox">
              <label class="text-white " for="inlineFormCustomSelect" >Occupation</label>
              <select class="form-select" v-model="details.occupation_id" @change="updateStudentStore()" required>
                <option v-for="occupation in occupations" :key="occupation.id" :value="occupation.id">{{occupation.occupation}}</option>
              </select>
             </div>
            </div>
         </div>
         <div class="row mt-2">
             <div class="col">
                <h2 class="text-white">Levels</h2>
                <div class="row " v-for="level in levels" :key="level.id" @change="updateStudentStore()" required>
                    <div class="col text-white">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" :value="level.id" id=""  @change="storeArrayInput(this.details.levels, level.id)">
                       <label class="form-check-label text-white" for="">
                         {{level.level}}
                       </label>
                     </div>
                    </div>
                </div>
             </div>
            <div class="col">
             <div class="form-group inputBox">
              <label class="text-white " for="inlineFormCustomSelect" >Section</label>
              <select class="form-select" v-model="details.section_id" @change="updateStudentStore()" required>
                <option v-for="section in sections" :key="section.id" :value="section.id">{{section.level.level}} {{section.stream.stream}}</option>
              </select>
             </div>
            </div>
             <div class="col">
                <h2 class="text-white">Subjects/Units</h2>
                <div class="row " >
                    <div class="col-6 text-white" v-for="subject in subjects" :key="subject.id">
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
             <div class="form-group inputBox">
              <label class="text-white " for="inlineFormCustomSelect" >Departments</label>
              <select class="form-select" v-model="details.department_id" @change="updateStudentStore()" required>
                <option v-for="department in departments" :key="department.id" :value="department.id">{{department.department}}</option>
              </select>
             </div>
            </div>
            <div class="col">
             <div class="form-group inputBox">
              <label class="text-white " for="inlineFormCustomSelect" >Hostels</label>
              <select class="form-select" v-model="details.hostel_id" @change="updateStudentStore()" required>
                <option v-for="hostel in hostels" :key="hostel.id" :value="hostel.id">{{hostel.hostel}}</option>
              </select>
             </div>
            </div>
             <div class="col">

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
              category_id: '',
              occupation_id: '',
              section_id : '',
              hostel_id: '',
              levels: [],
              subjects: [],
              department_id: ''
            },
            categories: [],
            occupations: [],
            subjects: [],
            levels: [],
            sections: [],
            hostels: [],
            departments: [],
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
            console.log(this.details.levels);
        },
        getHostels()
        {
            axios.get("/hostels")
            .then((response)=>{
                this.hostels = response.data
            })
            .catch(()=>{
            })
        },
        getDepartments()
        {
            axios.get("/departments")
            .then((response)=>{
                this.departments = response.data
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
        getSections()
        {
            axios.get("/sections")
            .then((response)=>{
                this.sections = response.data
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
        getOccupations()
        {
            axios.get("/occupations")
            .then((response)=>{
                this.occupations = response.data
            })
        },
        getCategoies()
        {
            axios.get("/categories")
            .then((response)=>{
                this.categories = response.data
            })
        },
        updateStudentStore()
        {
          store.state.staff.category_id = this.details.category_id
          store.state.staff.occupation_id = this.details.occupation_id
          store.state.staff.subjects = this.details.subjects
          store.state.staff.levels = this.details.levels
          store.state.staff.section_id = this.details.section_id
          store.state.staff.hostel_id = this.details.hostel_id
          store.state.staff.department_id = this.details.department_id

          console.log(store.state.staff)
        },
    },
    mounted() {
        this.getLevels()
        this.getSections()
        this.getSubjects()
        this.getOccupations()
        this.getCategoies()
        this.getDepartments()
        this.getHostels()
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
