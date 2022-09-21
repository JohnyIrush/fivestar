<template>
 <div class="input-group">
  <input class="form-control" :type="pickType" placeholder="Select Date" v-model="date">
 </div>
</template>

<script>

import { defineComponent } from 'vue'

import flatpickr from "flatpickr";

export default defineComponent({
        name: 'DatePicker',
        props: {
          pickType: String,
          pickField: String
        },
        components: {

        },
        data() {
          return {
              date: '',
            }
        },
        watch:{
          date(newFrom, oldFrom)
          {
            console.log('new from',newFrom)
            console.log('old from', oldFrom)
            this.sendDate(newFrom, this.to)
          },
        },
        methods: {
          sendDate()
          {
            this.$emit('filterDate',{
              'from': from,
              'to': to,
              'field': this.pickField
            })
          }
        },
        mounted()
        {
          flatpickr(`input[type=${this.pickType}]`, {});
        }
    })
</script>


<style scoped>

</style>
