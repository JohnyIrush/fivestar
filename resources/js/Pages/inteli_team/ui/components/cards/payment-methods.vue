<template>
  <div class="container row  mt-5">
      <div class="box col-lg-4 col-sm-6">
          <span></span>
          <div class="content">
            <h5>Card One</h5>
            <a href="#">Read More</a>
          </div>
      </div>
      <div class="box col-lg-4 col-sm-6">
          <span></span>
          <div class="content">
            <h5>Card Two</h5>
            <a href="#">Read More</a>
          </div>
      </div>
      <div class="box col-lg-4 col-sm-6">
        <span></span>
        <div class="content">
          <h5>Card Three</h5>
          <a href="#">Read More</a>
        </div>
      </div>
      <div class="box col-lg-4 col-sm-6">
          <span></span>
          <div class="content">
            <h5>Card One</h5>
            <a href="#">Read More</a>
          </div>
      </div>
      <div class="box col-lg-4 col-sm-6">
          <span></span>
          <div class="content">
            <h5>Card Two</h5>
            <a href="#">Read More</a>
          </div>
      </div>
      <div class="box col-lg-4 col-sm-6">
        <span></span>
        <div class="content">
          <h5>Card Three</h5>
          <a href="#">Read More</a>
        </div>
      </div>
  </div>
</template>

<script>

export default {
  watch: {
  },
  methods: {
  },
    
}
</script>

<style scoped>

/*
.container
{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 25px 0;
}
*/

.container .box
{
    position: relative;
    /*width: 150px;
    height: 187.5px;
    display: flex;
    justify-content: center;
    align-items: center;*/
    margin: 25px 18.75px;
    transition: 0.5s;
}

.container .box::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 100%;
    background: #ffffff;
    border-radius: 8px;
    transform: skewX(15deg);
    transition: 0.5s;
}

.container .box::after
{
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 62.5%;
    background: #ffffff;
    border-radius: 8px;
    transform: skewX(15deg);
    transition: 0.5s;
    filter: blur(30px);
}

.container .box:hover::before,
.container .box:hover::after
{
    transform: skewX(0deg);
    left: 20px;
    width: calc(100% - 56.25px);
}


.container .box:nth-child(1)::before,
.container .box:nth-child(1)::after
{
    background: linear-gradient(315deg, #ffbc00, #ff0058);
}

.container .box:nth-child(2)::before,
.container .box:nth-child(2)::after
{
    background: linear-gradient(315deg, #03a9f4, #ff0058);
}

.container .box:nth-child(3)::before,
.container .box:nth-child(3)::after
{
    background: linear-gradient(315deg, #4dff03,#03a9f4);
}

.container .box span
{
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 50;
    pointer-events: none;
}

.container .box span::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 62.5%;
    height: 62.5%;
    border-radius: 8px;
    background: rgba(255, 255,255, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.container .box:hover span::before
{
    top: -50px;
    left: 50px;
    width: 62.5px;
    height: 62.5px;
    opacity: 1;
}

.container .box span::after
{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 62.5%;
    height: 62.5%;
    border-radius: 8px;
    background: rgba(255, 255,255, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    animation-delay: -1s;
}

.container .box:hover span::after
{
    bottom: -50px;
    right: 50px;
    width: 62.5px;
    height: 62.5px;
    opacity: 1;
}

@keyframes animate
{
    0%, 100%
    {
        transform: translateY(10px);
    }
    50%
    {
        transform: translateY(-10px);
    }
}

.container .box .content
{
    position: relative;
    left: 0;
    padding: 12.5px 25px;
    background: rgba(255, 255,255, 0.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    backdrop-filter: blur(10px);
    z-index: 1;
    transition: 0.5s;
    color: #fff;
    /*display: none;*/
} 

.container .box .content h2
{
    font-size: 2em;
    color: #fff;
    margin-bottom: 10px;
}

.container .box .content p
{
    font-size: 1.1em;
    margin-bottom: 10px;
    line-height: 1.4em;
}

.container .box .content a
{
    display: inline-block;
    font-size: 0.6875em;
    color: #111;
    background: #fff;
    padding: 10px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 700;
    margin-top: 5px;
}

/*Glass Content*/

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

@media (max-width: 902px)
{
    .glass-content
    {
        top: 150px;
    }
}

</style>


