import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';



export default defineComponent({
    components: {
        Link, 
    },
    data() {
        return {

        }
    },

    methods:
    {
        test()
        {
         alert("hey")
        }
    },
    mounted()
    {
        
    },
})