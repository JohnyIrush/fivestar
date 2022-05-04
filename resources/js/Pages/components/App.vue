<template>
<!--<product_list_one></product_list_one>
<product_list_two></product_list_two>-->
<!--<dynamic_css></dynamic_css>-->
<!--<refs></refs>-->
<!--<h4>{{title}}</h4>
<child_parent v-bind:title="title" @changeTitle="updateTitle($event)"></child_parent>-->
<!--<check_box_binding></check_box_binding>-->
<!--<custom_directive></custom_directive>-->
<filters></filters>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import product_list_one from "./product-list-one.vue";
    import product_list_two from "./product-list-two.vue";
    import dynamic_css  from "./dynamic-css.vue";
    import refs from "./refs.vue";
    import child_parent from "./Events/child-parent.vue";
    import check_box_binding from "./check-box-binding.vue";
    import custom_directive from "./Directives/custom-directives.vue";
    import filters from "./filters.vue";
 
    export default defineComponent({
        components: {
            Link, 
            product_list_one,
            product_list_two,
            dynamic_css,
            refs,
            child_parent,
            check_box_binding,
            custom_directive,
            filters
        },
        data() {
            return {
                title: 'Inteli System'
            }
        }, 
        methods:
        {
            updateTitle(updateTitle)
            {
                this.title = updateTitle
            }
        }
    })
</script>
