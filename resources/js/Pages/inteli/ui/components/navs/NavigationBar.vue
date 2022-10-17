<template>
<nav  
    class="navbar navbar-expand-lg 
           navbar-light bg-light"
    v-if="orientation == 'horizontal'"
           >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
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
        :class="'nav-link ' + menuItem.component_classes"
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
        :class="'nav-link ' + menuItem.component_classes"
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
