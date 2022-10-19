<template>
 <div class="row" >
  <div 
     :class="columnSize">
     <tab-pane
       :orientation="'vertical'"
     >
        <tab title="tabs" 
             component="TabButton"
             icon_classes="''">
             Tabs
        </tab>
        <tab title="tables" 
             component="TabButton"
             icon_classes="''">
             Tables
        </tab>
        <tab title="forms" 
             component="TabButton"
             icon_classes="''">
             Forms
        </tab>
        <tab title="navs" 
             component="TabButton"
             icon_classes="''">
             Navs
        </tab>
        <tab title="modals" 
             component="TabButton"
             icon_classes="''">
             Modals
        </tab>
     </tab-pane>
  </div>
 </div>
</template>

<script>
    import { defineComponent } from 'vue'


    import {store} from "../../../../store/store.js"

    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
        components: {
          MainModal,
          TabPane,
          Tab
        },
        computed:{

        },
        data() {
            return {
              formTemplates: {},
              Deltadata: {deltaname:'deltaname'},
              selectedListItemData: {}
            }

        },
        methods: {
            selectedListItem(event)
            {
              alert("selected")
              this.selectedListItemData = event
                console.log("Modal",event)
                //this.$emit("selectedListItem", event)
            },
          getRequest(url, variable = '')
          {
           axios.get(url)
           .then((response)=>{
            if (variable.length !== 0)
            {
              this[variable] = response.data
            }
           })
          },
          postRequest(url, data = {}, variable = '')
          {
           axios.post(url, data)
           .then((response)=>{
            if (variable.length !== 0)
            {
              this[variable] = response.data
            }
            console.log('form',this.form,'response',response.data)
           })
          },
        },
        mounted()
        {
          this.getRequest('form/template/index', "formTemplates")
        },
        created()
        {

        },
        watch: {

        },
    })
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
    /*border-radius: 20px;*/
    justify-content: space-between;
}


.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    /*border-radius: 20px;*/
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    /*border-radius: 20px;*/
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}


.tab-content {
  width: 100% !important; 
}
</style>
