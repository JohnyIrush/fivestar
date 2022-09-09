<template>
  <div class="table-responsive">
   <table class="table table-bordered">
    <thead>
     <tr>
       <th scope="col">
         Options
       </th>
     </tr>
    </thead>
    <tbody>
         <tr>
           <td>

           </td>
         </tr>
    </tbody>
   </table>
  </div>
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import { store } from '../../../../../store/store.js'


export default {
  components:{

  },
  name: 'TableData',
  props: {
    datapath: String
  },
  setup ()
  {
  },
  computed:{

  },
  data (){
    return {
   }
 },
   methods:{

   },
   mounted()
   {

   }
}
</script>

<style scoped>
</style>