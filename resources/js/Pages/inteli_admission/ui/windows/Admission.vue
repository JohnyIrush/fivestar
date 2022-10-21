<template>
  <div class="row">
    <div class="col-12">
          <menu-window
            :menuTitle="'Admission Menu'"
            :menuDetails="[
                {
                  component: 'ModalButton',
                  icon_classes: 'fas fa-table fas fa-wrench',
                  title: 'Forms',
                  link: '',
                },
            ]"
            :menu_item_size="'col-2'"
            :menu_item_icon_size="''"
            :menu_item_title_classes="'text-white'"
            :menu_window_background_image="'/theme/assets/img/curved-images/curved0.jpg'"
            :settingSelectOptions="[
               {
                name: 'Application Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'application',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Interview Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'interview',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Admission Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'admission',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Leave Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'leave',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Expell Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'expell',
                 component: 'form',
                 value: 'details'
               }
               },
               {
                name: 'Ban Form',
                datapath: 'form/template/list',
                component: 'SelectInput',
                settings :
                {
                 package: 'inteliadmission',
                 widget: 'ban',
                 component: 'form',
                 value: 'id'
                }
               }
            ]"

          >
          </menu-window>
    </div>
  </div>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: '',
      widget_component_name: 'AdmissionDash',
      widget_component_path: '../../inteli_admission/ui/widgets/AdmissionDash.vue'
     },
     {
      widget_title: 'Application',
      widget_tab_icon_classes: 'fas fa-mail-bulk fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Application',
      widget_component_path: '../../inteli_admission/ui/widgets/Application.vue'
     },
     {
      widget_title: 'Interview',
      widget_tab_icon_classes: 'fas fa-sitemap fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Interview',
      widget_component_path: '../../inteli_admission/ui/widgets/Interview.vue'
     },
     {
      widget_title: 'Admission',
      widget_tab_icon_classes: 'fas fa-sticky-note fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Admission',
      widget_component_path: '../../inteli_admission/ui/widgets/Admission.vue'
     },
     {
      widget_title: 'Leave',
      widget_tab_icon_classes: 'fas fa-sign-in-alt fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Leave',
      widget_component_path: '../../inteli_admission/ui/widgets/Leave.vue'
     },
     {
      widget_title: 'Expell',
      widget_tab_icon_classes: 'fas fa-user-times fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Expell',
      widget_component_path: '../../inteli_admission/ui/widgets/Expell.vue'
     },
     {
      widget_title: 'Ban',
      widget_tab_icon_classes: 'fas fa-ban fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Ban',
      widget_component_path: '../../inteli_admission/ui/widgets/Ban.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'AdmissionSetting',
      widget_component_path: '../../inteli_ai/ui/widgets/AdmissionSetting.vue'
     },
   ]">
  </module-container>
</template>

<script>

    import { defineComponent, ref } from 'vue';

    import {store} from "../../../../store/store.js"

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

    export default defineComponent({
        components: {
            ModuleContainer
        },
        setup(props,context)
        { 
            var Module = ref(context.module) 

            return { Module }  
        }
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

.fs-8
{
  font-size: 10px !important;
}


.tab-content {
  width: 100% !important; 
}
</style>
