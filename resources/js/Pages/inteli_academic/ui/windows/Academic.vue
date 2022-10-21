<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: '',
      widget_component_name: 'AdmissionDash',
      widget_component_path: '../../inteli_academic/ui/widgets/AcademicDash.vue'
     },
     {
      widget_title: 'Attendance',
      widget_tab_icon_classes: 'far fa-list-alt fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Attendance',
      widget_component_path: '../../inteli_academic/ui/widgets/Attendance.vue'
     },
     {
      widget_title: 'Assignment',
      widget_tab_icon_classes: 'fas fa-sticky-note fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Assignment',
      widget_component_path: '../../inteli_academic/ui/widgets/Assignment.vue'
     },
     {
      widget_title: 'Subject',
      widget_tab_icon_classes: 'fas fa-sticky-note fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Subject',
      widget_component_path: '../../inteli_academic/ui/widgets/Subject.vue'
     },
     {
      widget_title: 'Club',
      widget_tab_icon_classes: 'as fa-user-friends fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Club',
      widget_component_path: '../../inteli_academic/ui/widgets/Club.vue'
     },
     {
      widget_title: 'Sport',
      widget_tab_icon_classes: 'fas fa-baseball-ball fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Sport',
      widget_component_path: '../../inteli_academic/ui/widgets/Sport.vue'
     },
     {
      widget_title: 'Level',
      widget_tab_icon_classes: 'fas fa-level-up-alt fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Level',
      widget_component_path: '../../inteli_academic/ui/widgets/Level.vue'
     },
     {
      widget_title: 'Section',
      widget_tab_icon_classes: 'fas fa-stream fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Section',
      widget_component_path: '../../inteli_academic/ui/widgets/Section.vue'
     },
     {
      widget_title: 'Stream',
      widget_tab_icon_classes: 'fas fa-stream fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Stream',
      widget_component_path: '../../inteli_academic/ui/widgets/Stream.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'AdmissionSetting',
      widget_component_path: '../../inteli_ai/ui/widgets/AcademicSetting.vue'
     },
   ]">
  </module-container>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"

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


.tab-content {
  width: 100% !important; 
}
</style>
