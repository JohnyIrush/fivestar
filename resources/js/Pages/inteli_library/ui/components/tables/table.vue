<template>
  <div class="row">
    <div class="col-6 align-self-start">
      <div class="row">
        <div class="col text-end">
            Show
        </div>
        <div class="col">
          <select @change="changePage(currentPage)" v-model="pagination" class="form-control">
            <option :value="10" selected>10</option>
            <option :value="showEntry" v-for="showEntry in showEntries" :key="showEntry" >{{showEntry}}</option>
          </select>
        </div>
        <div class="col">
            Entries
        </div>
      </div>
    </div>
    <div class="col-2">
        
    </div>
    <div class="col-4 align-self-end">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
        </div>
      </div>
    </div>
  </div>
  <div class="table-responsive">
   <table class="table table-borderd  table-sm">
    <thead>
     <tr>
       <th  v-for="th in tableHeader" :key="th">
        <span>{{th}}</span>
        <span>
         <i class="fas fa-filter"></i>
        </span>
       </th>
     </tr>
    </thead>
    <tbody>
         <tr v-for="td in visibleEntries" :key="td">
           <td class="text-wrap" style="width: 6rem;" v-for="column in tableHeader" :key="column">
           <span v-if="!hasMore(column)">
              <span class="text-wrap" style="width: 4rem;" v-if="!hasType(column)">{{td[column]}}</span>
              <span v-else-if="types[column] == 'image'">
                <image :info="td"></image> 
              </span>
           </span>
           <span v-else-if="checkDisplay(column) == 'item'">
              <span class="text-wrap" style="width: 6rem;" v-if="!hasType()">
              {{td[this.more[column]["name"]][this.more[column]["value"]]}}
              </span>
              <span v-else-if="types[column] == 'image'">
                <image :info="td"></image> 
              </span>
           </span>
           <span v-else-if="checkDisplay(column) == 'list'">
             {{"list"}}
           </span>
           </td>
         </tr>
    </tbody>
    <tfoot>
     <tr>
       <th  v-for="th in tableHeader" :key="th">
        <span>{{th}}</span>
        <span>
        </span>
       </th>
     </tr>
    </tfoot>
   </table>
  </div>
  <div class="row">
    <div class="col-4 align-self-start">
      <p>Showing {{currentPage}} to {{currentPage + pagination - 1}} of {{entries.length }} Entries</p>
    </div>
    <div class="col-8 align-self-end">
      <div class="row">
        <div class="col">
         <nav aria-label="Page navigation example">
           <ul class="pagination justify-content-end">
             <li v-if="(currentPage - 1) > 0"  class="page-item" @click="changePage(currentPage + 1)">
               <a role="button"  class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
             </li>
             <li class="page-item" v-for="page in pages" :key="page" @click="changePage(page)"><a role="button" class="page-link">{{page}}</a></li>
             <li v-if="(currentPage + 1) < pages" class="page-item" @click="changePage(currentPage + 1)">
               <a role="button"  class="page-link">Next</a>
             </li>
           </ul>
         </nav>
        </div>
      </div>
    </div>
  </div>
  <!--<list></list>-->
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import list from "../lists/list.vue"

import image from "../images/image.vue"

//import 'alga-css/dist/alga.min.css'
//import 'alga-css/dist/alga-animate.min.css'

export default {
  components:{
    list,
    image
  },
  name: 'TableData',
  props: {
    datapath: String
  },
  setup ()
  {
  },
  computed:{
    tableHeader()
    {
      return this.columns || []
    },
    tableData()
    {
      return this.entries || []
    },
    pages()
    {
      return Math.ceil(this.entries.length/this.pagination)
    },
    visibleEntries()
    {
      return this.changePage(this.currentPage)
    }
  },
  data (){
    return {
      columns:[],
      entries: [], 
      more: {},
      types: {},
      showEntries: [15,20,25,30,35,40,50,75,100],
      pagination: 10,
      currentPage: 1,
      visibleEntries: []
   }
 },
   methods:{
    tableSearch(keyword)
    {
      this.currentPage = current
      this.visibleEntries = this.entries.slice((current * this.pagination) - this.pagination,(current * this.pagination))
      console.log(this.visibleEntries)
      return this.visibleEntries
    },
    changePage(current)
    {
      this.currentPage = current
      this.visibleEntries = this.entries.slice((current * this.pagination) - this.pagination,(current * this.pagination))
      console.log(this.visibleEntries)
      return this.visibleEntries
    },
    hasType(column)
    {
      var keys = Object.keys(this.types);
      return keys.includes(column)
    },
    checkDisplay(column)
    {
      if(this.hasMore(column))
      {
        return this.more[column]["display"]
      }
      
    },
    hasMore(column)
    {
      var keys = Object.keys(this.more);
      return keys.includes(column)
    },
    getData(url)
     {
         axios.get(url)
         .then((response)=>{
            this.columns = response.data.columns
            this.entries = response.data.entries
            this.more = response.data.more
            this.types = response.data.types
         })
     },
   },
   mounted()
   {
    this.getData(this.datapath)
    this.changePage(this.currentPage)
   }
}
</script>

<style scoped>

</style>