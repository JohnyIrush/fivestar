<template>
   <div class="row">
       <div class="col-12 text-center">
           <p class="stage-head">Settings and Application Configuration</p>
       </div>
       <div class="col-12">
	    <img src="/images/cog-setting/cog.png" class="rotate_01">
	    <img src="/images/cog-setting/cog.png" class="rotate_02">
	    <img src="/images/cog-setting/cog.png" class="rotate_03">
       </div>
   </div>
</template>

<script>
export default {
    
}
</script>


<style scoped>


.rotate_01
{
    display: block;
    position: fixed;
    top: 50%;
    left: 50%;
    width: 150px;
    height: 150px;
    margin: -60px 0 0 -240px;
    /*
     -webkit-transition: -webkit-transform 1s;
    -webkit-animation: spinAntiClockWise 1s linear infinite;
    -moz-animation: spinAntiClockWise 1s linear infinite;*/
    animation: spinAntiClockWise 1s linear infinite;
}



.rotate_02
{
    display: block;
    position: fixed;
    top: 50%;
    left: 50%;
    width: 250px;
    height: 250px;
    margin: -80px 0 0 -120px;
    /*
        -webkit-transition: -webkit-transform 1s;
    -webkit-animation: spin 1s linear infinite;
    -moz-animation: spin 1s linear infinite;*/
    animation: spin 1s linear infinite;
}


.rotate_03
{
    position: fixed;
    top: 50%;
    left: 50%;
    width: 150px;
    height: 150px;
    margin: -60px 0 0 100px;
    /*
        -webkit-transition: -webkit-transform 1s;
    -moz-animation: spinAntiClockWise 1s linear infinite;
    */
    animation: spinAntiClockWise 1s linear infinite;
}

/*Anti-clockwise*/
@-webkit-keyframes spinAntiClockWise
{
    100%
    {
        -webkit-transform: rotate(-360deg);
    }
}

@-moz-keyframes spinAntiClockWise
{
    100%
    {
        -webkit-transform: rotate(-360deg);
    }
}

@keyframes spinAntiClockWise
{
    100%
    {
        -webkit-transform: rotate(-360deg);
    }
}

/*Clockwise*/
@-webkit-keyframes spin
{
    100%
    {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes spin
{
    100%
    {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes spin
{
    100%
    {
        -webkit-transform: rotate(360deg);
    }
}

.stage-head
{
    color: purple;
    font-size: 36px;
    text-transform: uppercase;
    font-weight: 900;
}

@media (max-width: 902px)
{
.rotate_01
{
    display: block;
    position: fixed;
    top: 50%;
    left: 50%;
    width: 80px;
    height: 80px;
    margin: -60px 0 0 -120px;
    /*
     -webkit-transition: -webkit-transform 1s;
    -webkit-animation: spinAntiClockWise 1s linear infinite;
    -moz-animation: spinAntiClockWise 1s linear infinite;*/
    animation: spinAntiClockWise 1s linear infinite;
}



.rotate_02
{
    display: block;
    position: fixed;
    top: 50%;
    left: 50%;
    width: 100px;
    height: 100px;
    margin: -30px 0 0 -60px;
    /*
        -webkit-transition: -webkit-transform 1s;
    -webkit-animation: spin 1s linear infinite;
    -moz-animation: spin 1s linear infinite;*/
    animation: spin 1s linear infinite;
}


.rotate_03
{
    position: fixed;
    top: 50%;
    left: 50%;
    width: 80px;
    height: 80px;
    margin: -60px 0 0 20px;
    /*
        -webkit-transition: -webkit-transform 1s;
    -moz-animation: spinAntiClockWise 1s linear infinite;
    */
    animation: spinAntiClockWise 1s linear infinite;
}

.stage-head
{
    color: purple;
    font-size: 10px;

}

}


</style>


