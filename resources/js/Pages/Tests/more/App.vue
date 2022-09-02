<template>
<div v-html="channel">
	
</div>
<h2 :style="{
	color: highlightColor
}">Test</h2>
<p :style="[headerSyleObject, successSyleObject]">Paragraph 1</p>
<button class="btn btn-warning btn-lg" @click="callUnderscore">underscore</button>
<button class="btn btn-info btn-lg" @click="dollarEvent(1, $event)">Dollar</button>
</template>

<script>

import _ from "lodash"

export default{
	components:{

	},
   data (){
    return {
    	channel: '<b>SoftwaresCares</b>',
    	highlightColor: 'orange',
    	headerSyleObject:{
    		color: 'blue',
    		fontSize: 72 + 'px',
    		padding: 20 + 'px'
    	},
    	successSyleObject:{
    		backgroundColor: 'green',
    	}
   }
 },
 methods:{
 	dollarEvent(number, event)
 	{
 		console.log(number, event)
 	},
 	underscore()
 	{
 		alert("underscore")
 	},
 	callUnderscore()
 	{
 		_.underscore()
 	}
 }
}

</script>

<style scoped>
	
</style>
