<template>
      <div 
        :id="'menu-window-' + menuTitle" 
        class="page-header min-height-300 
               border-radius-xl mt-4 
               " 
              >
        <span class="">
        <div class="row justify-content-center">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h1 :class="menuTitleColor">
                  {{menuTitle}}
                </h1>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row justify-content-center ">
            <div 
              :class="menu_item_size" 
              v-for="(menuItem, index) in menuDetails" 
              :key="index">
             <ul class="nav flex-column">
               <li class="nav-item" v-if="(menuItem.link.length > 0) 
                                           || menuItem.component == 'Link'">
                <component
                 :is="menuItem.component"
                 :href="route(menuItem.link)"
                >
                 <div 
                    v-if="menuItemPropVisible"
                    :class="' ' + menuItem.propTextColor + ' ' + menuItem.propBgColor">
                    <i :class="menuItem.icon_classes 
                              + ' ' + 
                              menu_item_icon_size">
                    </i>
                  </div>
               </component>
               </li>
               <li 
                 v-else
                 class="nav-item"
                 >
                <component
                 :is="menuItem.component"

                 @showmodal="launchModal('main-modal')" 
                 :name="''" 
                 :icon_classes="''" 
                 :title="''" 
                 :modalSize="'modal-lg'" 
                 :modalWidth="''"  
                 :componentType="''" 
                 :componentName="'SettingSelect'" 
                 :dataPath="''" 

                 :listData="[]"
                 :fieldName="''"
                 :fieldIcon="''"

                 :modalClasses="''"
                 :modalDialogClasses="'modal-dialog-scrollable '"
                 :modalContentClasses="'modal-height'"
                 :backDrop="false"
                 :settingSelectOptions="settingSelectOptions"
                >
                 <div 
                    v-if="menuItemPropVisible"
                    :class="'icon shadow border-radius-md text-center d-flex align-items-center justify-content-center ' + menuItem.propTextColor + ' ' + menuItem.propBgColor">
                    <i :class="menuItem.icon_classes 
                              + ' ' + 
                              menu_item_icon_size">
                    </i>
                  </div>
               </component>
               </li>
               <li class="nav-item">
                 <span 
                     :class="'nav-link-text ms-1 ' + 
                             menu_item_title_classes"
                     >
                     {{menuItem.title}}
                   </span>
               </li>
             </ul>
            </div>
        </div>
        </span>
      </div>
      <main-modal></main-modal>
</template>

<script>
    import { defineComponent, ref, inject } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'

    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

    export default defineComponent({
      name: "MenuWindow",
      props: {
        menuTitle: {
          type: String, // String, Number, Boolean, Function, Object, Array
          required: true,
          default: "Menu Window"
        },
        menuDetails: {
          type: Array,
          required: true,
        },
        menu_item_size:{
          type: String,
          default: 'col-2'
        },
        menu_item_icon_size:{
          type: String
        },
        menu_item_title_classes:{
          type: String,
        },
        menu_window_background_image:{
          type: String,
          default: '/theme/assets/img/curved-images/curved0.jpg'
        },
        menuItemPropVisible: {
          type: String,
          default: true
        },
        settingSelectOptions: Array,
        showBgImage: {
          type: Boolean,
          default: false
        },
        menuTitleColor: String,

      },
      components: {
          Link,
          ModalButton,
          MainModal
      },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
      methods: {
        launchModal(modal)
        {
          var modal = new bootstrap.Modal(document.getElementById(modal))
          modal.show()
        },
        getDomElement(id)
        {
          return document.getElementById(id);
        }
      },
      mounted()
      {

        const menuWindowContainer = this.getDomElement('menu-window-' + this.menuTitle);
        if (this.showBgImage)
        {
          menuWindowContainer.style.backgroundImage = `url(${this.menu_window_background_image})`
        }
        
      }
    })
</script>
