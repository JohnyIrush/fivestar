<template>
  <div class="modal fade" id="user-info-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="user-info-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">Profile Info</h3>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
             <div class="col-12 col-xl-12 glass-content">
              <div class="row  justify-content-center">
                <div class="col"></div>
                <div class="col">
                  <div class="imBx" v-if="profile.profile_photo_path">
                    <img :src="profile.profile_photo_path" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.avatar">
                    <img :src="profile.avatar" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.image">
                    <img :src="profile.image" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.logo">
                    <img :src="profile.logo" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.thumbnail">
                    <img :src="profile.thumbnail" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.photo">
                    <img :src="profile.photo" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.profile_image">
                    <img :src="profile.profile_image" alt="">
                 </div>
                  <div class="imBx" v-else-if="profile.cover">
                    <img :src="profile.cover" alt="">
                 </div>
                </div>
                <div class="col"></div>
              </div>
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <tbody>

                      <tr v-if="profile.name">
                         <td>Name: </td><td>{{profile.name}}</td>
                      </tr>
                      <tr v-else-if="profile.username">
                         <td>Username: </td><td>{{profile.username}}</td>
                      </tr>
                      <tr v-else-if="profile.firstname">
                         <td>First Name: </td><td>{{profile.firstname }}</td>
                      </tr>
                      <tr v-else-if="profile.lastname">
                         <td>Last Name: </td><td>{{profile.lastname }}</td>
                      </tr>
                      <tr v-else-if="profile.company">
                         <td>Company: </td><td>{{profile.company}}</td>
                      </tr>
                      <tr v-else-if="profile.customer">
                         <td>Customer: </td><td>{{profile.customer}}</td>
                      </tr>
                      <tr v-else-if="profile.supplier">
                         <td>Supplier: </td><td>{{profile.supplier}}</td>
                      </tr>
                      <tr v-else-if="profile.publisher">
                         <td>Publisher: {{profile.publisher}}</td>
                      </tr>
                      <tr v-else-if="profile.manager">
                         <td>Manager: </td><td>{{profile.manager}}</td>
                      </tr>
                      <tr v-else-if="profile.title">
                         <td>Title: </td> <td>{{profile.title}}</td>
                      </tr>

                        <tr v-if="profile.email">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Email </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{profile.email }} </span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.phone">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Phone </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{profile.phone }}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.address">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Address </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{profile.address }}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.status">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Status </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{(profile.status == 1)? "Active" : "Inactive" }}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.description">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Description </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.description}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.bio">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Bio </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.bio}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.about">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> About </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.about}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.excerpt">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Excerpt </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.excerpt}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.synopsys">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Synopsys </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.synopsys}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.dob">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> DOB </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.dob}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.date_published">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Date Published </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.date_published}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.website">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Website </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.website}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.isbn">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> ISBN </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.isbn}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.isbn13">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> ISBN13 </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.isbn13}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.dewey_decimal">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Dewey Decimal </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.dewey_decimal}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.binding">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Binding </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.binding}}</span>
                           </div>
                          </td>
                        </tr>


                        <tr v-if="profile.language">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Language </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.language}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.edition">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Edition </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.edition}}</span>
                           </div>
                          </td>
                        </tr>

                        <tr v-if="profile.volume">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Volume </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.volume}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.pages">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Pages </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.pages}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.quantity">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Quantity </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.quantity}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.number">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Number </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.number}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.price">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Price </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.price}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.price">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Price </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.price}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.no_of_copies">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> No of Copies </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.no_of_copies}}</span>
                           </div>
                          </td>
                        </tr>
                        <tr v-if="profile.dimensions">
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Dimensions </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold">{{profile.dimensions}}</span>
                           </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
              </div>
             </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        components: {

        },
        data() {
            return {
  
            }
        },
        computed: {
          profile ()
          {
            return store.state.profile
          }
        },
        methods: {

        },
        mounted() {

        },
    })
</script>

<style scoped>
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
}

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;*/
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


input
{
    width: 100%;
    background: white;
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #000;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.text-c-center
{
    text-align: center !important;
}

.text-font-size
{
    font-size: 18px !important;
}
</style>
