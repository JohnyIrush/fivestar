<template>
  <section>
      <div class="container row">
          <div class="card col" v-for="product in products" :key="product.id">
              <div class="content">
                  <div class="imBx"><img :src="product.image" alt=""></div>
                  <div class="contentBx">
                      <h3>{{product.version}}</h3>

                      <h4>{{product.price}}</h4>
                  </div>
              </div>
              <!-- Button trigger modal -->
              <button @click="getFeatures(product.id)" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#product-features">
                Features
              </button>
              <div class="form-check">
                <input @change="setVersion(product.id, product.price)" class="form-check-input" type="radio" :value="product.id" id="" v-model="version">
              </div>
          </div>
      </div>
  </section>
  <div class="modal fade" id="product-features" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inteli-paypal-pay" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content glass-content ">
        <div class="modal-header text-c-center">
            <h3 class="modal-title" id="staticBackdropLabel">{{title}} Features</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <glass_list v-if="1 == 1" :list="features"></glass_list>
        </div>
      </div>
    </div>
  </div>
</template>


<script>

import glass_list from "../lists/glass-list.vue";

import { store } from '../../../../../store/store.js'

export default {
  components:
  {
    glass_list
  },
  watch: {
  },
  data() {
    return {
        products: [],
        features: [],
        title: '',
        version: 1,
        amount: ''
    }
  },
  methods: {
    getProducts()
    {
        axios.get('inteli/products')
        .then((response)=>{
            this.products = response.data
        })
    },
    getFeatures(id)
    {
        axios.get('inteli/products')
        .then((response)=>{
            this.features = response.data[id - 1].features
            this.title = response.data[id - 1].feature
            console.log(response.data[id - 1])
        })
    },

    setVersion(id, amount)
    {
        store.state.school.version = this.version
        this.amount = amount
        store.state.school.amount = amount
    }

  },


  mounted()
  {
    this.getProducts()

    store.state.school.version = this.version

  }

}
</script>


<style scoped>


/*Teams flex body*/

.container
{
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 40px 0;
}

/*Team cards*/

.container .card
{
    position: relative;
    height: 400px;
    background: rgba(255, 255, 255, 0.05);
    margin: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(10px);
}

/*Text Bio*/

.container .card .content
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 0.5;
    transition: 0.5s;
}

/*card Img hover effect */

.container .card:hover .content
{
    opacity: 1;
    transform: translateY(-20px);
}


/*Image*/

.container .card .content .imgBx
{
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 10px solid rgba(0, 0, 0, 0.25);
}

/*content txt h3*/

.container .card .content .contentBx h3
{
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 500;
    font-size: 18px;
    text-align: center;
    margin: 20px 0 10px;
    line-height: 1.1em;
}

/*content txt span*/

.container .card .content .contentBx h3 span
{
    text-transform: initial;;
    font-weight: 500;
    font-size: 12px;
}





/*modal*/
.glass-container
{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

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


.modal-content
{
    background: transparent !important;
}


</style>
