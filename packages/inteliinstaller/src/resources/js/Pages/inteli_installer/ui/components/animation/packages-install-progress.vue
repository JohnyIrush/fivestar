<template>
    <section class="margin-top">
        <div class="container">
            <div class="card">
                <div class="box">
                    <div>
                        <div class="percent">
                            <svg>
                                <circle cx="30" cy="30" r="30">

                                </circle>
                                <circle cx="30" cy="42" r="30">

                                </circle>
                            </svg>
                            <div class="number">
                                <h2>90 <span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    Html
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div>
                        <div class="percent">
                            <svg>
                                <circle cx="30" cy="30" r="30">

                                </circle>
                                <circle cx="30" cy="42" r="30">

                                </circle>
                            </svg>
                            <div class="number">
                                <h2>82 <span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    Css
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>


<style scoped>
*
{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

section

{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    /*padding: 40px 0;*/
    background: #350048;
}

/** Research before
section::before
{
    content: '';
    position: absolute;
    top: 48%;
    left: 0;
    width: 100%;
    height: 30px;
    background: #bd00ff;
}
*/
.container
{
    /*width: 900px;*/
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}


.container .card
{
    position: relative;
    width: 90px;
    height: 108px;
    text-align: center;
    z-index: 10;
    margin: 7.2px 7.2px 21.6px;
    background: #350048;
}

.container .card .box
{
    position: absolute;
    top: 0; 
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(255, 255, 255, 0.05);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0, 0.5);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    z-index: 10;
    border-radius: 10px;
}


.percent
{
    
    width: 54px;
    left: 90px;
    border-radius: 50%;
    z-index: 100;
}

.percent .number
{
    position: absolute; 
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.percent .number h2
{
    color: white;
    font-weight: 700;
    font-size: 18px;
}

.percent .number h2 span
{
    font-size: 14.4px;
}

.text
{
    position: absolute;
    bottom: -42px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center; 
    padding: 10.8px 7.2px 3.6px;
    background: orange;
    border-radius: 10.8px;
    font-weight: 800;
    font-size: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0, 0.2);
    z-index: 5;
    pointer-events: none;
    transition: bottom 0.5s, z-index 0s, transform 0.5s, padding 0.5s;
    transition-delay: 0.5s 0.5s, 0s, 0.5s;
    color: white;
}

.card:hover .text
{
    bottom: -50px;
    z-index: 6.5;
    transform: translateX(-50%) translateY(-50px);
    padding: 3.6px 7.2px 3.6px;
}

.card:nth-child(1) .text 
{
    background: #ff0461;
}


.card:nth-child(2) .text 
{
    background: #2bd2ff;
}


svg
{
    position: relative;
    width: 90px;
    height: 90px;
    left: -10px;
}

svg circle 
{
    width: 100%;
    height: 100%;
    fill: none;
    stroke-width: 10;
    stroke: rgba(255, 255, 255, 0.05);
    transform: translate(5px, 5px);
    stroke-linecap: round;
}

svg circle:nth-child(2)
{
    stroke: #fff;
    stroke-dasharray: 150px;
    stroke-dashoffset: 150px;
}

.card:nth-child(1) svg circle:nth-child(2)
{
    stroke-dashoffset: calc(150px - (150px * 90)/100);
}

.card:nth-child(2) svg circle:nth-child(2)
{
    stroke-dashoffset: calc(150px - (150px * 82)/100);
}

.card:nth-child(3) svg circle:nth-child(2)
{
    stroke-dashoffset: calc(150px - (150px * 65)/100);
}

.card:nth-child(4) svg circle:nth-child(2)
{
    stroke-dashoffset: calc(150px - (150px * 65)/100);
}

.card:nth-child(5) svg circle:nth-child(2)
{
    stroke-dashoffset: calc(150px - (150px * 65)/100);
}

.margin-top
{
    top: 30px;
}


@media (max-width: 902px)
{
.margin-top
{
    top: 0px;
} 
}
</style>


