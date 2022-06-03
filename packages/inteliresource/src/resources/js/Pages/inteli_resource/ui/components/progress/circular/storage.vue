<template>
<div  class="skill">
    <div class="outer">
        <div class="inner">
            <div :id="name" class="number">

            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
         <defs>
            <linearGradient id="GradientColor">
               <stop offset="0%" stop-color="#e91e63" />
               <stop offset="100%" stop-color="#673ab7" />
            </linearGradient>
         </defs>
         <circle :id="name + 'circle'" cx="80" cy="80" r="70" stroke-linecap="round" />
 </svg>
 <div class="capacity">
    {{mbCapacity}}
</div>
</div>
<!--
 <div class="progressn blue">
     <span class="progressn-left">
         <span class="progressn-bar"></span>
     </span>
     <span class="progressn-right">
         <span class="progressn-bar"></span>
     </span>
     <div class="progressn-value">100%</div>
     <span class="mt-4 ml-10">{{capacity}}</span>
 </div>-->
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: ["mbCapacity","name"],
        components: {

        },
        methods: {
            percentageCalculator()
            {
                var percent = ((this.mbCapacity)/(500) * 100)

                var number = document.getElementById(this.name);

                var progress = document.getElementById(this.name + 'circle');
                progress.style.strokeDashoffset = percent
                var counter = 0;

                    setInterval(() => {
                    if(counter >= percent)
                    {
                        clearInterval()
                    }
                    else{
                      counter += 1;
                      number.innerHTML = counter + "%";
                    }
                }, (20) * (percent/100));
            },
            capacityPercentageCalculator()
            {
                // const res = this.reduce((acc,curr)=> (acc[curr]='',acc),{});
                // console.log(res)
                var number = document.querySelectorAll(".number");
                let counter = 0;
                number.forEach(element => {
                setInterval(() => {
                    if(counter == 65)
                    {
                        clearInterval()
                    }
                    else{
                      counter += 1;
                      element.innerHTML = counter + "%";
                    }
                }, 20);

                });

            }
        },
        mounted() {
            //this.capacityPercentageCalculator()
            this.percentageCalculator()
        },
    })
</script>

<style scoped>

.skill
{
    width: 160px;
    height: 160px;
    position: relative;
}

.outer
{
    height: 160px;
    width: 160px;
    border-radius: 50%;
    padding: 20px;
     box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
                -6px -6px 10px -1px rgba(255,255,255,0.7)
}

.inner
{
    height: 120px;
    width: 120px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: inset 4px 4px 6px -1px rgba(0,0,0,0.2),
                inset -4px -4px 6px -1px rgba(255,255,255,0.7),
                -0.5px -0.5px 0px rgba(255,255,255,1),
                0.5px 0.5px 0px rgba(0,0,0,0.15),
                0px 12px 10px -10px rgba(0,0,0,0.05)
}

.number
{
    font-weight: 600px;
    color: #555;
}

circle
{
    fill: none;
    stroke: url(#GradientColor);
    stroke-width: 20px;
    stroke-dasharray: 472;
    stroke-dashoffset: 100;
    animation: anim 2s linear forwards;
}


svg
{
    position: absolute;
    top: 0;
    left: 0;
}

@keyframes anim {
    100%
    {
        stroke-dashoffset: 165;
    }
}


.capacity
{
    position: absolute !important;
    left: 40% !important;
    top: 55% !important;
}
/*
.padding{

    padding:10rem !important;
}

.progressn{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progressn:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progressn > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progressn .progressn-left{
    left: 0;
}
.progressn .progressn-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progressn .progressn-left .progressn-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progressn .progressn-right{
    right: 0;
}
.progressn .progressn-right .progressn-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progressn .progressn-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}

.capacity{
    font-size: 24px;

}

.progressn.blue .progressn-bar{
    border-color: #049dff;
}

.progressn.blue .progressn-left .progressn-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}

 .progressn-left .progressn-bar{
    animation: loading-3 1s linear forwards 1.8s;
}

 .progressn-left .progressn-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}

 .progressn-left .progressn-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
*/
/*
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}*/
@media only screen and (max-width: 990px){
    .progressn{ margin-bottom: 20px; }
}

</style>
