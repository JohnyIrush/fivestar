<template>
  <div class="card">
   <table class="table">
     <!--<thead>
       <tr>
         <th scope="col">Day</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Handle</th>
       </tr>
     </thead>-->
     <tbody>
       <tr>
         <td>Mark</td>
       </tr>
     </tbody>
   </table>
  </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';



    export default defineComponent({
        components: {
            Link, 
        },
        data() {
            return {
              timetable
            }
        },
    })
</script>
