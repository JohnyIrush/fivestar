<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'FinanceDash',
      widget_component_path: '../../inteli_finance/ui/widgets/FinanceDash.vue'
     },
     {
      widget_title: 'Account',
      widget_tab_icon_classes: 'fas fa-piggy-bank fa-2x',
            widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Account',
      widget_component_path: '../../inteli_finance/ui/widgets/Account.vue'
     },
     {
      widget_title: 'Services',
      widget_tab_icon_classes: 'fas fa-briefcase fa-2x',
            widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Service',
      widget_component_path: '../../inteli_finance/ui/widgets/Service.vue'
     },
     {
      widget_title: 'Fees',
      widget_tab_icon_classes: 'fas fa-money-bill fa-2x',
            widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Fee',
      widget_component_path: '../../inteli_finance/ui/widgets/Fee.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
            widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'FinanceSetting',
      widget_component_path: '../../inteli_finance/ui/widgets/FinanceSetting.vue'
     },

   ]">
  </module-container>
 <modal></modal>
</template>

<script>

import { defineComponent, ref, inject } from 'vue'

import {store} from "../../../../store/store.js"

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
        data() {
            return {
                statistics: [],
            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getStatistics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.statistics = response.data
                })
            },
        },
        mounted()
        {

        },
    })
</script>


<style scoped>
</style>
