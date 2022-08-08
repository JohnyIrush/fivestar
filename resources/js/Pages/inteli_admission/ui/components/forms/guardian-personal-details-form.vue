<template>
     <div class="container glass-content">
         <h2 class="text-white">Guradian Personal Details</h2>
         <div class="row">
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">First Name</label>
                     <input class="form-control" type="text" required="required" v-model="details.firstname" @change="updateStudentStore()">
                     <span class="line"></span>
                 </div>
             </div>
             <div class="col">
                 <div class="form-group inputBox">
                     <label class="text-white">Last Name</label>
                     <input class="form-control" type="text" required="required" v-model="details.lastname" @change="updateStudentStore()">
                     <span class="line"></span>
                 </div>
             </div>
         </div>
         <div class="row mt-2">
            <div class="col">
             <div class="form-group inputBox">
                <label class="text-white" for="inputAddress">Address</label>
               <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required="required" v-model="details.address" @change="updateStudentStore()">
               <span class="line"></span>
             </div>
            </div>
            <div class="col">
             <div class="form-group inputBox">
              <label class="text-white " for="inlineFormCustomSelect" >City</label>
              <select class="form-select" v-model="details.city_id" @change="updateStudentStore()" required>
                <option v-for="city in cities" :key="city.id" :value="city.id">{{city.city}}</option>
              </select>
             </div>
            </div>
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Town</label>
              <select class="form-select" v-model="details.town_id" @change="updateStudentStore()" required>
                <option v-for="town in towns" :key="town.id" :value="town.id">{{town.subCounty}}</option>
              </select>
            </div>
         </div>
         <div class="row mt-2">
            <div class="col">
             <div class="form-group inputBox">
               <label class="text-white" for="birthday">Gender:</label>
              <select class="form-select" v-model="details.gender_id" @change="updateStudentStore()" required>
                <option v-for="sex in gender" :key="sex.id" :value="sex.id">{{sex.gender}}</option>
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
              firstname: '',
              lastname: '',
              address: '',
              city_id: '',
              town_id: '',
              gender_id: '',
            },
            cities: [],
            gender: [],
            towns: []
        }
    },
    methods:
    {
        getTowns()
        {
            axios.get("/towns")
            .then((response)=>{
                this.towns = response.data
            })
        },
        getGender()
        {
            axios.get("/gender")
            .then((response)=>{
                this.gender = response.data
            })
        },
        getCities()
        {
            axios.get("/cities")
            .then((response)=>{
                this.cities = response.data
            })
        },
        updateStudentStore()
        {
          store.state.student.guardian.firstname = this.details.firstname
          store.state.student.guardian.lastname = this.details.lastname
          store.state.student.guardian.address = this.details.address
          store.state.student.guardian.city_id = this.details.city_id
          store.state.student.guardian.town_id = this.details.town_id
          store.state.student.guardian.gender_id = this.details.gender_id

          console.log(store.state.student.guardian)
        },
    },
    mounted() {
        this.getCities()
        this.getGender()
        this.getTowns()
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


input
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
