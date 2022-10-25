<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'TimetableDash',
      widget_component_path: '../../inteli_timetable/ui/widgets/DashTimetable.vue'
     },
     {
      widget_title: 'Days',
      widget_tab_icon_classes: 'fas fa-cloud-sun fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Day',
      widget_component_path: '../../inteli_timetable/ui/widgets/Day.vue'
     },
     {
      widget_title: 'Sessions',
      widget_tab_icon_classes: 'fas fa-user-clock fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Session',
      widget_component_path: '../../inteli_timetable/ui/widgets/Session.vue'
     },
     {
      widget_title: 'Terms',
      widget_tab_icon_classes: 'fas fa-calendar fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Term',
      widget_component_path: '../../inteli_timetable/ui/widgets/Term.vue'
     },
     {
      widget_title: 'Venues',
      widget_tab_icon_classes: 'fas fa-school fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Venue',
      widget_component_path: '../../inteli_timetable/ui/widgets/Venue.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'TimetableSetting',
      widget_component_path: '../../inteli_timetable/ui/widgets/TimetableSetting.vue'
     },
   ]">
  </module-container>
 <main-modal></main-modal>
</template>

<script>

import { defineComponent, ref, inject } from 'vue'

import {store} from "../../../../store/store.js"

import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

export default defineComponent({
        components: {
            MainModal,
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
