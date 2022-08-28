<template>
  <section>
      <div class="container">
          <div class="card">
            <div class="row">
                <div class="col">
                 <div class="form-check">
                   <input  class="form-check-input" type="checkbox" :value="user.id" id="">
                 </div>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <i class="fas fa-ellipsis-v"></i>
                </div>
            </div>
              <div class="content">
                  <div class="imBx" v-if="user.profile_photo_path">
                    <img :src="user.profile_photo_path" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.avatar">
                    <img :src="user.avatar" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.image">
                    <img :src="user.image" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.logo">
                    <img :src="user.logo" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.thumbnail">
                    <img :src="user.thumbnail" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.photo">
                    <img :src="user.photo" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.profile_image">
                    <img :src="user.profile_image" alt="">
                 </div>
                  <div class="imBx" v-else-if="user.cover">
                    <img :src="user.cover" alt="">
                 </div>
                 
                  <div class="contentBx">
                      <h5 v-if="user.name">Name: {{user.name}}</h5>
                      <h5 v-else-if="user.username">Username: {{user.username}}</h5>
                      <h5 v-else-if="user.firstname">First Name: {{user.firstname }}</h5>
                      <h5 v-else-if="user.lastname">Last Name: {{user.lastname }}</h5>
                      <h5 v-else-if="user.company">Company: {{user.company}}</h5>
                      <h5 v-else-if="user.customer">Customer: {{user.customer}}</h5>
                      <h5 v-else-if="user.supplier">Supplier: {{user.supplier}}</h5>
                      <h5 v-else-if="user.publisher">Publisher: {{user.publisher}}</h5>
                      <h5 v-else-if="user.manager">Manager: {{user.manager}}</h5>
                      <h5 v-else-if="user.title">Title: {{user.title}}</h5>

                      <h5 v-if="user.phone">Phone: {{user.phone}}</h5>

                      <h5 v-if="user.pages">Pages: {{user.pages}}</h5>
                      <h5 v-if="user.quantity">Quantity: {{user.quantity}}</h5>

                      <h5 v-if="user.date_published">Date Published: {{user.date_published}}</h5>

                      <h5 v-if="user.edition">Edition: {{user.edition}}</h5>
                      <h5 v-if="user.volume">Volume: {{user.volume}}</h5>
                  </div>
              </div>
              <button @click="passUser()" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user-info-modal" >
                More
              </button>
          </div>
      </div>
  </section>
</template>


<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

export default defineComponent({
  props: ["user"],
  components:
  {

  },
  watch: {
  },
  data() {
    return {

    }
  },
  methods: {
    passUser()
    {
        store.commit('getProfile', this.user)
    }
  },


  mounted()
  {

  }

});
</script>


<style scoped>


/*Teams flex body*/

.container
{

}

/*Team cards*/

.container .card
{
    position: relative;
    /*height: 400px;*/
    background: rgba(255, 255, 255, 0.05);
    /*margin: 20px;*/
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    /*border-radius: 15px;*/
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
    /*border: 10px solid rgba(0, 0, 0, 0.25);*/
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
    /*margin: 20px 0 10px;*/
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
