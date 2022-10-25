<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'CommunicationDash',
      widget_component_path: '../../inteli_config/ui/widgets/CommunicationDash.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'CommunicationSetting',
      widget_component_path: '../../inteli_config/ui/widgets/CommunicationSetting.vue'
     },
   ]">
  </module-container>
</template>


<script>
    import { defineComponent, computed, inject, ref } from 'vue';
    import { Head, Link, usePage } from '@inertiajs/inertia-vue3';

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
    })
</script>
