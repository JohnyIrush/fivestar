<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'ConfigDash',
      widget_component_path: '../../inteli_config/ui/widgets/ConfigDash.vue'
     },
     {
      widget_title: 'Tables',
      widget_tab_icon_classes: 'fas fa-table fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'ExamSetting',
      widget_component_path: '../../inteli_config/ui/widgets/Tables.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'ExamSetting',
      widget_component_path: '../../inteli_config/ui/widgets/ConfigSetting.vue'
     },
   ]">
  </module-container>
</template>

<script>

    import { defineComponent, ref, inject } from 'vue'

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

    export default defineComponent({
        components: {
          ModuleContainer
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
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

</style>
