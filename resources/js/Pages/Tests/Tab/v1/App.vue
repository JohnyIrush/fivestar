<template>
	<TabsWrapper>
	  <Tab title="Tab 1">Helo From Tab 1</Tab>
	  <Tab title="Tab 2">Helo From Tab 2</Tab>
	  <Tab title="Tab 3">Helo From Tab 3</Tab>
	  <Tab title="Tab 4">Helo From Tab 4</Tab>
	  <Tab title="Tab 5">Helo From Tab 5</Tab>
	</TabsWrapper>
</template>

<script>
import TabsWrapper from "./TabsWrapper"
import Tab from "./Tab"

export default{
	components:{
		Tab,
		TabsWrapper
	}
}

</script>

<style scoped>
	
</style>
