<template>
  <app-dash
          :display="Display">
    <component
      :is="Module">
    </component>
  </app-dash>
</template>

<script>
    import { defineComponent, ref, reactive, provide } from 'vue'
    import {store} from "../../../store/store.js"
    import AppDash from '../widgets/AppDash.vue'

    import Dash from '../widgets/Dash.vue'
   
    import Installer from '../../inteli_installer/ui/windows/Installer.vue'
     import Inteli from '../../inteli/ui/windows/Inteli.vue'
    import Admission from '../../inteli_admission/ui/windows/Admission.vue'
    import Academic from '../../inteli_academic/ui/windows/Academic.vue'
    import Timetable from '../../inteli_timetable/ui/windows/Timetable.vue'
    import Exam from '../../inteli_exam/ui/windows/Exam.vue'
    import Staff from '../../inteli_staff/ui/windows/Staff.vue'
    import Library from '../../inteli_library/ui/windows/Library.vue'
    import Communication from '../../inteli_communication/ui/windows/Communication.vue'
    import Career from '../../inteli_career/ui/windows/Career.vue'
    import Team from '../../inteli_team/ui/windows/Team.vue'
    import Inventory from '../../inteli_inventory/ui/windows/Inventory.vue'
    import Finance from '../../inteli_finance/ui/windows/Finance.vue'
    import Form from '../../inteli_form/ui/windows/Form.vue'
    import MultiMedia from '../../inteli_resource/ui/windows/MultiMedia.vue'
    import Config from '../../inteli_config/ui/windows/Config.vue'
    import Guardian from '../../inteli_portal/ui/windows/Guardian.vue'
    import School from '../../inteli_portal/ui/windows/School.vue'
    import Student from '../../inteli_portal/ui/windows/Student.vue'
    import StaffPortal from '../../inteli_portal/ui/windows/StaffPortal.vue'
    import Security from '../../inteli_security/ui/windows/Security.vue'
    import AI from '../../inteli_ai/ui/windows/AI.vue'
    


    export default defineComponent({
        components:
        {
          AppDash,
          Dash,
          Installer,
          Inteli,
          Admission,
          Academic,
          Timetable,
          Exam,
          Staff,
          Library,
          Communication,
          Career,
          Team,
          Inventory,
          Finance,
          Form,
          MultiMedia,
          Config,
          Guardian,
          School,
          Student,
          StaffPortal,
          Security,
          AI
        },
        setup(props,context)
        {    
            var Module = ref(context.attrs.module)
            var Display = ref(context.attrs.display)

            provide("Theme", store.state.Application.Theme);

            console.log("props",context.attrs)

            return { 
              Module, 
              Display 
              }  
        },
        computed: {
           Theme()
           {
            return store.state.Application.Theme;
          }
        },
        watch: {
          Theme: (val, oldVal) => {
            document.getElementById('app-body').classList.add(val.key + '-gradient');
          }
        },
        mounted()
        {
          document.getElementById('app-body').classList.add(this.Theme.key + '-gradient');
        }
    })
</script>
