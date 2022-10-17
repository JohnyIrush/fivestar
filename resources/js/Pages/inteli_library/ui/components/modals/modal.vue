<template>
  <div :class="'modal ' + modalClasses" id="main-modal" :data-bs-backdrop="backDrop? 'static' : false" data-bs-keyboard="true" tabindex="-1" aria-labelledby="main-modal" aria-hidden="true">
    <div :class="'modal-dialog ' + modalSize + ' ' + modalWidth + ' ' + modalDialogClasses">
      <div :class="'modal-content glass-content ' + ' ' + modalContentClasses">
        <div class="modal-header">
            <div class="col">
                <h3 class="modal-title" id="">{{title}}</h3>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div id="modal-body" class="modal-body">
            <component
                      :is="componentName"

                      @selectedListItem="selectedListItem"
                      
                      :SettingOptions="settingSelectOptions"
                       >
            </component>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

import data_card from '../cards/data-card.vue'

import TableData from "../tables/TableData.vue"

import MainForm from '../forms/MainForm.vue'

import TabularCard from '../../../../inteli_academic/ui/components/cards/TabularCard.vue'
import MiniTabularCard from '../../../../inteli_academic/ui/components/cards/MiniTabularCard.vue'

import DataList from '../../../../inteli_form/ui/components/list/DataList.vue'
import SearchSelectInput from '../../../../inteli_form/ui/components/inputs/SearchSelectInput.vue'
import SettingSelect from '../../../../inteli_admission/ui/widgets/menus/SettingSelect.vue'

    export default defineComponent({
        components: {
            data_card,
            TableData,
            MainForm,
            TabularCard,
            MiniTabularCard,
            DataList,
            SearchSelectInput,
            SettingSelect
        },
        data() {
            return {
  
            }
        },
        computed: {
          title()
          {
            return store.state.Modal.title
          },
          modalSize()
          {
            return store.state.Modal.modalSize
          },
          modalWidth()
          {
            return store.state.Modal.modalWidth
          },
          modalClasses()
          {
            return store.state.Modal.modalClasses
          },
          modalDialogClasses()
          {
            return store.state.Modal.modalDialogClasses
          },
          modalContentClasses()
          {
            return store.state.Modal.modalContentClasses
          },
          backDrop()
          {
            return store.state.Modal.backDrop
          },
          componentType()
          {
            return store.state.Modal.componentType
          },
          componentName()
          {
            return store.state.Modal.componentName
          },
          settingSelectOptions()
          {
            return store.state.SettingSelect.options
          }
        },
        methods: {
            selectedListItem(event)
            {
                console.log("Modal",event)
                this.$emit("selectedListItem", event)
            }
        },
        mounted() {

        },
    })
</script>

<style scoped>
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
}

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
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
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


.modal-content
{
    background: transparent !important;
}


input
{
    width: 100%;
    background: white;
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #000;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.text-c-center
{
    text-align: center !important;
}

.text-font-size
{
    font-size: 18px !important;
}
</style>
