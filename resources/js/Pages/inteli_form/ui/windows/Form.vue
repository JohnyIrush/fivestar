<template>
  <div class="row">
    <div class="col-12">
     <div 
        :class="columnSize">
        <tab-pane
          :orientation="'vertical'">
           <tab title="Templates" 
                component="TabButton"
                icon_classes="fas fa-th fa-2x"
                tab_button_classes="''">
          <!--START TEMPLATES CONTAINER -->
          <div class="glass-content">
            <!--START TEMPLATES NAVBAR -->
            <div class="row">
              <div class="col-12">
                <div class="glass-content mt-3 mb-3  p-4">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="template-search">
                      <i class="fas fa-search fa-2x"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="template-search">
                  </div>
                </div>
              </div>
            </div>
            <!--END TEMPLATES NAVBAR -->
            <!--START TEMPLATES BODY -->
            <div class="row">
              <div class="col-12">
                <div class="glass-content">
                  <div class="row">
                    <div class="col-3" v-for="form in formTemplates" :key="form.id">
                      <img :src="form.image">
                      <p>{{form.title}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--END TEMPLATES BODY -->
          </div>
          <!--END TEMPLATES CONTAINER -->
           </tab>
           <tab title="Builder" 
                component="TabButton"
                icon_classes="fas fa-plus fa-2x"
                tab_button_classes="mt-6">
         <div class="row" >
          <div class="col-12 mt-3 mb-3  p-4">
           <div class="d-flex flex-row glass-content">
                 <i class="fas fa-palette fa-2x mr-3"></i>
                 <i class="fas fa-eye fa-2x mr-3"></i>
                 <i class="fas fa-undo fa-2x mr-3"></i>
                 <i class="fas fa-redo fa-2x mr-3"></i>
                 <i class="fas fa-share fa-2x"></i>
           </div>
          </div>
         </div>
         <form-builder 
           :Mode="true"
           :formDetails="
                {
                  id: '',
                  user_id: '',
                  title: '',
                  description: '',
                  cover: '',
                  image: '',
                  sections:{

                  },
              }"
            :SelectedInputType="selectedListItemData"
           > 
          </form-builder>
           </tab>
           <tab title="Settings" 
                component="TabButton"
                icon_classes="fas fa-cogs fa-2x"
                tab_button_classes="mt-6">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Platform Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                       </div>
                     </li>
                   </ul>
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0 pb-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
           </tab>
        </tab-pane>
     </div>
    </div>
  </div>
    <main-modal 
         @selectedListItem="selectedListItem">
   </main-modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import {store} from "../../../../store/store.js"

    import FormBuilder from '../widgets/FormBuilder.vue'

    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
        components: {
          FormBuilder,
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
