<template>
  <div class="row">
    <div class="col-6 align-self-start">
      <div class="row">
        <div class="col text-end">
            Show
        </div>
        <div class="col">
          <select @change="changePage(currentPage)" v-model="pagination" class="form-control">
            <option :value="5" selected>5</option>
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
<div class="row">
 <div class="col-12 col-xl-4" v-for="data in visibleEntries" :key="data">
  <div class="card glass-content">
  <div class="card-header">
    <div class="row">
      <div class="col">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="">
          </div>
      </div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col">
        <i class="fas fa-ellipsis-v fa-2x"></i>
             <table-options @showModal="launchModal" :formData="data" :dataId="data.id" :deletePath="crud.delete" :triggerName="''" :icon_classes="'fas fa-ellipsis-v fa-2x'" :triggerType="'icon'"></table-options>
      </div>
    </div>
  </div>
      <div class="content" v-for="column in visible" :key="column">
         <div class="imBx" v-if="hasType(column) && types[column] == 'image'" >
            <img :src="data[column]" alt="">
         </div>
         <div class="contentBx" v-else>
           <div class="col">
             <p >{{column}}: {{data[column]}}</p>
           </div>
         </div>
      </div>
      <button @click="passUser()" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user-info-modal" >More</button>
   </div>
  </div>  
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
</template>


<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

import TableOptions from '../../widgets/menus/TableOptions.vue'

export default defineComponent({
  name: "DataCard",
  components:{
    TableOptions
  },
  name: 'DataCard',
  props: {
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
      return store.state.Card.data.columns
    },
    entries()
    {
      return store.state.Card.data.entries

    },
    visible()
    {
      return store.state.Card.data.visible
    },
    types()
    {
      return store.state.Card.data.types
    },
    crud()
    {
      return store.state.Card.data.crud
    }
  },
  data (){
    return {
      showEntries: [15,20,25,30,35,40,50,75,100],
      pagination: 5,
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

      if(this.pagination >= this.entries.length)
      {
        this.visibleEntries = this.entries
      }
      else if(this.entries.length >= 1)
      {
        this.visibleEntries = this.entries.slice((current * this.pagination) - this.pagination,(current * this.pagination))
      }
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
      var keys = Object.keys(this.types);
      return keys.includes(column)
    },
   },
   mounted()
   {
    this.changePage(this.currentPage)
   }
});
</script>


<style scoped>

/*modal*/
.glass-container
{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
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

/*Content*/

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
</style>
