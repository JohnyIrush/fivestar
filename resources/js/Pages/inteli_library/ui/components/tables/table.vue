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
   <table class="table table-bordered">
    <thead>
     <tr>
       <th scope="col"  v-for="th in tableHeader" :key="th">
        <span>{{th}}</span>
        <span>
         <i class="fas fa-filter"></i>
        </span>
       </th>
       <th scope="col">
         Options
       </th>
     </tr>
    </thead>
    <tbody>
         <tr v-for="td in visibleEntries" :key="td">
           <td :data-label="column" class="text-wrap" style="width: 6rem !important;" v-for="column in tableHeader" :key="column">
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

export default {
  components:{
    list,
    image,
    table_options,
    main_form,
    AttendanceForm
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
    columns()
    {
      return store.state.Table.data.columns
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
    },
    form()
    {
      return store.state.Table.data.form
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
          launchModal(componentid, modalbody)
          {
            var modal = new bootstrap.Modal(document.getElementById('main-modal'))

            var component = document.getElementById(componentid)
            var body = document.getElementById(modalbody)

            /*
            if (body.hasChildNodes())
            {
              body.replaceChild(component, body.childNodes[0]);
            }
            else
            {
              body.appendChild(component)
            }
            */

            body.appendChild(component)

            /*if (store.state.Modal.open == false) {
              modal.show()
              store.state.Modal.open = true
            }*/

            modal.show()
          },
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
      
      if(this.pagination >= this.entries.length)
      {
        this.visibleEntries = this.entries
      }
      else if(this.entries.length >= 1)
      {
        this.visibleEntries = this.entries.slice((current * this.pagination) - this.pagination,(current * this.pagination))
      }
    },
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
    }
   },
   mounted()
   {

   },
   updated()
   {
    console.log(this.types)
   }
}
</script>

<style scoped>


ol.collection {
    margin: 0px;
    padding: 0px;
}

li {
    list-style: none;
}

* {
    box-sizing: border-box;
}

/* 2 Column Card Layout */
@media screen and (max-width: 736px) {
    .collection-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }

    .item {
        border: 1px solid gray;
        border-radius: 2px;
        padding: 10px;
    }

    /* Don't display the first item, since it is used to display the header for tabular layouts*/
    .collection-container>li:first-child {
        display: none;
    }

    .attribute::before {
        content: attr(data-name);
    }

    /* Attribute name for first column, and attribute value for second column. */
    .attribute {
        display: grid;
        grid-template-columns: minmax(9em, 30%) 1fr;
    }
}

/* 1 Column Card Layout */
@media screen and (max-width:580px) {
    .collection-container {
        display: grid;
        grid-template-columns: 1fr;
    }
}

/* Tabular Layout */
@media screen and (min-width: 737px) {
    /* The maximum column width, that can wrap */
    .item-container {
        display: grid;
        grid-template-columns: 2em 2em 10fr 2fr 2fr 2fr 2fr 5em 5em;
    }

    .attribute-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(var(--column-width-min), 1fr));
    }

    /* Definition of wrapping column width for attribute groups. */
    .part-information {
        --column-width-min: 10em;
    }

    .part-id {
        --column-width-min: 10em;
    }

    .vendor-information {
        --column-width-min: 8em;
    }

    .quantity {
        --column-width-min: 5em;
    }

    .cost {
        --column-width-min: 5em;
    }

    .duty {
        --column-width-min: 5em;
    }

    .freight {
        --column-width-min: 5em;
    }

    .collection {
        border-top: 1px solid gray;
    }

    /* In order to maximize row lines, only display one line for a cell */
    .attribute {
        border-right: 1px solid gray;
        border-bottom: 1px solid gray;
        padding: 2px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .collection-container>.item-container:first-child {
        background-color: blanchedalmond;
    }

    .item-container:hover {
        background-color: rgb(200, 227, 252);
    }

    /* Center header labels */
    .collection-container>.item-container:first-child .attribute {
        display: flex;
        align-items: center;
        justify-content: center;
        text-overflow: initial;
        overflow: auto;
        white-space: normal;
    }
}


*{
  /*margin: 0 !important;
  padding: 0 !important;
  box-sizing: border-box !important;*/
}
/*
.table-container{
  padding: 0 5% !important;
  margin: 20px auto 0 !important;
}

.table
{
  width: 100% !important;
  border-collapse: collapse !important;
}

.table thead
{

}

.table thead tr th
{
  font-size: 14px !important;
  font-weight: medium !important;
  letter-spacing: -0.35px !important;
  padding: 12px !important;
  vertical-align: top !important;
  border: 1px solid #dee2e685 !important;
}

.table tbody tr td{
  font-size: 14px !important;
  letter-spacing: 0.35px !important;
  font-weight: normal !important;
  padding: 8px !important;
  text-align: center !important;
  border-radius: 1px solid #dee2e685 !important;
}

.table .text_open
{
  font-size: 14px !important;
  font-weight: bold !important;
  letter-spacing: 0.35px !important;

}

.table tbody tr td .btn{
  width: 130px !important;
  text-decoration: 35px !important;
  line-height: 35px !important;
  display: inline-block !important;
  font-weight: medium !important;
  text-align: center !important;
  vertical-align: middle !important;
  user-select: none !important;
  border: 1px solid transparent !important;
  font-size: 14px !important;
  opacity: 1 !important;
}
@media (max-width: 768px)
{
  .table thead{
    display: none !important;
  }

  .table, .table tbody, .table tr, .table td{
    display: block !important;
    width: 100% !important;
  }

  .table tr{
    margin-bottom: 15px !important;
  }

  .table tbody tr td{
    text-align: right !important;
    padding-left: 50% !important;
    position: relative !important;
  }
  .table td:before{
    content: attr(data-label) !important;
    position: absolute !important;
    left: 0 !important;
    width: 50%;
    padding-left: 15px !important;
    font-weight: 600 !important;
  }
}*/
</style>