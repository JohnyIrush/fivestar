<template>

<ul 
  class="nav"
  v-if="orientation == 'horizontal'">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>

<ul 
  :class="' ' + vNavClasses"
  v-if="orientation == 'vertical'">
  <li
      v-for="(menuItem, index) in menuItems" 
      :key="index"
      :class="'nav-item ' + menuItem.nav_link_classes"
      >
    <div
        v-if="menuItem.component == 'Link' || menuItem.link.length > 0"
    >
     <component
        :is="menuItem.component"
        :class="'nav-link ' + menuItem.component_classes + ' ' + menuItemContentOrientation"
        :href="route(menuItem.link)">
       <div
           v-if="menuItem.propVisible"
           :class="menuItem.prop_container_classes">
         <i :class="menuItem.icon_classes"></i>
       </div>
       <span :class="menuItem.text_classes">
           {{menuItem.title}}
       </span>
     </component>
    </div>
    <div
        v-else>
     <component
        :is="menuItem.component"
        :class="'nav-link ' + menuItem.component_classes + ' ' + menuItemContentOrientation"
        >
       <div 
          v-if="menuItem.propVisible"
          :class="menuItem.prop_container_classes"
          >
         <i :class="menuItem.icon_classes"></i>
       </div>
       <span 
            v-if="menuItem.propVisible"
            :class="menuItem.text_classes">
           {{menuItem.title}}
       </span>
     </component>
    </div>
  </li>
</ul>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        name: "NavigationBar",
        props: {
          menuItems: Array,
          orientation: {
            type: String, // String, Number, Boolean, Function, Object, Array
            default: "vertical"
          },
          vNavClasses:{
            type: String,
            default: 'nav flex-column'
          },
          menuItemContentOrientation:{
            type: String,
            default: ''
          }
        },
        components: {
            Link
        },
        data() {
            return {

            }
        },

        methods: {

        },
        mounted()
        {

        },
    })
</script>


<style scoped>

</style>
