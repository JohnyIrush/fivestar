<template>
  <div class="row">
    <div class="col-12">
      <tab-pane 
        @changeTab="updateTab"
        :orientation="'vertical'">
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
</template>

<script>
    import { defineComponent, defineAsyncComponent, createApp, computed} from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    import TabPane from '../../inteli/ui/components/tabs/TabPane.vue'
    import Tab from '../../inteli/ui/components/tabs/Tab.vue'

    //Staff
    import StaffDash from '../../inteli_staff/ui/widgets/StaffDash.vue'
    import Staff from '../../inteli_staff/ui/widgets/Staff.vue'
    import StaffCategory from '../../inteli_staff/ui/widgets/StaffCategory.vue'
    import Department from '../../inteli_staff/ui/widgets/Department.vue'
    import Occupation from '../../inteli_staff/ui/widgets/Occupation.vue'
    import StaffSetting from '../../inteli_staff/ui/widgets/StaffSetting.vue'

    //Library
    import LibraryDash from '../../inteli_library/ui/widgets/LibraryDash.vue'
    import Book from '../../inteli_library/ui/widgets/Book.vue'
    import Librarian from '../../inteli_library/ui/widgets/Librarian.vue'
    import BookIssue from '../../inteli_library/ui/widgets/BookIssue.vue'
    import BookCategory from '../../inteli_library/ui/widgets/BookCategory.vue'
    import Author from '../../inteli_library/ui/widgets/Author.vue'
    import Publisher from '../../inteli_library/ui/widgets/Publisher.vue'
    import LibrarySetting from '../../inteli_library/ui/widgets/LibrarySetting.vue'

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

    //Security
    import SecurityDash from '../../inteli_security/ui/widgets/SecurityDash.vue'
    import SecuritySetting from '../../inteli_security/ui/widgets/SecuritySetting.vue'

    export default defineComponent({
        props: {
            ModuleDetails:{
                type: Array,
            }
        },
        components: {
            Link,
            TabPane,
            Tab,
            //staff widgets
            StaffDash,
            Staff,
            StaffCategory,
            Occupation,
            StaffSetting,
            //staff widgets
            LibraryDash,
            Book,
            Librarian,
            BookIssue,
            BookCategory,
            Author,
            Publisher,
            LibrarySetting,
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
            Venue,
            TimetableSetting,
            //team widgets
            User,
            Task,
            PermissionRole,
            TeamSetting,
            //security
            SecurityDash,
            SecuritySetting,
        },
        setup(props,{emit})
        {   
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
