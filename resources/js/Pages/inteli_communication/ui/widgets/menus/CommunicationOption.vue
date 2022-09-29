<template>
     <check-box
      :inputOptions="''"
      :nameKey="''"
      :valueKeyKey="''"
      :variable="''"
      :field="''"
      :size="'form-select-lg'"
      :datapath="dataPath"
     ></check-box>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import CheckBox from "../../../../inteli_academic/ui/components/inputs/CheckBox.vue"

    export default defineComponent({
      props:{
        dataPath: String
      },
        components: {
            Link,
            CheckBox
        },
    })
</script>

<style scoped>
  
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

/*Content*/

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}
</style>
