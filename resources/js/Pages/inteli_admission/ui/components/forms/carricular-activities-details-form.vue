<template>
     <div class="container glass-content">
         <h2 class="text-white">Extra Carricular Activities</h2>
         <div class="row mt-3">
             <div class="col">
                <h2 class="text-white">Sports</h2>
                <div class="row " >
                    <div class="col-6 text-white" v-for="sport in sports" :key="sport.id">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="" @change="storeArrayInput(this.details.sports, sport.id)">
                       <label class="form-check-label text-white" for="">
                         {{sport.sport}}
                       </label>
                     </div>
                    </div>
                </div>
             </div>
             <div class="col">
                <h2 class="text-white">Clubs</h2>
                <div class="row " >
                    <div class="col-6 text-white" v-for="club in clubs" :key="club.id">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="" @change="storeArrayInput(this.details.clubs, club.id)">
                       <label class="form-check-label text-white" for="">
                         {{club.club}}
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
              clubs: [],
              sports: [],
            },
            clubs: [],
            sports: [],
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
            this.updateStudentStore()
            console.log(store.state.student.clubs);
            console.log(store.state.student.sports);
        },
        getClubs()
        {
            axios.get("/clubs")
            .then((response)=>{
                this.clubs = response.data
            })
            .catch(()=>{
            })
        },
        getSports()
        {
            axios.get("/sports")
            .then((response)=>{
                this.sports = response.data
            })
            .catch(()=>{
            })
        },

        updateStudentStore()
        {
          store.state.student.clubs = this.details.clubs
          store.state.student.sports = this.details.sports

          console.log(store.state.student)
        },
    },
    mounted() {
        this.getClubs()
        this.getSports()
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
