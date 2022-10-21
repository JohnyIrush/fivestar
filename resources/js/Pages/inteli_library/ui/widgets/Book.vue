<template>
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Book'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/book/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Book Records'" :icon_classes="'far fa-eye'" :title="'Book Records'" :modalSize="'modal-xl'" :componentType="'card'" componentName="'TableData'" :dataPath="'books'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
</template>
<script>
    import { defineComponent } from 'vue'

    import {store} from "../../../../store/store.js"

    import DataCard from '../../../inteli/ui/components/cards/DataCard.vue'

    import DataTable  from "../../../inteli/ui/components/tables/DataTable.vue"

    import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'
    import MainForm from '../../../inteli/ui/components/forms/MainForm.vue'

    export default defineComponent({
        components: {
            DataCard,
            DataTable,
            MainModal,
            ModalButton,
            MainForm,
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
