<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'MultimediaDash',
      widget_component_path: '../../inteli_resource/ui/widgets/MultimediaDash.vue'
     },
     {
      widget_title: 'File Manager',
      widget_tab_icon_classes: 'fas fa-file-alt fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'FileManager',
      widget_component_path: '../../inteli_resource/ui/widgets/FileManager.vue'
     },
     {
      widget_title: 'Gallery',
      widget_tab_icon_classes: 'fas fa-photo-video fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'MultimediaDash',
      widget_component_path: '../../inteli_resource/ui/widgets/Gallery.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'TeamSetting',
      widget_component_path: '../../inteli_resource/ui/widgets/MultimediaSetting.vue'
     },

   ]">
  </module-container>
</template>

<script>
    import { defineComponent, ref, inject } from 'vue'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

    export default defineComponent({
        name: "MultiMedia",
        props: {
          columnSize: {
            type: String, // String, Number, Boolean, Function, Object, Array
            default: 'col-12'
          }
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
        components: {
            TabPane,
            Tab,
            ModuleContainer,
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
