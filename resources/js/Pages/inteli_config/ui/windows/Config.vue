<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: '',
      widget_component_name: 'ConfigDash',
      widget_component_path: '../../inteli_config/ui/widgets/ConfigDash.vue'
     },
     {
      widget_title: 'Theme',
      widget_tab_icon_classes: 'far fa-window-maximize fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'ThemeConfig',
      widget_component_path: '../../inteli_config/ui/widgets/ThemeConfig.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'ExamSetting',
      widget_component_path: '../../inteli_config/ui/widgets/ConfigSetting.vue'
     },
   ]">
  </module-container>
</template>

<script>

    import { defineComponent } from 'vue'

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

    export default defineComponent({
        components: {
          ModuleContainer
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
