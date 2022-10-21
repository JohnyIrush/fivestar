<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: '',
      widget_component_name: 'ExamDash',
      widget_component_path: '../../inteli_exam/ui/widgets/ExamDash.vue'
     },
     {
      widget_title: 'Exam',
      widget_tab_icon_classes: 'fas fa-paperclip fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Exam',
      widget_component_path: '../../inteli_exam/ui/widgets/Exam.vue'
     },
     {
      widget_title: 'Merits',
      widget_tab_icon_classes: 'fas fa-trophy',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Merit',
      widget_component_path: '../../inteli_exam/ui/widgets/Merit.vue'
     },
     {
      widget_title: 'Grading',
      widget_tab_icon_classes: 'fas fa-sort-alpha-up-alt',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Grading',
      widget_component_path: '../../inteli_exam/ui/widgets/Grading.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'ExamSetting',
      widget_component_path: '../../inteli_exam/ui/widgets/ExamSetting.vue'
     },

   ]">
  </module-container>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"

import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

export default defineComponent({
        components: {
            ModuleContainer
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
            this.getStatistics("academic/statistics")
        },
    })
</script>


<style scoped>

</style>
