<template>
  <div class="container-fluid">
      <div class="row">
       <user_manager></user_manager>
      </div>
      <div class="row my-4">
        <div class="col-lg-11 col-md-6 mb-md-0 mb-4 glass-content">
          <div class="card sec-bg-color">
            <div class="card-header  sec-bg-color pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Users Manager</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Permissions</th>
                      <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Team</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="mr-3">
                            <i class="fa fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0">{{user.name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="mt-2">
                            Admin
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Delete, Edit, Save, Upload </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">Authors</span>
                            </div>
                          </div>
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
  <!--<Footer></Footer>-->
</template>

<script>
    import axios from 'axios'
import { defineComponent } from 'vue'

    //import Footer from '../Footer.vue'

    //import user_manager from "../menus/user-manager.vue";

    export default defineComponent({
        components: {
            //Footer,
            //user_manager
        },
        data() {
            return {
                users: {}
            }
        },
        methods: {
            getUsers()
            {
                axios.get('/users')
                .then((response)=>{
                    this.users = response.data
                })
            }
        },
        mounted() {
            this.getUsers()
        },
    })
</script>

<style scoped>

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

/*
.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}
*/
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

.card, .card-header, .card-body
{
  background: transparent !important;
}
</style>
