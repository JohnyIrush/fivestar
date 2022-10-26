<template>
      <navigation-bar
            :vNavClasses="'nav'"
            :menuItems="[
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-rocket menu-icon',      
                  title: 'Installation',
                  link: 'installer',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-brain menu-icon',
                  title: 'Inteli',
                  link: 'inteli',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-plus menu-icon',
                  title: 'Dashboard',
                  link: 'dashboard',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-plus menu-icon',
                  title: 'Admission',
                  link: 'admission',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-graduation-cap menu-icon',
                  title: 'Academics',
                  link: 'academic',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-clock menu-icon',
                  title: 'Timetable',
                  link: 'timetable',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-pencil-alt menu-icon',
                  title: 'Exams',
                  link: 'exam',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-chalkboard-teacher menu-icon',
                  title: 'Staff',
                  link: 'staff',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-book-open menu-icon',
                  title: 'Library',
                  link: 'library',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-globe menu-icon',
                  title: 'Online Classes',
                  link: 'virtual-reality',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-file-powerpoint menu-icon',
                  title: 'E-Learning',
                  link: 'virtual-reality',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-microscope menu-icon',
                  title: 'Research Center',
                  link: 'virtual-reality',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-warehouse menu-icon',
                  title: 'Inventory',
                  link: 'inventory',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-coins menu-icon',
                  title: 'Finance',
                  link: 'finance',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-user-graduate menu-icon',
                  title: 'Careers',
                  link: 'career',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-users menu-icon',
                  title: 'Teams',
                  link: 'team',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-rss menu-icon',
                  title: 'Communication',
                  link: 'communication',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-table menu-icon',
                  title: 'Form',
                  link: 'form',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-photo-video menu-icon',
                  title: 'Multimedia',
                  link: 'resource',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-tools menu-icon',
                  title: 'Config',
                  link: 'config',
                  prop_container_classes: ' ',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1 menu-title ' + Theme.key + '-text-color' ,
                  component_classes: ''
                }, 
                {
                  component: 'Link',
                  icon_classes: 'fa-2x fas fa-shield-alt menu-icon',
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
                  icon_classes: 'fa-2x fas fa-robot menu-icon',
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
                  icon_classes: 'fa-2x fas fa-user-shield menu-icon',
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
                  icon_classes: 'fa-2x fas fa-user-graduate menu-icon',
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
                  icon_classes: 'fa-2x fas fa-user menu-icon',
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
                  icon_classes: 'fa-2x fas fa-school menu-icon',
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
