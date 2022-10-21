<template>
 <div
     :class="'tabs ' + ((orientation == 'vertical')? 'd-flex align-items-start': '')">
   <ul 
        v-if="orientation == 'horizontal'"
        id="Tab"
        class="nav nav-tabs"  
        role="tablist">
        <li
        v-for="(tab, index) in tabDetails"
        :key="index" >
            <component 
                    :is="tab.component"
                    :label="tab.title"
                    @click="selectedTab = tab"
                    :icon_classes="tab.icon_classes"
                    :button_classes="tab.tab_button_classes"
                    :tab_button_classes="tab.tab_button_classes">
            </component>
        </li> 
   </ul>
   <div       v-if="orientation == 'vertical'"
              class="nav flex-column 
                     nav-pills me-3" 
              id="v-pills-tab" 
              role="tablist" 
              aria-orientation="vertical">
    <component 
            v-for="(tab, index) in tabDetails"
            :key="index"
            :is="tab.component"
            :label="tab.title"
            @click="selectedTab = tab"
            :icon_classes="tab.icon_classes"
            :tab_button_classes="tab.tab_button_classes">
    </component>
  </div>
     <div 
         class="tab-content" 
         id="tabContent">
       <div
           v-for="(tab, index) in tabDetails"
           :key="index"
           class="tab-pane fade" 
           :id="tab.title" 
           role="tabpanel" 
           :aria-labelledby="tab.title + '-tab'">
           <slot />
       </div>
     </div>
 </div>
</template>

<script>
    import { defineComponent, ref, reactive, provide, watch} from 'vue'

    import TabButton from "../buttons/TabButton.vue"

    export default defineComponent({
        name: "TabPane",
        props: {
        orientation: {
            type: String, // String, Number, Boolean, Function, Object, Array
            default: "horizontal"
          }
        },
        components: {
            TabButton
        },
        emits: ['changeTab'],
        setup(props, {slots, emit})
        {
            //console.log("slot props", slots.default())

            var slotData = (slots.default()[0].props != null)? slots.default() : slots.default()[0].children;

            console.log("slot props", slotData)

            const tabDetails = reactive((slotData).map((tab) => 
                ({
                 title:  tab.props.title, 
                 component:  tab.props.component,
                 tab_button_classes:  tab.props.tab_button_classes,
                 icon_classes:  tab.props.icon_classes,
                 widget_component_name: tab.props.key.widget_component_name,
                 widget_component_path: tab.props.key.widget_component_path
                })
                 ))
            var selectedTab = ref(tabDetails[0])
            provide('selectedTab', selectedTab)

            watch(() => selectedTab, function(newValue, oldValue) {
                emit("changeTab", newValue)
            },
            {
                deep: true
            })


            return {
                selectedTab,
                tabDetails
            }
        },
        mounted() {

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

.tab-content {
  width: 100% !important; 
}
</style>