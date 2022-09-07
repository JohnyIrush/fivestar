/*export default
{
    data()
    {
        return {
            data: []
        }
    },
    methods: {
        getData(url)
        {
            axios.get(url)
            .then((response)=>{
               this.data = response.data
            })
        }
    },  
}*/

import {ref} from "vue"

export default function userServer(url) {
    const data = ref([]);

    getData(url)
    {
        axios.get(url)
        .then((response)=>{
           data.value = response.data
        })
    }

    return {
        data,
        getData
    }
}