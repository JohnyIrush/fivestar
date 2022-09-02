<template>
  <div class="container">
    <tabular_card></tabular_card>
    <mini_tabular_card v-show="false"></mini_tabular_card>
  </div>
</template>

<script>
import tabular_card from "./tabular-card.vue"
import mini_tabular_card from "./mini-tabular-card.vue"

export default{
	components:{
		tabular_card,
		mini_tabular_card
	},
   data (){
    return {

   }
 },
 computed:{

 },
 methods:{

 }
}

</script>

<style scoped>
	
</style>
