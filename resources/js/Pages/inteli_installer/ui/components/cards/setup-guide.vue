<template>
  <div class="container row ">
      <div class="card col col-lg-6">
          <div class="imgBx">
              <i class="fa fa-users fa-4x"></i>
          </div>
          <div class="content">
              <div class="">
                  <h3>Registration</h3>
                  <p>Register Inteli System School Account</p>
                       <a href="#">Read More</a>
              </div>
          </div>
      </div>
      <div class="card col col-lg-6">
        <div class="imgBx">
            <i class="fa fa-money fa-4x"></i>
        </div>
        <div class="content">
            <div class="">
                <h3>Payment</h3>
                <p>Pay for Inteli System Annual Subscription</p>
                     <a href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="card col col-lg-6">
        <div class="imgBx">
            <img src="/theme/assets/img/illustrations/rocket-white.png" alt="" srcset="">
        </div>
        <div class="content">
            <div class="">
                <h3>Installation</h3>
                <p> Inteli System Cloud, Desktop, Tablet or Mobile Installation </p>
                     <a href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="card col col-lg-6">
        <div class="imgBx">
            <i class="fa fa-cogs fa-4x"></i>
        </div>
        <div class="content">
            <div class="">
                <h3>Setup</h3>
                <p>Inteli System Setup Guide</p>
                     <a href="#">Read More</a>
            </div>
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
*
{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(purple, pink);
    background-attachment: fixed;
}
*/
.container
{
    position: relative;
    /*width: 1000px;*/
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin: 20px;
    padding: 20px 0;
}

.container .card
{
    position: relative;
    height: 200px;
    background: #fff;
    display: flex;
    width: 45%;
    margin: 30px 0;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}


.container .card .imgBx
{
    position: absolute;
    top: 10px;
    left: 10px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    height: calc(100% - 20px);
    width: calc(100% - 20px);
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border-radius: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
    transform: 0.5s ease-in-out;
}

.container .card:hover .imgBx
{
    height: 150px;
    width: 150px;
    left: -75px;
    top: calc(50% - 75px);
}

.container .card .imgBx img
{
    max-width: 100px;
    filter: invert(1);
    transition: 0.5s ease-in-out;
}


.container .card:hover .imgBx img
{
    max-width: 75px;
}

.container .card .content
{
    position: absolute;
    right: 0;
    width: calc(100% - 75px);
    height: 100%;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}


.container .card .content h3
{
    color: #ff0057;
    margin-bottom: 5px;
    font-size: 24px;
}

.container .card .content a
{
    display: inline-block;
    margin-top: 10px;
    padding: 8px 20px;
    border-radius: 5px;
    background: purple;
    text-decoration: none;
    color: #fff;
    font-weight: 500;
}

@media (max-width: 902px)
{
    .container
    {
        position: relative;
        width: 100%;
        height: 100%;
        flex-direction: column;
        align-items: center;
    }

    .container .card
    {
        width: 300px;
        height: 100%;
        flex-direction: column;
        background: transparent;
        margin: -20px 0;
        box-shadow: none;
    }

    .container .card .imgBx
    {
        position: relative;
 
    }

    .container .card .imgBx
    .container .card:hover .imgBx
    {
        width: 80%;
        height: 80px;
        top: 30px;
        left: 10%;
    }

    .container .card:hover .imgBx
    {
        top: 20px;
    }

    .container .card .imgBx img
    .container .card:hover .imgBx img
    {
        max-width: 100px;
        
    }

    .container .card .content
    {
        position: relative;
        width: 100%;
        background: #fff;
        box-shadow: none;
        border-radius: 20px;
        border-top: 100px solid #fff;
    }

    .glass-content
    {
        top: 150px;
    }
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

</style>

