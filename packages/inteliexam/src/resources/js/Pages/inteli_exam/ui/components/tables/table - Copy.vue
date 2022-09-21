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
  <!--<div class="table-container ">
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
              </span>
           </span>
           <span v-else-if="checkDisplay(column) == 'item'">
              <span class="text-wrap" style="width: 6rem !important;" v-if="!hasType()">
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
           <td :data-label="column">
             <table_options @showModal="launchModal" :formData="td" :dataId="td.id" :deletePath="crud.delete"></table_options>
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
  </div>-->
  <section>
    <ol class="collection collection-container">
      <!-- The first list item is the header of the table -->
      <li class="item item-container">
        <div class="attribute"></div>
        <div class="attribute" data-name="#">#</div>
        <!-- Enclose semantically similar attributes as a div hierarchy -->
        <div class="attribute-container part-information">
          <div class="attribute-container part-id">
            <div class="attribute" data-name="Part Number">Part Number</div>
            <!--<div class="attribute" data-name="Part Description">Part Description</div>-->
          </div>
          <!--<div class="attribute-container vendor-information">
            <div class="attribute">Vendor Number</div>
            <div class="attribute">Vendor Name</div>
          </div>-->
        </div>
        <div class="attribute-container quantity">
          <div class="attribute">Order Qty</div>
          <!--<div class="attribute">Receive Qty</div>-->
        </div>
        <div class="attribute-container cost">
          <div class="attribute">Cost</div>
          <!--<div class="attribute">Extended Cost</div>-->
        </div>
        <div class="attribute-container duty">
          <div class="attribute">Duty %</div>
          <!--<div class="attribute">Duty</div>-->
        </div>
        <div class="attribute-container freight">
          <div class="attribute">Freight %</div>
          <!--<div class="attribute">Freight</div>-->
        </div>
        <div class="attribute">UOM</div>
        <div class="attribute">Vendor Part Number</div>
        <div class="attribute">UOM</div>
        <div class="attribute">Vendor Part Number</div>
        <div class="attribute">UOM</div>
        <div class="attribute">Vendor Part Number</div>
        <div class="attribute">UOM</div>
        <div class="attribute">Vendor Part Number</div>
      </li>
      <!-- The rest of the items in the list are the actual data -->
      <li class="item item-container">
        <div class="attribute" data-name="Select"><input type="checkbox" name="" id=""></div>
        <div class="attribute" data-name="#">1</div>
        <div class="attribute-container part-information">
          <div class="attribute-container part-id">
            <div class="attribute" data-name="Part Number">100-10001</div>
            <!--<div class="attribute" data-name="Part Description">Description of part</div>-->
          </div>
          <!--<div class="attribute-container vendor-information">
            <div class="attribute" data-name="Vendor Number">001</div>
            <div class="attribute" data-name="Vendor Name">Vendor Name A</div>
          </div>-->
        </div>
        <div class="attribute-container quantity">
          <div class="attribute" data-name="Order Qty">10</div>
          <!--<div class="attribute" data-name="Receive Qty">20</div>-->
        </div>
        <div class="attribute-container cost">
          <div class="attribute" data-name="Cost">$5.00</div>
          <!--<div class="attribute" data-name="Extended Cost">$2.00</div>-->
        </div>
        <div class="attribute-container duty">
          <div class="attribute" data-name="Duty %">3.0%</div>
          <!--<div class="attribute" data-name="Duty">$0.15</div>-->
        </div>
        <div class="attribute-container freight">
          <div class="attribute" data-name="Freight %">3.0%</div>
          <!--<div class="attribute" data-name="Freight">$0.15</div>-->
        </div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">100001</div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">100001</div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">100001</div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">100001</div>
      </li>
      <li class="item item-container">
        <div class="attribute" data-name="Select"><input type="checkbox" name="" id=""></div>
        <div class="attribute" data-name="#">2</div>
        <div class="attribute-container part-information">
          <div class="attribute-container part-id">
            <div class="attribute" data-name="Part Number">100-10002</div>
            <!--<div class="attribute" data-name="Part Description">A long description of part. This description may overflow.
            </div>-->
          </div>
          <!--<div class="attribute-container vendor-information">
            <div class="attribute" data-name="Vendor Number">002</div>
            <div class="attribute" data-name="Vendor Name">Vendor Name B</div>
          </div>-->
        </div>
        <div class="attribute-container quantity">
          <div class="attribute" data-name="Order Qty">10</div>
          <!--<div class="attribute" data-name="Receive Qty">20</div>-->
        </div>
        <div class="attribute-container cost">
          <div class="attribute" data-name="Cost">$5.00</div>
          <!--<div class="attribute" data-name="Extended Cost">$2.00</div>-->
        </div>
        <div class="attribute-container duty">
          <div class="attribute" data-name="Duty %">3.0%</div>
          <!--<div class="attribute" data-name="Duty">$0.15</div>-->
        </div>
        <div class="attribute-container freight">
          <div class="attribute" data-name="Freight %">3.0%</div>
          <!--<div class="attribute" data-name="Freight">$0.15</div>-->
        </div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">E4-64B</div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">E4-64B</div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">E4-64B</div>
        <div class="attribute" data-name="UOM">EA</div>
        <div class="attribute" data-name="Vendor Part Number">E4-64B</div>
      </li>
    </ol>
  </section>
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

import table_options from '../../widgets/menus/table-options.vue'

export default {
  components:{
    list,
    image,
    table_options
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
      visibleEntries: [],
      crud: []
   }
 },
   methods:{
    launchModal()
    {
      alert("clicked")
      var component = document.getElementById('library-form')
      var body = document.getElementById('modal-body')
      body.appendChild(component)
      var modal = new bootstrap.Modal(document.getElementById('main-modal'))
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
            this.crud = response.data.crud
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