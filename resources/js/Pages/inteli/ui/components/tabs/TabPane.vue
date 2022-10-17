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
                    @click="selectedTab = tab">
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
            @click="selectedTab = tab">
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
    import { defineComponent, ref, reactive, provide} from 'vue'

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
        setup(props, {slots})
        {
            const tabDetails = reactive(slots.default().map((tab) => 
                ({
                 title: tab.props.title, 
                 component: tab.props.component
                })
                 ))
            var selectedTab = ref(tabDetails[0])
            provide('selectedTab', selectedTab)

            console.log("selectedTab", selectedTab)

            return {
                selectedTab,
                tabDetails
            }
        },
        mounted() {

        },
    })
</script>
