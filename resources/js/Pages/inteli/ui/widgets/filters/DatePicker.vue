<template>
 <span class="d-flex flex-row"><i class="fa fa-calendar mr-2" @click="active = !active"></i><span  @click="active = !active" v-if="!active">Date Picker</span></span>
 <div class="d-flex flex-row" v-if="active">
   <div class="input-group">
    <span class="input-group-text">From</span>
    <input class="form-control" :type="pickType" placeholder="Select Date" v-model="from">
   </div>
   <div class="input-group">
    <span class="input-group-text">To</span>
    <input class="form-control" :type="pickType" placeholder="Select Date" v-model="to">
   </div>
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
              from: '',
              to: '',
              active: false
            }
        },
        watch:{
          from(newFrom, oldFrom)
          {
            console.log('new from',newFrom)
            console.log('old from', oldFrom)
            this.sendDate(newFrom, this.to)
          },
          to(newTo, oldTo)
          {
           console.log('new to',newTo)
           console.log('old to', oldTo)
           this.sendDate(this.from, newTo)
          }
        },
        methods: {
          sendDate(from, to)
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
