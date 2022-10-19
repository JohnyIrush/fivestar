<template>
    <div class="collapse glass-content navbar-collapse m-2  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <navigation-bar
            :vNavClasses="'navbar-nav'"
            :menuItems="[
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rocket',
                  title: 'Installation',
                  link: 'installer',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-brain',
                  title: 'Inteli',
                  link: 'inteli',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-plus',
                  title: 'Dashboard',
                  link: 'dashboard',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-plus',
                  title: 'Admission',
                  link: 'admission',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-graduation-cap',
                  title: 'Academics',
                  link: 'academic',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-clock',
                  title: 'Timetable',
                  link: 'timetable',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-pencil-alt',
                  title: 'Exams',
                  link: 'exam',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-chalkboard-teacher',
                  title: 'Staff',
                  link: 'staff',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-book-open',
                  title: 'Library',
                  link: 'library',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-globe',
                  title: 'Online Classes',
                  link: 'virtual-reality',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-file-powerpoint',
                  title: 'E-Learning',
                  link: 'virtual-reality',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-microscope',
                  title: 'Research Center',
                  link: 'virtual-reality',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-warehouse',
                  title: 'Inventory',
                  link: 'inventory',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-coins',
                  title: 'Finance',
                  link: 'finance',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-graduate',
                  title: 'Careers',
                  link: 'career',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-users',
                  title: 'Teams',
                  link: 'team',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rss',
                  title: 'Communication',
                  link: 'communication',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-table',
                  title: 'Form',
                  link: 'form',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-photo-video',
                  title: 'Multimedia',
                  link: 'resource',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-tools',
                  title: 'Config',
                  link: 'config',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: ''
                }, 
                {
                  component: 'h5',
                  icon_classes: '',
                  title: 'Portal',
                  link: '',
                  prop_container_classes: '',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: 'ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6',
                  nav_link_classes: 'mt-3'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-shield',
                  title: 'Staff',
                  link: 'portal-staff',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-graduate',
                  title: 'Student',
                  link: 'portal-student',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user',
                  title: 'Guardian',
                  link: 'portal-guardian',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-school',
                  title: 'School',
                  link: 'portal-school',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: '',
                  nav_link_classes: ''
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-shield-alt',
                  title: 'Security',
                  link: 'security',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: '',
                  nav_link_classes: ''
                }, 
                {
                  component: 'Link',
                  icon_classes: 'fas fa-robot',
                  title: 'Ai',
                  link: 'ai',
                  prop_container_classes: 'icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center',
                  propVisible: true,
                  text_classes: 'nav-link-text ms-1',
                  component_classes: '',
                  nav_link_classes: ''
                }, 
            ]"
      >
      </navigation-bar>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import NavigationBar from "../../../inteli/ui/components/navs/NavigationBar.vue"

    export default defineComponent({
        components: {
            Link,
            NavigationBar
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

.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    /*display: flex;
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

/*Content*/

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
</style>
