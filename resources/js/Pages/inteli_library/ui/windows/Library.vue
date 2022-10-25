<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Dashboard',
      widget_tab_icon_classes: 'fas fa-chess-board fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'LibraryDash',
      widget_component_path: '../../inteli_library/ui/widgets/LibraryDash.vue'
     },
     {
      widget_title: 'Librarian',
      widget_tab_icon_classes: 'fas fa-user-lock fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Librarian',
      widget_component_path: '../../inteli_library/ui/widgets/Librarian.vue'
     },
     {
      widget_title: 'Book Issue',
      widget_tab_icon_classes: 'fas fa-id-card fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'BookIssue',
      widget_component_path: '../../inteli_library/ui/widgets/BookIssue.vue'
     },
     {
      widget_title: 'Book Categories',
      widget_tab_icon_classes: 'fas fa-code-branch fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'BookCategory',
      widget_component_path: '../../inteli_library/ui/widgets/BookCategory.vue'
     },
     {
      widget_title: 'Books',
      widget_tab_icon_classes: 'fas fa-book fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Book',
      widget_component_path: '../../inteli_library/ui/widgets/Book.vue'
     },
     {
      widget_title: 'Authors',
      widget_tab_icon_classes: 'fas fa-feather fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Author',
      widget_component_path: '../../inteli_library/ui/widgets/Author.vue'
     },
     {
      widget_title: 'Publishers',
      widget_tab_icon_classes: 'fas fa-building fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'Publisher',
      widget_component_path: '../../inteli_library/ui/widgets/Publisher.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: Theme.key + '-gradient' + ' mt-6  text-white',
      tab_button_label_classes: Theme.key + ' text-color',
      widget_component_name: 'LibrarySetting',
      widget_component_path: '../../inteli_library/ui/widgets/LibrarySetting.vue'
     },

   ]">
  </module-container>
  <main-modal></main-modal>
</template>

<script>
    import { defineComponent, ref, inject } from 'vue'

    import {store} from "../../../../store/store.js"

    import DataCard from '../../../inteli/ui/components/cards/DataCard.vue'

    import DataTable  from "../../../inteli/ui/components/tables/DataTable.vue"

    import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'
    import MainForm from '../../../inteli/ui/components/forms/MainForm.vue'

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'

    export default defineComponent({
        components: {
            DataCard,
            DataTable,
            MainModal,
            ModalButton,
            MainForm,
            ModuleContainer
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
        data() {
            return {
                analytics: [],
            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getAnalytics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.analytics= response.data
                })
            },
        },
        mounted()
        {
            this.getAnalytics("analytics")
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
