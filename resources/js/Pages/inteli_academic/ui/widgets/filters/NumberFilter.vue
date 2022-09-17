<template>
 <span class="d-flex flex-row"><i class="fas fa-sort-numeric-up-alt mr-2"  @click="active = !active"></i><span  @click="active = !active" v-if="!active">Number Filter</span></span>
 <div class="d-flex flex-row" v-if="active">
   <div class="input-group">
    <span class="input-group-text">From</span>
    <input class="form-control" type="number" placeholder="Minimum" v-model="from" :min="minValue" :max="maxValue">
   </div>
   <div class="input-group">
    <span class="input-group-text">To</span>
    <input class="form-control" type="number" placeholder="Maximum" v-model="to" :min="minValue" :max="maxValue">
   </div>
 </div>
</template>

<script>

import { defineComponent, ref, reactive } from 'vue'

export default defineComponent({
        name: 'NumberFilter',
        props: {
          minValue: Number,
          maxValue: Number,
          filterField: String
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
            this.sendNumber(newFrom, this.to)
          },
          to(newTo, oldTo)
          {
           console.log('new to',newTo)
           console.log('old to', oldTo)
           this.sendNumber(this.from, newTo)
          }
        },
        methods: {
          sendNumber(from, to)
          {
            this.$emit('filterNumber',{
              'from': from,
              'to': to,
              'field': this.filterField
            })
          }
        },
        mounted()
        {

        }
    })
</script>


<style scoped>

</style>
