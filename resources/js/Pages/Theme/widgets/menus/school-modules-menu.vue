<template>
      <navigation-bar
            :vNavClasses="'nav'"
            :menuItems="[
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-rocket menu-icon ' + Theme.key + '-text-color',    
                  title: 'Installation',
                  link: 'installer',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-brain menu-icon ' + Theme.key + '-text-color',
                  title: 'Inteli',
                  link: 'inteli',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-tachometer-alt fa-2x menu-icon ' + Theme.key + '-text-color',
                  title: 'Dashboard',
                  link: 'dashboard',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-plus menu-icon ' + Theme.key + '-text-color',
                  title: 'Admission',
                  link: 'admission',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-graduation-cap menu-icon ' + Theme.key + '-text-color',
                  title: 'Academics',
                  link: 'academic',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-clock menu-icon ' + Theme.key + '-text-color',
                  title: 'Timetable',
                  link: 'timetable',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-pencil-alt menu-icon ' + Theme.key + '-text-color',
                  title: 'Exams',
                  link: 'exam',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-chalkboard-teacher menu-icon ' + Theme.key + '-text-color',
                  title: 'Staff',
                  link: 'staff',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-book-open menu-icon ' + Theme.key + '-text-color',
                  title: 'Library',
                  link: 'library',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-globe menu-icon ' + Theme.key + '-text-color',
                  title: 'Online Classes',
                  link: 'dashboard',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-file-powerpoint menu-icon ' + Theme.key + '-text-color',
                  title: 'E-Learning',
                  link: 'dashboard',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-microscope menu-icon ' + Theme.key + '-text-color',
                  title: 'Research Center',
                  link: 'dashboard',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-warehouse menu-icon ' + Theme.key + '-text-color',
                  title: 'Inventory',
                  link: 'inventory',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-coins menu-icon ' + Theme.key + '-text-color',
                  title: 'Finance',
                  link: 'finance',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-graduate menu-icon ' + Theme.key + '-text-color',
                  title: 'Careers',
                  link: 'career',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-users menu-icon ' + Theme.key + '-text-color',
                  title: 'Teams',
                  link: 'team',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-rss menu-icon ' + Theme.key + '-text-color',
                  title: 'Communication',
                  link: 'communication',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-table menu-icon ' + Theme.key + '-text-color',
                  title: 'Form',
                  link: 'form',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-photo-video menu-icon ' + Theme.key + '-text-color',
                  title: 'Multimedia',
                  link: 'resource',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-tools menu-icon ' + Theme.key + '-text-color',
                  title: 'Config',
                  link: 'config',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                }, 
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-shield-alt menu-icon ' + Theme.key + '-text-color',
                  title: 'Security',
                  link: 'security',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: '',
                  nav_link_classes: ''
                }, 
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-robot menu-icon ' + Theme.key + '-text-color',
                  title: 'Ai',
                  link: 'ai',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: '',
                  nav_link_classes: ''
                }, 
                {
                  component: 'h5',
                  icon_classes: '',
                  title: 'Portal',
                  link: '',
                  prop_container_classes: '',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: 'ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6',
                  nav_link_classes: 'mt-3'
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-shield menu-icon ' + Theme.key + '-text-color',
                  title: 'Staff',
                  link: 'portal-staff',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-graduate menu-icon ' + Theme.key + '-text-color',
                  title: 'Student',
                  link: 'portal-student',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user menu-icon ' + Theme.key + '-text-color',
                  title: 'Guardian',
                  link: 'portal-guardian',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-school menu-icon ' + Theme.key + '-text-color',
                  title: 'School',
                  link: 'portal-school',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: '',
                  nav_link_classes: ''
                },
            ]"
      >
      </navigation-bar>
</template>

<script>
    import { defineComponent, ref, inject  } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import NavigationBar from "../../../inteli/ui/components/navs/NavigationBar.vue"

    export default defineComponent({
        components: {
            Link,
            NavigationBar
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
    })
</script>

<style scoped>

</style>
