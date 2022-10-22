<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Details',
      widget_tab_icon_classes: 'fa fa-user fa-2x',
      widget_tab_button_classes: '',
      widget_component_name: 'StaffDetail',
      widget_component_path: '../../inteli_portal/ui/widgets/guardian/StaffDetail.vue'
     },
     {
      widget_title: 'Academics',
      widget_tab_icon_classes: 'fa fa-graduation-cap fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'StaffAcademic',
      widget_component_path: '../../inteli_portal/ui/widgets/guardian/StaffAcademic.vue'
     },
     {
      widget_title: 'Occupation',
      widget_tab_icon_classes: 'fas fa-briefcase fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'StaffOccupation',
      widget_component_path: '../../inteli_portal/ui/widgets/guardian/StaffOccupation.vue'
     },
     {
      widget_title: 'Finance',
      widget_tab_icon_classes: 'fas fa-coins fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'SchoolFinance',
      widget_component_path: '../../inteli_portal/ui/widgets/guardian/StaffFinance.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'StaffSetting',
      widget_component_path: '../../inteli_portal/ui/widgets/guardian/StaffSetting.vue'
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
        data() {
            return {
                details: []
            }
        },

        methods: {
            getProfile()
            {

                axios.get("/portal/school/details")
                .then((response)=>{
                    this.details = response.data
                    console.log(this.details)
                })
            }
        },
        mounted(){
            this.getProfile()
        },
    })
</script>


<style scoped>


.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
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
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;*/
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}
</style>
