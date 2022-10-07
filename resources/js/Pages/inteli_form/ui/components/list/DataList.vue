<template> 
 <ul class="nav flex-column">
  <li class="nav-item" v-for="item in list" :key="item" >
    <a role="button" class="nav-link" aria-current="page" @click="selectedListItem(item)">
     <span  v-html="item.settings.icon"></span> <span class="ml-2 fs-5">{{item.settings[fieldName]}}</span>
    </a>
  </li>
</ul>
</template>

<script>
    import { defineComponent } from 'vue'

    import { store } from '../../../../../store/store.js'

    export default defineComponent({
        name: "DataList",
        props:{

        },
        computed:{
            list()
            {
                return store.state.List.data;
            },
            iconName()
            {
                return store.state.List.iconName;
            },
            fieldName()
            {
                return store.state.List.fieldName;
            }
        },
        components: {

        },
        data() {
            return {
            }
        },
        methods:{
            selectedListItem(item)
            {
                console.log("DataList",item)
                this.$emit("selectedListItem", item)
            }
        }
    })
</script>

<style >

</style>
