<template>
  <div class="row">
    <div class="col-12">
      <tab-pane 
        @changeTab="updateTab"
        :orientation="'vertical'"
        :tabNavClasses="Theme.key + '-section'"
        :tabPaneClasses="Theme.key + '-card'">
        <tab 
            v-for="Module in ModuleDetails"
            :key="Module"
            :title="Module.widget_title" 
            component="TabButton"
            :icon_classes="Module.widget_tab_icon_classes"
            :tab_button_classes="Module.widget_tab_button_classes">
            <component
                 :is="Module.widget_component_name">
            </component>      
        </tab>
      </tab-pane>
    </div>
  </div>
  <main-modal></main-modal>
</template>

<script>
    import { defineComponent, defineAsyncComponent, createApp, computed, ref, inject} from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    import TabPane from '../../inteli/ui/components/tabs/TabPane.vue'
    import Tab from '../../inteli/ui/components/tabs/Tab.vue'

    import MainModal from '../../inteli/ui/components/modals/MainModal.vue'

    //Inteli
    import InteliDash from '../../inteli/ui/widgets/InteliDash.vue'
    import Tables from '../../inteli/ui/widgets/Tables.vue'
    import InteliSetting from '../../inteli/ui/widgets/InteliSetting.vue'

    //Admission
    import AdmissionDash from '../../inteli_admission/ui/widgets/AdmissionDash.vue'
    import Interview from '../../inteli_admission/ui/widgets/Interview.vue'
    import Application from '../../inteli_admission/ui/widgets/Application.vue'
    import Admission from '../../inteli_admission/ui/widgets/Admission.vue'
    import Enrollment from '../../inteli_admission/ui/widgets/Enrollment.vue'
    import Leave from '../../inteli_admission/ui/widgets/Leave.vue'
    import Ban from '../../inteli_admission/ui/widgets/Ban.vue'
    import Transfer from '../../inteli_admission/ui/widgets/Transfer.vue'
    import Expell from '../../inteli_admission/ui/widgets/Expell.vue'
    import AdmissionSetting from '../../inteli_admission/ui/widgets/AdmissionSetting.vue'

    //Academic
    import AcademicDash from '../../inteli_academic/ui/widgets/AcademicDash.vue'
    import Attendance from '../../inteli_academic/ui/widgets/Attendance.vue'
    import Assignment from '../../inteli_academic/ui/widgets/Assignment.vue'
    import Level from '../../inteli_academic/ui/widgets/Level.vue'
    import Section from '../../inteli_academic/ui/widgets/Section.vue'
    import Stream from '../../inteli_academic/ui/widgets/Stream.vue'
    import Sport from '../../inteli_academic/ui/widgets/Sport.vue'
    import Subject from '../../inteli_academic/ui/widgets/Subject.vue'
    import LessonPlanner from '../../inteli_academic/ui/widgets/LessonPlanner.vue'
    import Club from '../../inteli_academic/ui/widgets/Club.vue'
    import AcademicSetting from '../../inteli_academic/ui/widgets/AcademicSetting.vue'

    //Exams
    import ExamDash from '../../inteli_exam/ui/widgets/ExamDash.vue'
    import Exam from '../../inteli_exam/ui/widgets/Exam.vue'
    import Merit from '../../inteli_exam/ui/widgets/Merit.vue'
    import Grading from '../../inteli_exam/ui/widgets/Grading.vue'
    import ExamSetting from '../../inteli_exam/ui/widgets/ExamSetting.vue'

    //Staff
    import StaffDash from '../../inteli_staff/ui/widgets/StaffDash.vue'
    import Staff from '../../inteli_staff/ui/widgets/Staff.vue'
    import StaffCategory from '../../inteli_staff/ui/widgets/StaffCategory.vue'
    import Department from '../../inteli_staff/ui/widgets/Department.vue'
    import Occupation from '../../inteli_staff/ui/widgets/Occupation.vue'
    import StaffSetting from '../../inteli_staff/ui/widgets/StaffSetting.vue'

    //Finance
    import FinanceDash from '../../inteli_finance/ui/widgets/FinanceDash.vue'
    import Account from '../../inteli_finance/ui/widgets/Account.vue'
    import Service from '../../inteli_finance/ui/widgets/Service.vue'
    import Fee from '../../inteli_finance/ui/widgets/Fee.vue'
    import FinanceSetting from '../../inteli_finance/ui/widgets/FinanceSetting.vue'


    //Library
    import LibraryDash from '../../inteli_library/ui/widgets/LibraryDash.vue'
    import Book from '../../inteli_library/ui/widgets/Book.vue'
    import Librarian from '../../inteli_library/ui/widgets/Librarian.vue'
    import Author from '../../inteli_library/ui/widgets/Author.vue'
    import BookIssue from '../../inteli_library/ui/widgets/BookIssue.vue'
    import BookCategory from '../../inteli_library/ui/widgets/BookCategory.vue'
    import Publisher from '../../inteli_library/ui/widgets/Publisher.vue'
    import LibrarySetting from '../../inteli_library/ui/widgets/LibrarySetting.vue'

    //Inventory
    import Inventory from '../../inteli_inventory/ui/widgets/Inventory.vue'
    import Purchase from '../../inteli_inventory/ui/widgets/Purchase.vue'
    import Report from '../../inteli_inventory/ui/widgets/Report.vue'
    import Warehouse from '../../inteli_inventory/ui/widgets/Warehouse.vue'
    import WarehouseManager from '../../inteli_inventory/ui/widgets/WarehouseManager.vue'
    import InventorySetting from '../../inteli_inventory/ui/widgets/InventorySetting.vue'

    //multimedia
    import MultimediaDash from '../../inteli_resource/ui/widgets/MultimediaDash.vue'
    import FileManager from '../../inteli_resource/ui/widgets/FileManager.vue'
    import Gallery from '../../inteli_resource/ui/widgets/Gallery.vue'
    import MultimediaSetting from '../../inteli_resource/ui/widgets/MultimediaSetting.vue'

    //Timetable
    import TimetableDash from '../../inteli_timetable/ui/widgets/TimetableDash.vue'
    import Day from '../../inteli_timetable/ui/widgets/Day.vue'
    import Session from '../../inteli_timetable/ui/widgets/Session.vue'
    import Term from '../../inteli_timetable/ui/widgets/Term.vue'
    import Venue from '../../inteli_timetable/ui/widgets/Venue.vue'
    import TimetableSetting from '../../inteli_timetable/ui/widgets/TimetableSetting.vue'

    //Teams
    import User from '../../inteli_team/ui/widgets/User.vue'
    import Task from '../../inteli_team/ui/widgets/Task.vue'
    import PermissionRole from '../../inteli_team/ui/widgets/PermissionRole.vue'
    import TeamSetting from '../../inteli_team/ui/widgets/TeamSetting.vue'

    //Config
    import CommunicationDash from '../../inteli_communication/ui/widgets/CommunicationDash.vue'
    import CommunicationSetting from '../../inteli_communication/ui/widgets/CommunicationSetting.vue'

    //Forms
    import FormTemplate from '../../inteli_form/ui/widgets/FormTemplate.vue'
    import BuilderWidget from '../../inteli_form/ui/widgets/BuilderWidget.vue'
    import FormSetting from '../../inteli_form/ui/widgets/FormSetting.vue'

    //Security
    import SecurityDash from '../../inteli_security/ui/widgets/SecurityDash.vue'
    import SecuritySetting from '../../inteli_security/ui/widgets/SecuritySetting.vue'

    //Config
    import ConfigDash from '../../inteli_config/ui/widgets/ConfigDash.vue'
    import ThemeConfig from '../../inteli_config/ui/widgets/ThemeConfig.vue'
    import ConfigSetting from '../../inteli_config/ui/widgets/ConfigSetting.vue'

    //Career
    import CareerDash from '../../inteli_career/ui/widgets/CareerDash.vue'
    import CareerSetting from '../../inteli_career/ui/widgets/CareerSetting.vue'

    //Ai
    import AiDash from '../../inteli_ai/ui/widgets/AiDash.vue'
    import AiSetting from '../../inteli_ai/ui/widgets/AiSetting.vue'

    /*Social Portal*/
    import Show from '../../Profile/Show.vue'
    //Guardian
    import GuardianDetail from '../../inteli_portal/ui/widgets/guardian/GuardianDetail.vue'
    import GuardianAcademic from '../../inteli_portal/ui/widgets/guardian/GuardianAcademic.vue'
    import GuardianFinance from '../../inteli_portal/ui/widgets/guardian/GuardianFinance.vue'
    import GuardianSetting from '../../inteli_portal/ui/widgets/guardian/GuardianSetting.vue'

    //Student
    import StudentDetail from '../../inteli_portal/ui/widgets/student/StudentDetail.vue'
    import StudentAcademic from '../../inteli_portal/ui/widgets/student/StudentAcademic.vue'
    import StudentActivity from '../../inteli_portal/ui/widgets/student/StudentActivity.vue'
    import StudentFinance from '../../inteli_portal/ui/widgets/student/StudentFinance.vue'
    import StudentSetting from '../../inteli_portal/ui/widgets/student/StudentSetting.vue'


    //Staff
    import StaffDetail from '../../inteli_portal/ui/widgets/staff/StaffDetail.vue'
    import StaffAcademic from '../../inteli_portal/ui/widgets/staff/StaffAcademic.vue'
    import StaffOccupation from '../../inteli_portal/ui/widgets/staff/StaffOccupation.vue'
    import StaffFinance from '../../inteli_portal/ui/widgets/staff/StaffFinance.vue'
    import StaffPortalSetting from '../../inteli_portal/ui/widgets/staff/StaffPortalSetting.vue'


    //School
    import SchoolDetail from '../../inteli_portal/ui/widgets/school/SchoolDetail.vue'
    import SchoolAcademic from '../../inteli_portal/ui/widgets/school/SchoolAcademic.vue'
    import SchoolOccupation from '../../inteli_portal/ui/widgets/school/SchoolOccupation.vue'
    import SchoolFinance from '../../inteli_portal/ui/widgets/school/SchoolFinance.vue'
    import SchoolSetting from '../../inteli_portal/ui/widgets/school/SchoolSetting.vue'

    export default defineComponent({
        props: {
            ModuleDetails:{
                type: Array,
            }
        },
        components: {
            MainModal,
            Link,
            TabPane,
            Tab,
            //Inteli
            InteliDash,
            Tables,
            InteliDash,
            //Admission widget
            AdmissionDash,
            Application,
            Admission,
            Enrollment,
            Interview,
            Leave,
            Ban,
            Transfer,
            Expell,
            AdmissionSetting,
            //Academic widget
            AcademicDash,
            Assignment,
            Application,
            Attendance,
            Level,
            Section,
            Stream,
            Level, 
            Section, 
            Stream, 
            Sport, 
            Subject,
            LessonPlanner, 
            Club, 
            AcademicSetting,
            //Exam widget
            ExamDash,
            Exam,
            Merit,
            Grading,
            ExamSetting,
            //staff widgets
            StaffDash,
            Staff,
            StaffCategory,
            Occupation,
            StaffSetting,
            //finance widgets
            FinanceDash,
            Account,
            Service,
            Fee,
            FinanceSetting,
            //library
            LibraryDash,
            Book,
            Librarian,
            BookIssue,
            BookCategory,
            Author,
            Publisher,
            LibrarySetting,
            //inventory
            Inventory,
            Purchase,
            Report,
            Warehouse,
            WarehouseManager,
            InventorySetting,
            //multimedia
            MultimediaDash,
            FileManager,
            Gallery,
            MultimediaSetting,
            //timetable widgets
            TimetableDash,
            Day,
            Session,
            Department,
            Term,
            Venue,
            FormSetting,
            //team widgets
            User,
            Task,
            PermissionRole,
            TeamSetting,
            //Communication
            CommunicationDash,
            CommunicationSetting,
            //forms
            FormTemplate,
            BuilderWidget,
            TimetableSetting,
            //security
            SecurityDash,
            SecuritySetting,
            //config
            ConfigDash,
            ThemeConfig,
            ConfigSetting,
            //Career
            CareerDash,
            CareerSetting,
            //Ai
            AiDash,
            AiSetting,
            /*social portal widgets*/
            Show,
            //Guardian
            GuardianDetail,
            GuardianAcademic,
            GuardianFinance,
            GuardianSetting,
            //Student
            StudentDetail,
            StudentActivity,
            StudentAcademic,
            StudentFinance,
            StudentSetting,
            //Staff
            StaffDetail,
            StaffOccupation,
            StaffAcademic,
            StaffFinance,
            StaffPortalSetting,
            //School
            SchoolDetail,
            SchoolOccupation,
            SchoolAcademic,
            SchoolFinance,
            SchoolSetting,
        },
        setup(props,{emit})
        {   
          var Theme = ref(inject("Theme"));

          const widget = props.ModuleDetails[0];
          window.widget = widget


          function updateTab(event)
          {
              //widget = event;
              //console.log("update",event)
          }


          return { 
            updateTab,
            widget,
            Theme
          }  
        },
        methods: {
          importComponent(path) 
          {
          }
        },
        mounted()
        {

        }
    })
</script>

<style scoped>
main
{

    background: linear-gradient(purple, pink) !important;
    background-size: cover !important;
}
</style>
