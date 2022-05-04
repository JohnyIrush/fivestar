<template>
<div class="row">
  <div class="col-1"></div>
  <div class="col-10">
   <table class="table table-bordered table-dark table-responsive" v-for="timetable in timetables" :index="index">
     <!--<thead>
       <tr>
         <th scope="col">Day</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Handle</th>
       </tr>
     </thead>-->
     <tbody>
       <tr v-for="day in days" :index="index">
         <td>
           {{day.day}}
         </td>
         <td v-for="sessions in timetable[day.day]" :index="index">
           <td v-for="session in sessions" :index="index">
            <td v-for="lesson in session" :index="index">
                <span>{{lesson["subject"]}}</span>
                <!--<li>{{lesson["teacher"]}}</li>
                <li>{{lesson["venue"]}}</li>
                <li>{{lesson["level"]}}</li>
                <li>{{lesson["stream"]}}</li>-->
            </td>
           </td>
         </td>
       </tr>
     </tbody>
   </table>
  </div>
  <div class="col-1"></div>
</div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    import directive from '../../../plugins/directives'

    export default defineComponent({
        components: {
            Link, 
        },
        data() {
            return {
              timetables: {},
              days: {}
            }
        },

        methods:
        {
          getTimetables()
          {
            axios.get('tables')
            .then((response)=>{
              this.timetables = response.data;
              console.log(response.data['11']['Sunday']);
            })
          },
          getDays()
          {
            axios.get('days')
            .then((response)=>{
              this.days = response.data;
              //console.log(response.data);
            })
          }
        },
        mounted()
        {
          this.getTimetables();
          this.getDays();
          this.test()
        },
    })
</script>
