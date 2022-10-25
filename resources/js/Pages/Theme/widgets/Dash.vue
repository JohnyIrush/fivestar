<template>
  <div class="container-fluid">
      <div class="row mt-6">
        <div :class="'col-12 ' + Theme.key + '-section' ">
          <menu-window
            :menuTitle="'Inteli Menu'"
            :menu_item_title_classes="Theme.key + '-text-color'"
            :menuDetails="[
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rocket',
                  title: 'Installation',
                  link: 'installer',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-robot',
                  title: 'Inteli',
                  link: 'inteli',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rocket',
                  title: 'Installation',
                  link: 'installer',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-plus',
                  title: 'Dashboard',
                  link: 'dashboard',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-plus',
                  title: 'Admission',
                  link: 'admission',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-graduation-cap',
                  title: 'Academics',
                  link: 'academic',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-clock',
                  title: 'Timetable',
                  link: 'timetable',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-pencil-alt',
                  title: 'Exams',
                  link: 'exam',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-chalkboard-teacher',
                  title: 'Staff',
                  link: 'staff',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-book-open',
                  title: 'Library',
                  link: 'library',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-globe',
                  title: 'Online Classes',
                  link: 'virtual-reality',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-file-powerpoint',
                  title: 'E-Learning',
                  link: 'virtual-reality',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-microscope',
                  title: 'Research Center',
                  link: 'virtual-reality',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-warehouse', 
                  title: 'Inventory',
                  link: 'inventory',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-coins',
                  title: 'Finance',
                  link: 'finance',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-graduate',
                  title: 'Careers',
                  link: 'career',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-users',
                  title: 'Teams',
                  link: 'finance',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rss',
                  title: 'Communication',
                  link: 'communication',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-table',
                  title: 'Form',
                  link: 'form',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-photo-video',
                  title: 'Multimedia',
                  link: 'resource',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-tools',
                  title: 'Config',
                  link: 'config',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-shield-alt',
                  title: 'Security',
                  link: 'security',
                  propBgColor: Theme.key + '-gradient',
                  propTextColor: 'text-white'
                }, 
            ]"
            :menu_item_size="'col-2'"
            :menu_item_icon_size="''"
            :menu_window_background_image="'/theme/assets/img/curved-images/curved0.jpg'"
            :menuTitleColor="Theme.key + '-text-color'"
          >
          </menu-window>
        </div>
      </div>
  </div>
</template>

<script>
    import { defineComponent, ref, inject } from 'vue'

    
    import main_menu from '../widgets/menus/main-menu.vue'
    import MenuWindow from '../widgets/menus/MenuWindow.vue'
    import Chart from '../plugins/chart.vue'
    export default defineComponent({
        components: {
            MenuWindow,
            Chart
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
        mounted() {

        },
    })
</script>

<style scoped>



.card, .card-header, .card-body
{
  background: transparent !important;
}
</style>
