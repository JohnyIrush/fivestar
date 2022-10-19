<template>
 <div class="row" >
  <div 
     :class="columnSize">
     <tab-pane
       :orientation="'vertical'"
     >
        <tab title="tabs" 
             component="TabButton"
             icon_classes="''">
             Tabs
        </tab>
        <tab title="tables" 
             component="TabButton"
             icon_classes="''">
             Tables
        </tab>
        <tab title="forms" 
             component="TabButton"
             icon_classes="''">
             Forms
        </tab>
        <tab title="navs" 
             component="TabButton"
             icon_classes="''">
             Navs
        </tab>
        <tab title="modals" 
             component="TabButton"
             icon_classes="''">
             Modals
        </tab>
     </tab-pane>
  </div>
 </div>
</template>


<script>
    import { defineComponent, computed } from 'vue';
    import { Head, Link, usePage } from '@inertiajs/inertia-vue3';

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
        components: {
            Link, 
            TabPane,
            Tab
        },
        setup(props,context)
        {

            return { }  
        }
    })
</script>
