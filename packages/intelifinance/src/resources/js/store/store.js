// import Vue from 'vue';
import axios from 'axios'
import { createApp } from 'vue'
import { createStore } from 'vuex'

export const store = createStore({
    state () {
      return {
        products:
        [
            {name: 'Banana Skin', price: 20},
            {name: 'Skiny Star', price: 40},
            {name: 'Green Shells', price: 60},
            {name: 'Red Shells', price: 80} 
        ],
        school :{
            types: ['1','2','3']
        }
      }
    },
    getters:
    {
        saleProducts: state =>
        {
            var saleProducts = state.products.map((product)=>{
                return {
                    name: '**' + product.name + '**',
                    price: product.price/2
                }
            })

            return saleProducts;
        },
        getSchoolTypes : state =>
        {
            var types = [];

            axios.get("/school-types")
            .then((response)=>{
                state.school.types = response.data
                types = response.data
            })
            .catch(()=>{

            })

            return state.school.types;
        }
    },
    mutations: {
        reducePrice: (state, payload) =>
        {
            //setTimeout(() => { // This will applied with actions
                state.products.forEach(product =>{
                    product.price -= payload
                });
           // }, 3000);
        },
        launchInteliVerifyModal: (payload) =>
        {
            console.log("Modal");
            console.log(payload);
        }
    },
    actions: {
        reducePrice: (context, payload) =>{
            setTimeout(() => {
                context.commit("reducePrice", payload)
            }, 2000);
        },
        launchInteliVerifyModal: (context) =>
        {
            context.commit("launchInteliVerifyModal", payload)
        }
    }
  })