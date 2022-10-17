<template>
<div class="row justify-content-center mt-3">
    <div class="col">
	<div class="box glass-content">
		<div class="shadow"></div>
		<!--<svg >
			<circle cx="80" cy="80" r="60" class="color1"></circle>
		</svg>-->	
        <div class="circle"></div>
		<div class="counter">
			<span class="color1">0%</span>
		</div>
		<h5>Laravel</h5>
	  </div>
    </div>
    <div class="col">
	<div class="box glass-content">
		<div class="shadow"></div>
		 <!--<svg >
		 	<circle cx="80" cy="80" r="60" class="color1"></circle>
		 </svg>-->
         <div class="circle"></div>	
		<div class="counter">
			<span class="color1">0%</span>
		</div>
		<h5>Vuejs</h5>
	  </div>
    </div>
</div>
<!--<div class="row justify-content-center mobile-view">
    <div class="col ml-4">
	<div class="box glass-content mt-3">
		<div class="shadow"></div>
		<svg >
			<circle cx="56" cy="56" r="32" class="color1"></circle>
		</svg>	
		<div class="counter">
			<span class="color1">0%</span>
		</div>
		<h5>Laravel</h5>
	  </div>
    </div>
    <div class="col ml-4">
	<div class="box glass-content mt-3">
		<div class="shadow"></div>
		<svg >
			<circle cx="56" cy="56" r="32" class="color1"></circle>
		</svg>	
		<div class="counter">
			<span class="color1">0%</span>
		</div>
		<h5>Vuejs</h5>
	  </div>
    </div>
</div>-->
</template>

<script>
export default {
    
}
</script>


<style scoped>

.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}

.box
{
    position: relative;
    height: 250px;
    width: 200px;
    /*background: #222;*/
    border-radius: 5px;
}

.box .shadow
{
    position: absolute;
    height: 100%;
    width: 50%;
    /*background: rgba(0, 0, 0,0.3);*/
}

.box svg
{
    position: absolute;
    height: 160px;
    width: 160px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.box svg circle
{
    fill: transparent;
    stroke: #007eff;
    stroke-width: 10;
    stroke-dasharray:500;
    stroke-linecap: round;
    animation: stroke 13.5s steps(500);
}
.box .counter
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 50px;
    color: #fff;
    text-align: center;
}

.box .counter span
{
 font-size: 20px;
 line-height: 28px;
 font-weight: bold;   
}

h2
{
    color: #fff;
    position: absolute;
    width: 100%;
    text-align: center;
    bottom: 15%;
    letter-spacing: 1px;
}

.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}


.circle
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 10px solid rgba(255, 255, 255, .1);
    border-top: 10px solid #fff;
    animation: animate 1.5s infinite linear;
}

@keyframes animate
{
    0%
    {
        transform: translate(-50%, -50%) rotate(0deg);
    } 
    100%
    {
        transform: translate(-50%, -50%) rotate(360deg);
    }  
}


@media (max-width: 902px)
{
.box
{
    height: 120px;
    width: 120px;
}  


.box svg
{
    left: 70%;
    top: 75%;
}

.circle
{
    width: 60px;
    height: 60px;
}

.box .counter span
{
 font-size: 12px;
 line-height: 28px;
 font-weight: bold;   
}

}

</style>


