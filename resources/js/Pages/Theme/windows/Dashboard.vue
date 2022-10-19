<template>
  <app-dash
          :display="Display">
    <component
      :is="Module">
    </component>
  </app-dash>
</template>

<script>
    import { defineComponent, ref, reactive } from 'vue'
    import AppDash from '../widgets/AppDash'

    import Dash from '../widgets/Dash'
    import Installer from '../../inteli_installer/ui/windows/Installer'
    import Inteli from '../../inteli/ui/windows/Inteli'
    import Admission from '../../inteli_admission/ui/windows/Admission'
    import Academic from '../../inteli_academic/ui/windows/Academic'
    import Timetable from '../../inteli_timetable/ui/windows/Timetable'
    import Exam from '../../inteli_exam/ui/windows/Exam'
    import Staff from '../../inteli_staff/ui/windows/Staff'
    import Library from '../../inteli_library/ui/windows/Library'
    import Communication from '../../inteli_communication/ui/windows/Communication'
    import Career from '../../inteli_career/ui/windows/Career'
    import Team from '../../inteli_team/ui/windows/Team'
    import Inventory from '../../inteli_inventory/ui/windows/Inventory'
    import Finance from '../../inteli_finance/ui/windows/Finance'
    import Form from '../../inteli_form/ui/windows/Form'
    import MultiMedia from '../../inteli_resource/ui/windows/MultiMedia'
    import Config from '../../inteli_config/ui/windows/Config'
    import Guardian from '../../inteli_portal/ui/windows/Guardian'
    import School from '../../inteli_portal/ui/windows/School'
    import Student from '../../inteli_portal/ui/windows/Student'
    import StaffPortal from '../../inteli_portal/ui/windows/StaffPortal'
    import Security from '../../inteli_security/ui/windows/Security'
    import AI from '../../inteli_ai/ui/windows/AI'


    export default defineComponent({
        components:
        {
          AppDash,
          Dash,
          Installer,
          Inteli,
          Academic,
          Admission,
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


            console.log("props",context.attrs)

            return { 
              Module, 
              Display 
              }  
        }
    })
</script>
