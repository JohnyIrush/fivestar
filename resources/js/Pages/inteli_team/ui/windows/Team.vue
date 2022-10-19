<template>
 <div class="row" >
  <div 
     :class="columnSize">
     <tab-pane
       :orientation="'vertical'"
     >
        <tab title="Users" 
             component="TabButton">
             <user></user>
        </tab>
        <tab title="Tasks" 
             component="TabButton">
             <task></task>
        </tab>
        <tab title="Roles" 
             component="TabButton">
             <permission-role></permission-role>
        </tab>
     </tab-pane>
  </div>
 </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    import User from '../widgets/User.vue'
    import Task from '../widgets/Task.vue'
    import PermissionRole from '../widgets/PermissionRole.vue'

    export default defineComponent({
        name: "Inteli",
        props: {
          columnSize: {
            type: String, // String, Number, Boolean, Function, Object, Array
            default: 'col-12'
          }
        },
        components: {
            TabPane,
            Tab,
            User,
            Task,
            PermissionRole
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
