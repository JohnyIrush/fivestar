<template>
	<div class="container loader text-center mt-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <h1>Installing Application</h1>
    </div>
</template>

<script>
export default {
    
}
</script>


<style scoped>


.loader span
{
    height: 15px;
    width: 15px;
    display: inline-block;
    border-radius: 50%;
    transition: all .5s;
    animation: animate 2s infinite;
}

.loader span:nth-child(1)
{
    animation-delay: .1s;
}

.loader span:nth-child(2)
{
    animation-delay: .2s;
}

.loader span:nth-child(3)
{
    animation-delay: .3s;
}

.loader span:nth-child(4)
{
    animation-delay: .4s;
}

.loader span:nth-child(5)
{
    animation-delay: .5s;
}

.loader span:nth-child(6)
{
    animation-delay: .6s;
}



.loader h1 
{
    font-family: Arial, Helvetica, sans-serif;
    color: purple;
    margin: 0;
    padding: 0;
}

@keyframes animate
{
    0%
    {
        border: 1px solid #fff;
        background: transparent;
        transform: translateY(0);
    } 

    50%
    {
        border: 1px solid #fff;
        background: purple;
        transform: translateY(-25px);
    }

    100%
    {
        border: 1px solid #fff;
        background: pink;
        transform: translateY(0);
    }
}
</style>


