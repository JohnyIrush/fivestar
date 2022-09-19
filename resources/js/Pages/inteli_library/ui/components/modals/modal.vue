<template>
  <div class="modal fade" id="main-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="main-modal" aria-hidden="true">
    <div :class="'modal-dialog modal-dialog-centered text-c-center text-center modal-xl ' + modalSize">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">{{title}}</h3>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div id="modal-body" class="modal-body">
            <component :is="componentName" ></component>
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


    export default defineComponent({
        components: {
            data_card,
            TableData,
            MainForm,
            TabularCard,
            MiniTabularCard
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
          componentType()
          {
            return store.state.Modal.componentType
          },
          componentName()
          {
            return store.state.Modal.componentName
          }
        },
        methods: {

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
