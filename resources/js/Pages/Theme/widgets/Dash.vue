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
                  icon_classes: 'fas fa-rocket fa-2x',
                  title: 'Installation',
                  link: 'installer',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-robot fa-2x',
                  title: 'Inteli',
                  link: 'inteli',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rocket fa-2x',
                  title: 'Installation',
                  link: 'installer',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-plus fa-2x',
                  title: 'Dashboard',
                  link: 'dashboard',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-plus fa-2x',
                  title: 'Admission',
                  link: 'admission',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-graduation-cap fa-2x',
                  title: 'Academics',
                  link: 'academic',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-clock fa-2x',
                  title: 'Timetable',
                  link: 'timetable',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-pencil-alt fa-2x',
                  title: 'Exams',
                  link: 'exam',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-chalkboard-teacher fa-2x',
                  title: 'Staff',
                  link: 'staff',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-book-open fa-2x',
                  title: 'Library',
                  link: 'library',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-globe fa-2x',
                  title: 'Online Classes',
                  link: 'virtual-reality',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-file-powerpoint fa-2x',
                  title: 'E-Learning',
                  link: 'virtual-reality',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-microscope fa-2x',
                  title: 'Research Center',
                  link: 'virtual-reality',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-warehouse fa-2x', 
                  title: 'Inventory',
                  link: 'inventory',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-coins fa-2x',
                  title: 'Finance',
                  link: 'finance',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-user-graduate fa-2x',
                  title: 'Careers',
                  link: 'career',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-users fa-2x',
                  title: 'Teams',
                  link: 'finance',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-rss fa-2x',
                  title: 'Communication',
                  link: 'communication',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-table fa-2x',
                  title: 'Form',
                  link: 'form',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-photo-video fa-2x',
                  title: 'Multimedia',
                  link: 'resource',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-tools fa-2x',
                  title: 'Config',
                  link: 'config',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
                },
                {
                  component: 'Link',
                  icon_classes: 'fas fa-shield-alt fa-2x',
                  title: 'Security',
                  link: 'security',
                  propBgColor: '',
                  propTextColor: Theme.key + '-text-color'
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
