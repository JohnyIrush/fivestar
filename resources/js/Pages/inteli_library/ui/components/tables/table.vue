<template>
  <!-- START DATATABLE NAVBAR  -->
  <div class="row glass-content mb-2">
    <!-- START PAGINATION RANGE COMPONENT -->
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
    <!-- END PAGINATION RANGE COMPONENT -->

    <!--START FILTER COLLAPSE BUTTON-->
    <div class="col-5">
      <collapse_button             
            :collapseId="'table-filter-collapse'"
            :buttonName="''"
            :icon_classes="'fa fa-filter'"
            :button_classes="'btn-light'"
            :portId="''"
            :componentId="''"
            :componentName="''"
            >
      </collapse_button>
    </div>
    <!--END FILTER COLLAPSE BUTTON-->

    <!-- START SEARCH BAR-->
    <div class="col-3">
      <div class="row">
        <div class="col">
          <search @searchFilter="searchTable"></search>
        </div>
      </div>
    </div>
    <!--END SEARCH BAR-->
  </div>
  <!-- END DATATABLE NAVBAR  -->

  <!-- START HEADER WIDGET SECTION -->
  <div class="row mb-2" >
    <div class="col-3"></div>
     <div class="col-6">
        <!-- START TABLE FILTER WIDGET-->
        <div id="table-filter-collapse"  class="card glass-content collapse">
          <div class="row">
            <div class="col-8 d-flex flex-column text-left">
               <h4 class="mt-1 mb-2">Filter Type</h4>
               <div class="mt-4" v-if="checkDataType(columnFilter.type) == 'date'">
                <date-picker :pickType="'date'" @filterDate="filterDate" :pickField="columnFilter.field" />
               </div>
               <div class="mt-4" v-if="checkDataType(columnFilter.type) == 'number'">
                <number-filter :minValue="1" :maxValue="entries.length" @filterNumber="filterNumber" :filterField="columnFilter.field" />
               </div>
            </div>
            <div class="col-4 text-left">
              <h4 class="mt-1 mb-2">Column Filter</h4>
              <radio-input :inputOptions="columns" :nameKey="'field'" :valueKey="'field'" @radioInput="radioInput" :variable="'columnFilter'"  />
            </div>
          </div> 
        </div>
        <!-- END TABLE FILTER WIDGET-->
     </div>
    <div class="col-3"></div>
  </div>
  <!-- END HEADER WIDGET SECTION -->

  <!--START TABLE-->
  <div class="table-responsive">
   <!--START DATA TABLE-->
    <table class="table table-bordered">
     <thead>
     <tr>
       <th scope="col"  v-for="th in tableHeader" :key="th" aria-label="Name: activate to sort column ascending" aria-sort="descending"> 
        <div class="d-flex flex-row">
         <span >{{th.field}}</span>
         <span class="ml-10">
          <i class="fas fa-sort-amount-up-alt" v-if="sortData.column == th.field && sortData.order == 'ascending'"></i>
          <i :id="th.field+ '-sort-icon'" class="fas fa-sort fa-2x" @click="sortByColumn(th.field, th.type)"></i>
          <i class="fas fa-sort-amount-down-alt" v-if="sortData.column == th.field && sortData.order == 'descending'"></i>
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
       <td :data-label="column.field" class="text-wrap" style="width: 6rem !important;" v-for="column in tableHeader" :key="column.field">
       <span v-if="!hasMore(column.field)">
          <span class="text-wrap" style="width: 4rem !important;" v-if="!hasType(column.field)">{{td[column.field]}}</span>
          <span v-else-if="types[column.field] == 'image'">
            <image :info="td"></image> 
            image
          </span>
          <span v-else-if="types[column.field] == 'form'">
            <attendance-form :StudentId="td['id']"></attendance-form>
          </span>
       </span>
       <span v-else-if="checkDisplay(column.field) == 'item'">
          <span class="text-wrap" style="width: 6rem !important;" v-if="!hasType()">
          {{td[this.more[column.field]["name"]][this.more[column.field]["value"]]}}

          </span>
          <span v-else-if="types[column.field] == 'image'">
            <!--<image :info="td"></image>-->
            <img :src="td[column.field]">
            image
          </span>
       </span>
       <span v-else-if="checkDisplay(column.field) == 'list'">
         {{"list"}}
       </span>

       </td>
       <td >
         <table_options @showModal="launchModal('', 'modal-body')" :formData="td" :dataId="td.id" :deletePath="crud.delete" :triggerName="'Options'" :icon_classes="'fas fa-ellipsis-h'" :triggerType="'button'"></table_options>
       </td>
     </tr>
     </tbody>
     <tfoot>
      <tr>
        <th  v-for="th in tableHeader" :key="th">
         <span>{{th.field}}</span>
         <span>
         </span>
        </th>
      </tr>
     </tfoot>
    </table>
   <!--END DATA TABLE-->
   <!--START DATA TABLE RECORDS/PAGES COUNT-->
   <div class="row">
     <div class="col-4 align-self-start">
       <p>Showing {{currentPage}} to {{currentPage + pagination - 1}} of {{entries.length }} Entries</p>
     </div>
     <div class="col-8 align-self-end">
     </div>
   </div>
   <!--END DATA TABLE RECORDS/PAGES COUNT-->
   <!--START DATA TABLE PAGINATION COMPONENT-->
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
   <!--END DATA TABLE PAGINATION COMPONENT-->
  </div>
  <!-- END TABLE-->
  <!--<collapse></collapse>-->
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

import Search from "../../../../inteli_academic/ui/widgets/search/Search.vue"

import collapse_button from "../../../../inteli_academic/ui/components/buttons/collapse-button.vue"

import Collapse from "../../../../inteli_academic/ui/components/collapse/Collapse.vue"
import RadioInput from '../../../../inteli_academic/ui/components/inputs/RadioInput.vue'
import NumberFilter from '../../../../inteli_academic/ui/widgets/filters/NumberFilter.vue'


export default {
  components:{
    list,
    image,
    table_options,
    main_form,
    AttendanceForm,
    DatePicker,
    Search,
    collapse_button,
    Collapse,
    RadioInput,
    NumberFilter
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
         return !this.hidden.includes(el.field)
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
      dataTypes:[
          {
            'type' : 'number',
            'names': ['bigint','int','integer','number','bigint unsigned']
          },
          {
            'type' : 'string',
            'names': ['string', 'text', 'varchar']
          },
          {
            'type' : 'date',
            'names': ['date','timestamp']
          },
          {
            'type' : 'boolean',
            'names': ['tinyint', 'bool', 'boolean']
          },
      ],
      sortData:
      {
        column: '',
        order: '',
        sorted: false
      },
      filterActive: false,
      columnFilter: {}
   }
 },
 watch: {
     sortData: {
       handler(newValue, oldValue)
       {
        /*
        const icon = document.getElementById(newValue.column + "-sort-icon");
        if (newValue.order == 'ascending')
        {
          icon.classList.remove('table-icon-descending')
          icon.classList.add('table-icon-ascending')
        }
        else if(newValue.order == 'descending')
        {
          icon.classList.remove('table-icon-ascending')
          icon.classList.add('table-icon-descending')
        }*/
       },
       deep: true
     }
   },
   methods:{
    /**
     * start data table field functions
     * 
     */
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
    checkHidden(column)
    {
      return this.hidden.includes(column)
    },
    checkDataType(type)
    {
      var dataType = '';

         loop1:   
             for (var i = 0; i < this.dataTypes.length; i++)
             {
              // console.log("length",this.dataTypes.length)
         loop2:
               for (var j = 0; j < this.dataTypes[i].names.length; j++)
               {
                //console.log("check",this.dataTypes[i].names[j],type,this.dataTypes[i].names[j].search(type) != -1)
                // console.log(this.dataTypes[i].type,"length",this.dataTypes[i].names.length)
                // console.log("search",dataType, type)
                 if (this.dataTypes[i].names[j].search(type) != -1)
                 {
                   dataType = this.dataTypes[i].type;
                   // console.log("found",dataType, type)
                   break loop1;
                 }
               }
             }

      return dataType;
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

    activateFilterBar()
    {
      this.filterActive = !this.filterActive
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

      this.visibleEntries = this.entries.filter((el, index, arr)=>{
        return new Date(el[field]) >= new Date(from) && ((to != '')? new Date(el[field]) <= new Date(to) : true )
      })

    },

    filterNumber(event)
    {
      var from = event.from;
      var to = event.to;
      var field = event.field;

      var more = this.more;

      if (!this.hasMore(field))
      {
       this.visibleEntries = this.entries.filter((el, index, arr)=>{
         return (el[field]) >= (from) && ((to != '')? (el[field]) <= (to) : true )
       })
      }
      else
      {
       this.visibleEntries = this.entries.filter((el, index, arr)=>{
         return (el[more[field].name][field]) >= (from) && ((to != '')? (el[more[field].name][field]) <= (to) : true )
       })
      }

    },
    searchTable(event)
    {
      //this.visibleEntries = this.visibleEntries.find(({ name }) => name === 'cherries')
      var data = [
                  {"id":"123","color":"Red","model":"Tesla"},
                  {"id":"124","color":"Black","model":"Honda"},
                  {"id":"125","color":"Red","model":"Audi"},
                  {"id":"126","color":"Blue","model":"Tesla"}
                ];

      var keys = this.columns;
      var values = ["Tesla", "Audi", "Red"];

      console.log(keys, this.visibleEntries);

      var result = this.visibleEntries.filter((e) => { 
        return keys.some((a) =>{
          return e[a.field].toString().search(event.toString())
        })
      })

      console.log(result);
      //console.log(event)
    },
    searchCheck(needle)
    {
         return function(currentValue, index, arr)
         {
            for (var i = 0; i < this.tableHeader.length; i++)
            {
              return currentValue[this.tableHeader[i].field] == needle;
            }
         }
    },
    deepSearchCheck()
    {

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

     sortByColumn(column, fieldtype)
     {

      console.log(column, fieldtype, this.checkDataType(fieldtype))
      //alert("type", fieldtype,this.checkDataType(fieldtype))

      this.sortData.column = column;

      if (!this.hasMore(column))
      {
        if (this.sortData.order == 'descending')
        {
          this.visibleEntries.sort(this.propComparator(column,'ascending',this.checkDataType(fieldtype)));
          this.sortData.order  = 'ascending'
          this.sortData.sorted = true;
        }
        else 
        {
          this.visibleEntries.sort(this.propComparator(column,'descending',this.checkDataType(fieldtype)));

          this.sortData.order  = 'descending'
          this.sortData.sorted = true;
        }
      }
      else
      {
        if (this.sortData.order == 'descending')
        {
          this.visibleEntries.sort(this.deepPropComparator(column,'ascending'));
          this.sortData.order  = 'ascending'
          this.sortData.sorted = true;
        }
        else 
        {
          this.visibleEntries.sort(this.deepPropComparator(column,'descending'));
          this.sortData.order  = 'descending'
          this.sortData.sorted = true;
        }
      }
     },

     propComparator(prop, order, type)
     {
      //console.log("prop - type",prop,type)
        if (order == 'ascending')
        {
         return function(a, b) {
          if (type == 'string')
          {
             return ('' + a[prop]).localeCompare(b[prop]);
          }
          else if (type == 'number')
          {
             return a[prop] - b[prop];
          }
          else if (type == 'date')
          {
             return new Date(a[prop]) - new Date(b[prop]);
          }
          else
          {
            return a[prop] - b[prop];
          }
         }
        }
        else if (order == 'descending')
        {
         return function(a, b)
         {
          if (type == 'string')
          {
             return ('' + b[prop]).localeCompare(a[prop]);
          }
          else if (type == 'number')
          {
             return b[prop] - a[prop];
          }
          else if (type == 'date')
          {
             return new Date(b[prop]) - new Date(a[prop]);
          }
          else
          {
             return b[prop] - a[prop];
          }
         }
        }
     },

     deepPropComparator(prop, order)
     {
        var more = this.more;
        if (order == 'ascending')
        {
         return function(a, b)
         {
          if (more[prop].type == 'string')
          {
             return ('' + a[more[prop].name][prop]).localeCompare(b[more[prop].name][prop]);
          }
          else if (more[prop].type == 'number')
          {
             return a[more[prop].name][prop] - b[more[prop].name][prop];
          }
          else if (more[prop].type == 'date')
          {
             return new Date(a[more[prop].name][prop]) - new Date(b[more[prop].name][prop]);
          }
          else
          {
            return a[more[prop].name][prop] - b[more[prop].name][prop];
          }
         }
        }
        else if (order == 'descending')
        {
         return function(a, b)
         {
          if (more[prop].type == 'string')
          {
             return ('' + b[more[prop].name][prop]).localeCompare(a[more[prop].name][prop]);
          }
          else if (more[prop].type == 'number')
          {
             return b[more[prop].name][prop] - a[more[prop].name][prop];
          }
          else if (more[prop].type == 'date')
          {
             return new Date(b[more[prop].name][prop]) - new Date(a[more[prop].name][prop]);
          }
          else
          {
             return b[more[prop].name][prop] - a[more[prop].name][prop];
          }
         }
        }

     },

    /**
     * end data table sort functions
     * 
     */

     radioInput(event)
     {
      this[event.variable] = event.option
      console.log(event, this[event.variable])
     }

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

.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


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

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.select-sm-size
{
  width: 50px !important;
}

.table-icon-ascending::before
{
  /*color: red !important; */
  border-top: 10px solid black;
}
.table-icon-descending::after
{
  /*color: blue !important; */
  border-bottom: 10px solid black;
}

</style>