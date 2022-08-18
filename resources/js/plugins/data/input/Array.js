import { defineComponent } from 'vue';

import {store} from "../../../store/store.js";

export default defineComponent({
    data() {
        return {
            methods:
            {
                storeArrayInput(array, input)
                {
                    if(array.indexOf(input) == -1)
                    {
                        array.push(input)
                    }
                },
            },
        }
    },
})
