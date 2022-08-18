import { defineComponent } from 'vue';

import {store} from "../../../store/store.js";

export default defineComponent({
    data() {
        return {
            methods:
            {
                trim(text, length)
                {
                    return text.substr(length);
                },
            },
        }
    },
})
