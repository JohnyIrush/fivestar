<template>
  <div class="row">
    <div class="col-12">
      <statistic-card-data :statisticsData="statistics" />
    </div>
  </div>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../../../inteli/ui/components/cards/StatisticCardData.vue';

export default defineComponent({
        components: {
            StatisticCardData,
        },
        data() {
            return {
                statistics: [],
            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getStatistics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.statistics = response.data
                })
            },
        },
        mounted()
        {
            this.getStatistics("academic/statistics")
        },
    })
</script>

