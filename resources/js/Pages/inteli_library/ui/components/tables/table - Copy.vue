<template>
  <div class="row">
    <div class="col-4 align-self-start">
      <div class="d-flex flex-row">
          <span class="m-2">Show</span> 
          <select @change="changePage(currentPage)" v-model="pagination" class="form-control form-control-sm select-sm-size">
            <option :value="10" selected>10</option>
            <option :value="showEntry" v-for="showEntry in showEntries" :key="showEntry" >{{showEntry}}</option>
          </select>
          <span class="m-2">Entries</span> 
      </div>
    </div>
    <div class="col-5">
       <date-picker :pickType="'date'" @filterDate="filterDate" :pickField="'date'" /> 
    </div>
    <div class="col-3 align-self-end">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
        </div>
      </div>
    </div>
  </div>
  <div class="table-responsive">
   <table class="table table-bordered">
    <thead>
     <tr>
       <th scope="col"  v-for="th in tableHeader" :key="th" aria-label="Name: activate to sort column ascending" aria-sort="descending"> 
        <div class="d-flex flex-row">
         <span >{{th}}</span>
         <span class="ml-10">
          <i class="fas fa-sort"></i>
        </span>
        </div>
       </th>
       <th scope="col">
         Options
       </th>
     </tr>
    </thead>
    <tbody>
         <tr v-for="td in visibleEntries" :key="td">
           <td :data-label="column" class="text-wrap" style="width: 6rem !important;" v-for="column in tableHeader" :key="column" v-if="!checkHidden(column)">
           <span v-if="!hasMore(column)">
              <span class="text-wrap" style="width: 4rem !important;" v-if="!hasType(column)">{{td[column]}}</span>
              <span v-else-if="types[column] == 'image'">
                <image :info="td"></image> 
                image
              </span>
              <span v-else-if="types[column] == 'form'">
                <attendance-form :StudentId="td['id']"></attendance-form>
              </span>
           </span>
           <span v-else-if="checkDisplay(column) == 'item'">
              <span class="text-wrap" style="width: 6rem !important;" v-if="!hasType()">
              {{td[this.more[column]["name"]][this.more[column]["value"]]}}

              </span>
              <span v-else-if="types[column] == 'image'">
                <!--<image :info="td"></image>-->
                <img :src="td[column]">
                image
              </span>
           </span>
           <span v-else-if="checkDisplay(column) == 'list'">
             {{"list"}}
           </span>
           </td>
           <td :data-label="column">
             <table_options @showModal="launchModal('', 'modal-body')" :formData="td" :dataId="td.id" :deletePath="crud.delete" :triggerName="'Options'" :icon_classes="'fas fa-ellipsis-h'" :triggerType="'button'"></table_options>
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
   <div class="row">
     <div class="col-4 align-self-start">
       <p>Showing {{currentPage}} to {{currentPage + pagination - 1}} of {{entries.length }} Entries</p>
     </div>
     <div class="col-8 align-self-end">
     </div>
  </div>
   <div class="row">
     <div class="col-12">
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
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import { store } from '../../../../../store/store.js'

import list from "../lists/list.vue"

import image from "../images/image.vue"

import table_options from '../../widgets/menus/table-options.vue'

import main_form from "../forms/form.vue"

import AttendanceForm from '../../../../inteli_academic/ui/components/forms/AttendanceForm.vue'

import DatePicker from '../../../../inteli_academic/ui/widgets/filters/DatePicker.vue'

export default {
  components:{
    list,
    image,
    table_options,
    main_form,
    AttendanceForm,
    DatePicker
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
    },
    hidden()
    {
      return store.state.Table.data.hidden
    },
    columns()
    {
       return  store.state.Table.data.columns.filter((el, index, arr)=>{
         return !this.hidden.includes(el)
       })
    },
    entries()
    {
      return store.state.Table.data.entries

    },
    more()
    {
      return store.state.Table.data.more
    },
    types()
    {
      return store.state.Table.data.types
    },
    crud()
    {
      return store.state.Table.data.crud
    }
  },
  data (){
    return {
      showEntries: [15,20,25,30,35,40,50,75,100],
      pagination: 10,
      currentPage: 1,
      visibleEntries: [],
   }
 },
   methods:{
    /**
     * start data table field functions
     * 
     */
    hasType(column)
    {
      console.log('status type',this.types['status'],'column',column)
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
    checkHidden(column)
    {
      return this.hidden.includes(column)
    },

    /**
     * end data table field functions
     * 
     */

    /**
     * start data table plugin/widgets/components  functions
     * 
     */
    launchModal(componentid, modalbody)
    {
      var modal = new bootstrap.Modal(document.getElementById('main-modal'))
      var component = document.getElementById(componentid)
      var body = document.getElementById(modalbody)
      body.appendChild(component)
      modal.show()
    },

    /* Pagination function*/
    changePage(current)
    {
      this.currentPage = current
      
      if(this.pagination >= this.entries.length)
      {
        this.visibleEntries = this.entries
      }
      else if(this.entries.length >= 1)
      {
        this.visibleEntries = this.entries.slice((current * this.pagination) - this.pagination,(current * this.pagination))
      }
    },

    /**
     * end data table plugin/widgets/components  functions
     * 
     */

    /**
     * start data table filter functions
     * 
     */
    filterDate(event)
    {
      var from = event.from;
      var to = event.to;
      var field = event.field;

      this.visibleEntries = this.visibleEntries.filter((el, index, arr)=>{
        return new Date(el[field]) >= new Date(from) && ((to != '')? new Date(el[field]) <= new Date(to) : true )
      })

    },

    /**
     * Date Functions
     * */

    /**
     * end data table filter functions
     * 
     */

    /**
     * start data table sort functions
     * 
     */

     sortByColumn(column)
     {

     }

    /**
     * end data table sort functions
     * 
     */

   },
   mounted()
   {

   },
   updated()
   {

   }
}
</script>

<style scoped>

.select-sm-size
{
  width: 50px !important;
}

</style>