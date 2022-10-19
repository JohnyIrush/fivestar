<template>
   <wizard></wizard> 
</template>

<style scoped>

</style>

<script>

import { defineComponent } from 'vue'

import wizard from '../plugins/wizard'

export default defineComponent({
    name: "Installer",
    components:
    {
        wizard
    }
});
</script>
