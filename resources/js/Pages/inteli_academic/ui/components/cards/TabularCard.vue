<template>
   <!--<div class="row align-items-start">
     <div class="col ms-auto">
       <div class="row">
           <div class="col">
            <div class="d-flex flex-row p-3 bg-light">
              <div class=" form-check">
               <input class="form-check-input" type="checkbox" value="" id="">
              </div>
              <div class="dropdown">
                <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i></button>
                <ul  class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="d-flex flex-row p-3 bg-light">
              <div class="mr-2">
                  <span>Show: All</span>
              </div>
              <div class="dropdown">
                <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i></button>
                <ul  class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">Videos</a></li>
                  <li><a class="dropdown-item" href="#">Audios</a></li>
                </ul>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="d-flex flex-row p-3 bg-light">
              <div class="mr-2">
                  <span>Sort: Most Recent</span>
              </div>
              <div class="dropdown">
                <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i></button>
                <ul  class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">Most Recent</a></li>
                  <li><a class="dropdown-item" href="#">Last Played</a></li>
                  <li><a class="dropdown-item" href="#">A-Z</a></li>
                  <li><a class="dropdown-item" href="#">Z-A</a></li>
                </ul>
              </div>
            </div>
           </div>
       </div>
     </div>
     <div class="col me-auto">
       <div class="row">
           <div class="col">
           </div>
           <div class="col"></div>
           <div class="col">
            <div class="p-3 bg-light">
              <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-plus mr-2"></i> Add</button>
            </div>
           </div>
       </div>
     </div>
   </div>-->
  <div class="vh-50 overflow-scroll">
   <div class="glass-content mt-1 mb-1 row" v-for="fieldData in entries" :key="fieldData">
    <div class="col-8">
     <div class="card">
       <div class="row">
           <div class="col ms-auto">
            <div class="row">
             <div class="col d-flex flex-row">
              <div class="">
               <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="" >
               </div>
              </div>
              <div class="row">
                <div class="col-4" v-for="column in tableHeader" :key="column.field">
                 <span v-if="!hasMore(column.field)">
                    <span v-if="types[column.field] == 'image'">
                      <img :src="fieldData[column.field]">
                    </span>
                 </span>
                 <span v-if="checkDisplay(column.field) == 'item'">
                    <span v-if="types[column.field] == 'image'">
                      <img :src="fieldData[column.field]">
                    </span>
                 </span>
                </div>
                <div class="col-8">
                 <div class="row">
                  <div class="col-6" v-for="column in tableHeader" :key="column.field">
                   <span v-if="!hasMore(column.field)">
                      <span class="text-wrap" v-if="!hasType(column.field)">{{fieldData[column.field]}}</span>
                   </span>
                   <span v-else-if="checkDisplay(column.field) == 'item'">
                      <span class="text-wrap"  v-if="!hasType()">
                      {{fieldData[this.more[column.field]["name"]][this.more[column.field]["value"]]}}
                      </span>
                   </span>
                  </div>
                 </div>
                </div>
              </div>
             </div>
            </div>
           </div>
           <div class="col me-auto">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                 <div class="d-flex flex-row">
                     <span class="mr-4"><i class="fas fa-share"></i> Share</span>
                     <span class="mr-4"><i class="fas fa-folder"></i></span>
                     <span class="mr-4"><i class="fas fa-trash-alt "></i></span>
                     <button class="mr-4"><i class="fas fa-caret-down" data-bs-toggle="collapse" :data-bs-target="'#' + fieldData.id + '-card-more'" aria-expanded="false" :aria-controls="fieldData.id +'card-more'"></i></button>
                 </div>
                </div>
            </div>
           </div>
       </div>
     </div>
    </div>
    <div class="col-4">
      <div v-for="formField in formFieldsData" :key="formField">
        <MainForm :formFields="formField" :showCommunicationMenu="'true'" :dataPath="'communication/method/options/index'"></MainForm>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" :id="fieldData.id + '-card-more'">
          <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>

        </div>
      </div>
    </div>
   </div>
  </div>
</template>

<script>

import { defineComponent } from 'vue'

import MainForm from "../../../../inteli_library/ui/components/forms/MainForm.vue"

export default defineComponent({
  name: "TabularCard",
  props:{
    dataPath: String,
  },
	components:{
    MainForm
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
      return this.dataEntries.hidden
    },
    columns()
    {
      if(this.dataEntries.columns)
      {
       return  this.dataEntries.columns.filter((el, index, arr)=>{
         return !this.hidden.includes(el.field)
       })
      }
    },
    entries()
    {
      return this.dataEntries.entries

    },
    more()
    {
      return this.dataEntries.more
    },
    types()
    {
      return this.dataEntries.types
    },
    crud()
    {
      return this.dataEntries.crud
    },
    filter()
    {
      return this.dataEntries.filter
    },
    formFieldsData()
    {
      return this.dataEntries.formFields
    }
  },
  data (){
    return {
      dataEntries: [],
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
    getEntries(url)
    {
      axios.get(url)
      .then((response)=>{
        this.dataEntries = response.data
      })
    },
    dropdown()
    {
      var dropdown = new bootstrap.Dropdown(document.getElementById('dropdown'))
      dropdown.toggle()
    },
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
    filterByColumns(event)
    {
      console.log(event)
       var option = event.option;
       var field = event.field;

       this.visibleEntries = this.visibleEntries.filter((el, index, arr)=>{
         return el[field] == option;
       })
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
    this.getEntries(this.dataPath)
   },
   updated()
   {

   }
})

</script>

<style scoped>
	.img-box-size
    {
        height: 100% !important;
        width: 100px !important;
    }

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

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

.vh-50
{
  height: 50vh;
}

</style>
