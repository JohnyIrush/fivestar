<template>
     <div class="container glass-content">
         <h2 class="text-white">Boarding Details</h2>
         <div class="row mt-2">
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Hostel</label>
              <select class="form-select" v-model="details.hostel_id" @change="updateStudentStore()" required>
                <option v-for="hostel in hostels" :key="hostel.id" :value="hostel.id">{{hostel.hostel}}</option>
              </select>
            </div>
            <div class="col">
              <label class="text-white " for="inlineFormCustomSelect" >Room</label>
              <select class="form-select" v-model="details.room_id" @change="updateStudentStore()" required>
                <option v-for="room in rooms" :key="room.id" :value="room.id">{{room.room}}</option>
              </select>
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
              hostel_id: '',
              room_id: '',
            },
            hostels: [],
            rooms: []
        }
    },
    methods:
    {
        getRooms()
        {
            axios.get("/rooms")
            .then((response)=>{
                this.rooms = response.data
            })
            .catch(()=>{
            })
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
        updateStudentStore()
        {
          store.state.student.hostel_id = this.details.hostel_id
          store.state.student.room_id = this.details.room_id

          console.log(store.state.student)
        },
    },
    mounted() {
        this.getHostels()
        this.getRooms()
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
