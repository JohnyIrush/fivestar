<template>
<div v-html="channel">
	
</div>
<h2 :style="{
	color: highlightColor
}">Test</h2>
<p :style="[headerSyleObject, successSyleObject]">Paragraph 1</p>
<button class="btn btn-warning btn-lg" @click="callUnderscore">underscore</button>
<button class="btn btn-info btn-lg" @click="dollarEvent(1, $event)">Dollar</button>

<form @submit.prevent="submit">
	{{JSON.stringify(form,2)}}
	<label for="name">Name</label>
	<input type="text" name="name" v-model.trim.lazy="form.name">
	<label for="name">Age</label>
	<input type="number" name="age" v-model.number="form.age">
	<button class="btn btn-success btn-lg">Submit</button>
</form>

<h2 v-once>{{name}}</h2>
<button class="btn btn-primary btn-lg" @click="name = 'Bad Man'">Change Name</button>

<h2>Fullname - {{firstname}} {{lastname}}</h2>
<h2>Fullname - {{fullName}}</h2>
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
    	},
    	form: {
    		name: '',
    		age: null
        },
        name: '',
        firstname: 'Bruce',
        lastname: 'Wayne'
   }
 },
 computed:{
		fullName()
		{
			return this.firstname + ' ' + this.lastname
		}
 },
 methods:{
 	submit()
 	{
 		console.log(this.form)
 	},
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
