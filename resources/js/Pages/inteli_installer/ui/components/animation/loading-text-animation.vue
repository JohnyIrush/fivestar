<template>
	<div class="container loader">
		<span>P</span>
		<span>R</span>
		<span>E</span>
		<span>P</span>
		<span>A</span>
		<span>I</span>
		<span>R</span>
        <span>I</span>
        <span>N</span>
        <span>G</span>
        <span></span>
        <span>T</span>
        <span>O</span>
        <span></span>
        <span>I</span>
        <span>N</span>
        <span>S</span>
        <span>T</span>
        <span>A</span>
        <span>L</span>
        <span>L</span>
	</div>
</template>

<script>
export default {
    
}
</script>


<style scoped>

.loader
{
    height: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}

.loader span
{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 48px;
    color: rgba(255,  255, 255, .1);
    display: inline-block;
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

.loader span:nth-child(7)
{
    animation-delay: .7s;
}

.loader span:nth-child(8)
{
    animation-delay: .8s;
}

.loader span:nth-child(9)
{
    animation-delay: .9s;
}

.loader span:nth-child(10)
{
    animation-delay: 1s;
}

.loader span:nth-child(11)
{
    animation-delay: 1.1s;
    padding: 0 5px;
}

.loader span:nth-child(12)
{
    animation-delay: 1.2s;
}

.loader span:nth-child(13)
{
    animation-delay: 1.3s;
}

.loader span:nth-child(14)
{
    animation-delay: 1.4s;
    padding: 0 5px;
}

.loader span:nth-child(15)
{
    animation-delay: 1.5s;
}

.loader span:nth-child(16)
{
    animation-delay: 1.6s;
}


.loader span:nth-child(17)
{
    animation-delay: 1.7s;
}


.loader span:nth-child(18)
{
    animation-delay: 1.8s;
}

.loader span:nth-child(19)
{
    animation-delay: 1.9s;
}

.loader span:nth-child(20)
{
    animation-delay: 2s;
}

.loader span:nth-child(21)
{
    animation-delay: 2.1;
}

@keyframes animate {
    0%
    {
        color: rgba(255, 255, 255, .1);
        transform: translateY(0);
        margin-left: 0;
    }
    25%
    {
        color: purple;
        transform: translateY(-15px);
        margin-left: 10;
        text-shadow: 0 15px 5px rgba(0, 0, 0, 1);
    }
    100%
    {
        color: rgba(255, 255, 255, .1);
        transform: translateY(0);
    }
}

@media (max-width: 902px)
{
.loader span
{
    font-size: 24px;
}
}
</style>


