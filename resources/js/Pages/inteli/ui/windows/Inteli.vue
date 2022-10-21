<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Tabs',
      widget_tab_icon_classes: '',
      widget_tab_button_classes: '',
      widget_component_name: '',
      widget_component_path: '../../inteli/ui/widgets/.vue'
     },
     {
      widget_title: 'Tables',
      widget_tab_icon_classes: '',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: '',
      widget_component_path: '../../inteli/ui/widgets/vue'
     },
     {
      widget_title: 'Forms',
      widget_tab_icon_classes: '',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: '',
      widget_component_path: '../../inteli/ui/widgets/.vue'
     },
     {
      widget_title: 'Navs',
      widget_tab_icon_classes: 'fas fa-sticky-note fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: '',
      widget_component_path: '../../inteli/ui/widgets/.vue'
     },
     {
      widget_title: 'Modals',
      widget_tab_icon_classes: 'as fa-user-friends fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: '',
      widget_component_path: '../../inteli/ui/widgets/.vue'
     },
   ]">
  </module-container>
</template>

<script>
    import { defineComponent } from 'vue'

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

    export default defineComponent({
        name: "Inteli",
        props: {
          columnSize: {
            type: String, // String, Number, Boolean, Function, Object, Array
            default: 'col-12'
          }
        },
        components: {
            ModuleContainer
        },
        data() {
            return {

            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
        },
        mounted()
        {

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

.avatar-size
{
    height: 150px !important;
    width: 150px !important;
}

</style>
