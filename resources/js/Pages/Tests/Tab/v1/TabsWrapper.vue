<template>
	<div class="tabs">
		<ul class="tabs_header">
			<li v-for="title in tabTitles" 
			:key="title" 
			:class="{selected: title == selectedTitle }"
			@click="selectedTitle = title">
				{{title}}
			</li>
		</ul>
		<slot />
	</div>
</template>

<script>
import {ref, provide} from 'vue'

export default{

setup(props, {slots})
{
	const tabTitles = ref(slots.default().map((tab) => tab.props.title))
	const selectedTitle = ref(tabTitles.value[0])

	provide("selectedTitle", selectedTitle)

	return {
		selectedTitle,
		tabTitles
	}
}
}

</script>

<style scoped>
	.tabs{
		max-width: 400px !important;
		margin: 0 auto !important;
	}

	.tabs_header{
		margin-bottom: 10px !important;
		list-style: none !important;
		padding: 0 !important;
		dislay: flex !important;
	}

	.tabs_header li{
		width: 80px !important;
		text-align: center !important;
		padding: 10px 20px !important;
		margin-right: 10px !important;
		background-color: #ddd !important;
		cursor: pointer !important;
		border-radius: 5px !important;
		transition: 0.4s all ease-out !important;
	}

	.tabs_header li.selected
	{
		background-color: #0984e3 !important;
		color: white !important;
	}
</style>
