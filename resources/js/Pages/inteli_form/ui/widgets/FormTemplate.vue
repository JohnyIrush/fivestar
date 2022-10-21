<template>
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
    <main-modal 
         @selectedListItem="selectedListItem">
   </main-modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import {store} from "../../../../store/store.js"

    import FormBuilder from '../widgets/FormBuilder.vue'

    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

    export default defineComponent({
        components: {
          FormBuilder,
          MainModal,
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
