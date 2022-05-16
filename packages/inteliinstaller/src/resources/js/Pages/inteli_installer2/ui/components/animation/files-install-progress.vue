<template>
	<div class="container row text-center">
		<div class="col-12 text2 justify-content-center">
			<h1>Loading...</h1>
		</div>
		<div class="col-12 loading2">
			<div class="line2-box">
				<div class="line2"></div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
    
}
</script>


<style scoped>


.container
{
    width: 100% !important;
    display: flex;
    justify-content: center !important;
    align-items: center !important;
    flex-direction: column !important;
}

.text2
{
    color: white !important;
    margin-bottom: 25px !important;
    font-size: 20px !important;
    letter-spacing: 2px !important;
}

.loading2
{
    width: 100% !important;
    height: auto !important;
    justify-content: center !important;
    align-items: center !important;
}

.loading2 .line2-box
{
    padding: 2px !important;
    width: 40% !important;
    height: 20px !important;
    border: 2px solid #267191 !important;
    border-radius: 20px !important;
}



.loading2 .line2-box .line2
{
    height: 15px !important;
    border-radius: 20px !important;
    background: #67D295;
    animation: loading 2s forwards cubic-bezier(0, 0, 0, 0) !important;
    top: -5px;
}

@keyframes loading {
    0%
    {
        width: 0%;
    }

    100%
    {
        width: 100%;
    }
}

@media (max-width: 902px)
{

}


</style>


