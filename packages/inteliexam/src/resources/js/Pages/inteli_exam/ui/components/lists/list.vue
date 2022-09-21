<template>
    <div id="glass-list" class="box">
        <h4>{{listTitle}}</h4>
        <div  class="list" v-for="item in listData" :key="item.id">
            <div class="imgBx">
               <image :info="item"></image> 
            </div>
            <div class="content">
                <h2 v-if="item.id" class="rank"><small>#{{item.id}}</small></h2>
                <h4>{{item[listValue]}}</h4>
                <p v-if="item.description" data-bs-toggle="tooltip" data-bs-placement="right" :title="item.description">Description</p>
            </div>
        </div>
    </div>
</template>


<script>

import { defineComponent } from 'vue'

import image from "../images/image.vue"


export default defineComponent({
  components: {
    image
  },
  props: {
    list: Array,
    title: String,
    value: String
  },
  watch: {
  },
  data() {
    return {

    }
  },
  computed()
  {
    listData()
    {
        return this.list || []
    }
    listTitle()
    {
        return this.title || ''
    }
    listValue()
    {
        return this.value || ''
    }
  },
  methods: {


  },
  mounted()
  {

  }

})
</script>


<style scoped>

*
{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}
/*
section
{
    position: relative;
    background: #161623;
    min-height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

section::before
{
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    background: linear-gradient(#ffc107, #e91c63);
    border-radius: 50%;
    transform: translate(-250px, -120px);
}

section::after
{
    content: '';
    position: absolute;
    width: 350px;
    height: 350px;
    background: linear-gradient(#2196f3, #31ff38);
    border-radius: 50%;
    transform: translate(250px, 150px);
}
*/
.box
{
    position: relative;
    min-width: 350px;
    min-height: 400px;
    background: rgba(255,255,255, 0.1);
    box-shadow: 0 25px 45px rgba(255,255,255, 0.5);
    border: 1px solid rgba(255,255,255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    z-index: 10;
    padding: 20px;
    backdrop-filter: blur(25px);
}

.box h3{
    color: #fff !important;
    margin-bottom: 20px;
}

.box .list
{
    position: relative;
    display: flex;
    padding: 10px 0;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
    overflow: hidden;
}

.box .list:hover{
    background: #fff !important;
    box-shadow: -15px 30px 50px rgba(0, 0, 0, 0.5);
    transform: scale(1.15) translateX(30px) translateY(-15px);
    z-index: 1000;
}

.box .list .imgBx
{
    position: relative;
    width: 60px;
    height: 60px;
    min-width: 60px;
    min-height: 60px;
    max-width: 60px;
    max-height: 60px;
    overflow: hidden;
    margin-right: 10px;
}


.box .list .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.box .list .content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff !important;
}

.box .list .content .rank
{
    position: absolute;
    right: -50px;
    color: #03a9f4 !important;
    transition: 0.5s;
}

.box .list .content .rank small
{
    font-weight: 500;
    opacity: 0.25;
}

.box .list:hover .content .rank
{
    right: 20px;
}

.box .list .content h4
{
    line-height: 1.2em;
    font-weight: 600;
    transition: 0.5s;
}

.box .list .content p
{
    line-height: 0.75em;
    transition: 0.5s;
}

.box .list:hover .content h4,
.box .list:hover .content p
{
    color: #333;
}

</style>
